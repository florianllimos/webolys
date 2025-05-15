document.addEventListener("DOMContentLoaded", () => {
  const links = [
    { id: "qui-sommes-nous-link", anchor: "qui-sommes-nous" },
    { id: "nos-services-link", anchor: "nos-services" },
    { id: "nos-realisations-link", anchor: "nos-realisations" },
    { id: "faq-link", anchor: "container-faq" },
  ];

  links.forEach(link => {
    document.querySelector(`#${link.id}`).setAttribute("href", `index.php#${link.anchor}`);
  });
});