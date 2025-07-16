<?php 
    session_name("CW");
    session_start();

    $_SESSION['id'] = $authUser['usuario_id'];
    $_SESSION['nombre'] = $authUser['usuario_nombre'];
    $_SESSION['apellido'] = $authUser['usuario_apellido'];
    $_SESSION['usuario'] = $authUser['usuario_usuario'];
?>