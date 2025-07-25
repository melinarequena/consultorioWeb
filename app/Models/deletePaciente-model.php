<?php
    require_once "main-model.php";
    if(isset($_POST['paciente_id'])){
        $dni = $_POST['paciente_id'];
        if(!empty($dni)){
            $checkPaciente = conexion();
            $checkPaciente = $checkPaciente->query("SELECT paciente_dni FROM paciente WHERE paciente_dni = '$dni'");

                if($checkPaciente->rowCount()==1){
                    $checkPaciente = null;
                    $deletePaciente = conexion();
                    $deletePaciente = $deletePaciente->prepare("DELETE FROM paciente WHERE paciente_dni = :dni");
                    $deletePaciente->execute([':dni'=>$dni]);

                    $checkPaciente = conexion();
                    $checkPaciente = $checkPaciente->query("SELECT paciente_dni FROM paciente WHERE paciente_dni = '$dni'");
                    if($checkPaciente->rowCount()==0){
                        echo '<script>window.location.href="./../Views/pacientes-view.php";</script>'; //refresheo automatico para que se vean los cambios
                    }
                    $deletePaciente = conexion();
                }else{
                    echo 'error';
                }
        }
    }
    
?>