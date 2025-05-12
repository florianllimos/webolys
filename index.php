<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <script type="text/javascript" src="js/email.min.js" defer></script>
  <script src="js/init.js" defer></script>
  <script src="js/newsletter.js" defer></script>
  <script src="js/scroll-indicator.js"></script>
  <script src="js/header.js"></script>
  <script src="js/word.js"></script>
  <script src="js/slider.js"></script>
  <script src="js/faq.js"></script>
  <script src="js/scroll.js"></script>
  <title>Webolys - Création de sites internet en Ariège | Agence Web</title>
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
    ?>
  </main>
  <?php
    require_once("component/footer.php");
  ?>
</body>
</html>