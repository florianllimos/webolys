document.addEventListener("DOMContentLoaded", () => {
  const links = [
    { id: "qui-suis-je-link", anchor: "qui-suis-je" },
    { id: "mes-services-link", anchor: "mes-services" },
    { id: "mes-realisations-link", anchor: "mes-realisations" },
    { id: "faq-link", anchor: "container-faq" },
  ];

  links.forEach(link => {
    document.querySelector(`#${link.id}`).setAttribute("href", `index.php#${link.anchor}`);
  });
});