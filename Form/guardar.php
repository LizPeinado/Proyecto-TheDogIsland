<?php   
    include("abre.php");
    $Nombre =$_POST['Nombre'];
    $Edad =$_POST['Edad'];
    $Genero =$_POST['Genero'];
    $Correo =$_POST['Correo'];
    $Calif =$_POST['Calif'];

    $consulta = "INSERT INTO opinion(Nombre, Edad, Genero, Correo, Calif) VALUES ('$Nombre','$Edad','$Genero','$Correo','$Calif')";

    if($conexion->query($consulta) === TRUE)
    {
        /*header("Location: index.php");*/
    }
    else
    {
        echo "Error: " . $consulta . "<br>" .$conexion->error;
    }
    $conexion->close();
?>