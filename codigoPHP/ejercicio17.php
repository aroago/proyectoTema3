
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
        /* 17. Inicializar un array (bidimensional con dos índices numéricos) donde almacenamos el nombre de las personas que tienen reservado el
          asiento en un teatro de 20 filas y 15 asientos por fila. (Inicializamos el array ocupando únicamente 5 asientos). Recorrer el array con
          distintas técnicas (foreach(), while(), for()) para mostrar los asientos ocupados en cada fila y las personas que lo ocupan */
       
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
        //while
        echo "<h1>While</h1>";
        $i = 1;
        echo "<table>";
        while ($i <= $numFilas) {
            echo "<tr>";
            $j = 1;
            while ($j <= $numColumnas){
                $asientoActual = $arrayDeCine[$i][$j];
                if ($asientoActual != "ASIENTO VACIO"):
                    echo "<td class='ocupado'>" . $asientoActual . "</td>";
                else:
                    echo "<td class='vacio'>VACIO</td>";
                endif;  
                $j++;
            } 
            $i++;
            echo "</tr>";
        }
        echo "</table>";
        //for()
        echo "<h1>for()</h1>";
        echo "<table>";
        for ($fila = 1; $fila <= $numFilas; $fila++) {
            echo "<tr>";
            for ($columnas = 1; $columnas <= $numColumnas; $columnas++) {
                $asientoActual=$arrayDeCine[$fila][$columnas];
                if ($asientoActual != "ASIENTO VACIO"):
                    echo "<td class='ocupado'>" . $asientoActual . "</td>";
                else:
                    echo "<td class='vacio'>VACIO</td>";
                endif;  
            }
            echo "</tr>";
        }
        echo "</table>";
         ?>
    </body>
</html>
