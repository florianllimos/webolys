document.addEventListener('DOMContentLoaded', () => {
  const toggler = document.getElementById('toggler');
  const menu = document.getElementById('menu');

  if (!toggler || !menu) return;

  const mq = window.matchMedia('(max-width: 1150px)');

  const applyState = () => {
    const isMobile = mq.matches;
    const isOpen = !!toggler.checked;

    toggler.setAttribute('aria-expanded', String(isMobile && isOpen));

    if (isMobile) {
      if (isOpen) {
        menu.removeAttribute('hidden');
        menu.inert = false;
      } else {
        menu.setAttribute('hidden', '');
        menu.inert = true;
      }
    } else {
      menu.removeAttribute('hidden');
      menu.inert = false;
      toggler.setAttribute('aria-expanded', 'false');
    }
  };

  // Initialize state
  applyState();

  // Update on toggler change
  toggler.addEventListener('change', applyState);

  // Update on viewport changes
  if (typeof mq.addEventListener === 'function') {
    mq.addEventListener('change', applyState);
  } else if (typeof mq.addListener === 'function') {
    mq.addListener(applyState);
  }
});