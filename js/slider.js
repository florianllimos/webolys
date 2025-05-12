document.addEventListener("DOMContentLoaded", function () {
  const slider = document.querySelector(".slider");
  const slides = Array.from(slider.children);
  slides.forEach(slide => {
    let clone = slide.cloneNode(true);
    slider.appendChild(clone);
  });
});