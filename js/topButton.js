$(document).ready(function () {
  // Add return on top button
  $("body").append(
    '<div type="button" class="returnTop" title="Retour haut">&nbsp;</div>'
  );

  // On button click, scroll up to top
  $(".returnTop").click(function () {
    $("html,body").animate(
      {
        scrollTop: 0,
      },
      "slow"
    );
  });
});

$(window).scroll(function () {
  // If on top fade the bouton out, else fade it in
  if ($(window).scrollTop() < 200) $(".returnTop").fadeOut();
  else $(".returnTop").fadeIn();
});
