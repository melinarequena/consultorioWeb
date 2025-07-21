<?php
require_once "main-model.php";

$validarPaciente = conexion();
$validarPaciente = $validarPaciente->query("SELECT paciente_dni FROM paciente WHERE paciente_dni = '$dni'");

if($validarPaciente->rowCount() == 0){

    $guardarPaciente = conexion();
    $guardarPaciente = $guardarPaciente->prepare("INSERT INTO paciente (paciente_dni, paciente_nombre, paciente_apellido, paciente_email, paciente_telefono, paciente_doi) VALUES(:dni,:nombre, :apellido, :email, :telef,  :doi)");

    $guardarPaciente->execute([
        ':nombre'   => $nombre,
        ':apellido' => $apellido,
        ':email'    => $email,
        ':telef'    => $telef,
        ':dni'      => $dni,
        ':doi'      => $doi
    ]);

    $guardarPaciente = null;

    $nuevoPaciente = conexion();
    $nuevoPaciente = $nuevoPaciente->query("SELECT paciente_dni FROM paciente WHERE paciente_dni = '$dni'");

    if($nuevoPaciente->rowCount() == 1){
        $error = '';
    }else{
        $error = '!P';
    }
}


?>