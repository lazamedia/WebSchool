<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Services\LoginService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class AuthController extends Controller
{
    public function __construct(
        private LoginService $loginService
    ) {}

    /**
     * Show login form
     */
    public function showLoginForm(): View
    {
        // Redirect if already logged in
        if (Auth::check()) {
            return redirect()->route('admin.dashboard');
        }

        return view('auth.login');
    }

    /**
     * Handle login request
     */
    public function login(LoginRequest $request): RedirectResponse
    {
        // Check rate limiting
        $request->checkRateLimit();

        // Check for suspicious activity
        if ($this->loginService->isSuspiciousActivity($request->ip())) {
            return back()->withErrors([
                'username' => 'Terlalu banyak permintaan. Tunggu beberapa saat.'
            ])->withInput($request->only('username'));
        }

        // Attempt login
        $result = $this->loginService->attempt(
            $request->only(['username', 'password']),
            $request->ip()
        );

        if (!$result['success']) {
            return back()
                ->withErrors(['username' => $result['message']])
                ->withInput($request->only('username'));
        }

        // Regenerate session (prevent session fixation)
        $request->session()->regenerate();

        // Login user
        Auth::login($result['user'], $request->boolean('remember'));

        // Store security info in session
        Session::put([
            'login_ip' => $request->ip(),
            'login_user_agent' => $request->userAgent(),
            'login_time' => now()
        ]);

        return redirect()
            ->intended(route('admin.dashboard'))
            ->with('success', 'Selamat datang, ' . $result['user']->name);
    }

    /**
     * Handle logout
     */
    public function logout(): RedirectResponse
    {
        Auth::logout();
        Session::flush();
        Session::regenerate();

        return redirect()->route('login')
            ->with('success', 'Anda telah berhasil logout');
    }
}