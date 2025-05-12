<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <script src="js/scroll-indicator.js"></script>
  <script src="js/header.js"></script>
  <script src="js/word.js"></script>
  <script src="js/slider.js"></script>
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
    ?>
  </main>
</body>
</html>