@extends('layouts.main')

@section('content')
    
    <!-- Hero Content -->
        <div class="relative h-[60vh] lg:h-[80vh] w-full">
            <img src="{{ asset('assets/img/school.png') }}" 
                alt="" 
                class="absolute inset-0 w-full h-full object-cover opacity-40">

            <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-gray-950 px-4">
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold mb-4 text-gray-900">
                    Selamat Datang di <span class="text-blue-900 brush-stroke brush-stroke-thick">MAM Limpung</span>
                </h1>
                <p class="text-sm sm:text-base lg:text-lg mb-6">
                    Madrasah Aliyah Muhammadiyah Limpung
                </p>
                <div class="flex gap-4">
                    <a href="#" 
                        class="bg-gradient-to-r from-blue-700 to-blue-900 text-white px-6 py-2 rounded-bl-full rounded-tr-full rounded-tl-full font-semibold hover:shadow-lg transform hover:-translate-y-0.5 transition-all duration-300">
                        Portal Siswa
                    </a>
                    <a href="#" 
                        class="bg-gradient-to-r from-amber-400 to-amber-600 text-white px-6 py-2 rounded-br-full rounded-tr-full rounded-tl-full font-semibold hover:shadow-lg transform hover:-translate-y-0.5 transition-all duration-300">
                        PPDB Online
                    </a>
                </div>
            </div>
        </div>

        <div class="w-full h-1" 
            style="background: url('{{ asset('assets/img/strip-rainbow.png') }}') repeat-x; height: 3px; background-size: contain;">
        </div>
    <!-- end Hero Content -->


    <!-- box kecil panjang promosi ppdb 2025 -->
        <div class="bg-blue-900 text-white py-5">
            <div class="container mx-auto px-4 flex flex-col sm:flex-row items-center justify-between">
                <div class="text-center sm:text-left mb-2 sm:mb-0">
                    <span class="font-semibold">PPDB 2025</span> - Pendaftaran Peserta Didik Baru Tahun Ajaran 2025/2026
                </div>
                <a href="#" 
                    class="bg-gradient-to-r from-amber-400 to-amber-600 text-white px-4 py-2 rounded-lg font-semibold  hover:shadow-lg transform hover:-translate-y-0.5 transition-all duration-300 min-w-[150px] text-center">
                    Daftar Sekarang
                </a>
            </div>
        </div>
    <!-- end box kecil panjang promosi ppdb 2025 -->


    <section class="bg-gray-50 py-16 px-4 sm:px-6 lg:px-8">
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div class="flex justify-center md:order-2">
                <img src="{{ asset('assets/img/maskot-sapa.png') }}" alt="Sekolah" class="w-2/3 md:w-full max-w-xs md:max-w-sm lg:max-w-md object-contain transform transition duration-500 hover:scale-105">
            </div>

            <div class="md:order-1">
                <h2 class="text-4xl lg:text-5xl font-extrabold text-gray-900 mb-2">
                    Selamat Datang di
                    <span class="block text-blue-600">MAM Limpung</span>
                </h2>
                <p class="text-xl text-gray-600 mb-6">
                    Madrasah Aliyah Muhammadiyah Limpung
                </p>
                <p class="text-gray-700 mb-6 leading-relaxed">
                    Assalamu’alaikum dan salam sejahtera 👋 <br>
                    Selamat datang di website resmi sekolah kami. Website ini menjadi wadah informasi, komunikasi, dan kolaborasi antara guru, siswa, orang tua, serta masyarakat luas. Mari bersama-sama membangun generasi yang cerdas, berkarakter, dan berprestasi.
                </p>

                {{-- <h4 class="text-lg font-semibold text-gray-800 mb-4">Jurusan Unggulan:</h4>

                <ul class="flex flex-col sm:flex-row gap-4">
                    <li class="w-full sm:w-1/2">
                        <div class="bg-white p-4 rounded-xl shadow-md border border-gray-200 transition duration-300 hover:shadow-lg hover:border-blue-500 transform hover:-translate-y-1">
                            <span class="block text-center text-lg font-bold text-gray-800">IPA</span>
                        </div>
                    </li>
                    <li class="w-full sm:w-1/2">
                        <div class="bg-white p-4 rounded-xl shadow-md border border-gray-200 transition duration-300 hover:shadow-lg hover:border-blue-500 transform hover:-translate-y-1">
                            <span class="block text-center text-lg font-bold text-gray-800">IPS</span>
                        </div>
                    </li>
                </ul> --}}
            </div>
        </div>
    </section>




    <section class="py-16 px-4 sm:px-6 lg:px-8">
        <div class="container mx-auto max-w-6xl">
            <div class="text-center mb-12 lg:mb-16">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-gray-900">
                    Jurusan Unggulan 
                </h2>
                <p class="mt-4 max-w-2xl mx-auto text-base sm:text-lg text-gray-600">
                    Pilih jurusan yang sesuai dengan minat dan bakatmu untuk masa depan yang gemilang.
                </p>
            </div>

            <div class="flex flex-col lg:flex-row gap-6 lg:gap-8">

                <div class="flex flex-col gap-6 w-full lg:w-2/3">

                    <div class="flex flex-col sm:flex-row gap-6">

                        <div class="relative rounded-lg h-80 w-full bg-cover bg-center overflow-hidden" 
                            style="background-image: url('{{ asset('assets/img/ipa.png') }}')">
                            <div class="absolute bottom-4 left-4 right-4 h-16 bg-blue-800/90 rounded-lg text-white flex items-center justify-center">
                            <span class="font-bold text-sm text-center">IPA</span>
                            </div>
                        </div>

                        <div class="relative rounded-lg h-80 w-full bg-cover bg-center overflow-hidden" 
                            style="background-image: url('{{ asset('assets/img/ips.png') }}')">
                            <div class="absolute bottom-4 left-4 right-4 h-16 bg-blue-800/90 rounded-lg text-white flex items-center justify-center">
                            <span class="font-bold text-sm text-center">IPS</span>
                            </div>
                        </div>

                    </div>

                    <div class="bg-slate-900 rounded-lg h-24 flex items-center p-4 justify-around">

                        <div class="flex items-center gap-2 lg:gap-4 mb-2">
                            <span class="text-lg lg:text-3xl text-yellow-500 font-extrabold">
                                <i class="fa-solid fa-award text-yellow-500"></i>
                                20+
                            </span>
                            <div class="flex flex-col">
                                <span class="font-bold text-white text-sm lg:text-lg">Juara Lomba</span>
                                <span class="font-regular text-white -mt-1 text-xs lg:text-sm">Kategori IPA</span>
                            </div>

                        </div>

                        <div class="flex items-center gap-2 lg:gap-4 mb-2">
                            <span class="text-lg lg:text-3xl text-yellow-500 font-extrabold">
                                <i class="fa-solid fa-award text-yellow-500"></i>
                                20+
                            </span>
                            <div class="flex flex-col">
                                <span class="font-bold text-white text-sm lg:text-lg">Juara Lomba</span>
                                <span class="font-regular text-white -mt-1 text-xs lg:text-sm">Kategori IPA</span>
                            </div>

                        </div>
                    
                    </div>

                </div>

                <div class="hidden lg:flex flex-col gap-6 w-full lg:w-1/3 max-h-[450px] ">
                    <div class="bg-gray-200 rounded-lg flex-1 flex h-[200px]  flex-col justify-end p-4">
                        <img src="{{ asset('assets/img/ipa.png') }}" alt="" class="h-auto overflow-hidden rounded object-cover">
                    </div>
                    <div class="bg-gray-200 rounded-lg flex-1 flex h-[200px]  flex-col justify-end p-4">
                        <img src="{{ asset('assets/img/ips.png') }}" alt="" class="h-auto overflow-hidden rounded object-cover">
                    </div>
                </div>

            </div>
        </div>
    </section>

    





@endsection