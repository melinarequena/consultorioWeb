<?php

    $opciones = [];
    $marcadores = [];

    if(!empty($_POST['dni'])){
        $dni = $_POST['dni'];
            echo "<script>console.log('dni')</script>";


        if(!empty($_POST['nombre'])){
            $nombre = $_POST['nombre'];
            array_push($opciones,"paciente_nombre=:nombre");
            $marcadores[':nombre'] = $nombre;
                echo "<script>console.log('name')</script>";

        
        }

        if(!empty($_POST['apellido'])){
            $apellido = $_POST['apellido'];
            array_push($opciones, "paciente_apellido=:apellido");
            $marcadores[':apellido'] = $apellido;
                echo "<script>console.log('ape')</script>";

            
        }

        if(!empty($_POST['email'])){
            $email = $_POST['email'];
            array_push($opciones, "paciente_email=:email");
            $marcadores[':email'] = $email;
                echo "<script>console.log('email')</script>";

            
        }
        if(!empty($_POST['telefono'])){
            $telefono = $_POST['telefono'];
            array_push($opciones, "paciente_telefono=:telefono");
            $marcadores[':telefono'] = $telefono;
                echo "<script>console.log('tel')</script>";

        }

        if(!empty($_POST['doi'])){
            $doi = $_POST['doi'];
            array_push($opciones, "paciente_doi=:doi");
            $marcadores[':doi'] = $doi;
                echo "<script>console.log('vdoi')</script>";

            
        }

    }
    echo "<script>console.log('out')</script>";

    require_once "./../Models/modificarPaciente-model.php";


?>