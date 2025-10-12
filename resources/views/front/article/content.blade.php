@extends('layouts.main')

@section('content')
    
        <div class="max-w-7xl mx-auto px-4 py-8 sm:px-6 lg:px-8">
        <!-- back to home -->
        <a href="/article" class="inline-flex items-center text-blue-600 hover:text-blue-800 mb-6">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            Kembali ke Artikel
        </a>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
            <!-- Main Content -->
            <main class="lg:col-span-8">
                <article class="bg-white rounded-2xl shadow-sm overflow-hidden">
                    <!-- Article Header -->
                    <div class="p-4 md:p-10">
                        <div class="flex items-center gap-3 mb-6">
                            <span class="px-4 py-1.5 bg-blue-100 text-blue-800 text-sm font-medium rounded-full">
                                Teknologi
                            </span>
                            <span class="text-gray-500 text-sm">•</span>
                            <span class="text-gray-600 text-sm">8 menit membaca</span>
                        </div>

                        <h1 class="text-3xl md:text-5xl font-bold text-gray-900 mb-6 leading-tight">
                            Masa Depan Kecerdasan Buatan di Indonesia: Peluang dan Tantangan
                        </h1>

                        <div class="flex items-center gap-4 pb-6 border-b border-gray-200">
                            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=100&h=100&fit=crop" alt="Author" class="w-12 h-12 rounded-full">
                            <div>
                                <p class="font-semibold text-gray-900">Ahmad Rizki</p>
                                <p class="text-sm text-gray-600">10 Oktober 2025</p>
                            </div>
                        </div>
                    </div>

                    <!-- Featured Image -->
                    <div class="px-4 md:px-10 pb-8">
                        <img src="https://images.unsplash.com/photo-1677442136019-21780ecad995?w=1200&h=600&fit=crop" alt="AI Indonesia" class="w-full rounded-xl">
                    </div>

                    <!-- Article Content -->
                    <div class="px-4 md:px-10 pb-10">
                        <div class="prose prose-lg max-w-none">
                            <p class="text-xl text-gray-700 leading-relaxed mb-6">
                                Kecerdasan buatan (AI) telah menjadi salah satu teknologi paling transformatif di era digital ini. Di Indonesia, perkembangan AI menunjukkan tren yang sangat positif dengan berbagai inovasi dan implementasi di berbagai sektor.
                            </p>

                            <h2 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Perkembangan AI di Indonesia</h2>
                            <p class="text-gray-700 leading-relaxed mb-6">
                                Dalam beberapa tahun terakhir, Indonesia telah menunjukkan komitmen kuat dalam mengadopsi teknologi AI. Pemerintah melalui berbagai program telah mendorong ekosistem digital yang mendukung pengembangan AI, mulai dari startup hingga perusahaan besar.
                            </p>

                            <p class="text-gray-700 leading-relaxed mb-6">
                                Sektor-sektor seperti e-commerce, fintech, healthcare, dan pendidikan telah mulai mengintegrasikan AI dalam operasional mereka. Hal ini membuka peluang besar bagi talenta lokal untuk berkontribusi dalam pengembangan solusi AI yang relevan dengan kebutuhan masyarakat Indonesia.
                            </p>

                            <!-- Ad Space 1 -->
                            <div class="my-8 p-6 bg-gradient-to-r from-purple-50 to-pink-50 rounded-xl border border-purple-200">
                                <div class="flex items-center justify-between flex-wrap gap-4">
                                    <div>
                                        <p class="text-xs text-gray-500 mb-1">IKLAN</p>
                                        <h3 class="text-lg font-bold text-gray-900 mb-1">Belajar AI dari Ahlinya</h3>
                                        <p class="text-sm text-gray-600">Kursus online dengan mentor berpengalaman. Diskon 50% hari ini!</p>
                                    </div>
                                    <button class="px-6 py-3 bg-gradient-to-r from-purple-600 to-pink-600 text-white rounded-lg font-medium hover:shadow-lg transition-all">
                                        Daftar Sekarang
                                    </button>
                                </div>
                            </div>

                            <h2 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Peluang Besar di Berbagai Sektor</h2>
                            <p class="text-gray-700 leading-relaxed mb-6">
                                AI membuka peluang luar biasa di berbagai industri. Di sektor kesehatan, AI dapat membantu diagnosis penyakit dengan lebih akurat dan cepat. Dalam pendidikan, teknologi ini dapat memberikan pembelajaran yang dipersonalisasi sesuai kebutuhan setiap siswa.
                            </p>

                            <blockquote class="border-l-4 border-blue-600 pl-6 py-2 my-6 bg-blue-50 rounded-r-lg">
                                <p class="text-lg italic text-gray-800">
                                    "Implementasi AI di Indonesia bukan hanya tentang teknologi, tetapi bagaimana kita dapat memanfaatkannya untuk meningkatkan kualitas hidup masyarakat."
                                </p>
                            </blockquote>

                            <p class="text-gray-700 leading-relaxed mb-6">
                                Sektor finansial juga tidak ketinggalan. Dengan AI, layanan perbankan menjadi lebih personal dan aman. Deteksi fraud, analisis kredit, dan chatbot customer service adalah beberapa implementasi yang sudah berjalan dengan baik.
                            </p>

                            <h2 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Tantangan yang Harus Dihadapi</h2>
                            <p class="text-gray-700 leading-relaxed mb-6">
                                Meskipun potensinya besar, pengembangan AI di Indonesia masih menghadapi berbagai tantangan. Infrastruktur digital yang belum merata, kesenjangan talenta AI, dan regulasi yang masih dalam tahap pengembangan menjadi beberapa hambatan utama.
                            </p>

                            <p class="text-gray-700 leading-relaxed mb-6">
                                Diperlukan kolaborasi yang kuat antara pemerintah, akademisi, dan industri untuk mengatasi tantangan ini. Investasi dalam pendidikan AI, pengembangan infrastruktur, dan pembuatan regulasi yang mendukung inovasi menjadi kunci kesuksesan adopsi AI di Indonesia.
                            </p>

                            <h2 class="text-2xl font-bold text-gray-900 mt-8 mb-4">Langkah ke Depan</h2>
                            <p class="text-gray-700 leading-relaxed mb-6">
                                Untuk memaksimalkan potensi AI, Indonesia perlu fokus pada beberapa hal strategis. Pertama, meningkatkan literasi digital dan AI di semua lapisan masyarakat. Kedua, membangun ekosistem yang kondusif bagi startup dan inovator AI. Ketiga, mengembangkan regulasi yang seimbang antara mendorong inovasi dan melindungi masyarakat.
                            </p>

                            <p class="text-gray-700 leading-relaxed mb-6">
                                Dengan pendekatan yang tepat, Indonesia memiliki peluang besar untuk menjadi pemain penting dalam ekosistem AI global. Talenta muda, pasar yang besar, dan dukungan pemerintah adalah modal kuat untuk mencapai visi tersebut.
                            </p>
                        </div>

                        <!-- Tags -->
                        <div class="mt-10 pt-6 border-t border-gray-200">
                            <h3 class="text-sm font-semibold text-gray-900 mb-3">Tag Artikel:</h3>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg text-sm hover:bg-gray-200 transition-colors cursor-pointer">Kecerdasan Buatan</span>
                                <span class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg text-sm hover:bg-gray-200 transition-colors cursor-pointer">Teknologi</span>
                                <span class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg text-sm hover:bg-gray-200 transition-colors cursor-pointer">Indonesia</span>
                                <span class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg text-sm hover:bg-gray-200 transition-colors cursor-pointer">Digital</span>
                                <span class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg text-sm hover:bg-gray-200 transition-colors cursor-pointer">Inovasi</span>
                            </div>
                        </div>

                        <!-- Share Buttons -->
                        <div class="mt-8 pt-6 border-t border-gray-200">
                            <h3 class="text-sm font-semibold text-gray-900 mb-3">Bagikan Artikel:</h3>
                            <div class="flex gap-3">
                                <!-- Facebook -->
                                <a href="" class="px-5 py-2 content-center text-sm bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors flex items-center gap-2">
                                    <i class="fab fa-facebook-f"></i>
                                    <span class="hidden md:block">Facebook</span>
                                </a>

                                <!-- Twitter / X -->
                                <a href="" class="px-5 py-2 content-center text-sm bg-sky-500 text-white rounded-lg hover:bg-sky-600 transition-colors flex items-center gap-2">
                                    <i class="fab fa-x-twitter"></i>
                                    <span class="hidden md:block">Twitter</span>
                                </a>

                                <!-- WhatsApp -->
                                <a href="" class="px-5 py-2 content-center text-sm bg-green-600 text-white rounded-lg hover:bg-green-700 transition-colors flex items-center gap-2">
                                    <i class="fab fa-whatsapp"></i>
                                    <span class="hidden md:block">WhatsApp</span>
                                </a>

                                <!-- Instagram -->
                                <a href="" class="px-5 py-2 content-center text-sm bg-gradient-to-r from-pink-500 to-orange-500 text-white rounded-lg hover:from-pink-600 hover:to-orange-600 transition-colors flex items-center gap-2">
                                    <i class="fab fa-instagram"></i>
                                    <span class="hidden md:block">Instagram</span>
                                </a>

                            </div>
                        </div>
                    </div>
                </article>
            </main>

            <!-- Sidebar -->
            <aside class="lg:col-span-4 space-y-6">
                <!-- Ad Space 2 - Square Banner -->
                {{-- <div class="bg-white rounded-2xl shadow-sm p-6  ">
                    <p class="text-xs text-gray-500 mb-3">IKLAN</p>
                    <div class="bg-gradient-to-br from-blue-500 to-purple-600 rounded-xl p-6 text-white text-center">
                        <h3 class="text-2xl font-bold mb-2">Tingkatkan Bisnis Anda</h3>
                        <p class="text-sm mb-4 text-blue-100">Solusi digital terpercaya untuk UMKM</p>
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=300&h=200&fit=crop" alt="Business" class="w-full rounded-lg mb-4">
                        <button class="w-full px-4 py-3 bg-white text-blue-600 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                            Pelajari Lebih Lanjut
                        </button>
                    </div>
                </div> --}}

                <!-- Related Articles -->
                <div class="bg-white rounded-2xl shadow-sm p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-6">Artikel Terkait</h3>
                    <div class="space-y-5">
                        <!-- Article 1 -->
                        <article class="group cursor-pointer">
                            <div class="flex gap-4">
                                <img src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?w=120&h=90&fit=crop" alt="Article" class="w-24 h-20 rounded-lg object-cover flex-shrink-0 group-hover:opacity-80 transition-opacity">
                                <div class="flex-1 min-w-0">
                                    <h4 class="font-semibold text-gray-900 group-hover:text-blue-600 transition-colors line-clamp-2 mb-1">
                                        Belajar Programming dari Nol untuk Pemula
                                    </h4>
                                    <p class="text-sm text-gray-600">1 Okt 2025</p>
                                </div>
                            </div>
                        </article>

                        <div class="border-t border-gray-100"></div>

                        <!-- Article 2 -->
                        <article class="group cursor-pointer">
                            <div class="flex gap-4">
                                <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?w=120&h=90&fit=crop" alt="Article" class="w-24 h-20 rounded-lg object-cover flex-shrink-0 group-hover:opacity-80 transition-opacity">
                                <div class="flex-1 min-w-0">
                                    <h4 class="font-semibold text-gray-900 group-hover:text-blue-600 transition-colors line-clamp-2 mb-1">
                                        Keamanan Siber untuk Bisnis Kecil
                                    </h4>
                                    <p class="text-sm text-gray-600">25 Sep 2025</p>
                                </div>
                            </div>
                        </article>

                        <div class="border-t border-gray-100"></div>

                        <!-- Article 3 -->
                        <article class="group cursor-pointer">
                            <div class="flex gap-4">
                                <img src="https://images.unsplash.com/photo-1677442136019-21780ecad995?w=120&h=90&fit=crop" alt="Article" class="w-24 h-20 rounded-lg object-cover flex-shrink-0 group-hover:opacity-80 transition-opacity">
                                <div class="flex-1 min-w-0">
                                    <h4 class="font-semibold text-gray-900 group-hover:text-blue-600 transition-colors line-clamp-2 mb-1">
                                        Tren E-Commerce 2025 yang Wajib Diketahui
                                    </h4>
                                    <p class="text-sm text-gray-600">3 Okt 2025</p>
                                </div>
                            </div>
                        </article>

                        <div class="border-t border-gray-100"></div>

                        <!-- Article 4 -->
                        <article class="group cursor-pointer">
                            <div class="flex gap-4">
                                <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=120&h=90&fit=crop" alt="Article" class="w-24 h-20 rounded-lg object-cover flex-shrink-0 group-hover:opacity-80 transition-opacity">
                                <div class="flex-1 min-w-0">
                                    <h4 class="font-semibold text-gray-900 group-hover:text-blue-600 transition-colors line-clamp-2 mb-1">
                                        Strategi Marketing Digital untuk UMKM
                                    </h4>
                                    <p class="text-sm text-gray-600">8 Okt 2025</p>
                                </div>
                            </div>
                        </article>
                    </div>

                    <button class="w-full mt-6 px-4 py-2.5 border-2 border-gray-200 text-gray-700 rounded-lg font-medium hover:border-blue-600 hover:text-blue-600 transition-colors">
                        Lihat Semua Artikel
                    </button>
                </div>

                <!-- Newsletter Subscribe -->
                {{-- <div class="bg-gradient-to-br from-indigo-600 to-purple-700 rounded-2xl shadow-sm p-6 text-white">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-white bg-opacity-20 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-2">Newsletter</h3>
                        <p class="text-sm text-indigo-100 mb-4">
                            Dapatkan artikel terbaru langsung di email Anda
                        </p>
                        <input type="email" placeholder="Email Anda" class="w-full px-4 py-3 rounded-lg text-gray-900 mb-3 focus:outline-none focus:ring-2 focus:ring-white">
                        <button class="w-full px-4 py-3 bg-white text-indigo-600 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                            Berlangganan Gratis
                        </button>
                        <p class="text-xs text-indigo-200 mt-3">
                            Gratis dan bisa berhenti kapan saja
                        </p>
                    </div>
                </div> --}}
            </aside>
        </div>

        <!-- More Articles Section -->
        <section class="mt-16">
            <div class="flex items-center justify-between mb-8">
                <h2 class="text-3xl font-bold text-gray-900">Artikel Lainnya</h2>
                <a href="#" class="text-blue-600 font-medium hover:text-blue-700 transition-colors flex items-center gap-2">
                    Lihat Semua
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Card 1 -->
                <article class="bg-white rounded-2xl shadow-sm hover:shadow-md transition-shadow overflow-hidden group cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1490645935967-10de6ba17061?w=400&h=250&fit=crop" alt="Article" class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300">
                    <div class="p-6">
                        <span class="px-3 py-1 bg-purple-100 text-purple-800 text-xs font-medium rounded-full">Gaya Hidup</span>
                        <h3 class="text-xl font-bold text-gray-900 mt-3 mb-2 group-hover:text-blue-600 transition-colors">
                            Resep Makanan Sehat untuk Keluarga
                        </h3>
                        <p class="text-gray-600 text-sm mb-4">
                            Kumpulan resep bergizi yang mudah dibuat dan disukai seluruh anggota keluarga.
                        </p>
                        <div class="flex items-center justify-between text-sm text-gray-500">
                            <span>28 Sep 2025</span>
                            <span>5 menit baca</span>
                        </div>
                    </div>
                </article>

                <!-- Card 2 -->
                <article class="bg-white rounded-2xl shadow-sm hover:shadow-md transition-shadow overflow-hidden group cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?w=400&h=250&fit=crop" alt="Article" class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300">
                    <div class="p-6">
                        <span class="px-3 py-1 bg-green-100 text-green-800 text-xs font-medium rounded-full">Bisnis</span>
                        <h3 class="text-xl font-bold text-gray-900 mt-3 mb-2 group-hover:text-blue-600 transition-colors">
                            Investasi Cerdas untuk Milenial
                        </h3>
                        <p class="text-gray-600 text-sm mb-4">
                            Panduan investasi yang cocok untuk generasi milenial dengan berbagai pilihan instrumen.
                        </p>
                        <div class="flex items-center justify-between text-sm text-gray-500">
                            <span>22 Sep 2025</span>
                            <span>7 menit baca</span>
                        </div>
                    </div>
                </article>

                <!-- Card 3 -->
                <article class="bg-white rounded-2xl shadow-sm hover:shadow-md transition-shadow overflow-hidden group cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1488646953014-85cb44e25828?w=400&h=250&fit=crop" alt="Article" class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300">
                    <div class="p-6">
                        <span class="px-3 py-1 bg-purple-100 text-purple-800 text-xs font-medium rounded-full">Gaya Hidup</span>
                        <h3 class="text-xl font-bold text-gray-900 mt-3 mb-2 group-hover:text-blue-600 transition-colors">
                            Traveling Hemat di Asia Tenggara
                        </h3>
                        <p class="text-gray-600 text-sm mb-4">
                            Tips dan trik berlibur murah ke berbagai destinasi menarik di kawasan ASEAN.
                        </p>
                        <div class="flex items-center justify-between text-sm text-gray-500">
                            <span>20 Sep 2025</span>
                            <span>6 menit baca</span>
                        </div>
                    </div>
                </article>
            </div>
        </section>

        <!-- Bottom Ad Banner -->
        <div class="mt-12 bg-gradient-to-r from-orange-500 to-red-600 rounded-2xl p-8 text-white">
            <div class="max-w-4xl mx-auto flex flex-col md:flex-row items-center justify-between gap-6">
                <div class="text-center md:text-left">
                    <p class="text-xs text-orange-100 mb-1">PENAWARAN SPESIAL</p>
                    <h3 class="text-3xl font-bold mb-2">Hosting Premium Diskon 70%</h3>
                    <p class="text-orange-100">
                        Dapatkan hosting cepat dan terpercaya untuk website Anda. Promo terbatas!
                    </p>
                </div>
                <button class="px-8 py-4 bg-white text-orange-600 rounded-xl font-bold hover:bg-gray-100 transition-colors shadow-xl whitespace-nowrap">
                    Klaim Promo
                </button>
            </div>
        </div>
    </div>

@endsection