<!DOCTYPE html>
<!--Aroa Granero Omañas 
Fecha Creacion: 26/10/2021
Fecha Modificacion: 26/10/2021 -->
<!--25. Trabajar en PlantillaFormulario.php mi plantilla para hacer formularios como churros.-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="aroaGraneroOmañas">
        <title>Ejercicio 24</title>
        <style>
            body{
                background-image: url("../webroot/img/fondo.jpg");
            }
            ul{
                list-style-type: none;
                padding: 20px;
                display: inline-block;
            }
            li{
                padding: 10px;
                
            }
            fieldset{
                 background-color: white;
            }
            .form {
                width: 100%;
                max-width: 600px;
                margin: 0 auto;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                display: block;
            }

            .form input {
                width: 90%;
                height: 30px;
                margin: 0.5rem;
            }

            .form button {
                padding: 0.5em 1em;
                border: none;
                background: rgb(100, 200, 255);
                cursor: pointer;
            }
            span{
                color: red;
            }
            label{
               font-weight: bold;
            }
        </style>
    </head>
    <body>
        <?php
        require_once '../core/210322ValidacionFormularios.php'; // incluyo la libreria de validacion de los campos del formulario

        define("OBLIGATORIO", 1); // defino e inicializo la constante a 1

        define("MAX_TAMANYO_ALFABETICO", 50); // defino e inicializo el tamaño maximo de un campo alfabetico
        define("MIN_TAMANYO_ALFABETICO", 2); // defino e inicializo el tamaño minimo de un campo alfabetico


        $entradaOK = true; // declaro la variable que determiná si esta bien la entrada de los campos

        $aErrores = [//declaro e inicializo el array de errores
            'alfanumericoObligatorio' => null,
            'alfanumericoNoObligatorio' => null,
            'alfabeticoObligatorio' => null,
            'alfabeticoNoObligatorio' => null,
            'enteroObligatorio' => null,
            'enteroNoObligatorio' => null,
            'floatObligatorio' => null,
            'floatNoObligatorio' => null,
            'cpObligatorio' => null,
            'cpNoObligatorio' => null,
            'dniObligatorio' => null,
            'dniNoObligatorio' => null,
            'elementoListaObligatorio' => null,
            'elementoListaNoObligatorio' => null,
            'emailObligatorio' => null,
            'emailNoObligatorio' => null,
            'fechaObligatorio' => null,
            'fechaNoObligatorio' => null,
            'passwordObligatorio' => null,
            'passwordNoObligatorio' => null,
            'telefonoObligatorio' => null,
            'telefonoNoObligatorio' => null,
            'urlObligatorio' => null,
            'urlNoObligatorio' => null,
        ];

        $aRespuesta = [// declaro e inicializo el array de los campos del formulario

            'alfanumericoObligatorio' => null,
            'alfanumericoNoObligatorio' => null,
            'alfabeticoObligatorio' => null,
            'alfabeticoNoObligatorio' => null,
            'enteroObligatorio' => null,
            'enteroNoObligatorio' => null,
            'floatObligatorio' => null,
            'floatNoObligatorio' => null,
            'cpObligatorio' => null,
            'cpNoObligatorio' => null,
            'dniObligatorio' => null,
            'dniNoObligatorio' => null,
            'elementoListaObligatorio' => null,
            'elementoListaNoObligatorio' => null,
            'emailObligatorio' => null,
            'emailNoObligatorio' => null,
            'fechaObligatorio' => null,
            'fechaNoObligatorio' => null,
            'passwordObligatorio' => null,
            'passwordNoObligatorio' => null,
            'telefonoObligatorio' => null,
            'telefonoNoObligatorio' => null,
            'urlObligatorio' => null,
            'urlNoObligatorio' => null,
        ];


        if (isset($_REQUEST["submit"])) { // compruebo que el usuario le ha dado a enviar
            $aErrores['alfabeticoObligatorio'] = validacionFormularios::comprobarAlfabetico($_REQUEST['alfabeticoObligatorio'], MAX_TAMANYO_ALFABETICO, MIN_TAMANYO_ALFABETICO, OBLIGATORIO); // valido que el nombre esta bien y que la ha introducido
            $aErrores['alfabeticoNoObligatorio'] = validacionFormularios::comprobarAlfabetico($_REQUEST['alfabeticoNoObligatorio'], MAX_TAMANYO_ALFABETICO, MIN_TAMANYO_ALFABETICO); // valido que el nombre esta bien y que la ha introducido
           

            foreach ($aErrores as $campo => $error) { // reocrro el array de errores
                if ($error != null) { // compruebo si hay algun elemento distinto de null
                    //Limpieza del campo.
                    $_REQUEST[$campo] = ''; // reocrro el array de errores
                    $entradaOK = false; // le doy el valor false a $entradaOK
                }
            }
        } else { // si el usuario no le ha dado al boton de enviar
            $entradaOK = false; // le doy el valor false a $entradaOK
        }

        if ($entradaOK) { // si la entrada esta bien
            $aRespuesta['alfabeticoObligatorio'] = $_REQUEST['alfabeticoObligatorio']; // recojo el valor del nombre en el array del formulario
            $aRespuesta['alfabeticoNoObligatorio'] = $_REQUEST['alfabeticoNoObligatorio']; // recojo el valor del CP en el array del formulario
            //Muestro los datos introducidos
            echo "<h2>Datos introducidos</h2>";
            echo "<p>Alfabetico Obligatorio: " . $aRespuesta['alfabeticoObligatorio'] . "</p>";
            echo "<p>Alfabetico No Obligatorio: " . $aRespuesta['alfabeticoNoObligatorio'] . "</p>";
            //Mostrado del contenido de la variable $_REQUEST
            echo"<pre>";
            print_r($_REQUEST); //visuluza el array que contiene los datos.
            echo"</pre>";
        } else { // si hay algun campo de la entrada que este mal
            ?> 

  <form name="formulario" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="form">
                <fieldset>
                    <legend>Datos personales: </legend>
                    <ul>
                        <li>
                                <label for="alfabeticoObligatorio">Alfabetico Obligatorio: *</label>
                                <input style="background-color:#CCF8F4;" type="text" name="alfabeticoNoObligatorio" value="<?php echo $_REQUEST['alfabeticoObligatorio'] ?>">
                        </li>
                        <li><?php echo '<span>' . $aErrores['alfabeticoObligatorio'] . '</span>' ?></li>
                        <li>
                                <label for="alfabeticoNoObligatorio">Alfabetico Opcional: </label>
                                <input style="background-color:#D9CCF8;" type="text" name="alfabeticoNoObligatorio" value="<?php echo $_REQUEST['alfabeticoNoObligatorio'] ?>">
                        </li>
                        <li><?php echo '<span>' . $aErrores['alfabeticoNoObligatorio'] . '</span>' ?></li>
                        <li>  
                                <!--Type "Text"-->
                               <label for="dni">DNI</label><br>
                                <input type="text" id="dni" name="dni" value="<?php echo $_REQUEST['dni'] ?>"><br><br>	
                        </li>
                        <li><?php echo '<span>' . $aErrores['dni'] . '</span>' ?></li>
                        <li>
                                <!--Type "email" para el correo electronico -->
                                <label for="email" >Correo Electrónico:</label>
                                <input type="email" name="email" id="email" value="<?php echo $_REQUEST['email'] ?>"><br><br>
                        </li>
                        <li><?php echo '<span>' . $aErrores['email'] . '</span>' ?></li>
                        <li>
                                <!--Type "tel" Contiene "pattern" que pone un rango y "placeholder"
                                        para indicar al usuario lo que poner -->
                                <label for="tel" >Teléfono:</label>
                                <input name="tel" type="tel" id="tel" value="<?php echo $_REQUEST['tel'] ?>"><br><br>
                        </li>
                        <li><?php echo '<span>' . $aErrores['tel'] . '</span>' ?></li>
                        <li>
                                <!--Type "date" para la fecha -->
                                <label for="fecha" >Fecha de Nacimiento</label>
                                <input type="date" name="date" id="fecha" value="<?php echo $_REQUEST['date'] ?>"><br><br>                            
                          
                        </li>
                        <li><?php echo '<span>' . $aErrores['date'] . '</span>' ?></li>
                        <li>
                            <div>
                                <label for="codigoPostal">Codigo Postal:  </label>
                                <input style="background-color:#D9CCF8;" type="text" name="codigoPostal" placeholder="Introduzca su CP" value="<?php echo $_REQUEST['codigoPostal'] ?>">
                            </div>
                        </li>
                        <li> <?php echo '<span>' . $aErrores['codigoPostal'] . '</span>' ?></li>
                        <li>
                            <input type="submit" name="submit" value="enviar">
                        </li>
                    </ul>
                </fieldset>
            </form>

            <?php
        }
        ?>
    </body>
</html>
