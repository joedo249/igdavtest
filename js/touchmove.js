// quick console.log
let cl = console.log.bind(document);

// value of body width on load (viewport)
const body = document.querySelector("body");
const bodyWidth = getComputedStyle(body).width;
cl(bodyWidth);
const bodyWidthParse = parseInt(bodyWidth);
//cl(bodyWidthParse);

// operate touchmove.js only on mobile devices (width < 480pwx)
if (bodyWidthParse > 480) {
  console.log("it's a large screen");
} else {
  console.log("it's a mobile device");

  // value of wrapper left-margin
  // maybe unneccesary as wrapper as no margin defined
  const wrapper = document.querySelector("#wrapper");
  const wrapperLeftMargin = getComputedStyle(wrapper).marginLeft;
  //cl(wrapperLeftMargin);
  wrapperLeftMarginParse = parseInt(wrapperLeftMargin);
  //cl(wrapperLeftMarginParse);

  //freeze value of wrapper width
  const wrapperWidthParse = bodyWidthParse - wrapperLeftMarginParse;
  wrapper.style.width = parseInt(wrapperWidthParse) + "px";
  //cl(wrapper.style.width);

  // 1 - find which page is active
  let activeSlashPage = window.location.pathname;
  //cl(activeSlashPage);
  let slashPosition = activeSlashPage.lastIndexOf("/");
  let activePage = activeSlashPage.substring(slashPosition + 1);
  cl(activePage);
  // 2 - modify pages array
  // 2.1 original array
  let pages = [
    { name: "index.php", class: "" },
    { name: "expertise.php", class: "" },
    { name: "honoraires.php", class: "" },
    { name: "contact.php", class: "" },
  ];

  //2.2 get current index of current Page (active)
  let currentIndex = pages.findIndex((page) => page.name === activePage);
  //cl("current index: " + currentIndex);
  //2.3 active page get "btn active" class
  pages[currentIndex].class = "active";
  currentPage = pages[currentIndex].name;
  //cl(currentPage);

  //2.3 touch events
  const touchZone = document.querySelector(".gestZone");
  touchZone.addEventListener("touchstart", start_Touch, { passive: false });
  touchZone.addEventListener("touchmove", move_Touch, { passive: false });
  touchZone.addEventListener("touchend", end_Touch, false);

  // 3 Swipe Left / Right
  let initialX = null;
  let initialY = null;

  function start_Touch(ev) {
    initialX = ev.touches[0].clientX;
    initialY = ev.touches[0].clientY;
    //cl(initialX);
    //cl(initialY);

    ev.preventDefault();

    // maximum time allowed from start to end of touch
    //allowedTime = 2000;
    // record time when finger first touches surface
    startTime = new Date().getTime();
    //cl(startTime);
  }

  function move_Touch(ev) {
    if (initialX === null || initialY === null) {
      return;
    }

    //horizontal translate effect but affecting vertical up sliding
    let currentX = ev.touches[0].clientX;
    let currentY = ev.touches[0].clientY;
    let diffX = initialX - currentX;
    let diffY = initialY - currentY;
    if (Math.abs(diffX) > Math.abs(diffY)) {
      let containLeftMargin = wrapperLeftMargin;
      containLeftMarginParse = parseInt(containLeftMargin);
      containLeftMarginParse = wrapperLeftMarginParse - diffX;
      cl(containLeftMarginParse);
      wrapper.style.marginLeft =
        Math.min(containLeftMarginParse, bodyWidthParse) + "px";
      cl(wrapper.style.marginLeft);
    }
    cl(ev.touches, ev.type);
    //end of horizontal translate effect

    ev.preventDefault();
  }

  function end_Touch(ev) {
    cl("endTouch");

    let finalX = ev.changedTouches[0].clientX;
    let finalY = ev.changedTouches[0].clientY;
    //cl(finalX);
    //cl(finalY);

    distX = initialX - finalX;
    distY = initialY - finalY;
    cl("distX: " + distX);
    cl("distY: " + distY);

    elapsedTime = new Date().getTime() - startTime;
    //cl(elapsedTime);

    // if sliding horizontally
    //if (Math.abs(distX) > Math.abs(distY) && eltouchZonesedTime < allowedTime) {
    if (Math.abs(distX) > Math.abs(distY)) {
      cl("horizontal sliding");

      let threshold = screen.width / 4;

      // if swipe not sufficient
      if (distX < threshold) {
        //do nothing
        window.location.assign(currentPage);
      }

      // if left swipe sufficient and not on the last page
      if (distX > threshold && currentIndex < pages.length - 1) {
        //go to next page
        currentIndex = currentIndex + 1;
        currentPage = pages[currentIndex].name;
        window.location.assign(currentPage);
      }
      // if left swipe sufficient and on the last page
      else if (distX > threshold && currentIndex == pages.length - 1) {
        //do nothing
        window.location.assign(currentPage);
      }
      // if right swipe sufficient and not on the first page
      else if (-distX > threshold && currentIndex > 0) {
        // go to previous page
        currentIndex = currentIndex - 1;
        currentPage = pages[currentIndex].name;
        window.location.assign(currentPage);
      }
      // if right swipe sufficient and on the first page
      else if (-distX > threshold && currentIndex == 0) {
        //do nothing
        window.location.assign(currentPage);
      }
    }

    //if sliding vertically
    else {
      cl("vertical sliding");
      let coeffY = 800 / elapsedTime;
      window.scrollBy({
        top: distY*coeffY,
        left: 0,
        behavior: "smooth",
      });
    }

    //reset values
    initialX = null;
    initialY = null;
  }
}
