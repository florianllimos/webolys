// Dropdown menu functionality
document.addEventListener('DOMContentLoaded', function() {
  const dropdowns = document.querySelectorAll('.dropdown');
  
  dropdowns.forEach(dropdown => {
    const arrowBtn = dropdown.querySelector('.dropdown-arrow-btn');
    const menu = dropdown.querySelector('.dropdown-menu');
    const wrapper = dropdown.querySelector('.dropdown-wrapper');
    
    if (arrowBtn && menu) {
      // Toggle dropdown on arrow button click
      arrowBtn.addEventListener('click', function(e) {
        e.preventDefault();
        e.stopPropagation();
        
        // Close other dropdowns
        dropdowns.forEach(other => {
          if (other !== dropdown && other.classList.contains('open')) {
            other.classList.remove('open');
            const otherBtn = other.querySelector('.dropdown-arrow-btn');
            if (otherBtn) otherBtn.setAttribute('aria-expanded', 'false');
          }
        });
        
        // Toggle current dropdown
        dropdown.classList.toggle('open');
        
        // Update aria-expanded
        const isOpen = dropdown.classList.contains('open');
        arrowBtn.setAttribute('aria-expanded', isOpen);
      });
      
      // Prevent wrapper click from bubbling
      if (wrapper) {
        wrapper.addEventListener('click', function(e) {
          // If clicking the arrow button, let it handle
          if (e.target.closest('.dropdown-arrow-btn')) {
            e.stopPropagation();
          }
        });
      }
      
      // Close dropdown when clicking outside
      document.addEventListener('click', function(e) {
        if (!dropdown.contains(e.target)) {
          dropdown.classList.remove('open');
          arrowBtn.setAttribute('aria-expanded', 'false');
        }
      });
      
      // Close dropdown on escape key
      document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && dropdown.classList.contains('open')) {
          dropdown.classList.remove('open');
          arrowBtn.setAttribute('aria-expanded', 'false');
          arrowBtn.focus();
        }
      });
      
      // Keyboard navigation within dropdown
      menu.addEventListener('keydown', function(e) {
        const items = Array.from(menu.querySelectorAll('a'));
        const currentIndex = items.indexOf(document.activeElement);
        
        if (e.key === 'ArrowDown') {
          e.preventDefault();
          const nextIndex = currentIndex < items.length - 1 ? currentIndex + 1 : 0;
          items[nextIndex].focus();
        } else if (e.key === 'ArrowUp') {
          e.preventDefault();
          const prevIndex = currentIndex > 0 ? currentIndex - 1 : items.length - 1;
          items[prevIndex].focus();
        }
      });
    }
  });
});
