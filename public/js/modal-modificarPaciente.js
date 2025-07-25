document.addEventListener('DOMContentLoaded', function() {
    let openModificar = document.getElementsByClassName('open-modificarPaciente-modal');
    openModificar = Array.from(openModificar);

    openModificar.forEach(button => {
        button.addEventListener('click', function(e){
            e.preventDefault(); // Prevenir comportamiento por defecto
            
            
            // Obtener atributos
            const dni = this.dataset.dni;
            const nombre = this.dataset.nombre;
            const apellido = this.dataset.apellido;
            const email = this.dataset.email;
            const telefono = this.dataset.telefono;
            const doi = this.dataset.doi;

            // Asignar valores a los campos
            document.getElementById('paciente_dni_modificar').value = dni;
            document.getElementById('paciente_nombre_modificar').value = nombre;
            document.getElementById('paciente_apellido_modificar').value = apellido;
            document.getElementById('paciente_email_modificar').value = email;
            document.getElementById('paciente_telefono_modificar').value = telefono;
            document.getElementById('paciente_doi_modificar').value = doi;

            // Mostrar modal
            const modal = document.getElementById('modal-modificarPaciente');
            modal.style.display = 'block';
        });
    });

    const closeMModal = document.getElementById('close-modificarPaciente-modal');
    closeMModal.addEventListener('click', function(){
        document.getElementById('modal-modificarPaciente').style.display = 'none';
    });
});