<section class="w-full p-5 flex justify-center">
    <div class="max-w-6xl w-full flex flex-col gap-6">
        {{-- Container Box Kiri dan Kanan --}}
        <div class="flex flex-col lg:flex-row gap-6">
            {{-- Box Kiri berisi Gambar --}}
            <div class="w-full lg:w-1/2">
                <img id="extraImage" src="" alt="Ekstrakurikuler" class="w-full h-96 object-cover rounded-lg transition-all duration-700 ease-in-out">
            </div>
            
            {{-- Box Kanan berisi Konten Extra --}}
            <div class="w-full lg:w-1/2 flex flex-col">
                <div class=" p-1 lg:p-6  flex-grow overflow-hidden">
                    <div id="extraContent" class="transition-all duration-500 ease-in-out">
                        <h2 id="extraTitle" class="text-3xl font-extrabold text-gray-900 mb-3 transition-all duration-500"></h2>
                        <p id="extraDesc" class="text-gray-700 mb-4 leading-relaxed transition-all duration-500"></p>
                        <div id="extraSocial" class="flex gap-3 transition-all duration-500">
                            <a href="#" class="text-blue-600 hover:text-blue-800 transition">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                            </a>
                            <a href="#" class="text-pink-600 hover:text-pink-800 transition">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        {{-- Navigasi Box - Desktop: Chevron, Mobile: Icon Grid --}}
        <div class="flex flex-col gap-4">
            {{-- Mobile: Title yang sedang aktif --}}
            <div class="block lg:hidden">
                <div class="bg-blue-500 text-white text-center py-3 px-4 rounded-lg shadow-md">
                    <h3 id="mobileActiveTitle" class="font-bold text-lg"></h3>
                </div>
            </div>
            
            {{-- Mobile: Grid Icon --}}
            <div class="grid grid-cols-5 gap-2 lg:hidden">
                <button onclick="selectExtra(0)" class="extra-nav-mobile flex items-center justify-center bg-blue-500 hover:bg-blue-600 text-white p-4 rounded-lg shadow-md transition-all duration-300">
                    <i id="extraIconMobile0" class="text-2xl"></i>
                </button>
                
                <button onclick="selectExtra(1)" class="extra-nav-mobile flex items-center justify-center bg-gray-800 hover:bg-gray-700 text-white p-4 rounded-lg shadow-md transition-all duration-300">
                    <i id="extraIconMobile1" class="text-2xl"></i>
                </button>
                
                <button onclick="selectExtra(2)" class="extra-nav-mobile flex items-center justify-center bg-gray-800 hover:bg-gray-700 text-white p-4 rounded-lg shadow-md transition-all duration-300">
                    <i id="extraIconMobile2" class="text-2xl"></i>
                </button>
                
                <button onclick="selectExtra(3)" class="extra-nav-mobile flex items-center justify-center bg-gray-800 hover:bg-gray-700 text-white p-4 rounded-lg shadow-md transition-all duration-300">
                    <i id="extraIconMobile3" class="text-2xl"></i>
                </button>
                
                <button onclick="selectExtra(4)" class="extra-nav-mobile flex items-center justify-center bg-gray-800 hover:bg-gray-700 text-white p-4 rounded-lg shadow-md transition-all duration-300">
                    <i id="extraIconMobile4" class="text-2xl"></i>
                </button>
            </div>
            
            {{-- Desktop: Chevron Navigation --}}
            <div class="hidden lg:flex flex-wrap justify-center items-center gap-0">
                <button onclick="selectExtra(0)" class="extra-nav group relative bg-blue-500 hover:bg-blue-600 shadow-md hover:shadow-lg transition-all duration-700 ease-in-out transform hover:z-10" style="z-index: 5;">
                    <div class="flex items-center justify-center gap-2 pl-4 pr-6 py-3">
                        <i id="extraIcon0" class=""></i>
                        <span class="text-white font-bold text-sm whitespace-nowrap extra-title-span ml-2" id="extraTitle0"></span>
                    </div>
                </button>
                
                <button onclick="selectExtra(1)" class="extra-nav group relative bg-gray-800 hover:bg-gray-700 shadow-md hover:shadow-lg transition-all duration-700 ease-in-out transform hover:z-10" style="z-index: 4;">
                    <div class="flex items-center justify-center gap-2 pl-5 pr-6 py-3">
                        <i id="extraIcon1" class=""></i>
                        <span class="text-white font-bold text-sm whitespace-nowrap extra-title-span ml-2" id="extraTitle1"></span>
                    </div>
                </button>
                
                <button onclick="selectExtra(2)" class="extra-nav group relative bg-gray-800 hover:bg-gray-700 shadow-md hover:shadow-lg transition-all duration-700 ease-in-out transform hover:z-10" style="z-index: 3;">
                    <div class="flex items-center justify-center gap-2 pl-5 pr-6 py-3">
                        <i id="extraIcon2" class=""></i>
                        <span class="text-white font-bold text-sm whitespace-nowrap extra-title-span ml-2" id="extraTitle2"></span>
                    </div>
                </button>
                
                <button onclick="selectExtra(3)" class="extra-nav group relative bg-gray-800 hover:bg-gray-700 shadow-md hover:shadow-lg transition-all duration-700 ease-in-out transform hover:z-10" style="z-index: 2;">
                    <div class="flex items-center justify-center gap-2 pl-5 pr-6 py-3">
                        <i id="extraIcon3" class=""></i>
                        <span class="text-white font-bold text-sm whitespace-nowrap extra-title-span ml-2" id="extraTitle3"></span>
                    </div>
                </button>
                
                <button onclick="selectExtra(4)" class="extra-nav group relative bg-gray-800 hover:bg-gray-700 shadow-md hover:shadow-lg transition-all duration-700 ease-in-out transform hover:z-10" style="z-index: 1;">
                    <div class="flex items-center justify-center gap-2 pl-5 pr-6 py-3">
                        <i id="extraIcon4" class=""></i>
                        <span class="text-white font-bold text-sm whitespace-nowrap extra-title-span ml-2" id="extraTitle4"></span>
                    </div>
                </button>
            </div>
        </div>
    </div>
