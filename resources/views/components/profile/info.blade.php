<div class="lg:col-span-2 space-y-8">
    <!-- About Section -->
    <div class=" p-6 md:p-8">
        <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-4">Tentang Kami</h2>
        <div class="space-y-4 text-gray-700 leading-relaxed">
            <p>Madrasah Aliyah Muhammadiyah (MAM) Limpung merupakan lembaga pendidikan Islam tingkat menengah atas yang berkomitmen untuk menghasilkan generasi muslim yang berakhlak mulia, cerdas, dan kompeten.</p>
            <p>Dengan menggabungkan kurikulum nasional dan nilai-nilai keislaman, kami berupaya menciptakan lingkungan belajar yang kondusif bagi pengembangan potensi akademik, spiritual, dan sosial siswa.</p>
            <p>Didukung oleh tenaga pendidik profesional, fasilitas pembelajaran modern, dan program ekstrakurikuler yang beragam, MAM Limpung terus berinovasi untuk memberikan pendidikan berkualitas yang relevan dengan tuntutan zaman.</p>
        </div>
    </div>

    <!-- Vision & Mission -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="rounded-xl  p-6 ">
            <div class="flex items-center gap-3 mb-4">
                <h3 class="text-xl font-bold text-gray-800">Visi</h3>
            </div>
            <p class="text-gray-700 leading-relaxed">Menjadi lembaga pendidikan Islam unggul yang menghasilkan generasi berakhlak mulia, cerdas, berprestasi, dan berwawasan teknologi.</p>
        </div>

        <div class="rounded-xl p-6 ">
            <div class="flex items-center gap-3 mb-4">
                <h3 class="text-xl font-bold text-gray-800">Misi</h3>
            </div>
            <ul class="text-gray-700 space-y-2 text-sm">
                <li class="flex gap-2">
                    <i class="fas fa-check-circle text-teal-600 mt-1 flex-shrink-0"></i>
                    <span>Menyelenggarakan pendidikan berkualitas berbasis nilai-nilai Islam</span>
                </li>
                <li class="flex gap-2">
                    <i class="fas fa-check-circle text-teal-600 mt-1 flex-shrink-0"></i>
                    <span>Mengembangkan kompetensi akademik dan non-akademik siswa</span>
                </li>
                <li class="flex gap-2">
                    <i class="fas fa-check-circle text-teal-600 mt-1 flex-shrink-0"></i>
                    <span>Menerapkan pembelajaran berbasis teknologi dan inovasi</span>
                </li>
                <li class="flex gap-2">
                    <i class="fas fa-check-circle text-teal-600 mt-1 flex-shrink-0"></i>
                    <span>Membentuk karakter siswa yang berakhlakul karimah</span>
                </li>
                <li class="flex gap-2">
                    <i class="fas fa-check-circle text-teal-600 mt-1 flex-shrink-0"></i>
                    <span>Membangun kemitraan dengan orang tua dan masyarakat</span>
                </li>
            </ul>
        </div>
    </div>

    <!-- Principal Section -->
    <div class=" p-2 md:p-2">
        <div class="flex flex-col sm:flex-row gap-6">
            
            <div class="flex-shrink-0 mx-auto sm:mx-0">
                <div class="w-32 h-32 rounded-full flex items-center justify-center shadow-lg">
                    <img 
                    src     = "{{ asset('assets/img/maskot-sapa.png') }}" 
                    alt     = "Kepala Sekolah" 
                    class   = "w-full h-full object-cover rounded-full shadow-lg border-4 border-white">
                </div>
            </div>

            <div class="flex-1 text-center sm:text-left">

                <h4 class="text-xl font-bold text-gray-800">
                    Drs. H. Ahmad Fauzi, M.Pd.I
                </h4>

                <p class="text-blue-800 font-medium mb-1">
                    Kepala Madrasah
                </p>

                <div class="bg-gray-50 p-2 ">
                    <p class="text-gray-700 italic leading-relaxed">
                        "Pendidikan adalah investasi masa depan. Kami berkomitmen untuk membentuk generasi yang tidak hanya cerdas secara intelektual, tetapi juga kuat dalam iman dan akhlak."
                    </p>
                </div>

            </div>
        </div>
    </div>

    <!-- Program Section -->
    <div class=" p-6 md:p-8">
        <h3 class="text-xl font-bold text-gray-800 mb-6">Program Unggulan</h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div class="flex gap-3 p-4">
                <div class="w-10 h-10  flex items-center justify-center flex-shrink-0">
                    <i class="fas fa-flask text-gray-400"></i>
                </div>
                <div>
                    <h4 class="font-semibold text-gray-800">Kelas IPA</h4>
                    <p class="text-sm text-gray-600 mt-1">Fokus pada sains dan teknologi dengan laboratorium lengkap</p>
                </div>
            </div>
            <div class="flex gap-3 p-4 ">
                <div class="w-10 h-10  flex items-center justify-center flex-shrink-0">
                    <i class="fas fa-chart-line text-gray-400"></i>
                </div>
                <div>
                    <h4 class="font-semibold text-gray-800">Kelas IPS</h4>
                    <p class="text-sm text-gray-600 mt-1">Mengembangkan kemampuan sosial dan ekonomi</p>
                </div>
            </div>
            <div class="flex gap-3 p-4 ">
                <div class="w-10 h-10  flex items-center justify-center flex-shrink-0">
                    <i class="fas fa-quran text-gray-400"></i>
                </div>
                <div>
                    <h4 class="font-semibold text-gray-800">Kelas Keagamaan</h4>
                    <p class="text-sm text-gray-600 mt-1">Pendalaman ilmu agama Islam dan tahfidz</p>
                </div>
            </div>
            <div class="flex gap-3 p-4 ">
                <div class="w-10 h-10  flex items-center justify-center flex-shrink-0">
                    <i class="fas fa-laptop-code text-gray-400"></i>
                </div>
                <div>
                    <h4 class="font-semibold text-gray-800">ICT & Digital</h4>
                    <p class="text-sm text-gray-600 mt-1">Pembelajaran berbasis teknologi informasi</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Facilities -->
    <div class=" p-6 md:p-8">
        <h3 class="text-xl font-bold text-gray-800 mb-6">Fasilitas</h3>
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
            {{-- <div class="text-center p-4 hover:bg-gray-50 rounded-lg transition">
                <i class="fas fa-chalkboard-teacher text-3xl text-blue-600 mb-2"></i>
                <p class="text-sm font-medium text-gray-700">Ruang Kelas AC</p>
            </div> --}}
            <div class="text-center p-4 hover:bg-gray-50 rounded-lg transition">
                <i class="fas fa-book-reader text-3xl text-blue-600 mb-2"></i>
                <p class="text-sm font-medium text-gray-700">Perpustakaan</p>
            </div>
            <div class="text-center p-4 hover:bg-gray-50 rounded-lg transition">
                <i class="fas fa-microscope text-3xl text-blue-600 mb-2"></i>
                <p class="text-sm font-medium text-gray-700">Laboratorium</p>
            </div>
            <div class="text-center p-4 hover:bg-gray-50 rounded-lg transition">
                <i class="fas fa-mosque text-3xl text-blue-600 mb-2"></i>
                <p class="text-sm font-medium text-gray-700">Masjid</p>
            </div>
            {{-- <div class="text-center p-4 hover:bg-gray-50 rounded-lg transition">
                <i class="fas fa-running text-3xl text-blue-600 mb-2"></i>
                <p class="text-sm font-medium text-gray-700">Lapangan Olahraga</p>
            </div> --}}
            {{-- <div class="text-center p-4 hover:bg-gray-50 rounded-lg transition">
                <i class="fas fa-wifi text-3xl text-blue-600 mb-2"></i>
                <p class="text-sm font-medium text-gray-700">WiFi Campus</p>
            </div> --}}
        </div>
    </div>
</div>