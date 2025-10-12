<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;
use App\Models\LoginAttempt;

class LoginRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'username' => [
                'required',
                'string',
                'min:3',
                'max:50',
                'regex:/^[a-zA-Z0-9_.-]+$/', // Only alphanumeric, dash, dot, underscore
            ],
            'password' => [
                'required',
                'string',
                'min:6',
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'username.required' => 'Username wajib diisi',
            'username.min' => 'Username minimal 3 karakter',
            'username.max' => 'Username maksimal 50 karakter',
            'username.regex' => 'Username hanya boleh mengandung huruf, angka, titik, dash, dan underscore',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Password minimal 6 karakter',
        ];
    }

    /**
     * Prepare data for validation - Security sanitization
     */
    protected function prepareForValidation(): void
    {
        $this->merge([
            'username' => strip_tags(trim($this->username)),
            'ip_address' => $this->ip(),
            'user_agent' => $this->userAgent(),
        ]);
    }

    /**
     * Check if request is rate limited
     */
    public function checkRateLimit(): void
    {
        $ipAddress = $this->ip();
        $username = $this->input('username');

        // Check by IP
        $ipAttempt = LoginAttempt::where('ip_address', $ipAddress)
            ->whereNull('email')
            ->first();

        if ($ipAttempt && $ipAttempt->isLocked()) {
            $remainingTime = $ipAttempt->getRemainingLockTime();
            throw ValidationException::withMessages([
                'username' => "Terlalu banyak percobaan login. Coba lagi dalam {$remainingTime} menit."
            ]);
        }

        // Check by username
        $userAttempt = LoginAttempt::where('email', $username)->first();

        if ($userAttempt && $userAttempt->isLocked()) {
            $remainingTime = $userAttempt->getRemainingLockTime();
            throw ValidationException::withMessages([
                'username' => "Akun ini dikunci sementara. Coba lagi dalam {$remainingTime} menit."
            ]);
        }
    }
}