<!-- Section Gallery -->
<section class="">
  <div class="max-w-6xl mx-auto px-4">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 text-white">
      
      <!-- Box 1 - Workshop Coding -->
      <div class="gallery-box relative group overflow-hidden rounded-br-2xl rounded-tl-2xl shadow-lg cursor-pointer" data-gallery="workshop">
        <img
          src="{{ asset('assets/img/school.png') }}"
          alt="Workshop Coding 2025"
          class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110"
        />
        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent opacity-0 group-hover:opacity-100 transition duration-500 flex items-end p-4">
          <div class="flex flex-col">
            <p class="text-sm font-medium">Workshop Coding 2025</p>
            <span class="text-xs">Acara • 3 Foto</span>
          </div>
        </div>
      </div>

      <!-- Box 2 - Lomba Cerdas Cermat -->
      <div class="gallery-box relative group overflow-hidden rounded-br-2xl rounded-tl-2xl shadow-lg cursor-pointer" data-gallery="lomba">
        <img
          src="{{ asset('assets/img/school.png') }}"
          alt="Lomba Cerdas Cermat"
          class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110"
        />
        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent opacity-0 group-hover:opacity-100 transition duration-500 flex items-end p-4">
          <div class="flex flex-col">
            <p class="text-sm font-medium">Lomba Cerdas Cermat</p>
            <span class="text-xs">Kegiatan • 4 Foto</span>
          </div>
        </div>
      </div>

      <!-- Box 3 - Ekstrakurikuler Pramuka -->
      <div class="gallery-box relative group overflow-hidden rounded-br-2xl rounded-tl-2xl shadow-lg cursor-pointer" data-gallery="pramuka">
        <img
          src="{{ asset('assets/img/school.png') }}"
          alt="Ekstrakurikuler Pramuka"
          class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110"
        />
        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent opacity-0 group-hover:opacity-100 transition duration-500 flex items-end p-4">
          <div class="flex flex-col">
            <p class="text-sm font-medium">Ekstrakurikuler Pramuka</p>
            <span class="text-xs">Ekstrakurikuler • 5 Foto</span>
          </div>
        </div>
      </div>

      <!-- Box 4 - Kegiatan Sosial -->
      <div class="gallery-box relative group overflow-hidden rounded-br-2xl rounded-tl-2xl shadow-lg cursor-pointer" data-gallery="sosial">
        <img
          src="{{ asset('assets/img/school.png') }}"
          alt="Kegiatan Sosial 2025"
          class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110"
        />
        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent opacity-0 group-hover:opacity-100 transition duration-500 flex items-end p-4">
          <div class="flex flex-col">
            <p class="text-sm font-medium">Kegiatan Sosial 2025</p>
            <span class="text-xs">Kegiatan • 3 Foto</span>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Minimalist Lightbox Modal -->
<div id="lightboxModal" class="fixed inset-0 bg-black/98 z-50 opacity-0 invisible transition-all duration-500 ease-out">
  
  <!-- Header -->
  <div class="absolute top-0 left-0 right-0 z-50 px-8 py-6 flex items-center justify-between">
    <div class="text-white">
      <h3 id="modalTitle" class="text-xl font-light tracking-wide"></h3>
      <p id="modalCounter" class="text-sm text-gray-400 mt-1"></p>
    </div>
    <div class="flex items-center gap-4">
      <button id="downloadBtn" class="text-white/80 hover:text-white transition-all duration-300 hover:scale-110 transform" title="Download foto">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
        </svg>
      </button>
      <button id="closeModal" class="text-white/80 hover:text-white transition-all duration-300 hover:rotate-90 transform">
        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
      </button>
    </div>
  </div>

  <!-- Main Image Container -->
  <div class="absolute inset-0 flex items-center justify-center px-4 pt-24 pb-32">
    <div class="relative w-full max-w-6xl h-full flex items-center justify-center">
      
      <!-- Image -->
      <img id="lightboxImage" 
           src="" 
           alt="" 
           class="max-w-full max-h-full object-contain opacity-0 transform scale-95 transition-all duration-700 ease-out">
      
      <!-- Navigation Buttons -->
      <button id="prevBtn" class="absolute left-4 top-1/2 -translate-y-1/2 text-white/60 hover:text-white transition-all duration-300 hover:scale-110 p-3 rounded-full hover:bg-white/10">
        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 19l-7-7 7-7"></path>
        </svg>
      </button>
      
      <button id="nextBtn" class="absolute right-4 top-1/2 -translate-y-1/2 text-white/60 hover:text-white transition-all duration-300 hover:scale-110 p-3 rounded-full hover:bg-white/10">
        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5l7 7-7 7"></path>
        </svg>
      </button>
    </div>
  </div>

  <!-- Thumbnail Navigation -->
  <div class="absolute bottom-0 left-0 right-0 z-50">
    <div class="max-w-full mx-auto px-8 py-6">
      <div id="thumbnailContainer" class="flex gap-3 overflow-x-auto pb-2 scrollbar-custom">
        <!-- Thumbnails will be inserted here -->
      </div>
    </div>
  </div>

