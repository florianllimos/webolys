<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Besoin d’un site web qui cartonne ? Webolys conçoit des sites vitrines et e-commerce sur mesure en Ariège, Toulouse et au-delà. Boostez votre visibilité et attirez de nouveaux clients !">
  <meta name="robots" content="index, follow">
  <meta property="og:title" content="Webolys - Création de sites internet | Agence Web">
  <meta property="og:description" content="Sites vitrines, e-commerce et SEO en Ariège, Toulouse et au-delà. Confiez votre projet web à Webolys.">
  <meta property="og:image" content="https://webolys.fr/media/favicon.ico">
  <meta property="og:url" content="https://webolys.fr">
  <meta property="og:type" content="website">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Webolys - Création de sites internet | Agence Web">
  <meta name="twitter:description" content="Sites vitrines, e-commerce et SEO en Ariège, Toulouse et au-delà. Confiez votre projet web à Webolys.">
  <meta name="twitter:image" content="https://webolys.fr/media/favicon.ico">
  <link rel="preload" as="image" href="media/mockup_home.webp">
  <link rel="icon" href="media/favicon.ico" type="image/x-icon" sizes="32x32">
  <link rel="canonical" href="https://webolys.fr">
  <link rel="stylesheet" href="style.css">
  <title>Webolys - Création de sites internet | Agence Web</title>
  <script src="js/email.min.js" defer></script>
  <script src="js/init.js" defer></script>
  <script src="js/header.js" defer></script>
  <script src="js/scroll.js" defer></script>
  <script src="js/scroll-indicator.js" defer></script>
  <script src="js/slider.js" defer></script>
  <script src="js/faq.js" defer></script>
  <script src="js/newsletter.js" defer></script>
  <script src="js/script.js" defer></script>
</head>
<body>
  <?php
    require_once("component/header.php");
  ?>
  <main>
    <?php
      require_once("component/background.php");
      require_once("component/hero-banner.php");
      require_once("component/about.php");
      require_once("component/services.php");
      require_once("component/processus.php");
      require_once("component/portfolio.php");
      require_once("component/rappel.php");
      require_once("component/faq.php");
      require_once("component/back-to-top.php");
    ?>
  </main>
  <?php
    require_once("component/footer.php");
  ?>
</body>
</html>