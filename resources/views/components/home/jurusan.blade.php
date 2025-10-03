<section class="py-16 px-4 sm:px-6 lg:px-8">
            <div class="container mx-auto max-w-6xl">
                <div class="text-center mb-12 lg:mb-16">
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-semibold text-gray-900">
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