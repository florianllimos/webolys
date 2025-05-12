document.addEventListener("DOMContentLoaded", (event) => {
  const words = ["Développement", "CMS", "Accessibilité", "Référencement", "Site vitrine", "E-Commerce", "E-Learning", "Webmapping", "Plugin"];
  const wordElement = document.getElementById("word");
  let index = 0;
  function changeWord() {
    wordElement.style.opacity = 0;
    wordElement.style.transform = "translateY(20px)";
    setTimeout(() => {
      wordElement.textContent = words[index];
      wordElement.style.opacity = 1;
      wordElement.style.transform = "translateY(0)";
      index = (index + 1) % words.length;
    }, 800); 
  }
  changeWord();
  setInterval(changeWord, 2000);
});