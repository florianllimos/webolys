(function () {
  emailjs.init("YT-X0ZHAqLv_s1EFU");
})();

document.addEventListener("DOMContentLoaded", function () {
  var main = document.querySelector("main");
  if (main && !main.id) {
    main.id = "main-content";
  }
});