@extends('layouts.main')

@section('content')
    
    <!-- Hero Content -->
        <x-home.hero />
    <!-- ----- -->

    <!-- box kecil panjang promosi ppdb 2025 -->
        <div class="bg-blue-900 text-white py-5">
            <div class="container max-w-6xl mx-auto px-4 flex flex-col sm:flex-row items-center justify-between">
                <div class="text-center sm:text-left mb-2 sm:mb-0">
                    <span class="font-semibold">PPDB 2025</span> - Pendaftaran Peserta Didik Baru Tahun Ajaran 2025/2026
                </div>
                <a href="#" 
                    class="bg-gradient-to-r from-amber-400 to-amber-600 text-white px-4 py-2 rounded-lg font-semibold  hover:shadow-lg transform hover:-translate-y-0.5 transition-all duration-300 min-w-[150px] text-center">
                    Daftar Sekarang
                </a>
            </div>
        </div>
    <!-- ----- -->

    <!-- Section Sambutan -->
        <x-home.sapa />
    <!-- ----- -->

    <!-- Section Jurusan -->
        <x-home.jurusan />
    <!-- ----- -->

    <!-- Section Extra -->
        <x-home.extra />
    <!-- ---- -->

    <!-- Section Juaran -->
        <x-home.juara />
    <!-- ---- -->  

@endsection