$(function () {
  $("a").each(function () {
    if ($(this).prop("href") == window.location.href) {
      $(this).addClass("current");
    }
  });
});

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