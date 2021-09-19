// 1 - original array
const pages = [
  { name: "index.php", class: "page" },
  { name: "expertise.php", class: "page" },
  { name: "honoraires.php", class: "page" },
  { name: "contact.php", class: "page" },
];
//console.log(pages[0].name);

// 2 - find which page is active
let activeSlashPage = window.location.pathname;
console.log(activeSlashPage);
let slashPosition = activeSlashPage.lastIndexOf("/");
console.log("slashPosition : " + slashPosition);
let activePage = activeSlashPage.substring(slashPosition + 1);
console.log(activePage);

// 3 - get index of activePage
let currentIndex = pages.findIndex((page) => page.name === activePage);
console.log("index : " + currentIndex);

// 4 - active page gets "page active" class
pages[currentIndex].class = "page active";
console.log("active page : " + activePage);
if (typeof ap !== "undefined") {
  let ap = document.querySelector(".gestZone");
  ap.addEventListener("touchstart", start_Touch, false);
  ap.addEventListener("touchmove", move_Touch, false);
}
// 5 - Swipe Left / Right
var initialX = null;
var initialY = null;

function start_Touch(e) {
  initialX = e.touches[0].clientX;
  initialY = e.touches[0].clientY;
}

function move_Touch(e) {
  if (initialX === null) {
    return;
  }
  if (initialY === null) {
    return;
  }

  var currentX = e.touches[0].clientX;
  var currentY = e.touches[0].clientY;

  var diffX = initialX - currentX;
  var diffY = initialY - currentY;
  console.log(diffX);

  var threshold = screen.width / 25;
  console.log(threshold);

  if (Math.abs(diffX) > Math.abs(diffY)) {
    // sliding horizontally
    if (diffX > threshold && currentIndex > 0) {
      //swipe left
      currentIndex = currentIndex - 1;
      currentPage = pages[currentIndex].name;
      window.location.assign(currentPage);
    }

    if (-diffX > threshold && currentIndex < pages.length - 1) {
      // swiped right
      currentIndex = currentIndex + 1;
      currentPage = pages[currentIndex].name;
      window.location.assign(currentPage);
    }
  }

  initialX = null;
  initialY = null;

  e.preventDefault();
}
