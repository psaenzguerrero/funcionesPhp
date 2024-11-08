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
            $laboral = $_POST["x"];
            $festivos = $_POST["y"];
            function colorL(&$colorin){

            }
            function colorF(&$colorado){

            }
            
        }else{
    ?>
        <form action="#" method="post">
            <label for="#">Elige que mes quieres:</label>
            <select name="Meses" id="#">
                <option value="Enero">Enero</option>
                <option value="Febrero">Febrero</option>
                <option value="Marzo">Marzo</option>
                <option value="Abril">Abril</option>
                <option value="Mayo">Mayo</option>
                <option value="Junio">Junio</option>
                <option value="Julio">Julio</option>
                <option value="Agosto">Agosto</option>
                <option value="Septiembre">Septiembre</option>
                <option value="Octubre">Octubre</option>
                <option value="Noviembre">Noviembre</option>
                <option value="Diciembre">Diciembre</option>          
            </select>
            <br>
            <label for="#">Elige el color para los dias laborales:</label>
            <input type="text" name="x">
            <br>
            <label for="#">Elige el color para los dias laborales:</label>
            <input type="text" name="y">
            <br>
            <br>
            <input type="submit" name="enviar" value="Enviar">
        </form>
    <?php        
        }
    ?>
</body>
</html>