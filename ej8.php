<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td{
            border: 1px solid black;
            margin: auto;
        }
    </style>
</head>
<body>
    
    <?php
        
        if (isset($_POST["enviar"])) {
            $nombre="";
            $fecha="";
            $fec="";

            function nombre(&$nom){
                $nombre = $nom;
                return $nombre;
            }
            function fecha(&$fec){
                $fecha = $fec;
                return $fecha;
            }
            function pago(&$pago){
                $fec = $pago;
                $fechaActual=getdate()[0];
                
                $fechaSegundos = strtotime($fec);
                $segundo = $fechaActual - $fechaSegundos;
                $dias = $segundo / (60 * 60 * 24);
                $precio = $dias * 5;
                return $precio;
            }
            echo "<table>";
                echo "<tr><td>NOMBRE</td><td>FECHA</td><td>RECARGA</td></tr>";
                    echo "<tr>";
                        echo "<td>".nombre($_POST["x"])."</td>";
                        echo "<td>".fecha($_POST["y"])."</td>";
                        if (pago($_POST["y"]) > 0) {
                            echo "<td>Tienes que pagar ".pago($_POST["y"])." €</td>";
                        }else{
                            echo "<td>No hace falta tener recarga</td>";
                        }
                    echo "</tr>";
                    echo "<tr>";
                        echo "<td>".nombre($_POST["x2"])."</td>";
                        echo "<td>".fecha($_POST["y2"])."</td>";
                        if (pago($_POST["y2"]) > 0) {
                            echo "<td>Tienes que pagar ".pago($_POST["y2"])." €</td>";
                        }else{
                            echo "<td>No hace falta tener recarga</td>";
                        }
                    echo "</tr>";
                    echo "<tr>";
                        echo "<td>".nombre($_POST["x3"])."</td>";
                        echo "<td>".fecha($_POST["y3"])."</td>";
                        if (pago($_POST["y3"]) > 0) {
                            echo "<td>Tienes que pagar ".pago($_POST["y3"])." €</td>";
                        }else{
                            echo "<td>No hace falta tener recarga</td>";
                        }
                echo "</tr>";
            echo "</table>";
        }else{
    ?>
            <form action="" method="post" enctype="multipart/form-data">
                <label for="#">Meta un Nombre:</label>
                <input type="text" name="x">
                <br>
                <label for="#">Meta una fecha:</label>
                <input type="date" name="y">
                <br>
                <br>
                <label for="#">Meta un Nombre:</label>
                <input type="text" name="x2">
                <br>
                <label for="#">Meta una fecha:</label>
                <input type="date" name="y2">
                <br>
                <br>
                <label for="#">Meta un Nombre:</label>
                <input type="text" name="x3">
                <br>
                <label for="#">Meta una fecha:</label>
                <input type="date" name="y3">
                <br>
                <br>
                <input type="submit" name="enviar" value="Enviar">
            </form>
    <?php
        }
    ?>
</body>
</html>