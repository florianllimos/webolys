document.addEventListener("DOMContentLoaded", () => {
  const faqs = Array.from(document.querySelectorAll(".faq-item")).map(article => ({
    button: article,
    title: article.querySelector("h3"),
    text: article.querySelector("p.text-faq"),
  }));

  const plusIcon = "url('media/plus-sign.png')";
  const minusIcon = "url('media/minus-sign.png')";

  faqs.forEach(({ text }) => text.classList.add("none"));

  function toggleFaq(index) {
    faqs.forEach((faq, i) => {
      const isSelected = i === index;
      const isHidden = faq.text.classList.contains("none");

      if (isSelected) {
        if (isHidden) {
          faq.text.classList.remove("none");
          faq.title.style.setProperty("--image-url", minusIcon);
        } else {
          faq.text.classList.add("none");
          faq.title.style.setProperty("--image-url", plusIcon);
        }
      } else {
        faq.text.classList.add("none");
        faq.title.style.setProperty("--image-url", plusIcon);
      }
    });
  }

  faqs.forEach((faq, i) => {
    faq.button.addEventListener("click", () => toggleFaq(i));
  });
});
