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
	main{
	justify-content:center;
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

             // Variable de control para la validación del formulario.
             $entradaOK = true; 

             // Array para almacenar los mensajes de error de los campos.
             $arrErrores = ['nombre' => '', 'edad' => '', 'email' => ''];

             // Array para almacenar las respuestas (incluso si no son válidas, para el sticky form).
             $arrRespuestas = ['nombre' => '', 'edad' => '', 'email' => ''];


             // Comprobar si el formulario ha sido enviado (se pulsó 'enviar').
             if (isset($_REQUEST["enviar"])) {

                 // --- Recogida de datos ---
                 // Se recogen los valores aunque no sean válidos para mostrarlos de nuevo (sticky).
                 $arrRespuestas['nombre'] = $_REQUEST["nombre"];
                 $arrRespuestas['edad'] = $_REQUEST["edad"];
                 $arrRespuestas['email'] = $_REQUEST["email"];

                 // --- Validación del campo 'email' ---

                 // Se valida el email usando la librería (asumiendo que existe 'validarEmail').
                 $arrErrores['email'] = validacionFormularios::validarEmail($arrRespuestas['email']);

                 // Comprobación si el email NO está vacío (obligatorio).
                 if (!empty($arrRespuestas['email'])) { 
                     // Si no está vacío, comprobar si la validación de formato falló.
                     if (empty($arrErrores['email'])) { 
                         $entradaOK = true; // El email es correcto.
                     } else { 
                         // El formato del email es incorrecto.
                         $entradaOK = false;
                     }
                 } else { 
                     // El email está vacío, es un error.
                     $arrErrores['email'] = 'Introduce un email';
                     $entradaOK = false;
                 }

                 // (El resto de campos no se validan, siguiendo el ejemplo original)

             } else {
                 // Si el formulario no se ha enviado (primera visita), no es válido.
                 $entradaOK = false;
             }

             // --- Tratamiento de la salida ---

             if ($entradaOK) { 
                 // Si todo es correcto, mostrar los resultados.
                 echo "<h2>Resultados:</h2>";
                 echo "<p>Nombre: <strong>" . $arrRespuestas['nombre'] . "</strong></p>";
                 echo "<p>Edad: <strong>" . $arrRespuestas['edad'] . "</strong></p>";
                 echo "<p>Email: <strong>" . $arrRespuestas['email'] . "</strong></p>";

                 // Botón para volver a cargar la página del formulario.
                 echo '<a href="' . $_SERVER['PHP_SELF'] . '"><button>Volver</button></a>';

             } else { 
                 // Si hay errores o es la primera visita, mostrar el formulario.
                 ?>
                     <h2>Datos personales</h2>
                     <form action="" method="post"> 

                         <label for="nombre">Nombre:</label>
                         <input type="text" id="nombre" name="nombre" value="<?php echo $arrRespuestas['nombre'] ?>">
                         <br>

                         <label for="edad">Edad:</label>
                         <input type="number" name="edad" value="<?php echo $arrRespuestas['edad'] ?>">
                         <br>

                         <label for="email">Email:</label> 
                         <input type="text" id="email" name="email" value="<?php echo $arrRespuestas['email'] ?>">
                         <span>*<?php echo $arrErrores['email'] ?></span>
                         <br>

                         <input type="submit" value="Enviar" name="enviar">
                         <p class="aviso">*Campos obligatorios</p>
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

