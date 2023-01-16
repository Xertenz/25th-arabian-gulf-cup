// Start Navbar
let hamburgerOpen = document.querySelector(".hamburger.open"),
  hamburgerClose = document.querySelector(".hamburger.close"),
  mainMenu = document.querySelector(".main-menu");

hamburgerOpen.addEventListener("click", function (event) {
  mainMenu.classList.add("active");
});

hamburgerClose.addEventListener("click", function (event) {
  mainMenu.classList.remove("active");
});
// End Navbar
