// Smooth scroll avec offset pour compenser le header fixe
document.addEventListener('DOMContentLoaded', () => {
  const headerOffset = 120; // Hauteur approximative du header + marge
  
  // Fonction pour scroller vers une section avec offset
  function scrollToSection(targetId) {
    const targetElement = document.querySelector(targetId);
    if (!targetElement) return;
    
    const elementPosition = targetElement.getBoundingClientRect().top;
    const offsetPosition = elementPosition + window.pageYOffset - headerOffset;
    
    window.scrollTo({
      top: offsetPosition,
      behavior: 'smooth'
    });
  }
  
  // Intercepter tous les clics sur les liens d'ancre de la navbar
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      const href = this.getAttribute('href');
      
      // Ignorer les liens vides ou juste "#"
      if (!href || href === '#' || href === 'index.php#') {
        return;
      }
      
      // Vérifier si l'élément cible existe sur cette page
      const targetElement = document.querySelector(href);
      if (targetElement) {
        e.preventDefault();
        scrollToSection(href);
        
        // Mettre à jour l'URL sans scroller
        if (history.pushState) {
          history.pushState(null, null, href);
        }
      }
    });
  });
  
  // Gérer le scroll au chargement si URL contient une ancre
  if (window.location.hash) {
    // Attendre que tout soit chargé
    setTimeout(() => {
      scrollToSection(window.location.hash);
    }, 100);
  }
});
