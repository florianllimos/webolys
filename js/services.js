document.addEventListener("DOMContentLoaded", () => {

  const allTo = document.querySelectorAll(".card-see-more-mobile-services");
  const buttonToggle = document.querySelector("#button-toggle");

  if(allTo && buttonToggle){

    let show = false;
  
    allTo.forEach(allToDo => {
      allToDo.classList.add("none");
    });
  
    function showOrMask() {
      show = !show;
  
      allTo.forEach(allToDo => {
        if (show) {
          allToDo.classList.remove("none");
          buttonToggle.textContent = "Voir moins";
        } else {
          allToDo.classList.add("none");
          buttonToggle.textContent = "Voir plus";
        }
      });
  
    }
  
    buttonToggle.addEventListener("click", showOrMask);

  }

});