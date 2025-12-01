// Custom cursor: small white dot + thin ring with ~10px gap
(function(){
  // Disable for touch devices
  if (typeof window === 'undefined') return;
  if ('ontouchstart' in window || navigator.maxTouchPoints > 0) return;

  let mouseX = 0, mouseY = 0;
  let ringX = 0, ringY = 0;
  let dot, ring;
  let animationFrameId;
  const lerp = (a,b,n) => (1 - n) * a + n * b;

  function initCursor() {
    // Remove existing cursors if any
    const existingDots = document.querySelectorAll('.cursor-dot');
    const existingRings = document.querySelectorAll('.cursor-ring');
    existingDots.forEach(el => el.remove());
    existingRings.forEach(el => el.remove());

    const body = document.body;
    body.classList.add('has-custom-cursor');

    dot = document.createElement('div');
    dot.className = 'cursor-dot';
    dot.setAttribute('aria-hidden','true');

    ring = document.createElement('div');
    ring.className = 'cursor-ring';
    ring.setAttribute('aria-hidden','true');

    document.documentElement.appendChild(dot);
    document.documentElement.appendChild(ring);

    // Initialize positions at center
    mouseX = window.innerWidth / 2;
    mouseY = window.innerHeight / 2;
    ringX = mouseX;
    ringY = mouseY;
    
    dot.style.left = mouseX + 'px';
    dot.style.top = mouseY + 'px';
    ring.style.left = ringX + 'px';
    ring.style.top = ringY + 'px';
  }

  function onMove(e){
    mouseX = e.clientX;
    mouseY = e.clientY;
    if (dot) {
      dot.style.left = mouseX + 'px';
      dot.style.top = mouseY + 'px';
    }
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
    if (!ring) return;
    ringX = lerp(ringX, mouseX, 0.18);
    ringY = lerp(ringY, mouseY, 0.18);
    ring.style.left = ringX + 'px';
    ring.style.top = ringY + 'px';
    animationFrameId = requestAnimationFrame(animate);
  }

  function startAnimation() {
    if (animationFrameId) {
      cancelAnimationFrame(animationFrameId);
    }
    animate();
  }

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

  // Clean up on unload and re-initialize on page show (back button)
  window.addEventListener('beforeunload', () => {
    document.removeEventListener('mousemove', onMove);
    if (animationFrameId) {
      cancelAnimationFrame(animationFrameId);
    }
  });

  // Re-initialize everything when returning via back button
  window.addEventListener('pageshow', (event) => {
    if (event.persisted || performance.navigation.type === 2) {
      // Page was loaded from cache (back button)
      initCursor();
      document.removeEventListener('mousemove', onMove);
      document.addEventListener('mousemove', onMove, {passive:true});
      addHoverListeners();
      startAnimation();
    }
  });

  // Initialize on first load
  initCursor();
  document.addEventListener('mousemove', onMove, {passive:true});
  startAnimation();

})();
