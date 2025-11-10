<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>EJERCICIO 24</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            margin: 0;
            padding: 0;
        }
        header {
            background: green;
            color: white;
            padding: 15px;
            text-align: center;
        }
        h1 {
            margin: 0;
        }
        main {
            max-width: 1400px;
            margin: 30px auto;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        ul {
            list-style: none;
            padding: 0;
        }
        li {
            background: #ecf0f1;
            margin: 10px 0;
            padding: 15px;
            border-left: 5px solid green;
            border-right: 5px solid green;
            transition: 0.3s;
	    border-radius:8px;
        }
        li:hover {
            background: #d6eaf8;
            border-left: 5px solid purple;
            border-right: 5px solid purple;
        }

        footer{
            margin: auto;
            background-color: green;
            text-align: center;
            height: 150px;
	    color: white;
        }

        
        #codDepartamento, #volumenNegocio {
            background-color: lightgoldenrodyellow;
        }
        
        form {
            max-width: 600px; 
            margin: 20px auto;
        }

        
        .form-group {
            margin-bottom: 18px;
        }

        label {
            display: block; 
            margin-bottom: 6px;
            font-weight: bold;
            color: #333;
        }
        
        input[type="text"],
        input[type="date"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 1em;
        }
        
        /* Efecto visual al seleccionar un campo */
        input[type="text"]:focus,
        input[type="date"]:focus {
            border-color: green;
            outline: none;
            box-shadow: 0 0 5px rgba(0,128,0,0.2);
        }
        
        input[readonly]{
            background-color: #d3d3d3ff;
            color: #6e6e6eff;
        }

        /* Estilo para los mensajes de error */
        .error {
            color: red;
            font-size: 0.9em;
            display: block;
            margin-top: 5px;
        }
        
        /* Estilo unificado para botones */
        input[type="submit"],
        a button {
            padding: 12px 20px;
            margin-top: 10px;
            border-radius: 5px;
            background-color: green;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 1em;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        
        input[type="submit"]:hover,
        a button:hover {
            background-color: #006400;
        }

    </style>
</head>
<body>
    <header>
        <h1><b>EJERCICIO 24</b></h1>
    </header>
    <main>   
        <section>
            <?php 
            /**
             * @author: Enrique Nieto Lorenzo
             * @since: 27/10/2025
             * 24.Construir un formulario para recoger un cuestionario realizado a una persona y mostrar en la
             * misma página las preguntas y las respuestas recogidas; en el caso de que alguna respuesta
             * esté vacía o errónea volverá a salir el formulario con el mensaje correspondiente,
             * pero las respuestas que habíamos tecleado correctamente aparecerán en el formulario
             * (formulario "sticky").
             */

             // Importación de la librería de validación
             require_once "../core/231018libreriaValidacion.php";

            $entradaOK = true; //Variable que nos indica que todo va bien
            $aErrores = [  //Array donde recogemos los mensajes de error
                'T02_CodDepartamento' => '', 
                'T02_DescDepartamento' => '',
                'T02_FechaCreacionDepartamento' => '',
                'T02_VolumenDeNegocio' => '',
                'T02_FechaBajaDepartamento' => ''
            ];
            $aRespuestas=[ //Array donde recogeremos la respuestas correctas (si $entradaOK)
                'T02_CodDepartamento' => '', 
                'T02_DescDepartamento' => '',
                'T02_FechaCreacionDepartamento' => '',
                'T02_VolumenDeNegocio' => '',
                'T02_FechaBajaDepartamento' => ''
            ]; 

            //Para cada campo del formulario: Validar entrada y actuar en consecuencia
            if (isset($_REQUEST["enviar"])) {//Código que se ejecuta cuando se envía el formulario

                // Validamos los datos del formulario
                $aErrores['T02_CodDepartamento']= validacionFormularios::comprobarAlfabetico($_REQUEST['T02_CodDepartamento'],3,0,1,);
                $aErrores['T02_DescDepartamento']= validacionFormularios::comprobarAlfabetico($_REQUEST['T02_DescDepartamento'],255,0,1,);
                $ofechaCreacionDepartamento = new DateTime(); // creamos la fecha actual para pasarla al validarfecha
                $aErrores['T02_FechaCreacionDepartamento']= validacionFormularios::validarFecha($_REQUEST['T02_FechaCreacionDepartamento'],$ofechaCreacionDepartamento->format('m/d/Y'));
                $aErrores['T02_VolumenDeNegocio']= validacionFormularios::comprobarFloat($_REQUEST['T02_VolumenDeNegocio']);
                

                if(!empty($_REQUEST['T02_CodDepartamento'])){ 
                    foreach($aErrores as $campo => $valor){
                        if(!empty($valor)){ // Comprobar si el valor es válido
                            $entradaOK = false;
                        } 
                    }
                }else{ //Construir mensajes de error
                    $aErrores['T02_CodDepartamento']='Introduce un código de departamento';
                    $entradaOK = false;
                }

            } else {//Código que se ejecuta antes de rellenar el formulario
                $entradaOK = false;
            }
            //Tratamiento del formulario
            if($entradaOK){ //Cargar la variable $aRespuestas y tratamiento de datos OK
                date_default_timezone_set('Europe/Madrid');
                setlocale(LC_TIME, 'es_ES.utf8');

                // Recuperar los valores del formulario
                $aRespuestas['T02_CodDepartamento'] = $_REQUEST['T02_CodDepartamento'];
                $aRespuestas['T02_DescDepartamento'] = $_REQUEST['T02_DescDepartamento'];
                $ofechaCreacionDepartamento = new DateTime($_REQUEST['T02_FechaCreacionDepartamento']);
                $aRespuestas['T02_FechaCreacionDepartamento'] = strftime("%A, %d de %B de %Y", $ofechaCreacionDepartamento->getTimestamp());
                $aRespuestas['T02_VolumenDeNegocio'] = $_REQUEST['T02_VolumenDeNegocio'];

                echo "<h2>Resultados:</h2>";
                foreach ($aRespuestas as $campo => $valor) {
                    echo "<p>$campo: <b>$valor</b></p>";
                }

                // Botón para volver a recargar el formulario inicial
                echo '<a href="' . $_SERVER['PHP_SELF'] . '"><button>Volver</button></a>';

            } else { //Mostrar el formulario hasta que lo rellenemos correctamente
                //Mostrar formulario
                //Mostrar los datos tecleados correctamente en intentos anteriores
                //Mostrar mensajes de error (si los hay y el formulario no se muestra por primera vez)
                ?>
                    <h2>DATOS DEPARTAMENTO</h2>
                    <hr>
                    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post"> 
                        <label for="codDepartamento">Código de Dpto:</label>
                        <input type="text" id="codDepartamento" name="codDepartamento" value="">
                        <span class="error"><?php echo $aErrores['T02_CodDepartamento'] ?></span>
                        <br>
                        <label for="descripcion">Descripcion Dpto:</label>
                        <input type="text" id="descripcion" name="descripcion" value="<?php echo $_REQUEST['T02_DescDepartamento']??'' ?>">
                        <br>
                        <label for="fecha_creacion">Fecha creación Dpto: </label>
                        <input type="date" id="fecha_creacion" name="fecha_creacion" value="<?php echo strftime("%A, %d de %B de %Y", $ofechaCreacionDepartamento->getTimestamp()) ?>" readonly>
                        <br>
                        <label for="volumenNegocio">Volumen de negocio:</label> 
                        <input type="text" id="volumenNegocio" name="volumenNegocio" value="<?php echo $_REQUEST['T02_VolumenDeNegocio']??'' ?>">
                        <span class="error"><?php echo $aErrores['T02_VolumenDeNegocio'] ?></span>
                        <br>                  
                        <input type="submit" value="Enviar" name="enviar">
                    </form>

                <?php

            }
           ?>
        </section>
    </main>

    <footer>
        <caption>
            <a href="/ENLDWESProyectoTema3/indexProyectoTema3.php">Enrique Nieto Lorenzo</a> | 09/10/2025
        </caption>
    </footer>
</body>
</html>

