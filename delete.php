<?php
// se inicia la conexion a la base de datos
    include("database.php");
// traer la informacion con get
    $id = $_GET['id'];
    $codigo = $_GET['cod'];

    //echo $id."<br>";
    //echo $codigo."<br>";
//crear sql
    $sql = "DELETE FROM productos WHERE id = $id";
//ejecutar sql
    $conn->query($sql);

// mensaje de cofirmacion
    echo "<script languaje='javascript'>alert('Producto eliminado con exito')</script>.<br>";
        
    header("refresh:0;url=index.php");
    
?>