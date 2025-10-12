@extends('layouts.main')

@section('content')

    <div class="max-w-5xl mx-auto p-6 mt-16 text-center mb-5 ">
        <h1 class="text-3xl lg:text-5xl font-bold">
            <span class="text-amber-500">   Pendaftaran         </span> 
            <span class="text-gray-700">    Peserta Didik Baru  </span> 
            <span class="text-amber-500">   (PPDB)              </span>
        </h1>
        <p class="mb-4 mt-2 px-4">
            Selamat datang di halaman Pendaftaran Peserta Didik Baru.
        </p>
        {{-- <a href="/form-ppdb" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded">Daftar Sekarang</a> --}}
    </div>

    <div class="flex flex-col lg:flex-row max-w-4xl mx-auto px-6 mb-6">
        
        <div class="w-full lg:w-1/2 p-4">
            <img src="{{ asset('assets/img/maskot-sapa.png') }}" alt="PPDB Image" class="w-full h-auto">
        </div>

        <div class="w-full lg:w-1/2 p-4 flex flex-col justify-center">

            <h2 class="text-2xl font-bold mb-4">Informasi PPDB</h2>

            <p class="mb-2">
                Selamat datang di halaman Penerimaan Peserta Didik Baru (PPDB) Madrasah Aliyah Muhammadiyah (MAM) Limpung. Kami membuka kesempatan bagi siswa-siswi yang ingin melanjutkan pendidikan ke jenjang Madrasah Aliyah dengan kurikulum berbasis keislaman dan keunggulan akademik.
            </p>

            <a href="/form-ppdb">
                <button class="bg-amber-500 hover:bg-amber-600 text-white font-semibold py-2 px-4 rounded-tl-lg rounded-br-lg mt-4 cursor-pointer ">
                    Daftar Online
                </button>
            </a>

        </div>

    </div>

    <!-- Program Baru Madrasah -->
    <div class=" p-6 md:p-8 max-w-5xl mx-auto mt-10">
        <div class="flex items-center mb-6">
            <div class="bg-yellow-100 rounded-full p-3 mr-4">
                <svg class="w-5 h-5 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                </svg>
            </div>
            <h2 class="text-xl md:text-2xl font-bold text-gray-700">Program Baru Madrasah</h2>
        </div>
        
        <div class="bg-gradient-to-r from-yellow-50 to-orange-50 p-6 rounded-lg border-2 border-yellow-200 mb-6">
            <h3 class="text-xl font-bold text-gray-800 mb-4">MASTERCLASS</h3>
            <p class="text-gray-700 mb-4">Program Masterclass adalah kegiatan pelatihan soft skill yang berkualitas dan mendalam sesuai dengan minat bakat siswa. Didampingi oleh seorang instruktur/pelatih yang berkompeten dibidangnya sehingga dapat memberikan program pelatihan yang efektif dan menyenangkan.</p>
            
            <h4 class="font-bold text-gray-800 mb-3">Pilihan Pelatihan:</h4>
            <div class="grid md:grid-cols-2 gap-3">
                <div class="flex items-center bg-white p-3 rounded-lg shadow-sm">
                    <span class="text-2xl mr-3">💡</span>
                    <span class="text-gray-700">Kewirausahaan</span>
                </div>
                <div class="flex items-center bg-white p-3 rounded-lg shadow-sm">
                    <span class="text-2xl mr-3">🎨</span>
                    <span class="text-gray-700">Desain Grafis</span>
                </div>
                <div class="flex items-center bg-white p-3 rounded-lg shadow-sm">
                    <span class="text-2xl mr-3">📖</span>
                    <span class="text-gray-700">Tahfidz Al Qur'an</span>
                </div>
                <div class="flex items-center bg-white p-3 rounded-lg shadow-sm">
                    <span class="text-2xl mr-3">⚽</span>
                    <span class="text-gray-700">Volly & Futsal</span>
                </div>
            </div>
        </div>
    </div>


    <!-- Program Unggulan -->
    {{-- <div class="max-w-5xl mx-auto p-6 md:p-8 ">

        <h1 class="text-2xl font-bold mb-3 text-gray-700">
            <span class="text-amber-500">Program</span> Unggulan
        </h1>

        <p class="mb-3 text-gray-600">
            Program unggulan di Madrasah Aliyah Muhammadiyah (MAM) Limpung dirancang untuk memberikan pengalaman belajar yang komprehensif dan mendalam bagi siswa. Berikut adalah beberapa program unggulan yang kami tawarkan:
        </p>

        <ol class="px-4 mt-5">
            <li class="mb-2">
                <h2 class="text-lg text-gray-600">1. Program Tahfidz Al-Qur'an</h2>
                
            </li>
            <li class="mb-2">
                <h2 class="text-lg text-gray-600">2. Kelas Bahasa Asing</h2>
                
            </li>
            <li class="mb-2">
                <h2 class="text-lg text-gray-600">3. Ekstrakurikuler Beragam</h2>
                
            </li>
            <li class="mb-2">
                <h2 class="text-lg text-gray-600">4. Program Kewirausahaan</h2>
                
            </li>
            <li class="mb-2">
                <h2 class="text-lg text-gray-600">5. Pengembangan Karakter</h2>
                
            </li>
        </ol>

    </div> --}}


    <!-- Timeline Pendaftaran -->
    <div class="p-8 mb-8 max-w-5xl mx-auto">
        <div class="flex items-center mb-8">
            <h2 class="text-2xl  font-bold text-gray-800 "><span class="text-amber-500">Timeline</span> Pendaftaran</h2>
        </div>

        <div class="relative border-l border-gray-300  ml-6 space-y-8">
            <!-- Item -->
            <div class="relative pl-8">
                <div class="absolute -left-[9px] top-1.5 w-4 h-4 bg-blue-600 rounded-full border-2 border-white "></div>
                <p class="text-sm text-gray-500  font-medium">1–31 Jan 2025</p>
                <h3 class="text-gray-800  font-semibold">Pendaftaran Online (Gelombang 1)</h3>
            </div>

            <div class="relative pl-8">
                <div class="absolute -left-[9px] top-1.5 w-4 h-4 bg-blue-600 rounded-full border-2 border-white "></div>
                <p class="text-sm text-gray-500  font-medium">1–28 Feb 2025</p>
                <h3 class="text-gray-800  font-semibold">Pendaftaran Online (Gelombang 2)</h3>
            </div>

            <div class="relative pl-8">
                <div class="absolute -left-[9px] top-1.5 w-4 h-4 bg-blue-600 rounded-full border-2 border-white "></div>
                <p class="text-sm text-gray-500  font-medium">5–10 Mar 2025</p>
                <h3 class="text-gray-800  font-semibold">Tes Seleksi & Wawancara</h3>
            </div>

            <div class="relative pl-8">
                <div class="absolute -left-[9px] top-1.5 w-4 h-4 bg-blue-600 rounded-full border-2 border-white "></div>
                <p class="text-sm text-gray-500  font-medium">15 Mar 2025</p>
                <h3 class="text-gray-800  font-semibold">Pengumuman Hasil Seleksi</h3>
            </div>

            <div class="relative pl-8">
                <div class="absolute -left-[9px] top-1.5 w-4 h-4 bg-blue-600 rounded-full border-2 border-white "></div>
                <p class="text-sm text-gray-500  font-medium">17–25 Mar 2025</p>
                <h3 class="text-gray-800  font-semibold">Daftar Ulang Siswa Diterima</h3>
            </div>
        </div>
    </div>
 

    <!-- Persyaratan -->
        <div class="max-w-5xl mx-auto p-6 md:p-8 mb-8">
            <div class="flex items-center mb-6">
                <h2 class="text-2xl font-bold text-gray-800"><span class="text-amber-500">Persyaratan</span> Pendaftaran</h2>
            </div>
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <h3 class="text-lg font-bold text-gray-700 mb-3">Dokumen Wajib:</h3>
                    <ul class="space-y-2 text-gray-700">
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2">✓</span>
                            <span>Fotocopy Ijazah/SKHUN SMP/MTs (dapat menyusul)</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2">✓</span>
                            <span>Fotocopy Rapor semester 1-5</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2">✓</span>
                            <span>Fotocopy Kartu Keluarga</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2">✓</span>
                            <span>Fotocopy Akta Kelahiran</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2">✓</span>
                            <span>Pas foto 3x4 (3 lembar)</span>
                        </li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-bold text-gray-700 mb-3">Dokumen Tambahan:</h3>
                    <ul class="space-y-2 text-gray-700">
                        <li class="flex items-start">
                            <span class="text-blue-500 mr-2">•</span>
                            <span>Sertifikat prestasi (jika ada)</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-blue-500 mr-2">•</span>
                            <span>Surat keterangan tidak mampu (untuk jalur afirmasi)</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-blue-500 mr-2">•</span>
                            <span>Surat rekomendasi dari sekolah asal</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    <!-- Fasilitas Madrasah -->
        {{-- <div class="max-w-5xl mx-auto p-6 md:p-8 mb-8">
            <div class="flex items-center mb-6">
                <h2 class="text-2xl font-bold text-gray-800"><span class="text-amber-500">Fasilitas</span> Madrasah</h2>
            </div>
            <!-- Fasilitas Sekolah -->
            <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-4">
                <div class="bg-gray-50 p-5 rounded-lg text-center border border-gray-200">
                    <i class="fa-solid fa-school text-3xl text-amber-500 mb-3"></i>
                    <p class=" text-gray-800">Ruang Kelas Representatif</p>
                </div>
                <div class="bg-gray-50 p-5 rounded-lg text-center border border-gray-200">
                    <i class="fa-solid fa-book text-3xl text-amber-500 mb-3"></i>
                    <p class=" text-gray-800">Perpustakaan</p>
                </div>
                <div class="bg-gray-50 p-5 rounded-lg text-center border border-gray-200">
                    <i class="fa-solid fa-square-parking text-3xl text-amber-500 mb-3"></i>
                    <p class=" text-gray-800">Tempat Parkir</p>
                </div>
                <div class="bg-gray-50 p-5 rounded-lg text-center border border-gray-200">
                    <i class="fa-solid fa-vial text-3xl text-amber-500 mb-3"></i>
                    <p class=" text-gray-800">Laboratorium IPA</p>
                </div>
                <div class="bg-gray-50 p-5 rounded-lg text-center border border-gray-200">
                    <i class="fa-solid fa-computer text-3xl text-amber-500 mb-3"></i>
                    <p class=" text-gray-800">Laboratorium Komputer</p>
                </div>
                <div class="bg-gray-50 p-5 rounded-lg text-center border border-gray-200">
                    <i class="fa-solid fa-mosque text-3xl text-amber-500 mb-3"></i>
                    <p class=" text-gray-800">Masjid</p>
                </div>
                <div class="bg-gray-50 p-5 rounded-lg text-center border border-gray-200">
                    <i class="fa-solid fa-wifi text-3xl text-amber-500 mb-3"></i>
                    <p class=" text-gray-800">WiFi</p>
                </div>
                <div class="bg-gray-50 p-5 rounded-lg text-center border border-gray-200">
                    <i class="fa-solid fa-briefcase-medical text-3xl text-amber-500 mb-3"></i>
                    <p class=" text-gray-800">UKS</p>
                </div>
                <div class="bg-gray-50 p-5 rounded-lg text-center border border-gray-200">
                    <i class="fa-solid fa-futbol text-3xl text-amber-500 mb-3"></i>
                    <p class=" text-gray-800">Lapangan Olahraga</p>
                </div>
            </div>
        </div>

        <!-- Ekstrakurikuler -->
        <div class="max-w-5xl mx-auto p-6 md:p-8 mb-8">
            <div class="flex items-center mb-6">
                <h2 class="text-2xl font-bold text-gray-800">Ekstrakurikuler</h2>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
                <div class=" p-4 rounded-lg text-center border border-blue-100 hover:shadow-md transition-all">
                    <i class="fa-solid fa-person-hiking text-3xl text-blue-600 mb-2"></i>
                    <p class=" text-gray-800">Hizbul Wathan</p>
                </div>
                <div class=" p-4 rounded-lg text-center border border-red-100 hover:shadow-md transition-all">
                    <i class="fa-solid fa-music text-3xl text-red-600 mb-2"></i>
                    <p class=" text-gray-800">Marching Band</p>
                </div>
                <div class=" p-4 rounded-lg text-center border border-yellow-100 hover:shadow-md transition-all">
                    <i class="fa-solid fa-hand-fist text-3xl text-yellow-600 mb-2"></i>
                    <p class=" text-gray-800">Tapak Suci</p>
                </div>
                <div class=" p-4 rounded-lg text-center border border-green-100 hover:shadow-md transition-all">
                    <i class="fa-solid fa-laptop-code text-3xl text-green-600 mb-2"></i>
                    <p class=" text-gray-800">Komputer</p>
                </div>
                <div class=" p-4 rounded-lg text-center border border-purple-100 hover:shadow-md transition-all">
                    <i class="fa-solid fa-volleyball text-3xl text-purple-600 mb-2"></i>
                    <p class=" text-gray-800">Volly & Futsal</p>
                </div>
            </div>
        </div> --}}


        <!-- Beasiswa -->
        <div class="w-full max-w-5xl mx-auto p-6 md:p-8 mb-8">
            <div class="flex items-center mb-6">
                <h2 class="text-2xl font-bold text-gray-700"><span class="text-amber-500">Program</span> Beasiswa</h2>
            </div>
            
            <div class="grid md:grid-cols-2 gap-6 mb-6">
                <div class="">
                    <h3 class="text-xl  mb-4"><span class="text-gray-500 font-bold">Beasiswa</span> Akademik</h3>
                    <div class="space-y-3">
                        <div class="bg-white p-3 rounded-lg">
                            <p class="font-semibold text-gray-800">Peringkat 1</p>
                            <p class="text-sm text-gray-600">Bebas SPP 6 Bulan</p>
                        </div>
                        <div class="bg-white p-3 rounded-lg">
                            <p class="font-semibold text-gray-800">Peringkat 2</p>
                            <p class="text-sm text-gray-600">Bebas SPP 4 Bulan</p>
                        </div>
                        <div class="bg-white p-3 rounded-lg">
                            <p class="font-semibold text-gray-800">Peringkat 3</p>
                            <p class="text-sm text-gray-600">Bebas SPP 2 Bulan</p>
                        </div>
                        <div class="bg-white p-3 rounded-lg">
                            <p class="font-semibold text-gray-800">Juara Lomba</p>
                            <p class="text-sm text-gray-600">Mendapat reward berdasarkan tingkat dan kategori lomba</p>
                        </div>
                    </div>
                </div>

                <div class="">
                    <h3 class="text-xl  mb-4"><span class="text-gray-500 font-bold">Beasiswa</span> Nonakademik</h3>
                    <div class="space-y-3">
                        <div class="bg-white p-3 rounded-lg">
                            <p class="font-semibold text-gray-800">Beasiswa Kader</p>
                            <p class="text-sm text-gray-600">Potongan SPP 50%</p>
                        </div>
                        <div class="bg-white p-3 rounded-lg">
                            <p class="font-semibold text-gray-800">Beasiswa Kurang Mampu</p>
                            <p class="text-sm text-gray-600">Potongan SPP 50%</p>
                        </div>
                        <div class="bg-white p-3 rounded-lg">
                            <p class="font-semibold text-gray-800">Beasiswa PIP</p>
                            <p class="text-sm text-gray-600">Program Indonesia Pintar dari pemerintah</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="w-full max-w-5xl mx-auto p-6 md:p-8 mb-8">
            <div class="flex items-center mb-6">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-800">Rincian Daftar Ulang Siswa Baru</h2>
            </div>
            
            <div class="grid md:grid-cols-2 gap-6">
                <div class=" p-6 rounded-lg border-2 border-blue-200">
                    <h3 class="text-xl font-bold text-blue-800 mb-4">Putra</h3>
                    <div class="space-y-2">
                        <div class="flex justify-between text-sm">
                            <span>Uang Syahriyah Bulan Juli 2025</span>
                            <span class="font-semibold">Rp 175.000</span>
                        </div>
                        <div class="flex justify-between text-sm">
                            <span>Atribut Madrasah</span>
                            <span class="font-semibold">Rp 180.000</span>
                        </div>
                        <div class="flex justify-between text-sm">
                            <span>UIS Tahunan (50% dari Syahriyyah)</span>
                            <span class="font-semibold">Rp 88.000</span>
                        </div>
                        <div class="flex justify-between text-sm">
                            <span>MATSAMA dan FORTASI IPM</span>
                            <span class="font-semibold">Rp 120.000</span>
                        </div>
                        <div class="flex justify-between text-sm">
                            <span>Seragam Batik</span>
                            <span class="font-semibold">Rp 110.000</span>
                        </div>
                        <div class="flex justify-between text-sm">
                            <span>Seragam Hizbul Wathan</span>
                            <span class="font-semibold">Rp 195.000</span>
                        </div>
                        <div class="flex justify-between text-sm">
                            <span>Buku Literasi</span>
                            <span class="font-semibold">Rp 10.000</span>
                        </div>
                        <div class="flex justify-between text-sm">
                            <span>Map Raport</span>
                            <span class="font-semibold">Rp 35.000</span>
                        </div>
                        <div class="border-t-2 border-blue-300 my-2"></div>
                        <div class="flex justify-between font-bold text-lg text-blue-800">
                            <span>Total</span>
                            <span>Rp 913.000</span>
                        </div>
                    </div>
                </div>

                <div class="p-6 rounded-lg border-2 border-amber-200">
                    <h3 class="text-xl font-bold text-amber-800 mb-4">Putri</h3>
                    <div class="space-y-2">
                        <div class="flex justify-between text-sm">
                            <span>Uang Syahriyah Bulan Juli 2025</span>
                            <span class="font-semibold">Rp 175.000</span>
                        </div>
                        <div class="flex justify-between text-sm">
                            <span>Atribut Madrasah</span>
                            <span class="font-semibold">Rp 180.000</span>
                        </div>
                        <div class="flex justify-between text-sm">
                            <span>UIS Tahunan (50% dari Syahriyyah)</span>
                            <span class="font-semibold">Rp 88.000</span>
                        </div>
                        <div class="flex justify-between text-sm">
                            <span>MATSAMA dan FORTASI IPM</span>
                            <span class="font-semibold">Rp 120.000</span>
                        </div>
                        <div class="flex justify-between text-sm">
                            <span>Seragam Batik</span>
                            <span class="font-semibold">Rp 110.000</span>
                        </div>
                        <div class="flex justify-between text-sm">
                            <span>Seragam Hizbul Wathan</span>
                            <span class="font-semibold">Rp 195.000</span>
                        </div>
                        <div class="flex justify-between text-sm">
                            <span>Buku Literasi</span>
                            <span class="font-semibold">Rp 10.000</span>
                        </div>
                        <div class="flex justify-between text-sm">
                            <span>Map Raport</span>
                            <span class="font-semibold">Rp 35.000</span>
                        </div>
                        <div class="border-t-2 border-amber-300 my-2"></div>
                        <div class="flex justify-between font-bold text-lg text-amber-800">
                            <span>Total</span>
                            <span>Rp 913.000</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>


@endsection