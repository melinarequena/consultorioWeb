<?php

    require_once "./../Models/main-model.php";

    $user = $_POST['user'];
    $passw = $_POST['pass'];

    if(isset($user) && isset($passw)){
        $authUser = conexion();

        $authUser = $authUser->query("SELECT * FROM usuario WHERE usuario_usuario = '$user'");

        if($authUser->rowCount()==0){
            //usuario inexistente
            $error = '!U';

        }else{

            $authUser = $authUser->fetch();

            $userDB = $authUser['usuario_usuario'];
            $passDB = $authUser['usuario_password'];

            if($userDB == $user){
                if(password_verify($passw, $passDB)){
                    require_once "./../Controllers/session-controller.php"; //creamos la sesion
                    $error = '';
                }else{
                    $error = '!HP'; //contrase;a incorrecta
                }
            }
        }

        echo "<script>
                    window.location.href = './../Controllers/login-controller.php';
            </script>";
    }
    

    



?>