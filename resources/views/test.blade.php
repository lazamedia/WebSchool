<section class="w-full p-5 flex justify-center">
    <div class="max-w-6xl w-full flex flex-col gap-6">
        {{-- Container Box Kiri dan Kanan --}}
        <div class="flex flex-col lg:flex-row gap-6">
            {{-- Box Kiri berisi Gambar --}}
            <div class="w-full lg:w-1/2">
                <img id="extraImage" src="" alt="Ekstrakurikuler" class="w-full h-96 object-cover rounded-lg shadow-lg transition-all duration-700 ease-in-out">
            </div>
            
            {{-- Box Kanan berisi Konten Extra --}}
            <div class="w-full lg:w-1/2 flex flex-col">
                <div class="bg-white p-6 rounded-lg shadow-md border border-gray-200 flex-grow overflow-hidden">
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
        
        {{-- Navigasi Box Chevron di Bawah - Ditengah --}}
        <div class="flex flex-wrap justify-center items-center gap-0">
            <button onclick="selectExtra(0)" class="extra-nav group relative bg-blue-500 hover:bg-blue-600 shadow-md hover:shadow-lg transition-all duration-700 ease-in-out transform  hover:z-10" style="z-index: 5;">
                <div class="flex items-center justify-center gap-2 pl-4 pr-6 py-3">
                    <i id="extraIcon0" class=""></i>
                    <span class="text-white font-bold text-sm whitespace-nowrap opacity-0 max-w-0 group-hover:opacity-100 group-hover:max-w-xs transition-all duration-700 ease-in-out overflow-hidden extra-title-span ml-0 group-hover:ml-1" id="extraTitle0"></span>
                </div>
            </button>
            
            <button onclick="selectExtra(1)" class="extra-nav group relative bg-gray-800 hover:bg-gray-700 shadow-md hover:shadow-lg transition-all duration-700 ease-in-out transform  hover:z-10" style="z-index: 4;">
                <div class="flex items-center justify-center gap-2 pl-5 pr-6 py-3">
                    <i id="extraIcon1" class=""></i>
                    <span class="text-white font-bold text-sm whitespace-nowrap opacity-0 max-w-0 group-hover:opacity-100 group-hover:max-w-xs transition-all duration-700 ease-in-out overflow-hidden extra-title-span ml-0 group-hover:ml-1" id="extraTitle1"></span>
                </div>
            </button>
            
            <button onclick="selectExtra(2)" class="extra-nav group relative bg-gray-800 hover:bg-gray-700 shadow-md hover:shadow-lg transition-all duration-700 ease-in-out transform  hover:z-10" style="z-index: 3;">
                <div class="flex items-center justify-center gap-2 pl-5 pr-6 py-3">
                    <i id="extraIcon2" class=""></i>
                    <span class="text-white font-bold text-sm whitespace-nowrap opacity-0 max-w-0 group-hover:opacity-100 group-hover:max-w-xs transition-all duration-700 ease-in-out overflow-hidden extra-title-span ml-0 group-hover:ml-1" id="extraTitle2"></span>
                </div>
            </button>
            
            <button onclick="selectExtra(3)" class="extra-nav group relative bg-gray-800 hover:bg-gray-700 shadow-md hover:shadow-lg transition-all duration-700 ease-in-out transform  hover:z-10" style="z-index: 2;">
                <div class="flex items-center justify-center gap-2 pl-5 pr-6 py-3">
                    <i id="extraIcon3" class=""></i>
                    <span class="text-white font-bold text-sm whitespace-nowrap opacity-0 max-w-0 group-hover:opacity-100 group-hover:max-w-xs transition-all duration-700 ease-in-out overflow-hidden extra-title-span ml-0 group-hover:ml-1" id="extraTitle3"></span>
                </div>
            </button>
            
            <button onclick="selectExtra(4)" class="extra-nav group relative bg-gray-800 hover:bg-gray-700 shadow-md hover:shadow-lg transition-all duration-700 ease-in-out transform  hover:z-10" style="z-index: 1;">
                <div class="flex items-center justify-center gap-2 pl-5 pr-6 py-3">
                    <i id="extraIcon4" class=""></i>
                    <span class="text-white font-bold text-sm whitespace-nowrap opacity-0 max-w-0 group-hover:opacity-100 group-hover:max-w-xs transition-all duration-700 ease-in-out overflow-hidden extra-title-span ml-0 group-hover:ml-1" id="extraTitle4"></span>
                </div>
            </button>
        </div>
    </div>
</section>