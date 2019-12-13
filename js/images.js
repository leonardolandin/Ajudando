vm = this;

vm.openModal = function() {
    document.getElementById('modal-container').style.display = 'flex'
}

vm.closeModal = function() {
    document.getElementById('modal-container').style.display = 'none'
}

vm.closeModalInside = function(event) {
    event.stopPropagation();
}