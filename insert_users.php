<?php

    include("database.php");

    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["correo"];
    $pass = password_hash($_POST["contraseña"]);
    $img = $_POST["foto"];

    $sql = "insert into users(firstname,lastname,email,password,photo) 
    values ('$nombre','$apellido','$email','$pass','$img')";

     if($conn->query($sql)==TRUE){
        echo "<script languaje='javascript'>alert('Usuario registrado con exito')</script>.<br>";
        //echo "<br><a href='index.php'>Regresar</a>";
        header("refresh:0;url=login.php");
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

?>