// Get the offset position of the navbar
const navbar = document.querySelector(".fixnavbar");
const navbarHeight = navbar.offsetTop;
//console.log(navbarHeight);

// Add the sticky class when the scroll position is >= navbarHeight
// Remove the sticky class
function scrollFunction() {
  if (window.pageYOffset >= navbarHeight) {
    console.log(window.pageYOffset);
    navbar.classList.addClass("sticky");
  } else {
    navbar.classList.remove("sticky");
  }
}