<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Contactez Webolys - Agence Web en Ariège, Toulouse et au-delà. Besoin d'un site vitrine, e-commerce ou d'un accompagnement SEO ? Discutons de votre projet !">
  <meta name="robots" content="index, follow">
  <meta name="keywords" content="agence web Ariège, agence web Toulouse, création site internet Ariège, création site internet Toulouse, site vitrine Ariège, site e-commerce Toulouse, développeur web Ariège, référencement SEO Ariège, refonte site internet Toulouse, Webolys, agence digitale Ariège, agence digitale Toulouse, visibilité en ligne Ariège, visibilité en ligne Toulouse, expert web Ariège, expert web Toulouse, accompagnement digital Ariège, accompagnement digital Toulouse, site internet sur mesure Ariège, site internet sur mesure Toulouse, web Ariège, web Toulouse, agence web locale, agence web régionale, agence web Occitanie">
  <link rel="canonical" href="https://webolys.fr/contact.php">
  <meta property="og:title" content="Contactez Webolys - Agence Web en Ariège, Toulouse et au-delà.">
  <meta property="og:description" content="Besoin d'un site internet sur mesure ou d'un accompagnement SEO ? Contactez Webolys et lancez votre projet web dès aujourd'hui.">
  <meta property="og:image" content="https://webolys.fr/media/favicon.ico">
  <meta property="og:url" content="https://webolys.fr/contact.php">
  <meta property="og:type" content="website">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Contactez Webolys - Agence Web en Ariège, Toulouse et au-delà.">
  <meta name="twitter:description" content="Besoin d'un site internet sur mesure ou d'un accompagnement SEO ? Contactez Webolys et lancez votre projet web dès aujourd'hui.">
  <meta name="twitter:image" content="https://webolys.fr/media/favicon.ico">
  <link rel="icon" href="media/favicon.ico" type="image/x-icon" sizes="32x32">
  <link rel="stylesheet" href="style.css">
  <title>Webolys - Agence Web Ariège & Toulouse | Contact</title>
  <script src="js/email.min.js" defer></script>
  <script src="js/init.js" defer></script>
  <script src="js/faq.js" defer></script>
  <script src="js/contact.js" defer></script>
  <script src="js/newsletter.js" defer></script>
  <script src="js/header.js" defer></script>
  <script src="js/active-nav.js" defer></script>
  <script src="js/url.js" defer></script>
  <script src="js/cursor.js" defer></script>
