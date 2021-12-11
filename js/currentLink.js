// in vanilla JS
const links = document.getElementsByTagName("a");
for (let i = 0; i < links.length; i++) {
  if (links[i].pathname == document.location.pathname) {
    links[i].classList.add("current");
  }
}


/*/ in vanilla JS
  let navigation = document.querySelectorAll("a");
  navigation.forEach(function (currLink) {
    if ((currLink.getAttribute("href"))) {
      currLink.classlist.add("current");
    }
  });


// in vanilla JS
let navigation = document.querySelectorAll("a");
navigation.forEach((currLink = a.getAttribute("href")));
currLink.classlist.add("current");
*/