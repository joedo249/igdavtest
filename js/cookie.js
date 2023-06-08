const modalCookie = document.querySelector('.modal-cookie');

// The .modal-cookie is displayed 3 seconds after first page load
window.onload = function () {
  if (!('cookieHasRunBefore' in sessionStorage)) {
    setTimeout(function () {
      modalCookie.style.display = 'block';
    }, 3000);
    sessionStorage.setItem('cookieHasRunBefore', true);
  }
};

// Close .modal-cookie when the user clicks on X or the button
function hideModal() {
  modalCookie.style.display = 'none';
}

// Close .modal-cookie when the user clicks anywhere outside of the modal-cookie
window.onclick = function (event) {
  if ((event.target = modalCookie)) {
    modalCookie.style.display = 'none';
  }
};
