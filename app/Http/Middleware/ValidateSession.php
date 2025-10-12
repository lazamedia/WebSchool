<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ValidateSession
{
    public function handle(Request $request, Closure $next)
    {
        // Check if user is authenticated
        if (!Auth::check()) {
            return redirect()->route('login')
                ->with('error', 'Sesi Anda telah berakhir. Silakan login kembali.');
        }

        // Validate session IP and User Agent
        $loginIp = Session::get('login_ip');
        $loginUserAgent = Session::get('login_user_agent');

        if ($loginIp !== $request->ip() || $loginUserAgent !== $request->userAgent()) {
            Auth::logout();
            Session::flush();
            
            return redirect()->route('login')
                ->with('error', 'Sesi tidak valid. Silakan login kembali.');
        }

        // Check session timeout (30 minutes idle)
        $lastActivity = Session::get('last_activity', now());
        if (now()->diffInMinutes($lastActivity) > 30) {
            Auth::logout();
            Session::flush();
            
            return redirect()->route('login')
                ->with('error', 'Sesi Anda telah berakhir karena tidak aktif. Silakan login kembali.');
        }

        // Update last activity
        Session::put('last_activity', now());

        return $next($request);
    }
}