const openModal = document.getElementById('open-newPaciente-modal');

openModal.addEventListener('click', function(){
    const modal = document.getElementById('modal-newPaciente');

    if(modal.style.display == 'none'){
        modal.style.display = '';
    }
});

const closeModal = document.getElementById('close-newPaciente-modal');

closeModal.addEventListener('click', function(){
    const modal = document.getElementById('modal-newPaciente');
    if(modal.style.display == ''){
        modal.style.display = 'none';
    }
});