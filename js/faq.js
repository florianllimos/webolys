document.addEventListener("DOMContentLoaded", () => {
  const faqs = [
    {
      button: document.querySelector("#container-faq-1"),
      title: document.querySelector("#container-faq-1-title"),
      text: document.querySelector("#container-faq-1-text"),
    },
    {
      button: document.querySelector("#container-faq-2"),
      title: document.querySelector("#container-faq-2-title"),
      text: document.querySelector("#container-faq-2-text"),
    },
    {
      button: document.querySelector("#container-faq-3"),
      title: document.querySelector("#container-faq-3-title"),
      text: document.querySelector("#container-faq-3-text"),
    },
  ];

  const plusIcon = "url('media/plus-sign.png')";
  const minusIcon = "url('media/minus-sign.png')";

  faqs.forEach(({ text }) => text.classList.add("none"));

  function toggleFaq(index) {
    faqs.forEach((faq, i) => {
      const isSelected = i === index;
      faq.text.classList.toggle("none", !isSelected || !faq.text.classList.contains("none"));
      faq.title.style.setProperty("--image-url", isSelected && !faq.text.classList.contains("none") ? minusIcon : plusIcon);
    });
  }

  faqs.forEach((faq, i) => {
    faq.button.addEventListener("click", () => toggleFaq(i));
  });
});