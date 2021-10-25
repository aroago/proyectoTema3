 
<!DOCTYPE html>
<!--Aroa Granero Omañas 
Fecha Creacion: 21/10/2021
Fecha Modificacion: 21/10/2021 -->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="aroaGraneroOmañas">
        <title>Ejercicio 21</title>
        <style>
            ul{
                list-style-type: none;
                padding: 20px;
            }
            li{
                padding: 10px;
            }
        </style>
    </head>
    <body>
        <p>21. Construir un formulario para recoger un cuestionario realizado a una persona y enviarlo a una página Tratamiento.php para que muestre
            las preguntas y las respuestas recogidas</p>
        <form action="tratamiento.php" method="post">
            <ul>
                <li>
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre">
                </li>
              <li>
                    <label for="edad">Edad:</label>
                    <input type="text" id="edad" name="edad">
                </li>
                <li>
                    <input type="submit" value="Enviar">
                </li>
            </ul>
        </form>

    </body>
</html>
