document.addEventListener("DOMContentLoaded", () => {
  const containerNewsletter = document.querySelector("#container-newsletter");
  containerNewsletter.classList.remove("none");

  const formNewsletter = document.getElementById("newsletter-form");
  const submitButtonNewsletter = formNewsletter.querySelector("#button-newsletter");
  const containerInfoMailNewsletter = document.querySelector("#response-formulaire");
  const emailInput = formNewsletter.querySelector("input[name='mail']");

  formNewsletter.addEventListener("submit", function (e) {
    e.preventDefault();

    if (!emailInput.value.trim()) {
      alert("Veuillez renseigner votre adresse e-mail.");
      return;
    }

    submitButtonNewsletter.disabled = true;
    submitButtonNewsletter.textContent = "Envoi en cours...";

    emailjs
      .sendForm("service_qnyadno", "template_q9q0rcg", this, "YT-X0ZHAqLv_s1EFU")
      .then(function (response) {
        containerInfoMailNewsletter.classList.remove("none");
        formNewsletter.reset();
      })
      .catch(function (error) {
        alert("Une erreur est survenue, merci de réessayer.");
      })
      .finally(() => {
        submitButtonNewsletter.disabled = false;
        submitButtonNewsletter.textContent = "Envoyer";
      });
  });
});