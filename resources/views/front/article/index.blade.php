@extends('layouts.main')

@section('content')
    
        <!-- Header Section with Gradient Background -->
    <div class="bg-gradient-to-br from-blue-600 via-cyan-700 to-purple-800 text-white">
        <div class="max-w-6xl mx-auto px-4 py-16 sm:px-6 lg:px-8 text-center">

            <h1 class="text-5xl md:text-6xl font-bold mb-4 leading-tight">
                Jelajahi Informasi
                <span class="block bg-gradient-to-r from-yellow-200 to-pink-300 bg-clip-text text-transparent">
                    Terupdate
                </span>
            </h1>
            <p class="text-lg text-blue-100 mb-8 max-w-2xl mx-auto">
                Temukan beragam informasi mengenai kegiatan atau acara di MAM Limpung melalui artikel-artikel menarik yang kami sajikan.
            </p>
            
            <!-- Enhanced Search Bar -->
            <div class="max-w-2xl mx-auto">
                <div class="relative group">
                    <div class="absolute inset-0 bg-gradient-to-r from-pink-500 to-yellow-500 rounded-2xl blur-lg opacity-30 group-hover:opacity-50 transition-opacity"></div>
                    <div class="relative bg-white rounded-2xl shadow-2xl">
                        <input 
                            type="text" 
                            id="searchInput"
                            placeholder="Cari informasi menarik..." 
                            class="w-full px-6 py-5 pl-14 pr-32 text-gray-900 rounded-2xl focus:outline-none text-lg"
                        >
                        <svg class="absolute left-5 top-6 h-6 w-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                        <button class="absolute right-2 top-2 px-6 py-3 bg-gradient-to-r from-blue-600 to-indigo-600 text-white rounded-xl font-medium hover:from-blue-700 hover:to-indigo-700 transition-all shadow-lg hover:shadow-xl">
                            Cari
                        </button>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <div class="max-w-6xl mx-auto px-4 py-12 sm:px-6 lg:px-8">

        <!-- Articles Grid -->
        <a href="/article-content" id="articlesContainer" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Articles will be rendered here -->
        </a>

        <!-- No Results Message -->
        <div id="noResults" class="hidden text-center py-12">
            <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <h3 class="mt-2 text-lg font-medium text-gray-900">Tidak ada hasil ditemukan</h3>
            <p class="mt-1 text-gray-500">Coba kata kunci pencarian yang berbeda</p>
        </div>
    </div>

    <script>
        const articles = [
            {
                id: 1,
                title: "Masa Depan Kecerdasan Buatan di Indonesia",
                excerpt: "Eksplorasi bagaimana AI mengubah lanskap teknologi dan bisnis di Indonesia dengan berbagai inovasi terbaru.",
                category: "Teknologi",
                date: "10 Oktober 2025",
                image: "https://images.unsplash.com/photo-1677442136019-21780ecad995?w=400&h=250&fit=crop"
            },
            {
                id: 2,
                title: "Strategi Marketing Digital untuk UMKM",
                excerpt: "Tips praktis meningkatkan penjualan online untuk usaha kecil dan menengah di era digital.",
                category: "Bisnis",
                date: "8 Oktober 2025",
                image: "https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=400&h=250&fit=crop"
            },
            {
                id: 3,
                title: "Gaya Hidup Sehat di Tengah Kesibukan",
                excerpt: "Panduan lengkap menjaga kesehatan fisik dan mental untuk profesional yang sibuk.",
                category: "Gaya Hidup",
                date: "5 Oktober 2025",
                image: "https://images.unsplash.com/photo-1506126613408-eca07ce68773?w=400&h=250&fit=crop"
            },
            {
                id: 4,
                title: "Tren E-Commerce 2025",
                excerpt: "Analisis mendalam tentang tren perdagangan elektronik yang akan mendominasi tahun ini.",
                category: "Bisnis",
                date: "3 Oktober 2025",
                image: "https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=400&h=250&fit=crop"
            },
            {
                id: 5,
                title: "Belajar Programming dari Nol",
                excerpt: "Roadmap lengkap untuk pemula yang ingin memulai karir di dunia pemrograman.",
                category: "Teknologi",
                date: "1 Oktober 2025",
                image: "https://images.unsplash.com/photo-1461749280684-dccba630e2f6?w=400&h=250&fit=crop"
            },
            {
                id: 6,
                title: "Resep Makanan Sehat untuk Keluarga",
                excerpt: "Kumpulan resep bergizi yang mudah dibuat dan disukai seluruh anggota keluarga.",
                category: "Gaya Hidup",
                date: "28 September 2025",
                image: "https://images.unsplash.com/photo-1490645935967-10de6ba17061?w=400&h=250&fit=crop"
            },
            {
                id: 7,
                title: "Keamanan Siber untuk Bisnis Kecil",
                excerpt: "Langkah-langkah penting melindungi data dan sistem bisnis dari ancaman siber.",
                category: "Teknologi",
                date: "25 September 2025",
                image: "https://images.unsplash.com/photo-1550751827-4bd374c3f58b?w=400&h=250&fit=crop"
            },
            {
                id: 8,
                title: "Investasi Cerdas untuk Milenial",
                excerpt: "Panduan investasi yang cocok untuk generasi milenial dengan berbagai pilihan instrumen.",
                category: "Bisnis",
                date: "22 September 2025",
                image: "https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?w=400&h=250&fit=crop"
            },
            {
                id: 9,
                title: "Traveling Hemat di Asia Tenggara",
                excerpt: "Tips dan trik berlibur murah ke berbagai destinasi menarik di kawasan ASEAN.",
                category: "Gaya Hidup",
                date: "20 September 2025",
                image: "https://images.unsplash.com/photo-1488646953014-85cb44e25828?w=400&h=250&fit=crop"
            }
        ];

        const categoryColors = {
            'Teknologi': 'bg-blue-100 text-blue-800',
            'Bisnis': 'bg-green-100 text-green-800',
            'Gaya Hidup': 'bg-purple-100 text-purple-800'
        };

        function renderArticles(articlesToRender) {
            const container = document.getElementById('articlesContainer');
            const noResults = document.getElementById('noResults');
            
            if (articlesToRender.length === 0) {
                container.classList.add('hidden');
                noResults.classList.remove('hidden');
                return;
            }
            
            container.classList.remove('hidden');
            noResults.classList.add('hidden');
            
            container.innerHTML = articlesToRender.map(article => `
                <article class="bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow duration-300 overflow-hidden">
                    <img src="${article.image}" alt="${article.title}" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-3">
                            <span class="px-3 py-1 text-xs font-medium rounded-full ${categoryColors[article.category]}">
                                ${article.category}
                            </span>
                            <span class="text-sm text-gray-500">${article.date}</span>
                        </div>
                        <h2 class="text-xl font-bold text-gray-900 mb-2 hover:text-blue-600 transition-colors">
                            ${article.title}
                        </h2>
                        <p class="text-gray-600 mb-4 line-clamp-2">
                            ${article.excerpt}
                        </p>
                        <button class="text-blue-600 font-medium hover:text-blue-700 transition-colors">
                            Baca Selengkapnya →
                        </button>
                    </div>
                </article>
            `).join('');
        }

        function searchArticles(query) {
            const lowercaseQuery = query.toLowerCase().trim();
            
            if (lowercaseQuery === '') {
                renderArticles(articles);
                return;
            }
            
            const filtered = articles.filter(article => 
                article.title.toLowerCase().includes(lowercaseQuery) ||
                article.excerpt.toLowerCase().includes(lowercaseQuery) ||
                article.category.toLowerCase().includes(lowercaseQuery)
            );
            
            renderArticles(filtered);
        }

        document.getElementById('searchInput').addEventListener('input', (e) => {
            searchArticles(e.target.value);
        });

        renderArticles(articles);
    </script>

@endsection