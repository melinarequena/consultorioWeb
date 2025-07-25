<?php
    require_once "./inc/navbar.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li>
            <button id="open-newPaciente-modal" style="padding: 20px; background-color:grey; border-radius:10px; cursor: pointer;">
                NUEVO
            </button>
        </li>
    </ul>

    <h2>Pacientes</h2>
    <button> <a href="">Recargar pagina</a></button>
    <div>
        Lista
    </div>

    <table>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>DNI</th>
            <th>Email</th>
            <th>Telefono</th>
            <th>Fecha de Nacimiento</th>
            <th>Historia Clinica</th>
            <th>MOD</th>
        </tr>

        <?php
        require_once "./../Models/paciente-list.php";

        ?>
        

</table>





    <div class="modal" id="modal-newPaciente" style="display: none;">
        <div class="modal-background" style="background-color:gray;"></div>
        <div class="modal-content" style="background-color: bisque;">
            NUEVO USUARIO
            <form method="post" action="">
                <label>
                    Nombre
                    <input type="text" name="nombre" required>
                </label>

                <label>
                    Apellido
                    <input type="text" name="apellido" required>
                </label>

                <label>
                    Email
                    <input type="text" name="email" required>
                </label>

                <label>
                    Telefono
                    <input type="text" name="telefono" required>
                </label>

                <label>
                    DNI
                    <input type="text" name="dni" required>
                </label>

                <label>
                    Fecha de Nacimiento
                    <input type="date" name="doi" required>
                </label>

                <button type="submit" style="cursor: pointer;">Enviar</button>

                
                
            </form>
        </div>

    <button id="close-newPaciente-modal" style="cursor: pointer;">
        X
    </button>
        
    </div>


    <?php
    if(isset($_POST['dni'])){
        require_once "./../Controllers/newPaciente-controller.php";

        if(isset($error)){
            if($error == ''){ ?>

    <div role="alert" class="flex items-start bg-red-300 border-l-4 border-red-500 p-4 rounded-md justify-center mx-auto" style="display:flex; justify-content:center; width:30%; padding:5px; background-color: #A9DDA7; border-radius:10px">
        <!-- Icono de advertencia / error -->
        <img class="w-5 h-5" src="https://www.svgrepo.com/show/379925/alert-error.svg" style="margin-top: 10px; width: 40px; margin-right:10px" viewBox="0 0 24 24" stroke="currentColor">

        <div class="ml-3 flex-1">
            <p class="font-semibold text-red-800">Creación exitosa</p>
            <p class="mt-1 text-sm text-red-700">
            Usuario creado exitosamente.
            </p>
        </div>
    </div>

    <?php
        } 
        else{ if($error == '!P') {  ?>

        <div role="alert" class="flex items-start bg-red-300 border-l-4 border-red-500 p-4 rounded-md justify-center mx-auto" style="display:flex; justify-content:center; width:30%; padding:5px; background-color: #FFC3C3; border-radius:10px">
            <!-- Icono de advertencia / error -->
            <img class="w-5 h-5" src="https://www.svgrepo.com/show/379925/alert-error.svg" style="margin-top: 10px; width: 40px; margin-right:10px" viewBox="0 0 24 24" stroke="currentColor">

            <div class="ml-3 flex-1">
                <p class="font-semibold text-red-800">Error</p>
                <p class="mt-1 text-sm text-red-700">
                Ocurrió un error al crear el usuario.
                </p>
            </div>
            </div>
    <?php

        }
    }
}
    }
    ?>

    <script src="./../../public/js/modal-newPaciente.js"></script>

    <div class="modal" id="modal-modificarPaciente" style="display: none;">
        <div class="modal-background" style="background-color:#DDDDDD66;"></div>
        <div class="modal-content" style="background-color: bisque;">
            MODIFICAR DATOS DEL PACIENTE
            <form method="post" action="./../Controllers/modificarPaciente-controller.php">
                <input type="hidden" name="dni" id="paciente_dni_modificar">
                <label>
                    Nombre
                    <input type="text" name="nombre" id="paciente_nombre_modificar">
                </label>

                <label>
                    Apellido
                    <input type="text" name="apellido" id="paciente_apellido_modificar">
                </label>

                <label>
                    Email
                    <input type="text" name="email" id="paciente_email_modificar">
                </label>

                <label>
                    Telefono
                    <input type="text" name="telefono" id="paciente_telefono_modificar">
                </label>

                <label>
                    Fecha de Nacimiento
                    <input type="date" name="doi" id="paciente_doi_modificar">
                </label>

                <button type="submit" style="cursor: pointer;">Modificar</button>

            </form>
        </div>

    <button id="close-modificarPaciente-modal" style="cursor: pointer;">
        X
    </button>
        
    </div>

    <script src="./../../public/js/modal-modificarPaciente.js"></script>


</body>
</html>




