<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$telef = $_POST['telefono'];
$dni = $_POST['dni'];
$doi = $_POST['doi'];
if (isset($nombre) && isset($apellido) && isset($email) && isset($telef) && isset($dni) && isset($doi)) {
    require_once "./../Models/newPaciente-model.php";
}
