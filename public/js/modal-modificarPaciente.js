let openModificar = document.getElementsByClassName('open-modificarPaciente-modal');

openModificar = Array.from(openModificar);

openModificar.forEach(button => {
    button.addEventListener('click', function(){
        console.log('aaaaaaaaa');
        const modal = document.getElementById('modal-modificarPaciente');
        if(modal.style.display == 'none'){
            modal.style.display = '';
        }
    });
});


const closeModal = document.getElementById('close-modificarPaciente-modal');

closeModal.addEventListener('click', function(){
    const modal = document.getElementById('modal-modificarPaciente');
    if(modal.style.display == ''){
        modal.style.display = 'none';
    }
});