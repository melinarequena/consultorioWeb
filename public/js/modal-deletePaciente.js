let openDelete = document.getElementsByClassName('open-deletePaciente-modal');

openDelete = Array.from(openDelete);

openDelete.forEach(button => {
    button.addEventListener('click', function(){
        console.log(button.id);
        const modal = document.getElementById('modal-deletePaciente');
        if(modal.style.display == 'none'){
            modal.style.display = '';
        }
    });
});

const closeFinal = document.getElementById('no-deletePaciente-final');

closeFinal.addEventListener('click', function(){
    const modal = document.getElementById('modal-deletePaciente');
    if(modal.style.display == ''){
        modal.style.display = 'none';
    }
});



const closeDelete = document.getElementById('close-deletePaciente-modal');

closeDelete.addEventListener('click', function(){
    const modal = document.getElementById('modal-deletePaciente');
    if(modal.style.display == ''){
        modal.style.display = 'none';
    }
});