</div>

<style>
  /* Custom scrollbar for thumbnails */
  .scrollbar-custom::-webkit-scrollbar {
    height: 8px;
  }
  
  .scrollbar-custom::-webkit-scrollbar-track {
    background: rgba(255, 255, 255, 0.05);
    border-radius: 10px;
  }
  
  .scrollbar-custom::-webkit-scrollbar-thumb {
    background: rgba(255, 255, 255, 0.2);
    border-radius: 10px;
    transition: background 0.3s ease;
  }
  
  .scrollbar-custom::-webkit-scrollbar-thumb:hover {
    background: rgba(255, 255, 255, 0.4);
  }

  /* Smooth scrolling */
  .scrollbar-custom {
    scroll-behavior: smooth;
  }

  /* Modal visible state */
  #lightboxModal.active {
    opacity: 1;
    visibility: visible;
  }

  /* Image loaded state */
  #lightboxImage.loaded {
    opacity: 1;
    transform: scale(1);
  }

  /* Thumbnail styles */
  .thumbnail {
    position: relative;
    flex-shrink: 0;
    width: 90px;
    height: 90px;
    border-radius: 8px;
    overflow: hidden;
    cursor: pointer;
    transition: all 0.3s ease;
    opacity: 0.5;
    transform: scale(0.92);
  }

  .thumbnail:hover {
    opacity: 0.8;
    transform: scale(0.96);
  }

  .thumbnail.active {
    opacity: 1;
    transform: scale(1);
    box-shadow: 0 0 0 3px white;
  }

  .thumbnail img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  /* Smooth transitions */
  * {
    -webkit-tap-highlight-color: transparent;
  }
