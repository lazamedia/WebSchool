<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Akun Sekolah</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        @keyframes fadeInSlideUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(-20px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes subtle-float {
            0%, 100% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-8px);
            }
        }

        @keyframes gradient-shift {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        @keyframes shimmer {
            0% {
                background-position: -1000px 0;
            }
            100% {
                background-position: 1000px 0;
            }
        }

        .animate-fade-in-up {
            animation: fadeInSlideUp 0.8s cubic-bezier(0.34, 1.56, 0.64, 1);
        }

        .animate-slide-in {
            animation: slideInRight 0.6s cubic-bezier(0.34, 1.56, 0.64, 1);
        }

        .animate-float {
            animation: subtle-float 6s ease-in-out infinite;
        }

        .gradient-bg {
            background: linear-gradient(-45deg, #f8f9fa, #ecf0f5, #e8eef7, #f0f4f9);
            background-size: 400% 400%;
            animation: gradient-shift 15s ease infinite;
        }

        .glass-effect {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.5);
        }

        .input-field {
            position: relative;
            background: rgba(248, 249, 250, 0.6);
            transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
            border: 2px solid rgba(209, 213, 219, 0.4);
        }

        .input-field:focus {
            background: rgba(255, 255, 255, 0.9);
            border-color: rgba(59, 130, 246, 0.5);
            box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.08), inset 0 0 0 2px rgba(59, 130, 246, 0.1);
            transform: translateY(-2px);
        }

        .input-field::placeholder {
            color: rgba(107, 114, 128, 0.6);
        }

        .btn-primary {
            position: relative;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
            border: 2px solid rgba(37, 99, 235, 0.3);
        }

        .btn-primary::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.5s;
        }

        .btn-primary:hover::before {
            left: 100%;
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, rgba(37, 99, 235, 0.95) 0%, rgba(59, 130, 246, 0.95) 100%);
            transform: translateY(-3px);
            box-shadow: 0 8px 24px rgba(37, 99, 235, 0.3);
            border-color: rgba(37, 99, 235, 0.6);
        }

        .btn-secondary {
            transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
            border: 2px solid rgba(107, 114, 128, 0.2);
            background: rgba(248, 249, 250, 0.5);
        }

        .btn-secondary:hover {
            background: rgba(248, 249, 250, 0.9);
            border-color: rgba(59, 130, 246, 0.3);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
        }

        .divider-line {
            background: linear-gradient(90deg, transparent, rgba(107, 114, 128, 0.2), transparent);
        }

        .input-icon {
            transition: all 0.3s ease;
            color: rgba(107, 114, 128, 0.5);
        }

        .input-field:focus ~ .input-icon,
        .input-field:not(:placeholder-shown) ~ .input-icon {
            color: rgba(59, 130, 246, 0.6);
        }

        .icon-pulse {
            animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }

        @keyframes pulse {
            0%, 100% {
                opacity: 1;
            }
            50% {
                opacity: 0.7;
            }
        }

        .accent-line {
            height: 3px;
            background: linear-gradient(90deg, transparent, rgba(37, 99, 235, 0.4), transparent);
            margin-top: 2rem;
        }

        .footer-text {
            font-size: 0.7rem;
            letter-spacing: 0.5px;
            color: rgba(107, 114, 128, 0.5);
        }
    </style>
