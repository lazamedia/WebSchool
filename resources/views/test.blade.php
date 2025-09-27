<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professional Loading Screen</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes slideInFromTop {
            from {
                transform: translateY(-100%);
            }
            to {
                transform: translateY(0);
            }
        }

        @keyframes slideInFromBottom {
            from {
                transform: translateY(100%);
            }
            to {
                transform: translateY(0);
            }
        }

        @keyframes slideOutToTop {
            from {
                transform: translateY(0);
            }
            to {
                transform: translateY(-100%);
            }
        }

        @keyframes slideOutToBottom {
            from {
                transform: translateY(0);
            }
            to {
                transform: translateY(100%);
            }
        }

        @keyframes logoRotate {
            from {
                transform: rotate(0deg) scale(0.8);
            }
            to {
                transform: rotate(360deg) scale(1);
            }
        }

        @keyframes fadeInScale {
            from {
                opacity: 0;
                transform: scale(0.8) translateY(10px);
            }
            to {
                opacity: 1;
                transform: scale(1) translateY(0);
            }
        }

        @keyframes progressBar {
            from {
                width: 0%;
            }
            to {
                width: 100%;
            }
        }

        @keyframes textGlow {
            0%, 100% {
                text-shadow: 0 0 5px rgba(255, 255, 255, 0.3);
            }
            50% {
                text-shadow: 0 0 20px rgba(255, 255, 255, 0.6), 0 0 30px rgba(255, 255, 255, 0.4);
            }
        }

        .loader-enter {
            animation: slideInFromTop 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }

        .loader-enter-bottom {
            animation: slideInFromBottom 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }

        .loader-exit {
            animation: slideOutToTop 0.8s cubic-bezier(0.55, 0.06, 0.68, 0.19) forwards;
        }

        .loader-exit-bottom {
            animation: slideOutToBottom 0.8s cubic-bezier(0.55, 0.06, 0.68, 0.19) forwards;
        }

        .logo-animation {
            animation: logoRotate 2s cubic-bezier(0.68, -0.55, 0.265, 1.55) infinite;
        }

        .content-fade-in {
            animation: fadeInScale 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94) 0.3s both;
        }

        .progress-fill {
            animation: progressBar 2s ease-out forwards;
        }

        .text-glow {
            animation: textGlow 2s ease-in-out infinite;
        }

        .loading-container {
            backdrop-filter: blur(10px);
        }
    </style>
