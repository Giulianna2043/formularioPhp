<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario PHP y MYSQL</title>
    <link rel="stylesheet" href="../main.css">
</head>

<body>
        <?php
        include("conex.php");
        ?>
    <div class="contenedor">
        
        <fieldset style="width: 475px">
            <legend>
                FORMULARIO
            </legend>
            <form action="procesar.php" method="GET">
                <table>
                    <tr>
                        <td>Nombre:</td>
                        <td>
                            <input type="text" name="nombre">
                        </td>
                    </tr>
                    <tr>
                        <td>Apellido:</td>
                        <td>
                            <input type="text" name="apellido">
                        </td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td>
                            <input type="text" name="email">
                        </td>
                    </tr>
                    <tr>
                        <td>Telefono:</td>
                        <td>
                            <input type="text" name="telefon">
                        </td>
                    </tr>
                </table>
                <input type="submit" name="submit" value="ENVIAR">
            </form>
        </fieldset>
    </div>
    <footer>
        <center> by Lizbeth Giulianna Huamani Mercado</center>
    </footer>
</body>

</html>