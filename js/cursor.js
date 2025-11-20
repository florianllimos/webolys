// Custom cursor: small white dot + thin ring with ~10px gap
(function(){
  // Disable for touch devices
  if (typeof window === 'undefined') return;
  if ('ontouchstart' in window || navigator.maxTouchPoints > 0) return;

  const body = document.body;
  body.classList.add('has-custom-cursor');

  const dot = document.createElement('div');
  dot.className = 'cursor-dot';
  dot.setAttribute('aria-hidden','true');

  const ring = document.createElement('div');
  ring.className = 'cursor-ring';
  ring.setAttribute('aria-hidden','true');

  document.documentElement.appendChild(dot);
  document.documentElement.appendChild(ring);

  let mouseX = 0, mouseY = 0;
  let ringX = 0, ringY = 0;
  const lerp = (a,b,n) => (1 - n) * a + n * b;

  // Center offsets are handled in CSS with translate(-50%,-50%)
  function onMove(e){
    mouseX = e.clientX;
    mouseY = e.clientY;
    // Use left/top so the CSS translate(-50%,-50%) keeps the element centered
    dot.style.left = mouseX + 'px';
    dot.style.top = mouseY + 'px';
  }

  document.addEventListener('mousemove', onMove, {passive:true});

  // If the user uses keyboard navigation (Tab), hide the custom cursor to avoid distraction
  function onFirstTab(e){
    if (e.key === 'Tab') {
      document.body.classList.add('keyboard-navigation');
      window.removeEventListener('keydown', onFirstTab);
      // when mouse moves again, remove keyboard-navigation
      const restore = () => {
        document.body.classList.remove('keyboard-navigation');
        document.removeEventListener('mousemove', restore);
        window.addEventListener('keydown', onFirstTab);
      };
      document.addEventListener('mousemove', restore, {once:true});
    }
  }
  window.addEventListener('keydown', onFirstTab);

  // Smooth ring following with RAF
  function animate(){
  ringX = lerp(ringX, mouseX, 0.18);
  ringY = lerp(ringY, mouseY, 0.18);
  // keep ring centered by setting left/top and relying on CSS translate(-50%,-50%)
  ring.style.left = ringX + 'px';
  ring.style.top = ringY + 'px';
    requestAnimationFrame(animate);
  }
  requestAnimationFrame(animate);

  // Hover interactions: enlarge ring on interactive elements
  const interactiveSelector = 'a, button, input, textarea, label, .card, .slider, [role="button"]';
  function addHoverListeners(){
    const els = document.querySelectorAll(interactiveSelector);
    els.forEach(el => {
      el.addEventListener('mouseenter', () => {
        ring.classList.add('cursor-hover');
      });
      el.addEventListener('mouseleave', () => {
        ring.classList.remove('cursor-hover');
      });
    });
  }

  // Run after DOM ready to catch dynamic elements
  if (document.readyState === 'complete' || document.readyState === 'interactive') {
    setTimeout(addHoverListeners, 30);
  } else {
    document.addEventListener('DOMContentLoaded', () => setTimeout(addHoverListeners, 30));
  }

  // Mousedown feedback
  document.addEventListener('mousedown', () => ring.classList.add('cursor-active'));
  document.addEventListener('mouseup', () => ring.classList.remove('cursor-active'));

  // Clean up on unload
  window.addEventListener('beforeunload', () => {
    document.removeEventListener('mousemove', onMove);
  });

})();
