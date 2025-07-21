<?php
    require_once "main-model.php";

    if(isset($_POST['paciente_nombre']) && !empty($_POST['paciente_nombre'])){
        $nombre = $_POST['paciente_nombre'];
    }
    if(isset($_POST['paciente_apellido']) && !empty($_POST['paciente_apellido'])){
        $apellido = $_POST['paciente_apellido'];
    }
    if(isset($_POST['paciente_dni']) && !empty($_POST['paciente_dni'])){
        $dni = $_POST['paciente_dni'];
    }
    if(isset($_POST['paciente_email']) && !empty($_POST['paciente_email'])){
        $email = $_POST['paciente_email'];
    }
    if(isset($_POST['paciente_telefono']) && !empty($_POST['paciente_telefono'])){
        $telefono = $_POST['paciente_telefono'];
    }
    if(isset($_POST['paciente_doi']) && !empty($_POST['paciente_doi'])){
        $doi = $_POST['paciente_doi'];
    }

    if(isset($_POST['paciente_doi']) || isset($_POST['paciente_telefono']) || isset($_POST['paciente_email']) || isset($_POST['paciente_dni']) || isset($_POST['paciente_apellido']) || isset($_POST['paciente_nombre'])){

        $checkPaciente = conexion();

        $checkPaciente = $checkPaciente->prepare("UPDATE paciente SET paciente_nombre=:nombre, paciente_apellido=:apellido, paciente_dni=:dni, paciente_email=:email, paciente_telefono=:telefono, paciente_doi=:doi WHERE paciente_dni=:dni");

        $marcadores = [
            ':nombre'   => $nombre,
            ':apellido' => $apellido,
            ':dni'      => $dni,
            ':email'    => $email,
            ':telefono' => $telefono,
            ':doi'      => $doi
        ];

        $checkPaciente = $checkPaciente->execute($marcadores);

    }
    


?> 