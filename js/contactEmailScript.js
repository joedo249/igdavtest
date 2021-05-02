// Protection de l'adresse email
const nom = "info1";
const pseudo = "info";
const domaine = "igd-avocats";
const extension = "fr";
let adresse_mail = nom + "@" + domaine + "." + extension;
let adresse_email = pseudo + "@" + domaine + "." + extension;

let contactEmail = document.getElementById("contactEmail");
contactEmail.innerHTML = adresse_email;

//définition styles CSS
let mainBgColor = "#0a4263";
contactEmail.style.marginTop = "25px";
contactEmail.style.overflow = "visible";
contactEmail.style.textAlign = "center";
contactEmail.style.color = mainBgColor;
contactEmail.style.fontSize = "1em";
contactEmail.style.fontFamily = "Verdana";
contactEmail.style.fontStyle = "normal";
contactEmail.style.fontWeight = "bold";

//underline when mouse is hovering #contactEmail
$(function () {
  $("#contactEmail").hover(
    function () {
      $(contactEmail).css("text-decoration", "underline");
      $(contactEmail).css("cursor", "pointer");
    },
    function () {
      $(contactEmail).css("text-decoration", "none");
    }
  );
});

//envoi de l'email
$(function () {
  $("#contactEmail").click(function () {
    location.href =
      "mailto:" + adresse_mail + "?subject=" + "demande%20d'information";
  });
});
