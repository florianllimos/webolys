document.addEventListener("DOMContentLoaded", () => {
  const toggler = document.getElementById('toggler');
  const menu = document.getElementById('menu');

  toggler.addEventListener('change', () => {
    const isOpen = toggler.checked;
    toggler.setAttribute('aria-expanded', isOpen);
    menu.setAttribute('aria-hidden', !isOpen);
  });
});