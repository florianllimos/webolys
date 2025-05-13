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
  <title>Webolys - Mentions légales | Agence Web</title>
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
          <h2 id="title-page-mentions-legales">Mentions légales</h2>
        </div>
      </div>
    </div>
    <section class="legal-notice" role="document" aria-labelledby="legal-title">
      <div class="container">
        <h3>1. Éditeur du site</h3>
        <p>Le site <strong>www.webolys.fr</strong> est édité par <strong>webolys</strong>, auto-entrepreneur, inscrit sous le numéro SIRET : .</p>
        <h3>2. Responsable de la publication</h3>
        <p>Le directeur de la publication est <strong>Florian Llimos</strong>.</p>
        <h3>3. Contact</h3>
        <p>- Adresse : 1 avenue du Scios, 09000 Saint Paul de Jarrat, France<br>
          - Téléphone : 06 22 00 55 84<br>
          - E-mail : <a href="mailto:contact@webolys.fr">contact@webolys.fr</a>
        </p>
        <h3>4. Hébergement</h3>
        <p>
          Le site est hébergé par <strong>AlwaysData</strong>.<br>
          Adresse : 62 rue Tiquetonne, 75002 Paris, France<br>
          Téléphone : +33 1 84 16 23 40
        </p>
        <h3>5. Numéro de TVA intracommunautaire</h3>
        <p>TVA INTRA : [insérer numéro de TVA]</p>
        <h3>6. Liens externes</h3>
        <p>Le site peut contenir des liens vers d'autres sites. Nous n'assumons aucune responsabilité concernant le contenu ou l'exactitude des informations présentes sur ces sites.</p>
        <h3>7. Crédits</h3>
        <p>Les crédits des images, vidéos, et autres éléments multimédia sont mentionnés sur la page <a href="credits.php">Crédits</a>.</p>
      </div>
    </section>
  </main>
  <?php
    require_once("component/footer.php");
  ?>
</body>