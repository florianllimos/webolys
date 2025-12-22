<a href="#main-content" class="skip-link">Passer au contenu principal</a>
<header id="header" role="banner">
  <nav class="navbar" role="navigation" aria-label="Navigation principale">
    <a href="index.php" aria-label="Page d'accueil">
      <span class="color"><strong>Webolys<span class="sr-only">Agence Web Ariège & Toulouse | Création de sites internet sur mesure</span></strong></span>
    </a>
    <input 
      type="checkbox" 
      id="toggler" 
      role="button" 
      aria-label="Afficher ou masquer le menu de navigation"
      aria-controls="menu" 
      aria-expanded="false"
    />
    <label for="toggler" aria-hidden="true">
      <img 
        src="media/menu.png" 
        class="burger-logo" 
        id="burger" 
        alt="Icône du menu" 
        title="Ouvrir le menu de navigation" 
        loading="lazy"
        width="32"
        height="32"
      />
    </label>
    <div class="menu" id="menu">
      <ul role="list">
        <li><a href="" title="Accueil" id="accueil-link">Accueil</a></li>
        <li><a href="#qui-suis-je" title="Qui suis-je" id="qui-suis-je-link">Qui suis-je</a></li>
        <li class="dropdown">
          <div class="dropdown-wrapper">
            <a href="#mes-services" title="Mes services" id="mes-services-link" class="dropdown-link">
              Mes services
            </a>
            <button class="dropdown-arrow-btn" type="button" aria-expanded="false" aria-label="Ouvrir le menu des services">
              <svg class="dropdown-arrow" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <polyline points="6 9 12 15 18 9"></polyline>
              </svg>
            </button>
          </div>
          <div class="dropdown-menu" role="menu">
            <a href="wordpress.php" title="WordPress" role="menuitem">WordPress</a>
            <a href="joomla.php" title="Joomla" role="menuitem">Joomla</a>
            <a href="site-vitrine.php" title="Site vitrine" role="menuitem">Site vitrine</a>
            <a href="e-commerce.php" title="E-commerce" role="menuitem">E-commerce</a>
            <a href="webmapping.php" title="Webmapping" role="menuitem">Webmapping</a>
            <a href="maintenance.php" title="Maintenance" role="menuitem">Maintenance</a>
            <a href="e-learning.php" title="E-learning" role="menuitem">E-learning</a>
            <a href="accessibilite.php" title="Accessibilité" role="menuitem">Accessibilité</a>
            <a href="developpement.php" title="Développement" role="menuitem">Développement</a>
            <a href="referencement.php" title="Référencement" role="menuitem">Référencement</a>
          </div>
        </li>
        <li><a href="#processus" title="Processus" id="processus-link">Processus</a></li>
        <li><a href="#mes-realisations" title="Mes réalisations" id="mes-realisations-link">Mes réalisations</a></li>
        <li><a href="#container-faq" title="Foire aux questions" id="faq-link">F.A.Q</a></li>
        <li><a href="contact.php" title="Contact" id="">Contact</a></li>
      </ul>
    </div>
  </nav>
  <div class="scroll-indicator" id="scrollIndicator" aria-hidden="true"></div>
  <script src="js/header.js" defer></script>
  <script src="js/dropdown.js" defer></script>
</header>