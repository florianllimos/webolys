let scrollTimeout;
const throttledUpdate = () => {
  if (!scrollTimeout) {
    scrollTimeout = setTimeout(() => {
      updateScrollIndicator();
      scrollTimeout = null;
    }, 16); // 60fps
  }
};

window.addEventListener('scroll', throttledUpdate, { passive: true });
window.addEventListener('resize', throttledUpdate, { passive: true });

function updateScrollIndicator() {
    const scrollIndicator = document.getElementById('scrollIndicator');
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    const docHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    const scrollPercentage = (scrollTop / docHeight) * 100;

    scrollIndicator.style.width = scrollPercentage + '%';
}

document.addEventListener('DOMContentLoaded', updateScrollIndicator);