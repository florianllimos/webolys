document.addEventListener("DOMContentLoaded", () => {
  const formNewsletter = document.getElementById("newsletter-form");
  const submitButtonNewsletter = formNewsletter.querySelector("#button-newsletter");
  const emailInput = formNewsletter.querySelector("input[name='mail']");

  // Create message container if it doesn't exist
  let messageContainer = formNewsletter.querySelector(".newsletter-message");
  if (!messageContainer) {
    messageContainer = document.createElement("div");
    messageContainer.className = "newsletter-message";
    formNewsletter.appendChild(messageContainer);
  }

  formNewsletter.addEventListener("submit", function (e) {
    e.preventDefault();
    messageContainer.className = "newsletter-message"; // Reset classes

    if (!emailInput.value.trim()) {
      messageContainer.className = "newsletter-message error";
      messageContainer.textContent = "⚠️ Veuillez renseigner votre adresse e-mail.";
      return;
    }

    // Validate email format
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(emailInput.value.trim())) {
      messageContainer.className = "newsletter-message error";
      messageContainer.textContent = "⚠️ Veuillez entrer une adresse e-mail valide.";
      return;
    }

    submitButtonNewsletter.disabled = true;
    const originalButtonContent = submitButtonNewsletter.innerHTML;
    submitButtonNewsletter.innerHTML = `
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="spinner">
        <circle cx="12" cy="12" r="10"></circle>
      </svg>
      Envoi...
    `;

    emailjs
      .sendForm("service_qnyadno", "template_q9q0rcg", this, "YT-X0ZHAqLv_s1EFU")
      .then(function (response) {
        messageContainer.className = "newsletter-message success";
        messageContainer.textContent = "🎉 Super ! Vous faites maintenant partie de notre communauté. À bientôt dans votre boîte mail !";
        formNewsletter.reset();
      })
      .catch(function (error) {
        messageContainer.className = "newsletter-message error";
        messageContainer.textContent = "⚠️ Une erreur est survenue, merci de réessayer.";
      })
      .finally(() => {
        submitButtonNewsletter.disabled = false;
        submitButtonNewsletter.innerHTML = originalButtonContent;
      });
  });
});