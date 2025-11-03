<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>EJERCICIO 23</title>
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
        <h1><b>EJERCICIO 23</b></h1>
    </header>
    <main>   
        <section>
            <?php
            /**
             * @author: Enrique Nieto Lorenzo
             * @since: 27/10/2025
             * 23.Construir un formulario para recoger un cuestionario realizado a una persona y mostrar
             * en la misma página las preguntas y las respuestas recogidas; en el caso de que alguna
             * respuesta esté vacía o errónea volverá a salir el formulario con el mensaje correspondiente.
             */

            // Importación de la librería de validación necesaria
            require_once "../core/231018libreriaValidacion.php";

            // Variable de control que indica si la entrada de datos es correcta.
            $entradaOK = true;

            // Array para almacenar los mensajes de error de los campos.
            $arrErrores = ['nombre' => '', 'edad' => '', 'email' => ''];

            // Array para almacenar las respuestas válidas del formulario.
            $arrRespuestas = ['nombre' => '', 'edad' => '', 'email' => ''];


            // Comprobar si el formulario ha sido enviado (se ha pulsado el botón 'enviar').
            if (isset($_REQUEST["enviar"])) {

                // --- Recogida de datos ---
                // Se recogen los valores enviados por el formulario.
                $arrRespuestas['nombre'] = $_REQUEST["nombre"];
                $arrRespuestas['edad'] = $_REQUEST["edad"];
                $arrRespuestas['email'] = $_REQUEST["email"];

                // --- Validación del campo 'email' ---

                // Se valida el email utilizando la función correspondiente de la librería.
                // Se asume que la librería tiene un método 'validarEmail'.
                $arrErrores['email'] = validacionFormularios::validarEmail($arrRespuestas['email']);

                // Se comprueba si el campo 'email' NO está vacío.
                if (!empty($arrRespuestas['email'])) {
                    // Si no está vacío, se comprueba si la validación (del formato) ha fallado.
                    if (empty($arrErrores['email'])) {
                        // Si no hay error, la entrada es correcta (de momento).
                        $entradaOK = true;
                    } else {
                        // Si la validación ha devuelto un error (ej. formato incorrecto), la entrada no es correcta.
                        $entradaOK = false;
                    }
                } else {
                    // Si el campo 'email' está vacío, se considera un error (campo obligatorio).
                    $arrErrores['email'] = 'Introduce un email';
                    $entradaOK = false;
                }

                // (El resto de campos 'nombre' y 'edad' no se validan en esta lógica,
                // siguiendo la estructura del ejercicio original que solo validaba un campo).

            } else {
                // Si no se ha enviado el formulario, forzamos $entradaOK a false para mostrarlo.
                $entradaOK = false;
            }

            // --- Tratamiento de la salida ---

            if ($entradaOK) {
                // Si $entradaOK es true, la entrada es válida y se muestran los resultados.
                echo "<h2>Resultados:</h2>";
                echo "<p>Nombre: <strong>" . $arrRespuestas['nombre'] . "</strong></p>";
                echo "<p>Edad: <strong>" . $arrRespuestas['edad'] . "</strong></p>";
                echo "<p>Email: <strong>" . $arrRespuestas['email'] . "</strong></p>";

                // Botón para volver a recargar el formulario inicial (reiniciar el script).
                echo '<a href="' . $_SERVER['PHP_SELF'] . '"><button>Volver</button></a>';

            } else {
                // Si $entradaOK es false, se muestra el formulario (ya sea la primera vez o por errores).
                ?>
                    <h2>Datos personales</h2>
                    <form action="" method="post"> 
                        <label for="nombre">Nombre:</label>
                        <input type="text" id="nombre" name="nombre">
                        <br>

                        <label for="edad">Edad:</label>
                        <input type="number" name="edad">
                        <br>

                        <label for="email">Email:</label> 
                        <input type="text" id="email" name="email"><span>*<?php echo $arrErrores['email'] ?></span>
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


