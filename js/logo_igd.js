window.onload = function() {
  drawCanvas();
};

let entete = document.querySelector("#entete");
entete.style.width = "40px";
entete.style.height = "48px";
let canvas = document.querySelector("#logoIGD");
let f = 1; //scale factor

function drawCanvas() {
  canvas;
  let ctx = canvas.getContext("2d");

  //cercle noir (black circle)
  ctx.beginPath();
  ctx.lineWidth = 6 * f;
  ctx.strokeStyle = "black";
  ctx.arc(20 * f, 28 * f, 16 * f, 0 * f * Math.PI, 2 * Math.PI);
  ctx.closePath();
  ctx.stroke();

  //barre du G (G cross)
  ctx.fillStyle = "black";
  ctx.fillRect(13 * f, 33 * f, 4 * f, 12 * f);

  //barre du D
  ctx.fillStyle = "black";
  ctx.fillRect(23 * f, 10 * f, 4 * f, 12 * f);

  //cache du haut du cercle à gauche du I
  ctx.clearRect(13 * f, 9 * f, 4 * f, 8 * f);

  // I rouge
  ctx.fillStyle = "red";
  ctx.fillRect(17 * f, 9 * f, 6 * f, 38 * f);

  //point rouge (I dot)
  ctx.beginPath();
  ctx.fillStyle = "red";
  ctx.arc(20 * f, 4 * f, 3 * f, 0, 2 * f * Math.PI);
  ctx.fill();
} //end of drawCanvas

matchMedia;
const mq = window.matchMedia("(max-width:480px)");
mq.addListener(WidthChange);
WidthChange(mq);

function WidthChange(mq) {
  if (mq.matches) {
    clearRect();
    f = 0.9;
    drawCanvas();
  } else {
    clearRect();
    f = 1;
    drawCanvas();
  }
}

function clearRect() {
  canvas;
  let ctx = canvas.getContext("2d");
  ctx.clearRect(0, 0, 40, 48);
}
