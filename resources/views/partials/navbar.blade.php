 <style>
        /* Custom animations */
        .mobile-menu-enter {
            transform: translateY(-20px);
            opacity: 0;
        }
        .mobile-menu-enter-active {
            transform: translateY(0);
            opacity: 1;
            transition: all 0.3s ease-out;
        }
        .mobile-menu-exit {
            transform: translateY(0);
            opacity: 1;
        }
        .mobile-menu-exit-active {
            transform: translateY(-20px);
            opacity: 0;
            transition: all 0.2s ease-in;
        }
        
        .dropdown-slide-down {
            animation: slideDown 0.3s ease-out;
        }
        .dropdown-slide-up {
            animation: slideUp 0.2s ease-in;
        }
        
        @keyframes slideDown {
            from {
                opacity: 0;
                max-height: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                max-height: 200px;
                transform: translateY(0);
            }
        }
        
        @keyframes slideUp {
            from {
                opacity: 1;
                max-height: 200px;
                transform: translateY(0);
            }
            to {
                opacity: 0;
                max-height: 0;
                transform: translateY(-10px);
            }
        }

        /* Hamburger animation */
        .hamburger-line {
            transition: all 0.3s ease;
            transform-origin: center;
        }
        .hamburger-active .line-1 {
            transform: rotate(45deg) translate(6px, 6px);
        }
        .hamburger-active .line-2 {
            opacity: 0;
            transform: scale(0);
        }
        .hamburger-active .line-3 {
            transform: rotate(-45deg) translate(6px, -6px);
        }

        /* Mobile menu backdrop */
        .mobile-backdrop {
            backdrop-filter: blur(8px);
            background: rgba(30, 58, 138, 0.1);
        }

        /* Custom scrollbar for mobile menu */
        .mobile-menu-scroll::-webkit-scrollbar {
            width: 4px;
        }
        .mobile-menu-scroll::-webkit-scrollbar-track {
            background: rgba(59, 130, 246, 0.1);
        }
        .mobile-menu-scroll::-webkit-scrollbar-thumb {
            background: rgba(251, 191, 36, 0.5);
            border-radius: 2px;
        }
    </style>




