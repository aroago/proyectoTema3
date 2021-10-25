<!DOCTYPE html>
<!--Aroa Granero Omañas 
Fecha Creacion: 19/10/2021
Fecha Modificacion: 19/10/2021 -->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="aroaGraneroOmañas">
        <title>Ejercicio 12</title>
        <style>
            table,tr,td,th{
                border: solid 2px black;
            }
            .celda{
                background-color: #78C7C6;
            }
            .celda2{
                background-color: #C8EAEA;
            }
            h1{
                color:#581845;
            }
            h2{
                color:#0E6655;
            }
        </style>
    </head>
    <body>
        <?php
        //mostrar variables super globales;
        echo '<h1>Variable $GLOBALS</h1>';
        echo '<h2>Mediante Print_r</h2>';
        echo "<pre>";
        print_r($GLOBALS);
        echo "</pre>";
        echo '<h2>Mediante foreach</h2>';
        echo '<table><tr><th>Clave</th><th>Valor</th></tr>';
        foreach ($GLOBALS as $key => $value) {
            echo '<tr>';
            echo "<td class='celda'>$key</td>";
            echo "<td class='celda2'>$value</td>";
            echo '</tr>';
        }
        echo '</table>';

        //Variable _SERVER
        echo '<h1>Variable $_SERVER</h1>';
        echo '<h2>Mediante Print_r</h2>';
        echo "<pre>";
        print_r($_SERVER);
        echo "</pre>";
        echo '<h2>Mediante foreach</h2>';
        echo '<table><tr><th>Clave</th><th>Valor</th></tr>';
        foreach ($_SERVER as $key => $value) {
            echo '<tr>';
            echo "<td class='celda'>$key</td>";
            echo "<td class='celda2'>$value</td>";
            echo '</tr>';
        }
        echo '</table>';
        //Variable _REQUEST
        echo '<h1>Variable $_REQUEST</h1>';
        echo '<h2>Mediante Print_r</h2>';
        print_r($_REQUEST);
        echo '<h2>Mediante foreach</h2>';
        echo '<table><tr><th>Clave</th><th>Valor</th></tr>';
        foreach ($_REQUEST as $key => $value) {
            echo '<tr>';
            echo "<td class='celda'>$key</td>";
            echo "<td class='celda2'>$value</td>";
            echo '</tr>';
        }
        echo '</table>';
        //Variable _POST
        echo '<h1>Variable $_POST</h1>';
        echo '<h2>Mediante Print_r</h2>';
        print_r($_POST);
        echo '<h2>Mediante foreach</h2>';
        echo '<table><tr><th>Clave</th><th>Valor</th></tr>';
        foreach ($_POST as $key => $value) {
            echo '<tr>';
            echo "<td class='celda'>$key</td>";
            echo "<td class='celda2'>$value</td>";
            echo '</tr>';
        }
        echo '</table>';
        //Variable _GET
        echo '<h1>Variable $_GET</h1>';
        echo '<h2>Mediante Print_r</h2>';
        print_r($_GET);
        echo '<h2>Mediante foreach</h2>';
        echo '<table><tr><th>Clave</th><th>Valor</th></tr>';
        foreach ($_GET as $key => $value) {
            echo '<tr>';
            echo "<td class='celda'>$key</td>";
            echo "<td class='celda2'>$value</td>";
            echo '</tr>';
        }
        echo '</table>';
        //variable $_SESSION
        echo '<h1>Variable $_SESSION</h1>';
        echo '<h2>Mediante Print_r</h2>';
        print_r($_SESSION);
        echo '<h2>Mediante foreach </h2>';
        echo '<table><tr><th>Clave</th><th>Valor</th></th>';
        foreach ($_SESSION as $key => $value) {
            echo '<tr>';
            echo "<td>$key</td>";
            echo "<td>$value</td>";
            echo '</tr>';
        }
        echo '</table>';
        //variable $_FILES
        echo '<h1>Variable $_FILES</h1>';
        echo '<h2>Mediante Print_r</h2>';
        print_r($_FILES);
        echo '<h2>Mediante foreach </h2>';
        echo '<table><tr><th>Clave</th><th>Valor</th></th>';
        foreach ($_FILES as $key => $value) {
            echo '<tr>';
            echo "<td>$key</td>";
            echo "<td>$value</td>";
            echo '</tr>';
        }
        echo '</table>';
        //variable $_COOKIE
        echo '<h1>Variable $_COOKIE</h1>';
        echo '<h2>Mediante Print_r</h2>';
        print_r($_COOKIE);
        echo '<h2>Mediante foreach </h2>';
        echo '<table><tr><th>Clave</th><th>Valor</th></th>';
        foreach ($_COOKIE as $key => $value) {
            echo '<tr>';
            echo "<td>$key</td>";
            echo "<td>$value</td>";
            echo '</tr>';
        }
        echo '</table>';
        ?>

    </body>
</html>
