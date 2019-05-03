<?php
    $id = $_GET['id'];
    $cod = $_GET['cod'];
    $nom = $_GET['nom'];
    $can = $_GET['can'];

?>
<html>
    <body>
        <center><form name="frm1" action="insert.php" method="POST">
            <table class="egt">
            <tr>
            <td><input type="hidden" name="id" value=<?php echo $id; ?> required></div><br><br></td>
            </tr>
            <br><br><h1>FORMULARIO DE ACTUALIZACION DE PRODUCTOS:<h1><br><br>
            <tr>
            <td>CODIGO DE PRODUCTO: </td>
            <td><input type="text" name="cod_prod" value=<?php echo $cod; ?> required></div><br><br></td>
            </tr>
            <tr>
            <td>NOMBRE DE PRODUCTO: </td>
            <td><input type="text" name="nom_prod" value=<?php echo $nom; ?> required></div><br><br></td>
            </tr>
            <tr>
            <td>CANTIDAD: </td>
            <td><input type="text" name="cantidad" value=<?php echo $can; ?> required><br><br></td>
            </tr>
            <tr>
                <td>IMAGEN: </td>
                <td><input type="text" name="imagen" ><br><br></td>
            </tr>
            </table>
            <tr>
                <td><input type="submit" value="ACTUALIZAR"></td>
            </tr>    
        </center>
    </body>
</html>