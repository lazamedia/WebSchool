<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Akun</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    animation: {
                        'fade-in-up': 'fadeInUp 0.8s cubic-bezier(0.34, 1.56, 0.64, 1)',
                        'slide-in': 'slideIn 0.6s cubic-bezier(0.34, 1.56, 0.64, 1)',
                        'float': 'float 6s ease-in-out infinite',
                        'gradient': 'gradient 15s ease infinite',
                        'shimmer': 'shimmer 2s infinite',
                    },
                    keyframes: {
                        fadeInUp: {
                            'from': { opacity: '0', transform: 'translateY(40px)' },
                            'to': { opacity: '1', transform: 'translateY(0)' }
                        },
                        slideIn: {
                            'from': { opacity: '0', transform: 'translateX(-20px)' },
                            'to': { opacity: '1', transform: 'translateX(0)' }
                        },
                        float: {
                            '0%, 100%': { transform: 'translateY(0px)' },
                            '50%': { transform: 'translateY(-8px)' }
                        },
                        gradient: {
                            '0%': { backgroundPosition: '0% 50%' },
                            '50%': { backgroundPosition: '100% 50%' },
                            '100%': { backgroundPosition: '0% 50%' }
                        },
                        shimmer: {
                            '0%': { backgroundPosition: '-1000px 0' },
                            '100%': { backgroundPosition: '1000px 0' }
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="min-h-screen flex items-center justify-center p-4 overflow-hidden relative bg-gray-200 " style="background-size: 400% 400%; animation: gradient 15s ease infinite;">
    
    <!-- Decorative Elements -->
    <div class="absolute top-10 right-10 w-40 h-40 rounded-full opacity-5 blur-3xl bg-blue-400 animate-float"></div>
    <div class="absolute bottom-20 left-10 w-56 h-56 rounded-full opacity-5 blur-3xl bg-slate-400 animate-float" style="animation-delay: 2s;"></div>

    <!-- Main Container -->
    <div class="w-full max-w-sm relative z-10">
        <!-- Login Card -->
        <div class="bg-white/85 backdrop-blur-xl border border-white/50 animate-fade-in-up rounded-sm p-8 md:p-10 shadow-2xl relative">
            
            <!-- Accent Top Line -->
            <div class="absolute top-0 left-12 right-12 h-1 bg-gradient-to-r from-transparent via-blue-400 to-transparent rounded-full"></div>

            <!-- Header -->
            <div class="text-center mb-8 animate-slide-in" style="animation-delay: 0.1s;">
                <div class="inline-flex items-center justify-center w-14 h-14 rounded-full  mb-2 ">
                    <img src="{{ asset ("assets/img/logo-3d.png") }}" alt="">
                </div>
                <h1 class="text-2xl font-semibold text-gray-800 tracking-tight">Welcome back</h1>
                <p class="text-xs text-gray-500 mt-1 font-light">Silahkan login sebagai admin</p>
            </div>

            <!-- Login Form -->
            <form class="space-y-5" method="POST" action="{{ route('login.post') }}">
                @csrf
                
                <x-allert.session/>

                <!-- Username Input -->
                <div class="relative group">
                    <input 
                        type="text" 
                        name="username"
                        placeholder="Username" 
                        class="w-full pl-11 pr-4 py-3 rounded-sm focus:outline-none bg-gray-50/60 transition-all duration-300 border-2 border-gray-300/40 focus:bg-white/90 focus:border-blue-500/50 focus:shadow-lg focus:shadow-blue-500/10 focus:-translate-y-0.5 placeholder:text-gray-500/60"
                        value="{{ old('username') }}"
                        required
                    >
                    <i class="fas fa-user absolute left-3.5 top-1/2 transform -translate-y-1/2 text-gray-500/50 transition-colors duration-300 peer-focus:text-blue-500/60"></i>
                </div>

                <!-- Password Input -->
                <div class="relative group">
                    <input 
                        type="password" 
                        name="password"
                        placeholder="Password" 
                        class="w-full pl-11 pr-4 py-3 rounded-sm focus:outline-none bg-gray-50/60 transition-all duration-300 border-2 border-gray-300/40 focus:bg-white/90 focus:border-blue-500/50 focus:shadow-lg focus:shadow-blue-500/10 focus:-translate-y-0.5 placeholder:text-gray-500/60"
                        required
                    >
                    <i class="fas fa-lock absolute left-3.5 top-1/2 transform -translate-y-1/2 text-gray-500/50 transition-colors duration-300"></i>
                </div>

                

                <!-- Login Button -->
                <button 
                    type="submit" 
                    class="relative overflow-hidden w-full bg-gradient-to-r from-blue-500 to-blue-600 text-white font-medium py-3 rounded-sm transition-all duration-300 border-2 border-blue-600/30 hover:from-blue-600 hover:to-blue-700 hover:-translate-y-1 hover:shadow-xl hover:shadow-blue-500/30 hover:border-blue-600/60 flex items-center justify-center gap-2 group"
                >
                    <span class="relative z-10">Masuk</span>
                    <i class="fas fa-arrow-right text-sm relative z-10 transition-transform duration-300 group-hover:translate-x-1"></i>
                    <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/30 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-500"></div>
                </button>

                <!-- divider -->
                <div class="flex items-center justify-center gap-2">
                    <div class="h-px bg-gray-300/70 flex-1"></div>
                    <span class="text-xs text-gray-400 font-light">atau</span>
                    <div class="h-px bg-gray-300/70 flex-1"></div>
                </div>

                {{-- back to home --}}
                <a href="{{ url('/') }}" class="block text-center text-sm text-gray-500 hover:text-gray-700 transition-colors duration-300">Kembali ke Beranda</a>

            </form>


        </div>
    </div>

</body>
</html>