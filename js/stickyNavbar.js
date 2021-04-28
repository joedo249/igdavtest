// position du bloc <header> par rapport au haut du site
var header_height = $("header").offset().top;

$(window).scroll(function () {
  // valeur du scroll vertical
  let y = $(this).scrollTop();

  //si cette valeur > à header_height on ajoute la class
  if (y >= header_height) {
    $(".fixnavbar").addClass("sticky");
  } else {
    // sinon, on l'enlève
    $(".fixnavbar").removeClass("sticky");
  }
});
