<?php

    include("database.php");

    $codigo = $_POST["cod_prod"];
    $nombre = $_POST["nom_prod"];
    $cantidad = $_POST["cantidad"];

    $sql = "insert into productos(codigo_pro,nombre_pro,cantidad) 
    values ('$codigo','$nombre',$cantidad)";

     if($conn->query($sql)==TRUE){
        echo "<script languaje='javascript'>alert('Producto registrado con exito')</script>.<br>";
        //echo "<br><a href='index.php'>Regresar</a>";
        header("refresh:0;url=index.php");
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

?>