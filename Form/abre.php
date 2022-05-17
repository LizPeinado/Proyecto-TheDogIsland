<?php

$conexion = new mysqli("localhost", "id18340810_martha_p", "B0ZctS_cRrEdmv", "id18340810_practicas");
    if($conexion){
        echo"la gestion fue exitosa!!";
        /*header("Location: index.php");*/
    }
    else
    {
        echo "Fallo la gestion";
    }
?>