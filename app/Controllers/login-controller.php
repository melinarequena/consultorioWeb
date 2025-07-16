<?php
    $error;
    
    require_once "./../Models/main-model.php";

    $user = $_POST['user'];
    $passw = $_POST['pass'];

    if(isset($user) && isset($passw) && $user != "" && $user != ""){
        $authUser = conexion();

        $authUser = $authUser->query("SELECT * FROM usuario WHERE usuario_usuario = '$user'");

        if($authUser->rowCount()==0){
            //usuario inexistente
            $error = '!U';

        }else{

            $authUser = $authUser->fetch();

            $userDB = $authUser['usuario_usuario'];
            $passDB = $authUser['usuario_clave'];

            if($userDB == $user){
                if($passDB == $passw){
                    require_once "./../Controllers/session-controller.php"; //creamos la sesion
                    $error = '';
                    echo 'todo ok';
                }else{
                    $error = '!HP'; //contrase;a incorrecta
                    echo 'mala password';
                }
            }
        }

    }
    

    if(isset($error) && $error == ''){
        echo "<script>
                window.location.href = './../Views/dashboard-view.php'; 
        </script>"; //redirecciona al menu principal
    }else{
        if(isset($error) && ($error == '!U' || $error == '!HP')){
            // echo "<script>
            //     window.location.href = './../Views/login-view.php'; 
            // </script>"; 

            require_once "./../Views/login-view.php";

            //manda a la vista
        }
    }
    
    

?>