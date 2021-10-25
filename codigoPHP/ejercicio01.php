<!DOCTYPE html>
<!--Aroa Granero Omañas 
Fecha Creacion: 14/10/2021
Fecha Modificacion: 14/10/2021 -->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="aroaGraneroOmañas">
        <title>Ejercicio 1</title>
        <style>
            strong{color :red;}
        </style>
    </head>
    <body>
        <?php
        $string = "ana"; //variable tipo String
        $int = 23; //variable int
        $float = 25.32; //variable float
        $bool = true; //Variable booleana
        
        //Utilizando "echo" para visualizar las variables
        echo "<h2>Usando ECHO</h2>";
        echo "<p>La variable \$string tiene un valor <strong> $string </strong> es de tipo " . gettype($string) . " </p>";
        echo "<p>La variable \$int  tiene un valor <strong> $int </strong> y es de tipo " . gettype($int) . " </p>";
        echo "<p>La variable \$float tiene un valor de <strong> $float </strong> y es de tipo " . gettype($float) . " </p>";
        echo "<p>La variable \$bool tiene un valor de <strong> $bool </strong> y es de tipo " . gettype($bool) . " </p>";

        //Utilizando "Print" para visualizar las variables
        echo "<h2>Usando PRINT</h2>";
        print "<p>La variable \$string tiene un valor <strong> $string  </strong> es de tipo " . gettype($string) . " </p>";
        print "<p>La variable \$int  tiene un valor <strong> $int </strong> y es de tipo " . gettype($int) . " </p>";
        print "<p>La variable \$float tiene un valor de <strong> $float </strong> y es de tipo " . gettype($float) . " </p>";
        print "<p>La variable \$bool tiene un valor de <strong> $bool </strong> y es de tipo " . gettype($bool) . " </p>";

        //Utilizando "printF" para visualizar las variables
        echo "<h2>Usando PRINTF</h2>";
        printf("La variable \$float tiene un valor de <strong> $float </strong> y es de tipo Float");
        printf("<p>La variable \$string tiene un valor <strong> $string  </strong> es de tipo " . gettype($string) . " </p>");
        printf("<p>La variable \$int  tiene un valor <strong> $int </strong> y es de tipo " . gettype($int) . " </p>");
        printf("<p>La variable \$float tiene un valor de  <strong> $float </strong> y es de tipo " . gettype($float) . " </p>");
        printf("<p>La variable \$bool tiene un valor de <strong> $bool </strong> y es de tipo " . gettype($bool) . " </p>");
 
        //Utilizando "print_r" para visualizar las variables
        echo "<h2>Usando PRINT_R</h2>";
         print_r("La variable \$float tiene un valor de <strong> $float </strong> y es de tipo Float");
        print_r("<p>La variable \$string tiene un valor <strong> $string </strong> es de tipo " . gettype($string) . " </p>");
        print_r("<p>La variable \$int  tiene un valor <strong> $int </strong> y es de tipo " . gettype($int) . " </p>");
        print_r("<p>La variable \$float tiene un valor de <strong> $float </strong> y es de tipo " . gettype($float) . " </p>");
        print_r("<p>La variable \$bool tiene un valor de <strong> $bool </strong> y es de tipo " . gettype($bool) . " </p>");
 
        //Utilizando "var_dump" para visualizar las variables
        echo "<h2>Usando var_dump</h2>";
        var_dump($string);
        echo "<br>";
        var_dump($int);
         echo "<br>";
        var_dump($float);
        echo "<br>";
        var_dump($bool);
        echo "<br>";
        
        
        ?>
    </body>
</html>
