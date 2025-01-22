// Protection de l'adresse email
const nom = "info1";
const pseudo = "info";
const domaine = "igd-avocats";
const extension = "fr";
const adresse_mail = nom + "@" + domaine + "." + extension;
const adresse_email = pseudo + "@" + domaine + "." + extension;

let contactEmail = document.getElementById("contactEmail");
contactEmail.textContent = adresse_email;

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

//underline when mouse is hovering #contactEmail with JS
contactEmail.addEventListener("mouseover", mouseOver);
contactEmail.addEventListener("mouseout", mouseOut);
function mouseOver() {
  contactEmail.style.textDecoration = "underline";
  contactEmail.style.color = "darkblue";
  contactEmail.style.cursor = "pointer";
}
function mouseOut() {
  contactEmail.style.textDecoration = "none";
  contactEmail.style.color = mainBgColor;
}

//envoi de l'email with JS
contactEmail.addEventListener("click", sendMail);
function sendMail() {
  location.href =
    "mailto:" + adresse_mail + "?subject=" + "demande%20d'information";
}
