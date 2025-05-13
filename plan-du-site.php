<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <script type="text/javascript" src="js/email.min.js" defer></script>
  <script src="js/init.js" type="text/javascript" defer></script>
  <script src="js/newsletter.js" defer></script>
  <script src="js/header.js" defer></script>
  <title>Webolys - Plan du site | Agence Web</title>
</head>
<body>
  <?php
    require_once("component/header.php");
  ?>
  <main class="container-rgpd">
    <?php
      require_once("component/background.php");
    ?>
    <div class="container-banner-page">
      <div>
        <div>
          <h2 id="title-page-plan-du-site">Plan du site</h2>
        </div>
      </div>
    </div>
    <section class="container-site-map">
      <ul>
        <li><a href="index.php">Accueil</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="plan-du-site.php">Plan du site</a></li>
        <li><a href="mentions-legales.php">Mentions légales</a></li>
        <li><a href="politique-de-confidentialite.php">Politique de confidentialité</a></li>
        <li><a href="credits.php">Crédits</a></li>
      </ul>
    </section>
  </main>
  <?php
    require_once("component/footer.php");
  ?>
</body>