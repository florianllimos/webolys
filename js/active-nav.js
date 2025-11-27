// Active navigation based on scroll position
document.addEventListener('DOMContentLoaded', function() {
  const sections = [
    { id: 'qui-suis-je', link: 'qui-suis-je-link' },
    { id: 'mes-services', link: 'mes-services-link' },
    { id: 'processus', link: 'processus-link' },
    { id: 'mes-realisations', link: 'mes-realisations-link' },
    { id: 'container-faq', link: 'faq-link' }
  ];

  const navLinks = document.querySelectorAll('.menu a');
  const accueilLink = document.getElementById('accueil-link');

  function updateActiveLink() {
    let currentSection = '';
    const scrollPosition = window.scrollY + 150;

    // Check each section
    sections.forEach(section => {
      const element = document.getElementById(section.id);
      if (element) {
        const offsetTop = element.offsetTop;
        const offsetHeight = element.offsetHeight;
        
        if (scrollPosition >= offsetTop && scrollPosition < offsetTop + offsetHeight) {
          currentSection = section.link;
        }
      }
    });

    // Remove active class from all links
    navLinks.forEach(link => link.classList.remove('active'));

    // Add active class to current section or accueil
    if (currentSection) {
      const activeLink = document.getElementById(currentSection);
      if (activeLink) {
        activeLink.classList.add('active');
      }
    } else if (window.scrollY < 200 && accueilLink) {
      accueilLink.classList.add('active');
    }
  }

  // Update on scroll
  window.addEventListener('scroll', updateActiveLink);
  
  // Update on load
  updateActiveLink();

  // Handle click on nav links
  navLinks.forEach(link => {
    link.addEventListener('click', function(e) {
      const href = this.getAttribute('href');
      
      // For anchor links, smooth scroll and update active state
      if (href.startsWith('#')) {
        e.preventDefault();
        const targetId = href.substring(1);
        const targetElement = document.getElementById(targetId);
        
        if (targetElement) {
          targetElement.scrollIntoView({ behavior: 'smooth' });
          
          // Update active state after a short delay
          setTimeout(updateActiveLink, 100);
        }
      }
    });
  });

  // Handle contact page separately
  const currentPage = window.location.pathname.split('/').pop();
  if (currentPage === 'contact.php') {
    navLinks.forEach(link => link.classList.remove('active'));
    const contactLink = document.querySelector('a[href="contact.php"]');
    if (contactLink) {
      contactLink.classList.add('active');
    }
  }
});
