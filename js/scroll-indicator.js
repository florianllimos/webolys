window.addEventListener('scroll', updateScrollIndicator);
window.addEventListener('resize', updateScrollIndicator); 

function updateScrollIndicator() {
    const scrollIndicator = document.getElementById('scrollIndicator');
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    const docHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    const scrollPercentage = (scrollTop / docHeight) * 100;

    scrollIndicator.style.width = scrollPercentage + '%';
}

document.addEventListener('DOMContentLoaded', updateScrollIndicator);