</head>
<body class="bg-gray-50 font-sans">
    <!-- Loading Screen -->
    <div id="loadingScreen" class="fixed inset-0 z-50 loading-container hidden">
        <!-- Top Panel -->
        <div id="topPanel" class="absolute top-0 left-0 w-full h-1/2 bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900 flex items-end justify-center overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-br from-blue-900/20 via-purple-900/20 to-slate-900/20"></div>
            <div class="relative z-10 pb-8">
                <!-- Logo Container -->
                <div class="flex justify-center mb-6">
                    <div class="relative">
                        <div class="w-20 h-20 bg-gradient-to-br from-blue-400 to-purple-600 rounded-2xl flex items-center justify-center shadow-2xl logo-animation">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <div class="absolute -inset-2 bg-gradient-to-br from-blue-400 to-purple-600 rounded-2xl opacity-20 animate-pulse"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Panel -->
        <div id="bottomPanel" class="absolute bottom-0 left-0 w-full h-1/2 bg-gradient-to-tr from-slate-900 via-slate-800 to-slate-900 flex items-start justify-center overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-tr from-purple-900/20 via-blue-900/20 to-slate-900/20"></div>
            <div class="relative z-10 pt-8 text-center">
                <!-- Loading Text -->
                <h2 class="text-white text-2xl font-light mb-6 text-glow tracking-wider hidden">
                    <span id="loadingText">Memuat</span>
                    <span class="inline-block w-6 text-left">
                        <span id="dots" class="animate-pulse">...</span>
                    </span>
                </h2>
                
                <!-- Progress Bar -->
                <div class="w-64 mx-auto">
                    <div class="h-1 bg-slate-700 rounded-full overflow-hidden">
                        <div id="progressBar" class="h-full bg-gradient-to-r from-blue-400 via-purple-500 to-blue-400 rounded-full shadow-lg progress-fill"></div>
                    </div>
                    <p class="text-slate-400 text-sm mt-3 font-light " id="progressText">Menyiapkan halaman...</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div id="mainContent" class="min-h-screen">
        <!-- Header -->
        <header class="bg-white shadow-sm border-b border-gray-100">
            <div class="max-w-6xl mx-auto px-6 py-4">
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-purple-600 rounded-xl flex items-center justify-center">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <span class="text-xl font-semibold text-gray-900">WebPro</span>
                    </div>
                    <nav class="hidden md:flex space-x-8">
                        <button onclick="navigatePage('home')" class="text-gray-600 hover:text-blue-600 transition-colors duration-200 font-medium">Beranda</button>
                        <button onclick="navigatePage('about')" class="text-gray-600 hover:text-blue-600 transition-colors duration-200 font-medium">Tentang</button>
                        <button onclick="navigatePage('services')" class="text-gray-600 hover:text-blue-600 transition-colors duration-200 font-medium">Layanan</button>
                        <button onclick="navigatePage('contact')" class="text-gray-600 hover:text-blue-600 transition-colors duration-200 font-medium">Kontak</button>
                    </nav>
                </div>
            </div>
        </header>

        <!-- Hero Section -->
        <section class="bg-gradient-to-br from-slate-900 via-blue-900 to-slate-900 text-white py-24">
            <div class="max-w-6xl mx-auto px-6 text-center">
                <h1 class="text-5xl md:text-6xl font-light mb-6 leading-tight">
                    <span class="bg-gradient-to-r from-blue-400 to-purple-400 bg-clip-text text-transparent">
                        Pengalaman Digital
                    </span>
                    <br>yang Menakjubkan
                </h1>
                <p class="text-xl text-slate-300 mb-10 max-w-2xl mx-auto leading-relaxed">
                    Website profesional dengan animasi loading yang elegant dan performa tinggi untuk memberikan kesan pertama yang luar biasa.
                </p>
                <button onclick="navigatePage('demo')" 
                        class="bg-gradient-to-r from-blue-500 to-purple-600 hover:from-blue-600 hover:to-purple-700 text-white px-8 py-4 rounded-full font-medium transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                    Lihat Demo Loading
                </button>
            </div>
        </section>

        <!-- Features Section -->
        <section class="py-20 bg-white">
            <div class="max-w-6xl mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-light text-gray-900 mb-6">Fitur Unggulan</h2>
                    <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                        Loading screen yang dirancang khusus untuk memberikan pengalaman pengguna yang optimal
                    </p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="group text-center p-8 rounded-2xl bg-gradient-to-br from-blue-50 to-purple-50 hover:from-blue-100 hover:to-purple-100 transition-all duration-300">
                        <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-purple-600 rounded-xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">Super Cepat</h3>
                        <p class="text-gray-600 leading-relaxed">Animasi yang dioptimalkan untuk performa tinggi tanpa mengurangi kualitas visual</p>
                    </div>

                    <div class="group text-center p-8 rounded-2xl bg-gradient-to-br from-purple-50 to-pink-50 hover:from-purple-100 hover:to-pink-100 transition-all duration-300">
                        <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-600 rounded-xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">Desain Elegan</h3>
                        <p class="text-gray-600 leading-relaxed">Interface yang modern dan profesional dengan attention to detail yang tinggi</p>
                    </div>

                    <div class="group text-center p-8 rounded-2xl bg-gradient-to-br from-green-50 to-teal-50 hover:from-green-100 hover:to-teal-100 transition-all duration-300">
                        <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-teal-600 rounded-xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">User Friendly</h3>
                        <p class="text-gray-600 leading-relaxed">Pengalaman pengguna yang intuitif dengan feedback visual yang jelas</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Demo Section -->
        <section class="py-20 bg-gray-50">
            <div class="max-w-4xl mx-auto px-6 text-center">
                <h2 class="text-4xl font-light text-gray-900 mb-6">Coba Loading Animation</h2>
                <p class="text-xl text-gray-600 mb-12 max-w-2xl mx-auto">
                    Klik tombol di bawah untuk melihat berbagai varian loading screen dalam aksi
                </p>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                    <button onclick="navigatePage('home')" 
                            class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-4 rounded-xl font-medium transition-all duration-200 transform hover:scale-105 shadow-lg hover:shadow-xl">
                        Load Beranda
                    </button>
                    <button onclick="navigatePage('about')" 
                            class="bg-purple-600 hover:bg-purple-700 text-white px-6 py-4 rounded-xl font-medium transition-all duration-200 transform hover:scale-105 shadow-lg hover:shadow-xl">
                        Load Tentang
                    </button>
                    <button onclick="navigatePage('services')" 
                            class="bg-green-600 hover:bg-green-700 text-white px-6 py-4 rounded-xl font-medium transition-all duration-200 transform hover:scale-105 shadow-lg hover:shadow-xl">
                        Load Layanan
                    </button>
                    <button onclick="navigatePage('contact')" 
                            class="bg-orange-600 hover:bg-orange-700 text-white px-6 py-4 rounded-xl font-medium transition-all duration-200 transform hover:scale-105 shadow-lg hover:shadow-xl">
                        Load Kontak
                    </button>
                </div>
            </div>
        </section>
    </div>

