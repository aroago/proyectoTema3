

<!DOCTYPE html>
<!--Aroa Granero Omañas 
Fecha Creacion: 08/10/2021
Fecha Modificacion: 08/10/2021 -->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="aroaGraneroOmañas">
        <title>Ejercicio17</title>
        <style>
            tr,td{
                height: 40px;
                border: solid 1px black;
                width: 40px;
                text-align: center;
                font-family: sans-serif
            }
            .vacio{
                background-color: grey;
            }

            .ocupado{
                background-color: red;
            }
        </style>
    </head>
    <body>
        <?php
        /*
         * 18. Recorrer el array anterior utilizando funciones para obtener el mismo resultado
         */
        $numFilas = 20;
        $numColumnas = 15;

        for ($fila = 1; $fila <= $numFilas; $fila++) {
            for ($columnas = 1; $columnas <= $numColumnas; $columnas++) {
                $arrayDeCine[$fila][$columnas] = "ASIENTO VACIO";
            }
        }

        $arrayDeCine[1][1] = "Aroa Granero Omanas";
        $arrayDeCine[1][2] = "Juan Jose Granero Omanas";
        $arrayDeCine[2][1] = "Heraclio";
        $arrayDeCine[2][2] = "Baldomero";
        $arrayDeCine[19][5] = "Spiderman";
        //ForEach
        echo "<h1>forEach()</h1>";
        function asientosCine($arrayDeCine){
           echo "<table>";
        foreach ($arrayDeCine as $valorFila):
            echo "<tr>";
            foreach ($valorFila as $personaSentada):
                if ($personaSentada != "ASIENTO VACIO"):
                    echo "<td class='ocupado'>" . $personaSentada . "</td>";
                else:
                    echo "<td class='vacio'>VACIO</td>";
                endif;
            endforeach;

            echo "</tr>";
        endforeach;
        echo "</table>"; 
            
        }
        asientosCine($arrayDeCine);
       
        ?>
    </body>
</html>

