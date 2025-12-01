// Performance optimizations - Lazy load images below the fold
if ('IntersectionObserver' in window) {
  const imageObserver = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const img = entry.target;
        if (img.dataset.src) {
          img.src = img.dataset.src;
          img.removeAttribute('data-src');
        }
        observer.unobserve(img);
      }
    });
  }, {
    rootMargin: '50px 0px',
    threshold: 0.01
  });

  // Observe lazy images
  document.addEventListener('DOMContentLoaded', () => {
    const lazyImages = document.querySelectorAll('img[loading="lazy"]');
    lazyImages.forEach(img => imageObserver.observe(img));
  });
}

// Optimize animations with requestAnimationFrame
const optimizeAnimations = () => {
  const particles = document.querySelectorAll('.particle');
  const auras = document.querySelectorAll('.aura, [class*="aura"]');
  
  // Pause animations when not visible
  if ('IntersectionObserver' in window) {
    const animationObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.style.animationPlayState = 'running';
        } else {
          entry.target.style.animationPlayState = 'paused';
        }
      });
    }, {
      rootMargin: '100px 0px',
      threshold: 0
    });

    particles.forEach(particle => animationObserver.observe(particle));
    auras.forEach(aura => animationObserver.observe(aura));
  }
};

// Execute when page is idle
if ('requestIdleCallback' in window) {
  requestIdleCallback(optimizeAnimations, { timeout: 2000 });
} else {
  setTimeout(optimizeAnimations, 1000);
}

// Prefetch next pages on hover
document.addEventListener('DOMContentLoaded', () => {
  const links = document.querySelectorAll('a[href^="/"]:not([href^="/#"])');
  const prefetchedLinks = new Set();

  links.forEach(link => {
    link.addEventListener('mouseenter', function() {
      const href = this.getAttribute('href');
      if (!prefetchedLinks.has(href)) {
        const linkElem = document.createElement('link');
        linkElem.rel = 'prefetch';
        linkElem.href = href;
        document.head.appendChild(linkElem);
        prefetchedLinks.add(href);
      }
    }, { once: true, passive: true });
  });
});

// Debounce resize events
let resizeTimeout;
const debouncedResize = (callback, delay = 150) => {
  return () => {
    clearTimeout(resizeTimeout);
    resizeTimeout = setTimeout(callback, delay);
  };
};

// Export for use in other scripts
window.performanceUtils = {
  debouncedResize
};
