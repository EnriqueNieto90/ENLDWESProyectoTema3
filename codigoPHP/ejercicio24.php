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

        
        #codDepartamento, #descripcion {
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
            $aErrores = [ //Array donde recogemos los mensajes de error
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
                // CAMPO OBLIGATORIO (amarillo)
                $aErrores['T02_CodDepartamento'] = validacionFormularios::comprobarAlfabetico($_REQUEST['T02_CodDepartamento'], 3, 3, 1); // 1 = Requerido
                
                $aErrores['T02_DescDepartamento'] = validacionFormularios::comprobarAlfabetico($_REQUEST['T02_DescDepartamento'], 255, 1, 1); // 1 = Requerido
                
                // CAMPO OBLIGATORIO (amarillo)
                // Primero comprobamos que no esté vacío
                $aErrores['T02_VolumenDeNegocio'] = validacionFormularios::comprobarNoVacio($_REQUEST['T02_VolumenDeNegocio']);
                if (empty($aErrores['T02_VolumenDeNegocio'])) {
                    // Si no está vacío, comprobamos que sea un float
                    $aErrores['T02_VolumenDeNegocio'] = validacionFormularios::comprobarFloat($_REQUEST['T02_VolumenDeNegocio']);
                }
                
                // No es necesario validar la fecha de creación si es readonly y la ponemos nosotros
                // $aErrores['T02_FechaCreacionDepartamento'] = validacionFormularios::validarFecha($_REQUEST['T02_FechaCreacionDepartamento'], 'now');

                // Recorremos el array de errores
                foreach ($aErrores as $campo => $error) {
                    if (!empty($error)) { // Comprobar si hay algún mensaje de error
                        $entradaOK = false; // Si hay algún error, $entradaOK = false
                        break; // Salimos del bucle
                    } 
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

                echo "<h2>Detalles del departamento:</h2>";
                foreach ($aRespuestas as $campo => $valor) {
                    if (!empty($valor)) { // Mostramos solo los campos con respuesta
                        echo "<p>$campo: <b>$valor</b></p>";
                    }
                }

                // Botón para volver a recargar el formulario inicial
                echo '<a href="' . $_SERVER['PHP_SELF'] . '"><button>Volver</button></a>';

            } else { //Mostrar el formulario hasta que lo rellenemos correctamente
                
                // Obtenemos la fecha de hoy en el formato YYYY-MM-DD
                $fechaHoy = date('Y-m-d');
            ?>
                <h2>DATOS DEPARTAMENTO</h2>
                <hr>
                <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post"> 
                    <div class="form-group">
                        <label for="codDepartamento">Código de Dpto:</label>
                        <input type="text" id="codDepartamento" name="T02_CodDepartamento" value="<?php echo $_REQUEST['T02_CodDepartamento'] ?? '' ?>">
                        <span class="error"><?php echo $aErrores['T02_CodDepartamento'] ?></span>
                    </div>
                    
                    <div class="form-group">
                        <label for="descripcion">Descripcion Dpto:</label>
                        <input type="text" id="descripcion" name="T02_DescDepartamento" value="<?php echo $_REQUEST['T02_DescDepartamento'] ?? '' ?>">
                        <span class="error"><?php echo $aErrores['T02_DescDepartamento'] ?></span>
                    </div>

                    <div class="form-group">
                        <label for="fecha_creacion">Fecha creación Dpto: </label>
                        <input type="date" id="fecha_creacion" name="T02_FechaCreacionDepartamento" value="<?php echo $fechaHoy ?>" readonly>
                        <span class="error"><?php echo $aErrores['T02_FechaCreacionDepartamento'] ?></span>
                    </div>

                    <div class="form-group">
                        <label for="volumenNegocio">Volumen de negocio:</label> 
                        <input type="text" id="volumenNegocio" name="T02_VolumenDeNegocio" value="<?php echo $_REQUEST['T02_VolumenDeNegocio'] ?? '' ?>">
                        <span class="error"><?php echo $aErrores['T02_VolumenDeNegocio'] ?></span>
                    </div>
                    
                    <input type="submit" value="Enviar" name="enviar">
                </form>

            <?php
            }
           ?>
        </section>
    </main>
    <footer>
        <caption>
            <a href="/ENLDWESProyectoTema3/indexProyectoTema3.php">Enrique Nieto Lorenzo</a> | 10/11/2025
        </caption>
    </footer>
</body>
</html>