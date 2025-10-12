<?php

namespace App\Services;

use App\Models\User;
use App\Models\LoginAttempt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\RateLimiter;

class LoginService
{
    /**
     * Attempt to authenticate user
     */
    public function attempt(array $credentials, string $ipAddress): array
    {
        $username = $credentials['username'];
        $password = $credentials['password'];

        // Find user by username or email
        $user = User::where('username', $username)
            ->orWhere('email', $username)
            ->first();

        // Check if user exists and password is correct
        if (!$user || !Hash::check($password, $user->password)) {
            $this->recordFailedAttempt($username, $ipAddress);
            
            return [
                'success' => false,
                'message' => 'Username atau password salah'
            ];
        }

        // Check if user is active
        if (!$user->is_active) {
            Log::warning("Login attempt for inactive user", [
                'user_id' => $user->id,
                'ip' => $ipAddress
            ]);

            return [
                'success' => false,
                'message' => 'Akun Anda tidak aktif. Hubungi administrator.'
            ];
        }

        // Successful login - Clear attempts
        $this->clearLoginAttempts($username, $ipAddress);

        // Update last login
        $user->update([
            'last_login_at' => now(),
            'last_login_ip' => $ipAddress
        ]);

        // Log successful login
        Log::info("Successful login", [
            'user_id' => $user->id,
            'username' => $user->username,
            'ip' => $ipAddress
        ]);

        return [
            'success' => true,
            'user' => $user,
            'message' => 'Login berhasil'
        ];
    }

    /**
     * Record failed login attempt
     */
    private function recordFailedAttempt(string $username, string $ipAddress): void
    {
        // Record by IP
        $ipAttempt = LoginAttempt::firstOrCreate(
            ['ip_address' => $ipAddress, 'email' => null],
            ['last_attempt_at' => now()]
        );
        $ipAttempt->incrementAttempt();

        // Record by username
        $userAttempt = LoginAttempt::firstOrCreate(
            ['email' => $username, 'ip_address' => $ipAddress],
            ['last_attempt_at' => now()]
        );
        $userAttempt->incrementAttempt();

        // Log failed attempt
        Log::warning("Failed login attempt", [
            'username' => $username,
            'ip' => $ipAddress,
            'attempts' => $ipAttempt->attempts
        ]);
    }

    /**
     * Clear login attempts after successful login
     */
    private function clearLoginAttempts(string $username, string $ipAddress): void
    {
        LoginAttempt::where('ip_address', $ipAddress)->delete();
        LoginAttempt::where('email', $username)->delete();
    }

    /**
     * Check if suspicious activity detected
     */
    public function isSuspiciousActivity(string $ipAddress): bool
    {
        // Check if too many requests from same IP
        $key = 'login-requests:' . $ipAddress;
        
        if (RateLimiter::tooManyAttempts($key, 20)) {
            Log::warning("Suspicious login activity detected", [
                'ip' => $ipAddress
            ]);
            return true;
        }

        RateLimiter::hit($key, 60); // 20 requests per minute
        return false;
    }
}