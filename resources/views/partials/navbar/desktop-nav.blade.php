
    <div class="hidden md:flex items-center space-x-8">

        <a href="/" class="text-gray-700 hover:text-eduka-green transition-colors font-regular">Beranda</a>
        <a href="/profile" class="text-gray-700 hover:text-eduka-green transition-colors font-regular">Profile</a>
        <a href="/article" class="text-gray-700 hover:text-eduka-green transition-colors font-regular">Article</a>
        <a href="/galeri" class="text-gray-700 hover:text-eduka-green transition-colors font-regular">Galeri</a>
        {{-- <a href="/test" class="text-gray-700 hover:text-eduka-green transition-colors font-regular">Test</a> --}}

        <!-- Blog Dropdown Desktop -->
        <div class="relative group">
            <button class="text-gray-700 hover:text-eduka-green transition-colors font-regular flex items-center space-x-1 px-3 py-2 rounded-lg hover:bg-gray-50">
                <p>Akademik</p>
                <svg class="w-4 h-4 transform group-hover:rotate-180 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
            
            <div class="absolute top-full left-0 mt-2 w-80 bg-white rounded-xl shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform group-hover:translate-y-0 -translate-y-3 z-50 overflow-hidden border border-gray-100">
                <div class="bg-gradient-to-r from-blue-50 to-transparent px-4 py-3 border-b border-gray-100">
                    <p class="text-xs font-semibold text-gray-600 uppercase tracking-wide">Informasi Sekolah</p>
                </div>
                <div class="py-2">
                    <a href="/prestasi" class="block px-4 py-3 hover:bg-blue-50 border-l-3 border-transparent hover:border-blue-500 transition-all duration-200">
                        <div class="flex items-center space-x-3">
                            <i class="w-5 h-5 text-blue-500 flex-shrink-0 fa fa-award"></i>
                            <div class="flex-1">
                                <p class="text-sm font-medium text-gray-900">Prestasi</p>
                                <p class="text-xs text-gray-500 mt-0.5">Prestasi kejuaraan siswa</p>
                            </div>
                        </div>
                    </a>
                    
                    <a href="#" class="block px-4 py-3 hover:bg-blue-50 border-l-3 border-transparent hover:border-blue-500 transition-all duration-200">
                        <div class="flex items-center space-x-3">
                            <i class="w-5 h-5 text-blue-500 flex-shrink-0 fa fa-chalkboard-teacher"></i>
                            <div class="flex-1">
                                <p class="text-sm font-medium text-gray-900">Guru</p>
                                <p class="text-xs text-gray-500 mt-0.5">Informasi mengenai guru dan staf pengajar</p>
                            </div>
                        </div>
                    </a>
                    
                    <a href="#" class="block px-4 py-3 hover:bg-blue-50 border-l-3 border-transparent hover:border-blue-500 transition-all duration-200">
                        <div class="flex items-center space-x-3">
                            <i class="w-5 h-5 text-blue-500 flex-shrink-0 fa fa-user-graduate"></i>
                            <div class="flex-1">
                                <p class="text-sm font-medium text-gray-900">Data Alumni</p>
                                <p class="text-xs text-gray-500 mt-0.5">Informasi mengenai lulusan</p>
                            </div>
                        </div>
                    </a>
                </div>
                
                <div class="border-t border-gray-100"></div>
                
                <a href="#" class="block px-4 py-3 bg-gray-50 hover:bg-blue-100 text-center text-sm font-medium text-blue-600 transition-colors duration-200">
                    Lihat Pengumuman →
                </a>
            </div>
        </div>
        
        <!-- CTA Button -->
        <a href="{{ route ('frontend.ppdb') }}" class="bg-gradient-to-r from-amber-400 to-amber-600 text-white px-6 py-2 rounded-br-full rounded-tr-full rounded-tl-full font-semibold hover:shadow-lg transform hover:-translate-y-0.5 transition-all duration-300">
            PPDB Online
        </a>
    </div>