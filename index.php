<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Webolys, agence web en Ariège et Toulouse : création de sites internet vitrines, e-commerce, SEO, refonte et accompagnement digital sur mesure. Boostez votre visibilité locale et nationale avec un expert du web.">
  <meta name="robots" content="index, follow">
  <meta property="og:title" content="Webolys - Agence Web Ariège & Toulouse | Création de sites internet sur mesure">
  <meta name="keywords" content="agence web Ariège, agence web Toulouse, création site internet Ariège, création site internet Toulouse, site vitrine Ariège, site e-commerce Toulouse, développeur web Ariège, référencement SEO Ariège, refonte site internet Toulouse, Webolys, agence digitale Ariège, agence digitale Toulouse, visibilité en ligne Ariège, visibilité en ligne Toulouse, expert web Ariège, expert web Toulouse, accompagnement digital Ariège, accompagnement digital Toulouse, site internet sur mesure Ariège, site internet sur mesure Toulouse, web Ariège, web Toulouse, agence web locale, agence web régionale, agence web Occitanie">
  <meta property="og:description" content="Webolys, votre agence web en Ariège et Toulouse : sites vitrines, e-commerce, SEO, refonte, accompagnement digital. Visibilité locale et nationale garantie.">
  <meta property="og:image" content="https://webolys.fr/media/favicon.ico">
  <meta property="og:url" content="https://webolys.fr">
  <meta property="og:type" content="website">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Webolys - Agence Web Ariège & Toulouse | Création de sites internet sur mesure">
  <meta name="twitter:description" content="Webolys, agence web en Ariège et Toulouse : sites vitrines, e-commerce, SEO, refonte, accompagnement digital. Visibilité locale et nationale garantie.">
  <meta name="twitter:image" content="https://webolys.fr/media/favicon.ico">
  <link rel="preload" as="image" href="media/mockup_home.webp">
  <link rel="icon" href="media/favicon.ico" type="image/x-icon" sizes="32x32">
  <link rel="canonical" href="https://webolys.fr">
  <link rel="stylesheet" href="style1.css">
  <title>Webolys - Agence Web Ariège & Toulouse | Création de sites internet sur mesure</title>
  <script src="js/email.min.js" defer></script>
  <script src="js/init.js" defer></script>
  <script src="js/header.js" defer></script>
  <script src="js/active-nav.js" defer></script>
  <script src="js/scroll.js" defer></script>
  <script src="js/scroll-indicator.js" defer></script>
  <script src="js/slider.js" defer></script>
  <script src="js/faq.js" defer></script>
  <script src="js/newsletter.js" defer></script>
  <script src="js/word.js" defer></script>
  <script src="js/services.js" defer></script>
  <script src="js/processus.js" defer></script>
  <script src="js/cursor.js" defer></script>
</head>
<body>
  <?php
    require_once("component/header.php");
  ?>
  <h1 class="sr-only">Webolys - Agence Web Ariège & Toulouse | Création de sites internet sur mesure</h1>
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
    ?>
  </main>
  <?php
    require_once("component/footer-modern.php");
  ?>
</body>
</html>