</style>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    
    // Data galeri untuk setiap box
    const galleries = {
      workshop: {
        title: "Workshop Coding 2025",
        photos: [
          { src: "{{ asset('assets/img/school.png') }}", alt: "Workshop 1" },
          { src: "{{ asset('assets/img/school.png') }}", alt: "Workshop 2" },
          { src: "{{ asset('assets/img/school.png') }}", alt: "Workshop 3" }
        ]
      },
      lomba: {
        title: "Lomba Cerdas Cermat",
        photos: [
          { src: "{{ asset('assets/img/school.png') }}", alt: "Lomba 1" },
          { src: "{{ asset('assets/img/school.png') }}", alt: "Lomba 2" },
          { src: "{{ asset('assets/img/school.png') }}", alt: "Lomba 3" },
          { src: "{{ asset('assets/img/school.png') }}", alt: "Lomba 4" }
        ]
      },
      pramuka: {
        title: "Ekstrakurikuler Pramuka",
        photos: [
          { src: "{{ asset('assets/img/school.png') }}", alt: "Pramuka 1" },
          { src: "{{ asset('assets/img/school.png') }}", alt: "Pramuka 2" },
          { src: "{{ asset('assets/img/school.png') }}", alt: "Pramuka 3" },
          { src: "{{ asset('assets/img/school.png') }}", alt: "Pramuka 4" },
          { src: "{{ asset('assets/img/school.png') }}", alt: "Pramuka 5" }
        ]
      },
      sosial: {
        title: "Kegiatan Sosial 2025",
        photos: [
          { src: "{{ asset('assets/img/school.png') }}", alt: "Sosial 1" },
          { src: "{{ asset('assets/img/school.png') }}", alt: "Sosial 2" },
          { src: "{{ asset('assets/img/school.png') }}", alt: "Sosial 3" }
        ]
      }
    };

    let currentGallery = null;
    let currentIndex = 0;
    let touchStartX = 0;
    let touchEndX = 0;

    const modal = document.getElementById('lightboxModal');
    const lightboxImage = document.getElementById('lightboxImage');
    const modalTitle = document.getElementById('modalTitle');
    const modalCounter = document.getElementById('modalCounter');
    const thumbnailContainer = document.getElementById('thumbnailContainer');
    const closeBtn = document.getElementById('closeModal');
    const downloadBtn = document.getElementById('downloadBtn');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');

    // Open gallery
    function openGallery(galleryKey) {
      currentGallery = galleries[galleryKey];
      currentIndex = 0;
      
      modalTitle.textContent = currentGallery.title;
      createThumbnails();
      showImage(0);
      
      setTimeout(() => {
        modal.classList.add('active');
        document.body.style.overflow = 'hidden';
      }, 10);
    }

    // Close gallery
    function closeGallery() {
      modal.classList.remove('active');
      lightboxImage.classList.remove('loaded');
      document.body.style.overflow = '';
    }

    // Create thumbnails
    function createThumbnails() {
      thumbnailContainer.innerHTML = '';
      currentGallery.photos.forEach((photo, index) => {
        const thumb = document.createElement('div');
        thumb.className = 'thumbnail';
        thumb.innerHTML = `<img src="${photo.src}" alt="${photo.alt}">`;
        thumb.addEventListener('click', () => showImage(index));
        thumbnailContainer.appendChild(thumb);
      });
      
      // Add drag scroll functionality
      addDragScroll(thumbnailContainer);
    }

    // Show image
    function showImage(index) {
      currentIndex = index;
      const photo = currentGallery.photos[index];
      
      // Fade out
      lightboxImage.classList.remove('loaded');
      
      // Update image
      setTimeout(() => {
        lightboxImage.src = photo.src;
        lightboxImage.alt = photo.alt;
        modalCounter.textContent = `${index + 1} / ${currentGallery.photos.length}`;
        
        // Update thumbnails
        const thumbnails = thumbnailContainer.querySelectorAll('.thumbnail');
        thumbnails.forEach((thumb, i) => {
          thumb.classList.toggle('active', i === index);
        });
        
        // Scroll thumbnail into view
        if (thumbnails[index]) {
          thumbnails[index].scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'center' });
        }
      }, 300);
      
      // Fade in
      setTimeout(() => {
        lightboxImage.classList.add('loaded');
      }, 350);
    }

    // Navigate
    function prevImage() {
      const newIndex = (currentIndex - 1 + currentGallery.photos.length) % currentGallery.photos.length;
      showImage(newIndex);
    }

    function nextImage() {
      const newIndex = (currentIndex + 1) % currentGallery.photos.length;
      showImage(newIndex);
    }

    // Event listeners
    document.querySelectorAll('.gallery-box').forEach(box => {
      box.addEventListener('click', function() {
        const galleryKey = this.getAttribute('data-gallery');
        openGallery(galleryKey);
      });
    });

    closeBtn.addEventListener('click', closeGallery);
    prevBtn.addEventListener('click', prevImage);
    nextBtn.addEventListener('click', nextImage);
    
    // Download current image
    downloadBtn.addEventListener('click', function() {
      const photo = currentGallery.photos[currentIndex];
      const link = document.createElement('a');
      link.href = photo.src;
      
      // Generate filename from title and index
      const filename = `${currentGallery.title.replace(/\s+/g, '_')}_${currentIndex + 1}.jpg`;
      link.download = filename;
      
      document.body.appendChild(link);
      link.click();
      document.body.removeChild(link);
      
      // Optional: Show download feedback
      const originalHTML = downloadBtn.innerHTML;
      downloadBtn.innerHTML = `
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 13l4 4L19 7"></path>
        </svg>
      `;
      
      setTimeout(() => {
        downloadBtn.innerHTML = originalHTML;
      }, 1500);
    });

    // Close on background click
    modal.addEventListener('click', function(e) {
      if (e.target === modal) {
        closeGallery();
      }
    });

    // Keyboard navigation
    document.addEventListener('keydown', function(e) {
      if (modal.classList.contains('active')) {
        if (e.key === 'Escape') closeGallery();
        if (e.key === 'ArrowLeft') prevImage();
        if (e.key === 'ArrowRight') nextImage();
      }
    });

    // Touch swipe
    lightboxImage.addEventListener('touchstart', (e) => {
      touchStartX = e.changedTouches[0].screenX;
    });

    lightboxImage.addEventListener('touchend', (e) => {
      touchEndX = e.changedTouches[0].screenX;
      handleSwipe();
    });

    function handleSwipe() {
      const swipeThreshold = 50;
      const diff = touchStartX - touchEndX;
      
      if (Math.abs(diff) > swipeThreshold) {
        if (diff > 0) {
          nextImage();
        } else {
          prevImage();
        }
      }
    }

    // Preload images for smooth transitions
    function preloadImages(gallery) {
      gallery.photos.forEach(photo => {
        const img = new Image();
        img.src = photo.src;
      });
    }

    // Preload all galleries
    Object.values(galleries).forEach(gallery => {
      preloadImages(gallery);
    });

    // Drag to scroll functionality for thumbnails
    function addDragScroll(element) {
      let isDown = false;
      let startX;
      let scrollLeft;

      element.addEventListener('mousedown', (e) => {
        isDown = true;
        element.style.cursor = 'grabbing';
        startX = e.pageX - element.offsetLeft;
        scrollLeft = element.scrollLeft;
      });

      element.addEventListener('mouseleave', () => {
        isDown = false;
        element.style.cursor = 'grab';
      });

      element.addEventListener('mouseup', () => {
        isDown = false;
        element.style.cursor = 'grab';
      });

      element.addEventListener('mousemove', (e) => {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - element.offsetLeft;
        const walk = (x - startX) * 2;
        element.scrollLeft = scrollLeft - walk;
      });

      element.style.cursor = 'grab';
    }

  });
</script>