</head>
<body>
  <?php
    require_once("component/header.php");
  ?>
  <main class="main-contact">
    <?php
      require_once("component/background.php");
    ?>
    <div class="contact-aura1"></div>
    <div class="contact-aura2"></div>
    <div class="contact-particles">
      <div class="particle"></div>
      <div class="particle"></div>
      <div class="particle"></div>
      <div class="particle"></div>
      <div class="particle"></div>
      <div class="particle"></div>
      <div class="particle"></div>
      <div class="particle"></div>
      <div class="particle"></div>
      <div class="particle"></div>
      <div class="particle"></div>
      <div class="particle"></div>
    </div>
    <div class="container-contact">
      <div class="contact-header-particles">
        <div class="header-particle"></div>
        <div class="header-particle"></div>
        <div class="header-particle"></div>
        <div class="header-particle"></div>
      </div>
      <div class="contact-header-aura"></div>
      
      <span class="contact-badge">
        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
        </svg>
        CONTACT
      </span>
      <h1 id="contact-heading" class="contact-title-glow">Prêt à donner vie à votre projet avec <strong>Webolys</strong> ?</h1>
      <p class="contact-intro">
        Je suis impatient de discuter avec vous et de voir comment nous pouvons transformer vos idées en réalité digitale.
      </p>
      <p class="contact-intro">
        Que vous ayez une question ou que vous soyez prêt à démarrer, contactez-moi dès aujourd'hui. Je suis là pour vous accompagner à chaque étape de votre projet.
        Votre projet mérite le meilleur. Ne laissez pas vos ambitions attendre, parlons-en maintenant et faisons avancer votre réussite digitale !
      </p>
      
      <div class="contact-content">
        <!-- Section Formulaire -->
        <div class="contact-form-section">
          <div id="container-contact" class="none">
            <form id="contact-form" aria-labelledby="contact-heading">
              <div class="form-group">
                <label for="nom">Nom <span aria-hidden="true">*</span></label>
                <input type="text" id="nom" name="nom" required aria-required="true" placeholder="Votre nom" autocomplete="family-name">
              </div>
              <div class="form-group">
                <label for="prenom">Prénom</label>
                <input type="text" id="prenom" name="prenom" placeholder="Votre prénom" autocomplete="given-name">
              </div>
              <div class="form-group">
                <label for="email">Adresse e-mail <span aria-hidden="true">*</span></label>
                <input type="email" id="email" name="email" required aria-required="true" placeholder="votre@email.com" autocomplete="email">
              </div>
              <div class="form-group">
                <label for="telephone">Téléphone</label>
                <input type="tel" id="telephone" name="telephone" placeholder="06 00 00 00 00" autocomplete="tel">
              </div>
              <div class="form-group form-group-full">
                <label for="message">Message <span aria-hidden="true">*</span></label>
                <textarea id="message" name="message" rows="6" required aria-required="true" placeholder="Décrivez votre projet..."></textarea>
              </div>
              <div class="form-group form-group-full">
                <button type="submit" class="contact-submit" aria-label="Envoyer le formulaire de contact">
                  Envoyer le message
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <line x1="22" y1="2" x2="11" y2="13"></line>
                    <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                  </svg>
                </button>
              </div>
            </form>
            <div id="response-formulaire" class="none" aria-live="polite" role="status">
              <p class="success-message">✓ Merci pour votre message, nous reviendrons vers vous dans les plus brefs délais.</p>
            </div>
            <p class="form-note">Les champs marqués d'un <span aria-hidden="true">*</span> sont obligatoires.</p>
          </div>
          <section aria-labelledby="privacy-info-heading" class="privacy-info">
            <h2 id="privacy-info-heading">Confidentialité des données</h2>
            <p>
              Les informations recueillies via ce formulaire sont transmises directement par e-mail.
              Elles ne sont ni stockées sur le site, ni partagées avec des tiers.
              Conformément au RGPD, vous disposez d'un droit d'accès, de rectification et de suppression de vos données personnelles.
            </p>
          </section>
        </div>

        <!-- Section Infos Contact -->
        <div class="contact-info-section">
          <div id="container-contact-without">
            <div class="contact-info-cards">
              <article class="contact-card">
                <div class="contact-card-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                    <polyline points="22,6 12,13 2,6"></polyline>
                  </svg>
                </div>
                <h3>Email</h3>
                <a href="mailto:contact@webolys.fr">contact@webolys.fr</a>
              </article>

              <article class="contact-card">
                <div class="contact-card-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                  </svg>
                </div>
                <h3>Téléphone</h3>
                <a href="tel:+33622005584">06 22 00 55 84</a>
              </article>

              <article class="contact-card">
                <div class="contact-card-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="12" cy="12" r="10"></circle>
                    <polyline points="12 6 12 12 16 14"></polyline>
                  </svg>
                </div>
                <h3>Horaires</h3>
                <p>Lun-Ven : 9h-18h</p>
                <p>Sam-Dim : Fermé</p>
              </article>

              <article class="contact-card">
                <div class="contact-card-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                    <circle cx="12" cy="10" r="3"></circle>
                  </svg>
                </div>
                <h3>Localisation</h3>
                <p>Ariège, Occitanie</p>
                <p>France</p>
              </article>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php 
      require_once("component/faq.php"); 
    ?>
  </main>
  <?php
    require_once("component/footer-modern.php");
  ?>
</body>
</html>
