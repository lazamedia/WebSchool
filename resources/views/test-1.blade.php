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

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 lg:gap-8">

            <div class="flex flex-col gap-6 lg:col-span-2">

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div class="relative bg-white rounded-lg overflow-hidden shadow-md">
                        <img src="{{ asset('assets/img/ipa.png') }}" alt="Jurusan IPA" class="w-full h-auto object-cover">
                        <div class="absolute bottom-4 left-4 right-4 h-16 bg-blue-800 rounded-lg text-white flex items-center justify-center p-4">
                            <span class="font-bold text-lg text-center">IPA</span>
                        </div>
                    </div>
                    <div class="relative bg-white rounded-lg overflow-hidden shadow-md">
                        <img src="{{ asset('assets/img/ips.png') }}" alt="Jurusan IPS" class="w-full h-auto object-cover">
                        <div class="absolute bottom-4 left-4 right-4 h-16 bg-blue-800 rounded-lg text-white flex items-center justify-center p-4">
                            <span class="font-bold text-lg text-center">IPS</span>
                        </div>
                    </div>
                </div>

                <div class="bg-slate-900 rounded-lg p-4 flex flex-col sm:flex-row items-center justify-around space-y-4 sm:space-y-0 sm:space-x-4">
                    <div class="flex items-center gap-4">
                        <span class="text-5xl text-yellow-500 font-extrabold">
                            <i class="fa-solid fa-award text-yellow-500"></i>
                        </span>
                        <div class="flex flex-col">
                            <span class="font-bold text-white text-lg">20+ Juara Lomba</span>
                            <span class="font-regular text-white text-sm">Kategori IPA & IPS</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-col gap-6 h-full">
                <div class="relative bg-white rounded-lg overflow-hidden shadow-md flex-1">
                    <img src="{{ asset('assets/img/ipa.png') }}" alt="Peminatan IPA" class="w-full h-full object-cover">
                    <div class="absolute bottom-4 left-4 right-4 h-16 bg-blue-800 rounded-lg text-white flex items-center justify-center p-4">
                        <span class="font-bold text-sm text-center">Peminatan IPA</span>
                    </div>
                </div>
                <div class="relative bg-white rounded-lg overflow-hidden shadow-md flex-1">
                    <img src="{{ asset('assets/img/ips.png') }}" alt="Peminatan IPS" class="w-full h-full object-cover">
                    <div class="absolute bottom-4 left-4 right-4 h-16 bg-blue-800 rounded-lg text-white flex items-center justify-center p-4">
                        <span class="font-bold text-sm text-center">Peminatan IPS</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
