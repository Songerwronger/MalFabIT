document.addEventListener('DOMContentLoaded', function () {
  const carouselElement = document.querySelector('#reviewCarousel');
  const carousel = new bootstrap.Carousel(carouselElement, {
    interval: 2000, // Time between automatic cycling (in milliseconds)
    pause: 'hover'  // Pauses the carousel when hovering
  });

  // Add event listeners for next and previous buttons
  document.querySelector('.carousel-control-next').addEventListener('click', () => {
    carousel.next();
  });

  document.querySelector('.carousel-control-prev').addEventListener('click', () => {
    carousel.prev();
  });
});