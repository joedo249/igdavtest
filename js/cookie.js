const modalCookie = document.querySelector('.modal-cookie');

// The modal-cookie is displayed 3 seconds after page load
window.onload = function () {
  setTimeout(function () {
    modalCookie.style.display = 'block';
  }, 3000);
};

// When the user clicks on X or the button close the modal-cookie
function hideModal() {
  modalCookie.style.display = 'none';
}

// When the user clicks anywhere outside of the modal-cookie, close it
window.onclick = function (event) {
  if (event.target = modal-cookie) {
    modalCookie.style.display = 'none';
  }
};