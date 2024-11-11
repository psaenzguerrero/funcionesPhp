<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php       
        function generarBoletin($nombre, $apellidos, $nota1, $nota2, $nota3) {
            // Calcular la nota final
            $notaFinal = round(($nota1 + $nota2 + $nota3) / 3, 2);
    
            // Mostrar el boletín en una tabla
            echo "<table>";
            echo "<tr><th colspan='2'>Boletín de $nombre $apellidos</th></tr>";
            echo "<tr><td>Nombre</td><td>$nombre</td></tr>";
            echo "<tr><td>Apellidos</td><td>$apellidos</td></tr>";
            echo "<tr><td>Nota 1</td><td>$nota1</td></tr>";
            echo "<tr><td>Nota 2</td><td>$nota2</td></tr>";
            echo "<tr><td>Nota 3</td><td>$nota3</td></tr>";
            echo "<tr><th>Nota Final</th><th>$notaFinal</th></tr>";
            echo "</table><br>";
        }
    
        // Verificar si se han enviado los datos
        if (isset($_POST['enviar'])) {
            // Extraer y sanitizar los datos de cada alumno
            $nombre1 = ($_POST['n1']);
            $apellidos1 = ($_POST['a1']);
            $nota1_1 = (float) $_POST['e1'];
            $nota2_1 = (float) $_POST['e2'];
            $nota3_1 = (float) $_POST['e3'];
    
            $nombre2 =($_POST['n2']);
            $apellidos2 =($_POST['a2']);
            $nota1_2 = (float) $_POST['e12'];
            $nota2_2 = (float) $_POST['e22'];
            $nota3_2 = (float) $_POST['e32'];
    
            $nombre3 =($_POST['n3']);
            $apellidos3 =($_POST['a3']);
            $nota1_3 = (float) $_POST['e13'];
            $nota2_3 = (float) $_POST['e23'];
            $nota3_3 = (float) $_POST['e33'];
    
            // Generar boletines para cada alumno
            generarBoletin($nombre1, $apellidos1, $nota1_1, $nota2_1, $nota3_1);
            generarBoletin($nombre2, $apellidos2, $nota1_2, $nota2_2, $nota3_2);
            generarBoletin($nombre3, $apellidos3, $nota1_3, $nota2_3, $nota3_3);
        } else {
            ?>
            
        <form action="#" method="post" enctype="multipart/form-data">
        <label for="a1">Nombre del alumno1:</label>
        <input type="text" name="n1">
        <br>
        <br>
        <label for="a1">Apellido del alumno1:</label>
        <input type="text" name="a1">
        <br>
        <br>
        <label for="a1">Examen 1 del alumno1:</label>
        <input type="text" name="e1">
        <br>
        <br>
        <label for="a1">Examen 2 del alumno1:</label>
        <input type="text" name="e2">
        <br>
        <br>
        <label for="a1">Examen 3 del alumno1:</label>
        <input type="text" name="e3">
        <br>
        <br>

        <label for="a1">Nombre del alumno2:</label>
        <input type="text" name="n2">
        <br>
        <br>
        <label for="a1">Apellido del alumno2:</label>
        <input type="text" name="a2">
        <br>
        <br>
        <label for="a1">Examen 1 del alumno2:</label>
        <input type="text" name="e12">
        <br>
        <br>
        <label for="a1">Examen 2 del alumno2:</label>
        <input type="text" name="e22">
        <br>
        <br>
        <label for="a1">Examen 3 del alumno2:</label>
        <input type="text" name="e32">
        <br>
        <br>

        <label for="a1">Nombre del alumno3:</label>
        <input type="text" name="n3">
        <br>
        <br>
        <label for="a1">Apellido del alumno3:</label>
        <input type="text" name="a3">
        <br>
        <br>
        <label for="a1">Examen 1 del alumno3:</label>
        <input type="text" name="e13">
        <br>
        <br>
        <label for="a1">Examen 2 del alumno3:</label>
        <input type="text" name="e23">
        <br>
        <br>
        <label for="a1">Examen 3 del alumno3:</label>
        <input type="text" name="e33">
        <br>
        <br>
        <input type="submit" name="enviar" value="Enviar">
    </form>
    <?php     
        }
    ?>
</body>
</html>