</section>

<style>
    /* Desktop Chevron Navigation */
    .extra-nav {
        position: relative;
        clip-path: polygon(0 0, calc(100% - 12px) 0, 100% 50%, calc(100% - 12px) 100%, 0 100%, 12px 50%);
        margin-left: -12px;
    }
    
    .extra-nav:first-child {
        margin-left: 0;
        clip-path: polygon(0 0, calc(100% - 12px) 0, 100% 50%, calc(100% - 12px) 100%, 0 100%);
    }
    
    .extra-nav.active .extra-title-span {
        opacity: 1 !important;
        max-width: 200px !important;
        margin-left: 0.25rem !important;
    }
    
    /* Smooth fade animation */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    @keyframes fadeOutDown {
        from {
            opacity: 1;
            transform: translateY(0);
        }
        to {
            opacity: 0;
            transform: translateY(-20px);
        }
    }
    
    .fade-in {
        animation: fadeInUp 0.6s ease-out forwards;
    }
    
    .fade-out {
        animation: fadeOutDown 0.4s ease-in forwards;
    }
</style>

<script>
    const extraData = [
        {
            icon : "fa-solid fa-campground",
            title: "Hizbul Wathan",
            desc: "Kegiatan pramuka mengajarkan kedisiplinan, kepemimpinan, dan keterampilan bertahan hidup. Bergabunglah untuk mengembangkan karakter dan jiwa petualanganmu!",
            image: "{{ asset('assets/img/kemah.png') }}",
            social: { fb: "#", ig: "#" }
        },
        {
            icon : "fa-solid fa-music",
            title: "Marching Band",
            desc: "Marching band menggabungkan musik dan gerakan dalam sebuah pertunjukan yang memukau. Bergabunglah untuk mengekspresikan bakat musikal dan kerjasama tim!",
            image: "{{ asset('assets/img/band.png') }}",
            social: { fb: "#", ig: "#" }
        },
        {
            icon : "fa-solid fa-fist-raised",
            title: "Tapak Suci",
            desc: "Tapak Suci adalah seni bela diri yang mengajarkan disiplin, rasa percaya diri, dan keterampilan fisik. Bergabunglah untuk melatih tubuh dan mentalmu!",
            image: "{{ asset('assets/img/silat.png') }}",
            social: { fb: "#", ig: "#" }
        },
        {
            icon : "fa-solid fa-computer",
            title: "Komputer",
            desc: "Ekskul komputer mengajarkan keterampilan teknologi, pemrograman, dan desain grafis. Bergabunglah untuk mengasah kemampuan digitalmu di era modern ini!",
            image: "{{ asset('assets/img/komputer.png') }}",
            social: { fb: "#", ig: "#" }
        },
        {
            icon : "fa-solid fa-theater-masks",
            title: "Seni Tari",
            desc: "Ekskul seni tari mengajarkan ekspresi diri, kreativitas, dan kerja sama tim melalui gerakan tari. Bergabunglah untuk menari dan mengekspresikan dirimu!",
            image: "{{ asset('assets/img/seni.png') }}",
            social: { fb: "#", ig: "#" }
        }
    ];

    let currentExtra = 0;
    let autoRotate;
    let isAnimating = false;

    function selectExtra(index) {
        if (isAnimating || currentExtra === index) return;
        currentExtra = index;
        updateExtra();
        resetAutoRotate();
    }

    function updateExtra() {
        if (isAnimating) return;
        isAnimating = true;
        
        const data = extraData[currentExtra];
        const img = document.getElementById('extraImage');
        const content = document.getElementById('extraContent');
        
        // Add fade out animation
        content.classList.add('fade-out');
        img.style.opacity = '0';
        img.style.transform = 'scale(0.95)';
        
        setTimeout(() => {
            // Update content
            document.getElementById('extraTitle').textContent = data.title;
            document.getElementById('extraDesc').textContent = data.desc;
            img.src = data.image;
            
            // Update mobile active title
            const mobileTitle = document.getElementById('mobileActiveTitle');
            if (mobileTitle) {
                mobileTitle.textContent = data.title;
            }
            
            // Remove fade out and add fade in
            content.classList.remove('fade-out');
            content.classList.add('fade-in');
            img.style.opacity = '1';
            img.style.transform = 'scale(1)';
            
            // Clean up animation class
            setTimeout(() => {
                content.classList.remove('fade-in');
                isAnimating = false;
            }, 600);
        }, 400);

        // Update desktop navigation buttons
        const navButtons = document.querySelectorAll('.extra-nav');
        navButtons.forEach((btn, idx) => {
            if (idx === currentExtra) {
                btn.style.transition = 'all 0.7s ease-in-out';
                btn.classList.remove('bg-gray-800', 'hover:bg-gray-700');
                btn.classList.add('bg-blue-500', 'hover:bg-blue-600', 'active');
            } else {
                btn.style.transition = 'all 0.7s ease-in-out';
                btn.classList.remove('bg-blue-500', 'hover:bg-blue-600', 'active');
                btn.classList.add('bg-gray-800', 'hover:bg-gray-700');
            }
        });
        
        // Update mobile navigation buttons
        const mobileNavButtons = document.querySelectorAll('.extra-nav-mobile');
        mobileNavButtons.forEach((btn, idx) => {
            if (idx === currentExtra) {
                btn.classList.remove('bg-gray-800', 'hover:bg-gray-700');
                btn.classList.add('bg-blue-500', 'hover:bg-blue-600');
            } else {
                btn.classList.remove('bg-blue-500', 'hover:bg-blue-600');
                btn.classList.add('bg-gray-800', 'hover:bg-gray-700');
            }
        });
    }

    function nextExtra() {
        currentExtra = (currentExtra + 1) % extraData.length;
        updateExtra();
    }

    function startAutoRotate() {
        autoRotate = setInterval(nextExtra, 3000);
    }

    function resetAutoRotate() {
        clearInterval(autoRotate);
        startAutoRotate();
    }

    // Initialize titles and icons in navigation buttons
    function initNav() {
        extraData.forEach((data, idx) => {
            // Desktop navigation
            document.getElementById(`extraTitle${idx}`).textContent = data.title;
            const iconEl = document.getElementById(`extraIcon${idx}`);
            if (iconEl) {
                iconEl.className = data.icon + " text-white flex-shrink-0 transition-transform duration-700 group-hover:scale-110 group-hover:rotate-6";
            }
            
            // Mobile navigation
            const mobileIconEl = document.getElementById(`extraIconMobile${idx}`);
            if (mobileIconEl) {
                mobileIconEl.className = data.icon + " text-2xl";
            }
        });
        updateExtra();
    }

    // Start when page loads
    initNav();
    startAutoRotate();
</script>