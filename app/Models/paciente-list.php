<?php
require_once "main-model.php";
$pacientes = conexion();
$pacientes = $pacientes->query("SELECT * FROM paciente ORDER BY paciente_apellido");
if ($pacientes->rowCount() == 0) {
    echo 'no hay registros';
} else {
    $pacientes = $pacientes->fetchAll();
    foreach ($pacientes as $paciente) {
        echo '<tr>
                    <td>' . $paciente['paciente_nombre'] . '</td>
                    <td>' . $paciente['paciente_apellido'] . '</td>
                    <td>' . $paciente['paciente_dni'] . '</td>
                    <td>' . $paciente['paciente_email'] . '</td>
                    <td>' . $paciente['paciente_telefono'] . '</td>
                    <td>' . $paciente['paciente_doi'] . '</td>
                    <td><a>Acceso a la HC</a></td>
                    <td>
                        <form method="post" action="./../Models/deletePaciente-model.php">
                            <input type="hidden" name="paciente_id" value=' . $paciente['paciente_dni'] . '>
                            <button style="cursor: pointer" type="submit"> X </button>
                        </form>

                        
                        <button 
                            style="cursor: pointer" 
                            class="open-modificarPaciente-modal" 
                            data-dni="' . $paciente['paciente_dni'] . '" 
                            data-nombre="' . $paciente['paciente_nombre'] . '" 
                            data-apellido="' . $paciente['paciente_apellido'] . '" 
                            data-email="' . $paciente['paciente_email'] . '" 
                            data-telefono="' . $paciente['paciente_telefono'] . '" 
                            data-doi="' . $paciente['paciente_doi'] . '"> 
                            M 
                        </button>
                    </td>
                <tr>';
    }
}
