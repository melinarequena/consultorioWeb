<?php
    require_once "main-model.php";
    
    if(count($marcadores) > 0) {
        $updatePaciente = conexion();
        
        // Use comma to separate fields in SET clause
        $sql = "UPDATE paciente SET " . implode(", ", $opciones) . " WHERE paciente_dni = :dni";
        
        $updatePaciente = $updatePaciente->prepare($sql);
        $marcadores[':dni'] = $dni;
        
        if($updatePaciente->execute($marcadores)) {
            echo '<script>window.location.href="./../Views/pacientes-view.php";</script>';
        }
    }
?>