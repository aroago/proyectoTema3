<!DOCTYPE html>
<!--Aroa Granero Omañas 
Fecha Creacion: 26/10/2021
Fecha Modificacion: 08/11/2021 -->
<!--25. Trabajar en PlantillaFormulario.php mi plantilla para hacer formularios como churros.-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="aroaGraneroOmañas">
        <title>Ejercicio 25</title>
        <style>
            body{
                background-image: url("../webroot/img/fondo.jpg");
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
        //Importa la librería de validación
        //Inicialización de variables
        include "../core/210322ValidacionFormularios.php";
        //Inicialización de variables
        $entradaOK = true; //Inicialización de la variable que nos indica que todo va bien
        $aErrores = [
            'alfabeticoObligatorio' => null,
            'alfabeticoOpcional' => null,
            'alfanumericoObligatorio' => null,
            'alfanumericoOpcional' => null,
            'dniObligatorio' => null,
            'dniOpcional' => null,
            'decimalObligatorio' => null,
            'decimalOpcional' => null,
            'numericoObligatorio' => null,
            'numericoOpcional' => null,
            'fechaObligatorio' => null,
            'fechaOpcional' => null,
            'telefonoObligatorio' => null,
            'telefonoOpcional' => null,
            'codigopostalObligatorio' => null,
            'codigopostalOpcional' => null,
            'urlObligatorio' => null,
            'urlOpcional' => null,
            'emailObligatorio' => null,
            'emailOpcional' => null,
            'textolargoObligatorio' => null,
            'textolargoOpcional' => null,
            'radioObligatorio' => null,
            'radioOpcional' => null,
            'rangoObligatorio' => null,
            'rangoOpcional' => null,
            'listaObligatorio' => null,
            'listaOpcional' => null
        ];
        $aRespuestas = [
            'alfabeticoObligatorio' => null,
            'alfabeticoOpcional' => null,
            'alfanumericoObligatorio' => null,
            'alfanumericoOpcional' => null,
            'dniObligatorio' => null,
            'dniOpcional' => null,
            'decimalObligatorio' => null,
            'decimalOpcional' => null,
            'numericoObligatorio' => null,
            'numericoOpcional' => null,
            'fechaObligatorio' => null,
            'fechaOpcional' => null,
            'telefonoObligatorio' => null,
            'telefonoOpcional' => null,
            'codigopostalObligatorio' => null,
            'codigopostalOpcional' => null,
            'urlObligatorio' => null,
            'urlOpcional' => null,
            'emailObligatorio' => null,
            'emailOpcional' => null,
            'textolargoObligatorio' => null,
            'textolargoOpcional' => null,
            'radioObligatorio' => null,
            'radioOpcional' => null,
            'rangoObligatorio' => null,
            'rangoOpcional' => null,
            'listaObligatorio' => null,
            'listaOpcional' => null
        ];
        // Si ya se ha pulsado el boton "Enviar"
        if (!empty($_REQUEST['enviar'])) {
            //realizar las validaciones. Si la respuesta está mal, la función carga la variable con un mensaje de error
            //si no, se queda vacía
            $aErrores['alfabeticoObligatorio'] = validacionFormularios::comprobarAlfabetico($_REQUEST['alfabeticoObligatorio'], 1000, 1, 1);

            $aErrores['alfabeticoOpcional'] = validacionFormularios::comprobarAlfabetico($_REQUEST['alfabeticoOpcional'], 1000, 1, 0);

            $aErrores['alfanumericoObligatorio'] = validacionFormularios::comprobarAlfanumerico($_REQUEST['alfanumericoObligatorio'], 1000, 1, 1);

            $aErrores['alfanumericoOpcional'] = validacionFormularios::comprobarAlfanumerico($_REQUEST['alfanumericoOpcional'], 1000, 1, 0);

            $aErrores['dniObligatorio'] = validacionFormularios::validarDni($_REQUEST['dniObligatorio'], 1);

            $aErrores['dniOpcional'] = validacionFormularios::validarDni($_REQUEST['dniOpcional'], 0);

            $aErrores['decimalObligatorio'] = validacionFormularios::comprobarFloat($_REQUEST['decimalObligatorio'], PHP_FLOAT_MAX, -PHP_FLOAT_MAX, 1);

            $aErrores['decimalOpcional'] = validacionFormularios::comprobarFloat($_REQUEST['decimalOpcional'], PHP_FLOAT_MAX, -PHP_FLOAT_MAX, 0);

            $aErrores['numericoObligatorio'] = validacionFormularios::comprobarEntero($_REQUEST['numericoObligatorio'], PHP_INT_MAX, -PHP_INT_MAX, 1);

            $aErrores['numericoOpcional'] = validacionFormularios::comprobarEntero($_REQUEST['numericoOpcional'], PHP_INT_MAX, -PHP_INT_MAX, 0);

            $aErrores['fechaObligatorio'] = validacionFormularios::validarFecha($_REQUEST['fechaObligatorio'], '01/01/2200', "01/01/1900", 1);

            $aErrores['fechaOpcional'] = validacionFormularios::validarFecha($_REQUEST['fechaOpcional'], '01/01/2200', "01/01/1900", 0);

            $aErrores['telefonoObligatorio'] = validacionFormularios::validarTelefono($_REQUEST['telefonoObligatorio'], 1);

            $aErrores['telefonoOpcional'] = validacionFormularios::validarTelefono($_REQUEST['telefonoOpcional'], 0);

            $aErrores['codigopostalObligatorio'] = validacionFormularios::validarCp($_REQUEST['codigopostalObligatorio'], 1);

            $aErrores['codigopostalOpcional'] = validacionFormularios::validarCp($_REQUEST['codigopostalOpcional'], 0);

            $aErrores['urlObligatorio'] = validacionFormularios::validarURL($_REQUEST['urlObligatorio'], 1);

            $aErrores['urlOpcional'] = validacionFormularios::validarURL($_REQUEST['urlOpcional'], 0);

            $aErrores['emailObligatorio'] = validacionFormularios::validarEmail($_REQUEST['emailObligatorio'], 1);

            $aErrores['emailOpcional'] = validacionFormularios::validarEmail($_REQUEST['emailOpcional'], 0);

            $aErrores['radioObligatorio'] = validacionFormularios::validarElementoEnLista($_REQUEST['radioObligatorio'], $aOpciones = ['opcion1', 'opcion2']);

            $aErrores['listaObligatorio'] = validacionFormularios::validarElementoEnLista($_REQUEST['listaObligatorio'], $aOpciones = ['opcion 1', 'opcion 2', 'opcion 3', 'opcion 4', 'opcion 5', 'opcion 6']);



            //acciones correspondientes en caso de que haya algún error
            foreach ($aErrores as $error) {
                //condición de que hay un error
                if (($error) != null) {
                    //limpieza del campo para cuando vuelva a aparecer el formulario
                    $_REQUEST[key($error)] = "";
                    $entradaOK = false;
                }
            }
        }
        // Si no se ha enviado el formulario (= es la primera vez)
        else {
            $entradaOK = false;
        }
        // Si no hay errores
        if ($entradaOK) {
            //Tratamiento del formulario
            //recogida de valores
            $aRespuestas['alfabeticoObligatorio'] = $_REQUEST['alfabeticoObligatorio'];
            $aRespuestas['alfabeticoOpcional'] = $_REQUEST['alfabeticoOpcional'];
            $aRespuestas['alfanumericoObligatorio'] = $_REQUEST['alfanumericoObligatorio'];
            $aRespuestas['alfanumericoOpcional'] = $_REQUEST['alfanumericoOpcional'];
            $aRespuestas['dniObligatorio'] = $_REQUEST['dniObligatorio'];
            $aRespuestas['dniOpcional'] = $_REQUEST['dniOpcional'];
            $aRespuestas['decimalObligatorio'] = $_REQUEST['decimalObligatorio'];
            $aRespuestas['decimalOpcional'] = $_REQUEST['decimalOpcional'];
            $aRespuestas['numericoObligatorio'] = $_REQUEST['numericoObligatorio'];
            $aRespuestas['numericoOpcional'] = $_REQUEST['numericoOpcional'];
            $aRespuestas['fechaObligatorio'] = $_REQUEST['fechaObligatorio'];
            $aRespuestas['fechaOpcional'] = $_REQUEST['fechaOpcional'];
            $aRespuestas['telefonoObligatorio'] = $_REQUEST['telefonoObligatorio'];
            $aRespuestas['telefonoOpcional'] = $_REQUEST['telefonoOpcional'];
            $aRespuestas['codigopostalObligatorio'] = $_REQUEST['codigopostalObligatorio'];
            $aRespuestas['codigopostalOpcional'] = $_REQUEST['codigopostalOpcional'];
            $aRespuestas['urlObligatorio'] = $_REQUEST['urlObligatorio'];
            $aRespuestas['urlOpcional'] = $_REQUEST['urlOpcional'];
            $aRespuestas['emailObligatorio'] = $_REQUEST['emailObligatorio'];
            $aRespuestas['emailOpcional'] = $_REQUEST['emailOpcional'];
            $aRespuestas['textolargoObligatorio'] = $_REQUEST['textolargoObligatorio'];
            $aRespuestas['textolargoOpcional'] = $_REQUEST['textolargoOpcional'];
            $aRespuestas['radioObligatorio'] = $_REQUEST['radioObligatorio'];
            $aRespuestas['radioOpcional'] = $_REQUEST['radioOpcional'];
            $aRespuestas['rangoObligatorio'] = $_REQUEST['rangoObligatorio'];
            $aRespuestas['rangoOpcional'] = $_REQUEST['rangoOpcional'];
            $aRespuestas['listaObligatorio'] = $_REQUEST['listaObligatorio'];
            $aRespuestas['listaOpcional'] = $_REQUEST['listaOpcional'];
            //muestra de valores por pantalla
            echo "<header>";
            echo "<h1 >Datos Recibidos</h1>";
            echo "</header>";
            echo "<main class=\"respuestas\">";
            echo "<table>";
            foreach ($aRespuestas as $nombreCampo => $respuesta) {
                echo "<tr>";
                echo "<th>" . $nombreCampo . "</th>";
                echo "<td>" . $respuesta . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            echo "</main>";
            ?>

            <?php
        }
        // Si hay errores (o es la primera vez)
        else {
            ?>
            <header>
                <h1>Plantilla de formularios</h1>
            </header>    
            <main>

                <form name="ejercicio25" action="ejercicio25.php" method="post">
                    <fieldset>
                        <legend>Plantilla: </legend>


                        <label for="alfabeticoObligatorio">Alfabético obligatorio<span>*</span>:</label>
                        <input style="background-color:#CCF8F4;" id="alfabeticoObligatorio" type="text" name="alfabeticoObligatorio" value="<?php echo (isset($_REQUEST['alfabeticoObligatorio'])) ? $_REQUEST['alfabeticoObligatorio'] : ""; ?>" >

                        <?php
                        echo (!is_null($aErrores['alfabeticoObligatorio'])) ? "<span>$aErrores[alfabeticoObligatorio]</span>" : "";
                        ?>              
                        <br>
                        <label for="alfabeticoOpcional">Alfabético opcional:</label>
                        <input id="alfabeticoOpcional" type="text" name="alfabeticoOpcional" value="<?php echo (isset($_REQUEST['alfabeticoOpcional'])) ? $_REQUEST['alfabeticoOpcional'] : ""; ?>" >

                        <?php
                        echo (!is_null($aErrores['alfabeticoOpcional'])) ? "<span >$aErrores[alfabeticoOpcional]</span>" : "";
                        ?>      
                        <hr>
                        <label for="alfanumericoObligatorio">Alfanumérico obligatorio<span >*</span>:</label>
                        <input style="background-color:#CCF8F4;" id="alfanumericoObligatorio" type="text" name="alfanumericoObligatorio" value="<?php echo (isset($_REQUEST['alfanumericoObligatorio'])) ? $_REQUEST['alfanumericoObligatorio'] : ""; ?>" >

                        <?php
                        echo (!is_null($aErrores['alfanumericoObligatorio'])) ? "<span >$aErrores[alfanumericoObligatorio]</span>" : "";
                        ?>  
                        <br>
                        <label for="alfanumericoOpcional">Alfanumérico opcional:</label>
                        <input id="alfanumericoOpcional" type="text" name="alfanumericoOpcional" value="<?php echo (isset($_REQUEST['alfanumericoOpcional'])) ? $_REQUEST['alfanumericoOpcional'] : ""; ?>" >

                        <?php
                        echo (!is_null($aErrores['alfabeticoOpcional'])) ? "<span >$aErrores[alfabeticoOpcional]</span>" : "";
                        ?>     
                        <hr>
                        <label for="dniObligatorio">DNI obligatorio<span >*</span>:</label>
                        <input style="background-color:#CCF8F4;" id="dniObligatorio" type="text" name="dniObligatorio" value="<?php echo (isset($_REQUEST['dniObligatorio'])) ? $_REQUEST['dniObligatorio'] : ""; ?>" >

                        <?php
                        echo (!is_null($aErrores['dniObligatorio'])) ? "<span >$aErrores[dniObligatorio]</span>" : "";
                        ?>  
                        <br>
                        <label for="dniOpcional">DNI opcional:</label>
                        <input id="dniOpcional" type="text" name="dniOpcional" value="<?php echo (isset($_REQUEST['dniOpcional'])) ? $_REQUEST['dniOpcional'] : ""; ?>" >

                        <?php
                        echo (!is_null($aErrores['dniOpcional'])) ? "<span >$aErrores[dniOpcional]</span>" : "";
                        ?>  
                        <hr>
                        <label for="decimalObligatorio">Decimal obligatorio<span >*</span>:</label>
                        <input style="background-color:#CCF8F4;" id="decimalObligatorio" type="text" name="decimalObligatorio" value="<?php echo (isset($_REQUEST['decimalObligatorio'])) ? $_REQUEST['decimalObligatorio'] : ""; ?>" >  

                        <?php
                        echo (!is_null($aErrores['decimalObligatorio'])) ? "<span >$aErrores[decimalObligatorio]</span>" : "";
                        ?>
                        <br>
                        <label for="decimalOpcional">Decimal opcional:</label>
                        <input id="decimalOpcional" type="text" name="decimalOpcional" value="<?php echo (isset($_REQUEST['decimalOpcional'])) ? $_REQUEST['decimalOpcional'] : ""; ?>" >  

                        <?php
                        echo (!is_null($aErrores['decimalOpcional'])) ? "<span >$aErrores[decimalOpcional]</span>" : "";
                        ?>
                        <hr>
                        <label for="numericoObligatorio">Numérico obligatorio<span >*</span>:</label>       
                        <input style="background-color:#CCF8F4;" id="numericoObligatorio" type="text" name="numericoObligatorio" value="<?php echo (isset($_REQUEST['numericoObligatorio'])) ? $_REQUEST['numericoObligatorio'] : ""; ?>" > 

                        <?php
                        echo (!is_null($aErrores['numericoObligatorio'])) ? "<span >$aErrores[numericoObligatorio]</span>" : "";
                        ?>
                        <br>
                        <label for="numericoOpcional">Numérico opcional:</label>       
                        <input id="numericoOpcional" type="text" name="numericoOpcional" value="<?php echo (isset($_REQUEST['numericoOpcional'])) ? $_REQUEST['numericoOpcional'] : ""; ?>" > 

                        <?php
                        echo (!is_null($aErrores['numericoOpcional'])) ? "<span >$aErrores[numericoOpcional]</span>" : "";
                        ?>
                        <hr>
                        <label for="fechaObligatorio">Fecha obligatoria<span >*</span>:</label>
                        <input style="background-color:#CCF8F4;" id="fechaObligatorio" type="text" name="fechaObligatorio" value="<?php echo (isset($_REQUEST['fechaObligatorio'])) ? $_REQUEST['fechaObligatorio'] : ""; ?>" >

                        <?php
                        echo (!is_null($aErrores['fechaObligatorio'])) ? "<span >$aErrores[fechaObligatorio]</span>" : "";
                        ?>                  
                        <br>
                        <label for="fechaOpcional">Fecha opcional:</label>
                        <input id="fechaOpcional" type="text" name="fechaOpcional" value="<?php echo (isset($_REQUEST['fechaOpcional'])) ? $_REQUEST['fechaOpcional'] : ""; ?>" >

                        <?php
                        echo (!is_null($aErrores['fechaOpcional'])) ? "<span >$aErrores[fechaOpcional]</span>" : "";
                        ?>           
                        <hr>
                        <label for="telefonoObligatorio">Teléfono obligatorio<span >*</span>:</label>
                        <input style="background-color:#CCF8F4;" id="telefonoObligatorio" type="text" name="telefonoObligatorio" value="<?php echo (isset($_REQUEST['telefonoObligatorio'])) ? $_REQUEST['telefonoObligatorio'] : ""; ?>" >
                        <?php
                        echo (!is_null($aErrores['telefonoObligatorio'])) ? "<span >$aErrores[telefonoObligatorio]</span>" : "";
                        ?>
                        <br>
                        <label for="telefonoOpcional">Teléfono opcional:</label>
                        <input id="telefonoOpcional" type="text" name="telefonoOpcional" value="<?php echo (isset($_REQUEST['telefonoOpcional'])) ? $_REQUEST['telefonoOpcional'] : ""; ?>" >
                        <?php
                        echo (!is_null($aErrores['telefonoOpcional'])) ? "<span >$aErrores[telefonoOpcional]</span>" : "";
                        ?>
                        <hr>
                        <label for="codigopostalObligatorio">Código postal obligatorio<span >*</span>:</label>
                        <input style="background-color:#CCF8F4;" id="codigopostalObligatorio" type="text" name="codigopostalObligatorio" value="<?php echo (isset($_REQUEST['codigopostalObligatorio'])) ? $_REQUEST['codigopostalObligatorio'] : ""; ?>" >
                        <?php
                        echo (!is_null($aErrores['codigopostalObligatorio'])) ? "<span >$aErrores[codigopostalObligatorio]</span>" : "";
                        ?>    
                        <br>
                        <label for="codigopostalOpcional">Código postal opcional:</label>
                        <input id="codigopostalOpcional" type="text" name="codigopostalOpcional" value="<?php echo (isset($_REQUEST['codigopostalOpcional'])) ? $_REQUEST['codigopostalOpcional'] : ""; ?>" >
                        <?php
                        echo (!is_null($aErrores['codigopostalOpcional'])) ? "<span >$aErrores[codigopostalOpcional]</span>" : "";
                        ?>    
                        <hr>
                        <label for="urlObligatorio">URL obligatoria<span >*</span>:</label>
                        <input style="background-color:#CCF8F4;" id="urlObligatorio" type="text" name="urlObligatorio" value="<?php echo (isset($_REQUEST['urlObligatorio'])) ? $_REQUEST['urlObligatorio'] : ""; ?>" >
                        <?php
                        echo (!is_null($aErrores['urlObligatorio'])) ? "<span >$aErrores[urlObligatorio]</span>" : "";
                        ?>   
                        <br>
                        <label for="urlOpcional">URL opcional:</label>
                        <input id="urlOpcional" type="text" name="urlOpcional" value="<?php echo (isset($_REQUEST['urlOpcional'])) ? $_REQUEST['urlOpcional'] : ""; ?>" >
                        <?php
                        echo (!is_null($aErrores['urlOpcional'])) ? "<span >$aErrores[urlOpcional]</span>" : "";
                        ?>   
                        <hr>
                        <label for="emailObligatorio">E-mail obligatorio<span >*</span>:</label>
                        <input style="background-color:#CCF8F4;"  id="emailObligatorio" type="text" name="emailObligatorio" value="<?php echo (isset($_REQUEST['emailObligatorio'])) ? $_REQUEST['emailObligatorio'] : ""; ?>" >
                        <?php
                        echo (!is_null($aErrores['emailObligatorio'])) ? "<span >$aErrores[emailObligatorio]</span>" : "";
                        ?>   
                        <br>
                        <label for="emailOpcional">E-mail opcional:</label>
                        <input id="emailOpcional" type="text" name="emailOpcional" value="<?php echo (isset($_REQUEST['emailOpcional'])) ? $_REQUEST['emailOpcional'] : ""; ?>" >
                        <?php
                        echo (!is_null($aErrores['emailOpcional'])) ? "<span >$aErrores[emailOpcional]</span>" : "";
                        ?>   
                        <hr>
                        <label for="textolargoObligatorio">Texto largo obligatorio<span >*</span>:</label>
                        <textarea style="background-color:#CCF8F4;" id="textolargoObligatorio" name="textolargoObligatorio"><?php echo (isset($_REQUEST['textolargoObligatorio'])) ? $_REQUEST['textolargoObligatorio'] : ""; ?></textarea>
                        <?php
                        echo (!is_null($aErrores['textolargoObligatorio'])) ? "<span >$aErrores[textolargoObligatorio]</span>" : "";
                        ?> 
                        <br>
                        <label for="textolargoOpcional">Texto largo opcional:</label>
                        <textarea id="textolargoOpcional" name="textolargoOpcional"><?php echo (isset($_REQUEST['textolargoOpcional'])) ? $_REQUEST['textolargoOpcional'] : ""; ?></textarea>
                        <hr>
                        <label for="radioObligatorio">Radio obligatorio<span >*</span>:</label>
                        <input  id="opcion1" type="radio" name="radioObligatorio" value="opcion1" 
                        <?php
                        echo ($_REQUEST['radioObligatorio'] === 'opcion1') ? "checked" : "";
                        ?>>
                        <label for="opcion1">Opción 1</label>

                        <input id="opcion2" type="radio" name="radioObligatorio" value="opcion2" 
                        <?php
                        echo ($_REQUEST['radioObligatorio'] === 'opcion2') ? "checked" : "";
                        ?>>
                        <label for="opcion2">Opción 2</label>
                        <?php
                        echo (!is_null($aErrores['radioObligatorio'])) ? "<span >$aErrores[radioObligatorio]</span>" : "";
                        ?>
                        <br>
                        <label for="radioOpcional">Radio opcional:</label>
                        <input id="opcion1" type="radio" name="radioOpcional" value="opcion1" 
                        <?php
                        echo ($_REQUEST['radioOpcional'] === 'opcion1') ? "checked" : "";
                        ?>>
                        <label for="opcion1">Opción 1</label>

                        <input id="opcion2" type="radio" name="radioOpcional" value="opcion2" 
                        <?php
                        echo ($_REQUEST['radioOpcional'] === 'opcion2') ? "checked" : "";
                        ?>>
                        <label for="opcion2">Opción 2</label>
                        <?php
                        echo (!is_null($aErrores['checkboxObligatorio'])) ? "<span >$aErrores[textolargoObligatorio]</span>" : "";
                        ?>                            
                        <hr>
                        <label for="rangoObligatorio">Rango obligatorio<span >*</span>:</label>
                        <input id="rangoObligatorio" type="range" name="rangoObligatorio" max="8" value="<?php echo (isset($_REQUEST['rangoObligatorio'])) ? $_REQUEST['rangoObligatorio'] : "4"; ?>">
                        <br>
                        <label for="rangoOpcional">Rango opcional:</label>
                        <input id="rangoOpcional" type="range" name="rangoOpcional" max="8" value="<?php echo (isset($_REQUEST['rangoOpcional'])) ? $_REQUEST['rangoOpcional'] : "4"; ?>">
                        <hr>
                        <label for="listaObligatorio">Lista obligatoria<span >*</span>:</label>
                        <select name="listaObligatorio" value="nada">
                            <option value="nada" <?php echo ($_REQUEST['listaObligatorio'] === '0') ? "selected" : ""; ?>>Seleccione una opción</option> 
                            <option value="opcion 1" <?php echo ($_REQUEST['listaObligatorio'] === 'opcion 1') ? "selected" : ""; ?>>Opción 1</option> 
                            <option value="opcion 2" <?php echo ($_REQUEST['listaObligatorio'] === 'opcion 2') ? "selected" : ""; ?>>Opción 2</option> 
                            <option value="opcion 3" <?php echo ($_REQUEST['listaObligatorio'] === 'opcion3') ? "selected" : ""; ?>>Opción 3</option>
                            <option value="opcion 4" <?php echo ($_REQUEST['listaObligatorio'] === 'opcion 4') ? "selected" : ""; ?>>Opción 4</option> 
                            <option value="opcion 5" <?php echo ($_REQUEST['listaObligatorio'] === 'opcion 5') ? "selected" : ""; ?>>Opción 5</option> 
                            <option value="opcion 6" <?php echo ($_REQUEST['listaObligatorio'] === 'opcion 6') ? "selected" : ""; ?>>Opción 6</option> 
                        </select>
                        <?php
                        echo (!is_null($aErrores['listaObligatorio'])) ? "<span >$aErrores[listaObligatorio]</span>" : "";
                        ?>   
                        <br>
                        <label for="listaOpcional">Lista opcional:</label>
                        <select name="listaOpcional" value="nada">
                            <option value="nada" <?php echo ($_REQUEST['listaObligatorio'] === 'nada') ? "selected" : ""; ?>>Seleccione una opción</option> 
                            <option value="opcion 1" <?php echo ($_REQUEST['listaOpcional'] === 'opcion 1') ? "selected" : ""; ?>>Opción 1</option> 
                            <option value="opcion 2" <?php echo ($_REQUEST['listaOpcional'] === 'opcion 2') ? "selected" : ""; ?>>Opción 2</option> 
                            <option value="opcion 3" <?php echo ($_REQUEST['listaOpcional'] === 'opcion 3') ? "selected" : ""; ?>>Opción 3</option>
                            <option value="opcion 4" <?php echo ($_REQUEST['listaOpcional'] === 'opcion 4') ? "selected" : ""; ?>>Opción 4</option> 
                            <option value="opcion 5" <?php echo ($_REQUEST['listaOpcional'] === 'opcion 5') ? "selected" : ""; ?>>Opción 5</option> 
                            <option value="opcion 6" <?php echo ($_REQUEST['listaOpcional'] === 'opcion 6') ? "selected" : ""; ?>>Opción 6</option> 
                        </select>

                        <br>
                    </fieldset>
                    <input id="enviar" type="submit" value="Enviar" name="enviar"/>
                    <input id="vaciar" type="reset" value="Vaciar" name="vaciar"/>
                </form>
            </main>

            <?php
        }
        ?>
    </body>
</html>
