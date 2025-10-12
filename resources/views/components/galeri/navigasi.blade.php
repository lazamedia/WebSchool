
<div class="my-5">
    {{-- tombol navigasi galeri --}}
    <div class="max-w-6xl mx-auto px-5 py-6 flex flex-wrap gap-3 justify-center">

        <a href="{{ route('frontend.galeri', ['kategori' => 'kegiatan']) }}" 
            class="px-4 py-2 rounded-sm font-semibold 
                {{ request('kategori') === 'kegiatan' ? 'bg-amber-400 text-blue-900' : 'border border-blue-900 text-blue-900' }}">
            Kegiatan
        </a>

        <a href="{{ route('frontend.galeri', ['kategori' => 'acara']) }}" 
            class="px-4 py-2 rounded-sm font-semibold 
                {{ request('kategori') === 'acara' ? 'bg-amber-400 text-blue-900' : 'border border-blue-900 text-blue-900' }}">
            Acara
        </a>

        <a href="{{ route('frontend.galeri', ['kategori' => 'ekstrakurikuler']) }}" 
            class="px-4 py-2 rounded-sm font-semibold 
                {{ request('kategori') === 'ekstrakurikuler' ? 'bg-amber-400 text-blue-900' : 'border border-blue-900 text-blue-900' }}">
            Ekstrakurikuler
        </a>

    </div>
</div>