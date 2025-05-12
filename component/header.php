<header id="header" role="banner">
  <nav class="navbar" role="navigation" aria-label="Navigation principale">
    <a href="index.php" aria-label="Page d'accueil">
      <h1 class="color"><strong>Webolys</strong></h1>
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
      />
    </label>
    <div class="menu" id="menu" aria-hidden="true">
      <ul role="list">
        <li><a href="index.php#" title="Accueil" id="accueil-link">Accueil</a></li>
        <li><a href="#qui-sommes-nous" title="Qui sommes-nous" id="qui-sommes-nous-link">Qui sommes-nous</a></li>
        <li><a href="#nos-services" title="Compétences" id="nos-services-link">Nos services</a></li>
        <li><a href="#nos-realisations" title="Nos réalisations" id="nos-realisations-link">Nos réalisations</a></li>
        <li><a href="#container-faq" title="Foire aux questions" id="faq-link">F.A.Q</a></li>
        <li><a href="contact.php" title="Contact" id="">Contact</a></li>
      </ul>
    </div>
  </nav>
  <div class="scroll-indicator" id="scrollIndicator" aria-hidden="true"></div>
</header>