<!-- Top Bar -->
    <div class="bg-blue-900 mt-4 text-white lg:block hidden">
        
            <div class="flex flex-col sm:flex-row justify-between items-center text-sm space-y-2 sm:space-y-0">
                <!-- Social Links -->
                <div class="flex items-center justify-end gap-3 px-5 bg-amber-500 h-full py-2 w-[30%]">
                    <p class="flex items-center space-x-1">
                        Follow Link : 
                    </p>
                    <a href="#" class="hover:text-blue-200 transition-colors flex items-center space-x-1">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                    <a href="#" class="hover:text-blue-200 transition-colors flex items-center space-x-1">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="#" class="hover:text-blue-200 transition-colors flex items-center space-x-1">
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                </div>
                
                <!-- Contact Info -->
                <div class="flex flex-col sm:flex-row items-center justify-center text-center sm:text-left w-full sm:w-[70%] gap-5 px-5 py-2">
                    <span class="flex items-center">
                        <i class="fa-solid fa-location-dot mr-2"></i>
                        <span class="text-xs sm:text-sm">Jl. Cokronegoro No.34, Gepor, Limpung</span>
                    </span>
                    <span class="flex items-center">
                        <i class="fa-solid fa-envelope mr-2"></i>
                        <span class="text-xs sm:text-sm">info@mamlimpung.sch</span>
                    </span>
                    <span class="flex items-center ">
                        <i class="fa-solid fa-phone mr-2"></i>
                        <span class="text-xs sm:text-sm">+62 21 1234 5678</span>
                    </span>
                </div>
            </div>
        
    </div>

    <!-- Main Navbar -->
    <nav class="bg-white shadow-lg sticky top-0 z-50 transition-all duration-300" id="navbar">
        <div class="max-w-6xl mx-auto px-5">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex items-center space-x-2">
                    <img src="{{ asset('assets/img/logo.png') }}" class="w-10" alt="">
                    <h1 class="text-xl font-bold">
                        <font class="font-extrabold text-blue-900">
                            MAM
                        </font>
                         Limpung
                    </h1>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#" class="text-gray-700 hover:text-eduka-green transition-colors font-medium">Beranda</a>
                    
                    <!-- Courses Dropdown -->
                    <div class="relative group">
                        <button class="text-gray-700 hover:text-eduka-green transition-colors font-medium flex items-center space-x-1">
                            <span>Courses</span>
                            <svg class="w-4 h-4 transform group-hover:rotate-180 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="absolute top-full left-0 mt-1 w-48 bg-white rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform group-hover:translate-y-0 -translate-y-2">
                            <div class="py-2">
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 hover:text-eduka-green">Programming</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 hover:text-eduka-green">Design</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 hover:text-eduka-green">Business</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 hover:text-eduka-green">Marketing</a>
                            </div>
                        </div>
                    </div>

                    <!-- Academics Dropdown -->
                    <div class="relative group">
                        <button class="text-gray-700 hover:text-eduka-green transition-colors font-medium flex items-center space-x-1">
                            <span>Academics</span>
                            <svg class="w-4 h-4 transform group-hover:rotate-180 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="absolute top-full left-0 mt-1 w-48 bg-white rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform group-hover:translate-y-0 -translate-y-2">
                            <div class="py-2">
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 hover:text-eduka-green">Undergraduate</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 hover:text-eduka-green">Graduate</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 hover:text-eduka-green">Doctoral</a>
                            </div>
                        </div>
                    </div>

                    <!-- Pages Dropdown -->
                    <div class="relative group">
                        <button class="text-gray-700 hover:text-eduka-green transition-colors font-medium flex items-center space-x-1">
                            <span>Pages</span>
                            <svg class="w-4 h-4 transform group-hover:rotate-180 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="absolute top-full left-0 mt-1 w-48 bg-white rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform group-hover:translate-y-0 -translate-y-2">
                            <div class="py-2">
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 hover:text-eduka-green">About Us</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 hover:text-eduka-green">Our Team</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 hover:text-eduka-green">FAQ</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 hover:text-eduka-green">Gallery</a>
                            </div>
                        </div>
                    </div>

                    <!-- Admissions Dropdown -->
                    <div class="relative group">
                        <button class="text-gray-700 hover:text-eduka-green transition-colors font-medium flex items-center space-x-1">
                            <span>Admissions</span>
                            <svg class="w-4 h-4 transform group-hover:rotate-180 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="absolute top-full left-0 mt-1 w-48 bg-white rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform group-hover:translate-y-0 -translate-y-2">
                            <div class="py-2">
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 hover:text-eduka-green">Apply Now</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 hover:text-eduka-green">Requirements</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 hover:text-eduka-green">Scholarships</a>
                            </div>
                        </div>
                    </div>

                    <!-- Blog Dropdown -->
                    <div class="relative group">
                        <button class="text-gray-700 hover:text-eduka-green transition-colors font-medium flex items-center space-x-1">
                            <span>Blog</span>
                            <svg class="w-4 h-4 transform group-hover:rotate-180 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="absolute top-full left-0 mt-1 w-48 bg-white rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform group-hover:translate-y-0 -translate-y-2">
                            <div class="py-2">
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 hover:text-eduka-green">Latest Posts</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 hover:text-eduka-green">Categories</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 hover:text-eduka-green">Archives</a>
                            </div>
                        </div>
                    </div>

                    <a href="#" class="text-gray-700 hover:text-eduka-green transition-colors font-medium">Contact</a>
                    
                    <!-- CTA Button -->
                    <a href="#" class="bg-gradient-to-r from-amber-400 to-amber-600 text-white px-6 py-2 rounded-br-full rounded-tr-full rounded-tl-full font-semibold hover:shadow-lg transform hover:-translate-y-0.5 transition-all duration-300">
                        PPDB Online
                    </a>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button class="mobile-menu-btn text-gray-700 hover:text-eduka-green focus:outline-none focus:text-eduka-green transition-colors" id="mobileMenuBtn">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path class="hamburger-top" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16"></path>
                            <path class="hamburger-middle" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 12h16"></path>
                            <path class="hamburger-bottom" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div class="md:hidden mobile-menu hidden bg-white border-t border-gray-100" id="mobileMenu">
            <div class="px-5 pt-2 pb-3 space-y-1">
                <a href="#" class="block px-3 py-2 text-gray-700 hover:text-eduka-green hover:bg-gray-50 rounded-md transition-colors">Beranda</a>
                
                <!-- Mobile Courses Dropdown -->
                <div class="mobile-dropdown">
                    <button class="mobile-dropdown-btn flex items-center justify-between w-full px-3 py-2 text-gray-700 hover:text-eduka-green hover:bg-gray-50 rounded-md transition-colors">
                        <span>Courses</span>
                        <svg class="w-4 h-4 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="mobile-dropdown-content hidden pl-6 space-y-1">
                        <a href="#" class="block px-3 py-2 text-sm text-gray-600 hover:text-eduka-green hover:bg-gray-50 rounded-md">Programming</a>
                        <a href="#" class="block px-3 py-2 text-sm text-gray-600 hover:text-eduka-green hover:bg-gray-50 rounded-md">Design</a>
                        <a href="#" class="block px-3 py-2 text-sm text-gray-600 hover:text-eduka-green hover:bg-gray-50 rounded-md">Business</a>
                        <a href="#" class="block px-3 py-2 text-sm text-gray-600 hover:text-eduka-green hover:bg-gray-50 rounded-md">Marketing</a>
                    </div>
                </div>

                <!-- Mobile Academics Dropdown -->
                <div class="mobile-dropdown">
                    <button class="mobile-dropdown-btn flex items-center justify-between w-full px-3 py-2 text-gray-700 hover:text-eduka-green hover:bg-gray-50 rounded-md transition-colors">
                        <span>Academics</span>
                        <svg class="w-4 h-4 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="mobile-dropdown-content hidden pl-6 space-y-1">
                        <a href="#" class="block px-3 py-2 text-sm text-gray-600 hover:text-eduka-green hover:bg-gray-50 rounded-md">Undergraduate</a>
                        <a href="#" class="block px-3 py-2 text-sm text-gray-600 hover:text-eduka-green hover:bg-gray-50 rounded-md">Graduate</a>
                        <a href="#" class="block px-3 py-2 text-sm text-gray-600 hover:text-eduka-green hover:bg-gray-50 rounded-md">Doctoral</a>
                    </div>
                </div>

                <!-- Mobile Pages Dropdown -->
                <div class="mobile-dropdown">
                    <button class="mobile-dropdown-btn flex items-center justify-between w-full px-3 py-2 text-gray-700 hover:text-eduka-green hover:bg-gray-50 rounded-md transition-colors">
                        <span>Pages</span>
                        <svg class="w-4 h-4 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="mobile-dropdown-content hidden pl-6 space-y-1">
                        <a href="#" class="block px-3 py-2 text-sm text-gray-600 hover:text-eduka-green hover:bg-gray-50 rounded-md">About Us</a>
                        <a href="#" class="block px-3 py-2 text-sm text-gray-600 hover:text-eduka-green hover:bg-gray-50 rounded-md">Our Team</a>
                        <a href="#" class="block px-3 py-2 text-sm text-gray-600 hover:text-eduka-green hover:bg-gray-50 rounded-md">FAQ</a>
                        <a href="#" class="block px-3 py-2 text-sm text-gray-600 hover:text-eduka-green hover:bg-gray-50 rounded-md">Gallery</a>
                    </div>
                </div>

                <!-- Mobile Admissions Dropdown -->
                <div class="mobile-dropdown">
                    <button class="mobile-dropdown-btn flex items-center justify-between w-full px-3 py-2 text-gray-700 hover:text-eduka-green hover:bg-gray-50 rounded-md transition-colors">
                        <span>Admissions</span>
                        <svg class="w-4 h-4 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="mobile-dropdown-content hidden pl-6 space-y-1">
                        <a href="#" class="block px-3 py-2 text-sm text-gray-600 hover:text-eduka-green hover:bg-gray-50 rounded-md">Apply Now</a>
                        <a href="#" class="block px-3 py-2 text-sm text-gray-600 hover:text-eduka-green hover:bg-gray-50 rounded-md">Requirements</a>
                        <a href="#" class="block px-3 py-2 text-sm text-gray-600 hover:text-eduka-green hover:bg-gray-50 rounded-md">Scholarships</a>
                    </div>
                </div>

                <!-- Mobile Blog Dropdown -->
                <div class="mobile-dropdown">
                    <button class="mobile-dropdown-btn flex items-center justify-between w-full px-3 py-2 text-gray-700 hover:text-eduka-green hover:bg-gray-50 rounded-md transition-colors">
                        <span>Blog</span>
                        <svg class="w-4 h-4 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="mobile-dropdown-content hidden pl-6 space-y-1">
                        <a href="#" class="block px-3 py-2 text-sm text-gray-600 hover:text-eduka-green hover:bg-gray-50 rounded-md">Latest Posts</a>
                        <a href="#" class="block px-3 py-2 text-sm text-gray-600 hover:text-eduka-green hover:bg-gray-50 rounded-md">Categories</a>
                        <a href="#" class="block px-3 py-2 text-sm text-gray-600 hover:text-eduka-green hover:bg-gray-50 rounded-md">Archives</a>
                    </div>
                </div>

                <a href="#" class="block px-3 py-2 text-gray-700 hover:text-eduka-green hover:bg-gray-50 rounded-md transition-colors">Contact</a>
                
                <!-- Mobile CTA Button -->
                <div class="pt-4">
                    <a href="#" class="block text-center bg-gradient-to-r from-amber-400 to-amber-600 text-white px-6 py-3 rounded-full font-semibold hover:shadow-lg transform hover:-translate-y-0.5 transition-all duration-300">
                        PPDB Online
                    </a>
                </div>
            </div>
        </div>
    </nav>

        <script>
        // Mobile menu toggle
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mobileMenu = document.getElementById('mobileMenu');

        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
            
            // Animate hamburger icon
            const hamburgerTop = mobileMenuBtn.querySelector('.hamburger-top');
            const hamburgerMiddle = mobileMenuBtn.querySelector('.hamburger-middle');
            const hamburgerBottom = mobileMenuBtn.querySelector('.hamburger-bottom');
            
            if (mobileMenu.classList.contains('hidden')) {
                hamburgerTop.setAttribute('d', 'M4 6h16');
                hamburgerMiddle.style.opacity = '1';
                hamburgerBottom.setAttribute('d', 'M4 18h16');
            } else {
                hamburgerTop.setAttribute('d', 'M6 18L18 6');
                hamburgerMiddle.style.opacity = '0';
                hamburgerBottom.setAttribute('d', 'M6 6l12 12');
            }
        });

        // Mobile dropdown toggles
        document.querySelectorAll('.mobile-dropdown-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                const content = btn.nextElementSibling;
                const arrow = btn.querySelector('svg');
                
                content.classList.toggle('hidden');
                arrow.classList.toggle('rotate-180');
            });
        });

        // Close mobile menu when clicking outside
        document.addEventListener('click', (e) => {
            if (!e.target.closest('nav')) {
                mobileMenu.classList.add('hidden');
                
                // Reset hamburger icon
                const hamburgerTop = mobileMenuBtn.querySelector('.hamburger-top');
                const hamburgerMiddle = mobileMenuBtn.querySelector('.hamburger-middle');
                const hamburgerBottom = mobileMenuBtn.querySelector('.hamburger-bottom');
                
                hamburgerTop.setAttribute('d', 'M4 6h16');
                hamburgerMiddle.style.opacity = '1';
                hamburgerBottom.setAttribute('d', 'M4 18h16');
            }
        });

        // Navbar scroll effect
        window.addEventListener('scroll', () => {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('bg-white/95', 'backdrop-blur-md');
                navbar.classList.remove('bg-white');
            } else {
                navbar.classList.add('bg-white');
                navbar.classList.remove('bg-white/95', 'backdrop-blur-md');
            }
        });
    </script>