<script>
    class LoadingManager {
        constructor() {
            this.isLoading = false;
            this.loadingScreen = document.getElementById('loadingScreen');
            this.topPanel = document.getElementById('topPanel');
            this.bottomPanel = document.getElementById('bottomPanel');
            this.mainContent = document.getElementById('mainContent');
            this.progressBar = document.getElementById('progressBar');
            this.progressText = document.getElementById('progressText');
            
            this.messages = [
                'Menyiapkan halaman...',
                'Memuat konten...',
                'Hampir selesai...',
                'Siap!'
            ];
            
            this.init();
        }

        init() {
            // Saat DOM masih loading → tampilkan loading
            if (document.readyState === 'loading') {
                this.showLoading();
                document.addEventListener("DOMContentLoaded", () => {
                    // DOM sudah siap, tapi belum semua asset (gambar, CSS, dsb)
                    this.progressText.textContent = "Memuat gambar & asset...";
                });
            }

            // Saat semua sudah loaded (gambar, css, js, dsb)
            window.addEventListener("load", () => {
                this.hideLoading();
            });
        }

        showLoading() {
            if (this.isLoading) return;
            this.isLoading = true;

            this.resetAnimations();

            this.loadingScreen.classList.remove('hidden');
            this.mainContent.style.opacity = '0.3';

            this.topPanel.classList.add('loader-enter');
            this.bottomPanel.classList.add('loader-enter-bottom');

            this.progressBar.style.animation = 'none';
            this.progressBar.offsetHeight; // force reflow
            this.progressBar.style.animation = `progressBar 3s ease-out forwards`;

            this.updateLoadingMessages(3000);
        }

        hideLoading() {
            this.topPanel.classList.remove('loader-enter');
            this.topPanel.classList.add('loader-exit');

            this.bottomPanel.classList.remove('loader-enter-bottom');
            this.bottomPanel.classList.add('loader-exit-bottom');

            setTimeout(() => {
                this.mainContent.style.opacity = '1';
                this.mainContent.style.transition = 'opacity 0.5s ease-out';
            }, 300);

            setTimeout(() => {
                this.loadingScreen.classList.add('hidden');
                this.isLoading = false;
                this.resetAnimations();
            }, 800);
        }

        resetAnimations() {
            this.topPanel.className = 'absolute top-0 left-0 w-full h-1/2 bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900 flex items-end justify-center overflow-hidden';
            this.bottomPanel.className = 'absolute bottom-0 left-0 w-full h-1/2 bg-gradient-to-tr from-slate-900 via-slate-800 to-slate-900 flex items-start justify-center overflow-hidden';
        }

        updateLoadingMessages(duration) {
            const interval = duration / this.messages.length;
            this.messages.forEach((message, index) => {
                setTimeout(() => {
                    this.progressText.textContent = message;
                }, interval * index);
            });
        }
    }

    // Init
    const loadingManager = new LoadingManager();

    // Contoh navigate
    function navigatePage(page) {
        loadingManager.showLoading();
        // Misal load page via AJAX
        fetch(page + ".html")
            .then(r => r.text())
            .then(html => {
                document.getElementById("mainContent").innerHTML = html;
                loadingManager.hideLoading();
            });
    }
</script>

</body>
</html>