/*
in jQuery
$(function () {
  $("a").each(function () {
    if ($(this).prop("href") == window.location.href) {
      $(this).addClass("current");
    }
  });
});
*/

//in vanilla javaScript
//https://stackoverflow.com/questions/40378416/automatically-highlight-current-url-even-when-on-page-x

const links = document.getElementsByTagName("a");
for (let i = 0; i < links.length; i++) {
  if (links[i].pathname == document.location.pathname) {
    links[i].classList.add("current");
  }
}
