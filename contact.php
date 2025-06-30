<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Contactez Webolys - Agence Web en Ariège, Toulouse et au-delà. Besoin d’un site vitrine, e-commerce ou d’un accompagnement SEO ? Discutons de votre projet !">
  <meta name="robots" content="index, follow">
  <link rel="canonical" href="https://webolys.fr/contact.php">
  <meta property="og:title" content="Contactez Webolys - Agence Web en Ariège, Toulouse et au-delà.">
  <meta property="og:description" content="Besoin d’un site internet sur mesure ou d’un accompagnement SEO ? Contactez Webolys et lancez votre projet web dès aujourd’hui.">
  <meta property="og:image" content="https://webolys.fr/media/favicon.ico">
  <meta property="og:url" content="https://webolys.fr/contact.php">
  <meta property="og:type" content="website">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Contactez Webolys - Agence Web en Ariège, Toulouse et au-delà.">
  <meta name="twitter:description" content="Besoin d’un site internet sur mesure ou d’un accompagnement SEO ? Contactez Webolys et lancez votre projet web dès aujourd’hui.">
  <meta name="twitter:image" content="https://webolys.fr/media/favicon.ico">
  <link rel="icon" href="media/favicon.ico" type="image/x-icon" sizes="32x32">
  <link rel="stylesheet" href="style.css">
  <title>Webolys - Contact | Agence Web</title>
  <script src="js/email.min.js" defer></script>
  <script src="js/init.js" defer></script>
  <script src="js/faq.js" defer></script>
  <script src="js/contact.js" defer></script>
  <script src="js/newsletter.js" defer></script>
  <script src="js/header.js" defer></script>
  <script src="js/url.js" defer></script>
</head>
<body>
  <?php
    require_once("component/header.php");
  ?>
  <main class="main-contact">
    <?php
      require_once("component/background.php");
    ?>
    <div class="container-contact">
      <h2 id="contact-heading">Prêt à donner vie à votre projet avec <span class="color"><strong>Webolys</strong></span> ?</h2>
      <p class="text">
        Je suis impatient de discuter avec vous et de voir comment nous pouvons transformer vos idées en <span class="color">réalité digitale</span>.
      </p>
      <p class="text">
        Que vous ayez une question ou que vous soyez prêt à démarrer, contactez-moi dès aujourd’hui. Je suis là pour vous accompagner à chaque étape de votre projet.
        Votre projet mérite le meilleur. Ne laissez pas vos ambitions attendre, parlons-en maintenant et faisons avancer votre réussite digitale !
      </p>
      <div id="container-contact" class="none">
        <form id="contact-form" aria-labelledby="contact-heading">
          <div>
            <label for="nom">Nom <span aria-hidden="true">*</span> :</label>
            <input type="text" id="nom" name="nom" required aria-required="true" placeholder="Nom" autocomplete="family-name">
          </div>
          <div>
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" placeholder="Prénom" autocomplete="given-name">
          </div>
          <div>
            <label for="email">Adresse e-mail <span aria-hidden="true">*</span> :</label>
            <input type="email" id="email" name="email" required aria-required="true" placeholder="Adresse e-mail" autocomplete="email">
          </div>
          <div>
            <label for="telephone">Téléphone :</label>
            <input type="tel" id="telephone" name="telephone" placeholder="Numéro de téléphone" autocomplete="tel">
          </div>
          <div>
            <label for="message">Message <span aria-hidden="true">*</span> :</label>
            <textarea id="message" name="message" rows="4" required aria-required="true" placeholder="Votre message"></textarea>
          </div>
          <div>
            <button type="submit" aria-label="Envoyer le formulaire de contact">Envoyer</button>
          </div>
        </form>
        <div id="response-formulaire" class="none" aria-live="polite" role="status">
          <p class="color">Merci pour votre message, nous reviendrons vers vous dans les plus brefs délais.</p>
        </div>
        <p class="text">Les champs marqués d’un <span aria-hidden="true">*</span> sont obligatoires.</p>
        <section aria-labelledby="privacy-info-heading" class="text">
          <h2 id="privacy-info-heading">Confidentialité des données</h2>
          <p class="text add-section">
            Les informations recueillies via ce formulaire sont transmises directement par e-mail à
            <a href="mailto:contact@webolys.fr" class="color">contact@webolys.fr</a>.
            Elles ne sont ni stockées sur le site, ni partagées avec des tiers.
          </p>
          <p class="text add-section">
            Elles sont uniquement utilisées pour répondre à votre demande.
            Vous pouvez à tout moment demander la suppression de vos données en envoyant un e-mail à
            <a href="mailto:contact@webolys.fr" class="color">contact@webolys.fr</a>.
          </p>
          <p class="text add-section">
            Conformément au <abbr title="Règlement Général sur la Protection des Données">RGPD</abbr>,
            vous disposez d’un droit d’accès, de rectification et de suppression de vos données personnelles.
          </p>
        </section>
      </div>
      <div id="container-contact-without">
        <ul role="list" aria-label="Moyens de contact">
          <li role="listitem">
            <a href="mailto:contact@webolys.fr" aria-label="Envoyer un e-mail à Webolys" title="Envoyer un e-mail">
              Envoyer un e-mail
            </a>
          </li>
          <li role="listitem">
            <a href="tel:+33622005584" aria-label="Appeler Webolys au 06 22 00 55 84" title="Appeler le numéro">
              Appeler le 06 22 00 55 84
            </a>
          </li>
        </ul>
      </div>
    </div>
    <?php 
      require_once("component/faq.php"); 
    ?>
  </main>
  <?php
    require_once("component/footer.php");
  ?>
</body>
</html>