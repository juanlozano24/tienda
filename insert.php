<?php

    include("database.php");

    $codigo = $_POST["cod_prod"];
    $nombre = $_POST["nom_prod"];
    $cantidad = $_POST["cantidad"];

    $sql = "insert into productos(codigo_pro,nombre_pro,cantidad) 
    values ('$codigo','$nombre',$cantidad)";

     if($conn->query($sql)==TRUE){
        echo "Producto registrado con exito.<br>";
        echo "<br><a href='index.php'>Regresar</a>";
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

?>