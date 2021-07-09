<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Mi ejemplo PHP con XML</title>
        <link href="estilos.css" rel="stylesheet">
    </head>
    <body>
        <table border="1">
            <tr id="fila">
                <td>
                    Lenin
                </td>
                <td>Gordillo</td>
            </tr>
        </table>
        <input type="submit" value="Aceptar" class="miclaseDeEstilo">
        <?php
        echo 'Ejemplo con PHP para mostrar datos en XML <br>';
        echo '<h1>Listado de estudiantes Desarrollo Basado en Plataformas </h1><br>';

        $archivoXml = simplexml_load_file("Estudiantes.xml");

        foreach ($archivoXml->estudiante as $key => $estud) {
            echo "Estudiante: " . $estud->apellido." con cedula :" . $estud->cedula . "<br>";
            
        }
        ?>
        <select>
            <option>UNO</option>
            <option>DOS</option>
            <option>TRES</option>

        </select>
    </body>
</html>
