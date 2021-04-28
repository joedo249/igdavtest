$(function () {
  $("a").each(function currentPage() {
    if ($(this).prop("href") == window.location.href) {
      $(this).addClass("current");
    }
  });
});
