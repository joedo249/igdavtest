/* in jQuery
$(function () {
  $("a").each(function () {
    if ($(this).prop("href") == window.location.href) {
      $(this).addClass("current");
    }
  });
});
*/

//in vanilla javaScript
const links = document.getElementsByTagName("a");
for (let i = 0; i < links.length; i++) {
  if (links[i].pathname == document.location.pathname) {
    links[i].classList.add("current");
  }
}
