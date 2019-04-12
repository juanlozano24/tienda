<html>
    <body>
        <center><form name="frm1" action="insert.php" method="POST">
        <table class="egt">
        <br><br><h1>FORMULARIO DE REGISTRO:<h1><br><br>
<tr>
  <td>CODIGO DE PRODUCTO: </td>
  <td><input type="text" name="cod_prod"></div><br><br></td>
</tr>
<tr>
  <td>NOMBRE DE PRODUCTO: </td>
  <td><input type="text" name="nom_prod"></div><br><br></td>
</tr>
<tr>
  <td>CANTIDAD: </td>
  <td><input type="text" name="cantidad"><br><br></td>
</tr>
<tr>
    <td>IMAGEN: </td>
    <td><input type="text" name="imagen" ><br><br></td>
</tr>
</table>
<tr>
    <td><input type="submit" value="REGISTRAR"></td>
</tr>    
        </center>
        </body>
</html>

<?php
    include("database.php");

    echo "<table>";
    echo "<tr><th>Codigo</th><th>Nombre</th><th>Cantidad</th><th>..</th><th>...</th></tr>";

    $sql = "SELECT * FROM productos";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo "<tr>";
            echo "<td>".$row['codigo_pro']."</td>";
            echo "<td>".$row['nombre_pro']."</td>";
            echo "<td>".$row['cantidad']."</td>";
            echo "<td><a href='update.php'><img src = 'icons/edit.png' width='30'></a></td>";
            echo "<td><a href='delete.php'><img src = 'icons/delet.png' width='30'></a></td>";
            echo "</tr>";
        }

    }else{
        echo "No hay productos registrados";
    }
?>