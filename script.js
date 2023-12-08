function openModal() {
    modal.style.display = "block";
}

//pressing x closes modal
function closeModal(){
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
}
