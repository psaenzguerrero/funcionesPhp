<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if (isset($_POST["enviar"])) {
            $nombre = $_POST["x"];
            $numero = "";
            function cambio(&$num){
                if ($num>=9) {
                    $numero = "Sobresaliente";
                }elseif ($num<=8 && $num>=7) {
                    $numero = "Notable";
                }elseif ($num<=6 && $num>=5) {
                    $numero = "Suficiente";
                }elseif($num<5 ){
                    $numero = "Insuficiente";
                }
                return $numero;
            }
            echo "
                <table>
                    <tr>
                        <th>ALUMNO</th>
                        <th>$nombre</th>
                    </tr>
                    <tr>
                        <td>Matematicas</td>
                        <td>".cambio($_POST["y"])."</td>
                    </tr>
                    <tr>
                        <td>Lengua</td>
                        <td>".cambio($_POST["y2"])."</td>
                    </tr>
                    <tr>
                        <td>Historia</td>
                        <td>".cambio($_POST["y3"])."</td>
                    </tr>
                    <tr>
                        <td>Dibujo</td>
                        <td>".cambio($_POST["y4"])."</td>
                    </tr>  
                </table>
            ";
        }else{
        ?>
            <form action="" method="post" enctype="multipart/form-data">
                <label for="#">Escribe tu nombre:</label>
                <input type="text" name="x">
                <br>
                <label for="#">Escribe tu nota de Mates:</label>
                <input type="text" name="y">
                <br>
                <label for="#">Escribe tu nota de Lengua:</label>
                <input type="text" name="y2">
                <br>
                <label for="#">Escribe tu nota de Historia:</label>
                <input type="text" name="y3">
                <br>
                <label for="#">Escribe tu nota de Dibujo:</label>
                <input type="text" name="y4">
                <br>
                <input type="submit" name="enviar" value="Enviar">
            </form>
    <?php
        }  
    ?>
</body>
</html>