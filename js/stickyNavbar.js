// Get the navbar
const navbar = document.querySelector(".fixnavbar");
// Get the offset position of the navbar
const navbarHeight = navbar.offsetTop;
//console.log(navbarHeight);

// Add the sticky class to the navbar when scroll position is reached
function scrollFunction() {
  if (window.scrollY >= navbarHeight) {
    console.log(window.scrollY);
    navbar.classList.addClass("sticky");
  } else {
    // Remove the sticky class when you leave the scroll position
    navbar.classList.remove("sticky");
  }
}
