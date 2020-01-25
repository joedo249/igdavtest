let canvas = document.querySelector("#logoIGD");
let ctx = canvas.getContext("2d");

//cercle noir
ctx.beginPath();
ctx.lineWidth = "6";
ctx.strokeStyle = "black";
ctx.arc(20, 28, 16, 0 * Math.PI, 2 * Math.PI);
ctx.closePath();
ctx.stroke();

//barre du G
ctx.fillStyle = "black";
ctx.fillRect(13, 33, 4, 12);

//barre du D
ctx.fillStyle = "black";
ctx.fillRect(23, 10, 4, 12);

//cache du haut du cercle à gauche du I
ctx.fillStyle = "rgb(240,240,240)";
ctx.fillRect(13, 9, 4, 8);

// I rouge
ctx.fillStyle = "red";
ctx.fillRect(17, 9, 6, 38);

//point rouge
ctx.beginPath();
ctx.fillStyle = "red";
ctx.arc(20, 4, 3, 0, 2 * Math.PI);
ctx.fill();

//Fades in on page load

$(document).ready(function() {
  $("#logoIGD").css("display", "none");
  $("#logoIGD").fadeIn(1000);
});
