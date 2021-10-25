
<!DOCTYPE html>
<!--Aroa Granero Omañas 
Fecha Creacion: 14/10/2021
Fecha Modificacion: 14/10/2021 -->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="aroaGraneroOmañas">
        <title>Ejercicio 2</title>
    </head>
    <body>
        <?php
        $heredoc = <<<TEXT
                <strong>Cadena de string con Heredoc</strong></br>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod </br>
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim </br>
                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip </br>
                ex ea commodo consequat.
                TEXT;
        echo $heredoc;
        ?>
    </body>
</html>