</head>
<body class="gradient-bg min-h-screen flex items-center justify-center p-4 overflow-hidden relative">
    <!-- Decorative Elements -->
    <div class="absolute top-10 right-10 w-40 h-40 rounded-full opacity-5 blur-3xl bg-blue-400 animate-float"></div>
    <div class="absolute bottom-20 left-10 w-56 h-56 rounded-full opacity-5 blur-3xl bg-slate-400 animate-float" style="animation-delay: 2s;"></div>

    <!-- Main Container -->
    <div class="w-full max-w-sm relative z-10">
        <!-- Login Card -->
        <div class="glass-effect animate-fade-in-up rounded-2xl p-8 md:p-10 shadow-2xl">
            <!-- Accent Top Line -->
            <div class="absolute top-0 left-12 right-12 h-1 bg-gradient-to-r from-transparent via-blue-400 to-transparent rounded-full"></div>

            <!-- Header -->
            <div class="text-center mb-8 animate-slide-in" style="animation-delay: 0.1s;">
                <div class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-gradient-to-br from-blue-50 to-slate-50 mb-4 border border-blue-100">
                    <i class="fas fa-graduation-cap text-blue-500 text-lg"></i>
                </div>
                <h1 class="text-2xl font-semibold text-gray-800 tracking-tight">Masuk ke Akun</h1>
                <p class="text-xs text-gray-500 mt-2 font-light">Sekolah Kita</p>
            </div>

            <!-- Login Form -->
            <form class="space-y-5" onsubmit="handleLogin(event)">
                <!-- Username Input -->
                <div class="relative group" style="animation: slideInRight 0.6s cubic-bezier(0.34, 1.56, 0.64, 1) 0.15s backwards;">
                    <input 
                        type="text" 
                        placeholder="Username" 
                        class="input-field w-full pl-11 pr-4 py-3 rounded-lg focus:outline-none"
                        required
                    >
                    <i class="fas fa-user input-icon absolute left-3.5 top-1/2 transform -translate-y-1/2"></i>
                </div>

                <!-- Password Input -->
                <div class="relative group" style="animation: slideInRight 0.6s cubic-bezier(0.34, 1.56, 0.64, 1) 0.2s backwards;">
                    <input 
                        type="password" 
                        placeholder="Password" 
                        class="input-field w-full pl-11 pr-4 py-3 rounded-lg focus:outline-none"
                        required
                    >
                    <i class="fas fa-lock input-icon absolute left-3.5 top-1/2 transform -translate-y-1/2"></i>
                </div>

                <!-- Login Button -->
                <button 
                    type="submit" 
                    class="btn-primary w-full bg-gradient-to-r from-blue-500 to-blue-600 text-white font-medium py-3 rounded-lg transition-all duration-400 flex items-center justify-center gap-2 mt-7"
                    style="animation: slideInRight 0.6s cubic-bezier(0.34, 1.56, 0.64, 1) 0.25s backwards;"
                >
                    <i class="fas fa-arrow-right text-sm"></i>
                    <span>Masuk</span>
                </button>
            </form>

            <!-- Divider with Text -->
            <div class="flex items-center my-3" style="animation: slideInRight 0.6s cubic-bezier(0.34, 1.56, 0.64, 1) 0.3s backwards;">
                <div class="divider-line flex-grow"></div>
                <span class="px-3 text-gray-400 text-xs font-medium">atau</span>
                <div class="divider-line flex-grow"></div>
            </div>

            <!-- Google Login Button -->
            <button 
                class="btn-secondary w-full text-gray-700 font-medium py-3 rounded-lg transition-all duration-400 flex items-center justify-center gap-3"
                onclick="handleGoogleLogin()"
                style="animation: slideInRight 0.6s cubic-bezier(0.34, 1.56, 0.64, 1) 0.35s backwards;"
            >
                <svg class="w-4 h-4" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                    <path fill="currentColor" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                    <path fill="currentColor" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                    <path fill="currentColor" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
                </svg>
                <span>Google</span>
            </button>

            <!-- Accent Line -->
            {{-- <div class="accent-line"></div> --}}

            <!-- Footer -->
            <div class="text-center mt-6" style="animation: slideInRight 0.6s cubic-bezier(0.34, 1.56, 0.64, 1) 0.4s backwards;">
                <p class="footer-text">© 2025 Sekolah Kita · Semua Hak Dilindungi</p>
            </div>
        </div>
    </div>

    <script>
        function handleLogin(e) {
            e.preventDefault();
            const loginBtn = e.target.querySelector('button[type="submit"]');
            const originalHTML = loginBtn.innerHTML;
            
            loginBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> <span>Memproses...</span>';
            loginBtn.disabled = true;

            setTimeout(() => {
                loginBtn.innerHTML = originalHTML;
                loginBtn.disabled = false;
                
                const successMsg = document.createElement('div');
                successMsg.className = 'fixed top-4 left-4 right-4 md:left-auto md:right-4 md:w-80 bg-gradient-to-r from-green-50 to-emerald-50 border border-green-200 text-green-700 px-4 py-3 rounded-lg shadow-lg flex items-center gap-2';
                successMsg.innerHTML = '<i class="fas fa-check-circle"></i> <span>Login berhasil!</span>';
                document.body.appendChild(successMsg);
                
                setTimeout(() => successMsg.remove(), 3000);
            }, 1500);
        }

        function handleGoogleLogin() {
            const btn = event.target.closest('button');
            btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> <span>Menghubungkan...</span>';
            btn.disabled = true;

            setTimeout(() => {
                btn.innerHTML = '<svg class="w-4 h-4" viewBox="0 0 24 24"><path fill="currentColor" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/><path fill="currentColor" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/><path fill="currentColor" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/><path fill="currentColor" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/></svg> <span>Google</span>';
                btn.disabled = false;
            }, 1200);
        }
    </script>
</body>
</html>