// Timeline scroll animation for processus section
document.addEventListener('DOMContentLoaded', function() {
  const timeline = document.querySelector('.processus-timeline');
  if (!timeline) return;
  
  const timelineProgress = document.querySelector('.timeline-progress');
  const timelineLine = document.querySelector('.timeline-line');
  const stepNumbers = document.querySelectorAll('.step-number');
  
  function updateTimeline() {
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    const windowHeight = window.innerHeight;
    
    // Get timeline position
    const timelineRect = timeline.getBoundingClientRect();
    const timelineTop = scrollTop + timelineRect.top;
    const timelineHeight = timeline.offsetHeight;
    
    // Calculate progress based on scroll position
    const viewportMiddle = scrollTop + (windowHeight / 2);
    
    // Calculate how far through the timeline we are
    let scrollProgress = 0;
    if (viewportMiddle > timelineTop) {
      scrollProgress = ((viewportMiddle - timelineTop) / timelineHeight) * 100;
      scrollProgress = Math.max(0, Math.min(100, scrollProgress));
    }
    
    // Update progress bar
    if (timelineProgress) {
      timelineProgress.style.height = scrollProgress + '%';
    }
    
    // Update step numbers based on their position relative to progress
    stepNumbers.forEach((stepNumber) => {
      const step = stepNumber.closest('.processus-step');
      if (!step) return;
      
      const stepNumberRect = stepNumber.getBoundingClientRect();
      const stepNumberTop = scrollTop + stepNumberRect.top;
      
      // Activate number when viewport middle passes the number itself
      if (viewportMiddle >= stepNumberTop) {
        stepNumber.classList.add('active');
      } else {
        stepNumber.classList.remove('active');
      }
    });
  }
  
  // Update on scroll and resize
  window.addEventListener('scroll', updateTimeline);
  window.addEventListener('resize', updateTimeline);
  
  // Initial update
  setTimeout(updateTimeline, 100);
});
