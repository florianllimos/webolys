<a href="contact.php" class="footer-holograme" aria-label="Accédez à la page de contact pour obtenir un devis gratuit">
  <div>
    <p>Vous avez une idée ? Un projet ? Contactez-nous pour recevoir un devis gratuitement !</p>
  </div>
</a>
<footer role="contentinfo">
  <div class="footer-container">
    <div class="footer-container-web">
      <img src="media/webolys.png" alt="Logo de l'agence webolys" loading="lazy">
      <p>
        <strong><span class="color">Webolys</span></strong> est une équipe spécialisée dans la création de sites web sur mesure. 
        Notre équipe de professionnels passionnés accompagne les entreprises de toutes tailles dans leur transformation numérique. 
      </p>
    </div>
    <div class="footer-container-link">
      <section aria-labelledby="heading-liens-utiles">
        <h3 id="heading-liens-utiles">Liens utiles</h3>
        <nav aria-label="Navigation secondaire : liens utiles du site">
          <ul>
            <li><a href="index.php">Page d'accueil</a></li>
            <li><a href="index.php#nos-services">Nos services</a></li>
            <li><a href="contact.php">Page de contact</a></li>
            <li><a href="mentions-legales.php">Mentions légales</a></li>
            <li><a href="politique-de-confidentialite.php">Politique de confidentialité</a></li>
            <li><a href="credits.php">Crédits du site</a></li>
            <li><a href="plan-du-site.php">Plan du site</a></li>
          </ul>
        </nav>
      </section>
    </div>
    <div class="footer-container-contact">
      <h3 id="heading-contact">Contactez-nous</h3>
      <ul aria-labelledby="heading-contact">
        <li>
          <a href="mailto:contact@webolys.fr" aria-label="Envoyer un e-mail à contact@webolys.fr">
            contact@webolys.fr
          </a>
        </li>
        <li>
          <a href="tel:0622005584" aria-label="Appeler le 06 22 00 55 84">
            06 22 00 55 84
          </a>
        </li>
        <li aria-label="Adresse postale">
          1 avenue du Scios<br>
          09000 Saint Paul de Jarrat
        </li>
      </ul>
    </div>
    <section class="footer-container-newsletter none" id="container-newsletter" aria-labelledby="heading-newsletter">
      <h3 id="heading-newsletter">Inscription à la newsletter</h3>
      <form id="newsletter-form" aria-describedby="newsletter-instruction" novalidate>
        <p id="newsletter-instruction" class="visually-hidden">
          Entrez votre adresse e-mail pour recevoir nos actualités. Ce champ est requis.
        </p>
        <label for="input-newsletter" class="visually-hidden">Adresse e-mail</label>
        <input 
          name="mail" 
          id="input-newsletter" 
          type="email" 
          placeholder="Votre adresse e-mail" 
          required 
          aria-required="true" 
          aria-label="Votre adresse e-mail"
          inputmode="email"
          autocomplete="email"
        >
        <button id="button-newsletter" type="submit" aria-label="S’inscrire à la newsletter">
          M'avertir&nbsp;!
        </button>
      </form>
      <div id="response-formulaire" class="none" role="status" aria-live="polite">
        <p class="color">Vous êtes bien inscrit à notre liste de newsletter&nbsp;!</p>
      </div>
    </section>
    <section aria-label="Informations légales" class="footer-container-copyright">
      <p>&copy; 2025 <strong><span class="color">Webolys</span></strong>. Tous droits réservés.</p>
    </section>
  </div>
</footer>