document.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById('contact-form');
  const submitButton = form.querySelector('button[type="submit"]');
  const containerInfoMail = document.querySelector("#response-formulaire");
  const containerForm = document.querySelector("#container-contact");
  const containerFormWithout = document.querySelector("#container-contact-without");
  containerFormWithout.classList.add("none");
  containerForm.classList.remove("none");
  
  form.addEventListener('submit', function(e) {
    e.preventDefault();
    submitButton.disabled = true;
    submitButton.textContent = "Envoi en cours...";
    
    emailjs.sendForm('service_qnyadno', 'template_asfaete', this, 'YT-X0ZHAqLv_s1EFU')
    .then(function(response) {
      containerInfoMail.classList.remove("none");
      form.reset();
    }, function(error) {
    })
    .finally(() => {
      submitButton.disabled = false;
      submitButton.textContent = "Envoyer";
    });
  });
});