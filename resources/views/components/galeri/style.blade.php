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