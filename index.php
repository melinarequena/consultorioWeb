<?php

if(!isset($_SESSION['id'])){
    echo "<script>
        window.location.href = './app/Views/login-view.php';
    </script>";
}


?>