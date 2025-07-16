<?php //funciones principales del sistema
function conexion(){
    $pdo = new PDO('mysql:host=localhost;dbname=consultorioWeb', 'root',''); //conexion al servidor
    return $pdo;
}
?>