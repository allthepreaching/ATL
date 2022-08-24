// Get the modal
// var modal = document.getElementById("verse-modal");

// Get the button that opens the modal
// var open = document.getElementById("modal-verse");

// Get the <span> element that closes the modal
const close = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
open.onclick = function () {
  modal.style.display = "block";
};

// When the user clicks on <span> (x), close the modal
close.onclick = function () {
  modal.style.display = "none";
};

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
};

// When user hits ESC key , close the modal
document.onkeydown = function (e) {
  if (e.keyCode === 27) {
    modal.style.display = "none";
  }
};
