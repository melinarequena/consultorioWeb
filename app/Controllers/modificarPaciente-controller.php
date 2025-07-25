<?php
$opciones = [];
$marcadores = [];
if (!empty($_POST['dni'])) {
    $dni = $_POST['dni'];
    if (!empty($_POST['nombre'])) {
        $nombre = $_POST['nombre'];
        array_push($opciones, "paciente_nombre=:nombre");
        $marcadores[':nombre'] = $nombre;
    }
    if (!empty($_POST['apellido'])) {
        $apellido = $_POST['apellido'];
        array_push($opciones, "paciente_apellido=:apellido");
        $marcadores[':apellido'] = $apellido;
    }
    if (!empty($_POST['email'])) {
        $email = $_POST['email'];
        array_push($opciones, "paciente_email=:email");
        $marcadores[':email'] = $email;
    }
    if (!empty($_POST['telefono'])) {
        $telefono = $_POST['telefono'];
        array_push($opciones, "paciente_telefono=:telefono");
        $marcadores[':telefono'] = $telefono;
    }
    if (!empty($_POST['doi'])) {
        $doi = $_POST['doi'];
        array_push($opciones, "paciente_doi=:doi");
        $marcadores[':doi'] = $doi;
    }
}
require_once "./../Models/modificarPaciente-model.php";
?>