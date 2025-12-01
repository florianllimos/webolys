document.addEventListener("DOMContentLoaded", (event) => {

  const allScrollElement = document.querySelectorAll(".add-section");
  allScrollElement.forEach(scrollElement => {
    scrollElement.classList.add("section");
  })

  function isElementInViewport(element) {
    var rect = element.getBoundingClientRect();
    return (
      rect.top >= 0 &&
      rect.left >= 0 &&
      rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
      rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
  }
  
  function showElementsOnScroll() {
    var sections = document.querySelectorAll('.section');
    
    sections.forEach(function(section) {
      if (isElementInViewport(section)) {
        section.classList.add('visible');
      }
    });
  }
  
  // Throttle pour meilleures performances
  let scrollTimeout;
  const throttledScroll = () => {
    if (!scrollTimeout) {
      scrollTimeout = setTimeout(() => {
        showElementsOnScroll();
        scrollTimeout = null;
      }, 16);
    }
  };

  window.addEventListener('scroll', throttledScroll, { passive: true });
  window.addEventListener('resize', throttledScroll, { passive: true });
  
  showElementsOnScroll();
});