<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tienda";

    //Create connection to database

    $conn = new mysqli($servername,$username,$password,$dbname);
    
    //cheking

    if($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
    }else{
        //echo "I am connected to tienda";
    }
?>