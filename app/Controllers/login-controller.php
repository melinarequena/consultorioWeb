<?php
    $error;
    
    require_once "./../Models/login-model.php";

    if($error == ''){
        echo "<script>
                window.location.href = './../Views/dashboard-view.php'; 
        </script>"; //redirecciona al menu principal
    }else{
        if($error == '!U' || $error == '!HP'){
            // echo "<script>
            //     window.location.href = './../Views/login-view.php'; 
            // </script>"; 

            require_once "./../Views/login-view.php";

            //manda a la vista
        }
    }
    
    

?>