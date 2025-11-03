<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>EJERCICIO 13</title>
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
        <h1><b>EJERCICIO 13</b></h1>
    </header>
    <main>   
        <section>
            <?php
            /**
            * @author: Enrique Nieto Lorenzo
            * @since: 24/10/2025
            * 13. Crear una función que cuente el número de visitas a la página actual desde una fecha concreta.
            */
            /**
            * Registra la visita actual y cuenta las visitas desde una fecha específica.
            *
            * @param string $fecha_inicio Fecha en formato 'YYYY-MM-DD' a partir de la cual contar.
            * @param string $archivo_log Ruta al archivo de registro de visitas.
            * @return int El número de visitas registradas desde la fecha de inicio.
           */
            function contarVisitas($fechaInicio) {
                // Fichero log donde guardamos los timestamp actuales
                $fichero_log = '../tmp/visitas.log';

                // Obtener el timestamp actual
                $timestamp_actual = (new DateTime())->getTimestamp();

                // Añadir el timestamp actual al fichero de log en una nueva línea
                // FILE_APPEND asegura que se añade al final sin sobreescribir
                // LOCK_EX bloquea el archivo para el usuario actual mientras se esta escribiendo
                file_put_contents($fichero_log, $timestamp_actual . "\n", FILE_APPEND | LOCK_EX);

                // Conversión de la fecha de inicio a timestamp para la comparación
                $timestamp_inicio = (new DateTime($fechaInicio))->getTimestamp();

                // Obtener el contenido completo del fichero de log
                $contenido_log = file_get_contents($fichero_log); 

                // Si el fichero no existe o está vacío, no se cuentan visitas
                if (empty($contenido_log)) {
                    return 0;
                }

                // Separar el contenido en un array, donde cada elemento es un timestamp
                $aVisitasRegistradas = explode("\n", trim($contenido_log));

                // Recorrer los timestamps del log
                $contador = 0;
                foreach ($aVisitasRegistradas as $timestamp_visita) {
                    // Aseguramos que la línea es un número válido y es posterior o igual al inicio
                    if (is_numeric($timestamp_visita) && $timestamp_visita >= $timestamp_inicio) {
                        $contador++;
                    }
                }

                return $contador;
            }

            //EJEMPLO
            date_default_timezone_set('Europe/Madrid');
            $fechaConcreta = '2025-10-24'; // La fecha desde la que contar las visitas

            // Llamar a la función para registrar la visita y obtener el número de visitas
            $total_visitas = contarVisitas($fechaConcreta);

            // Mostrar el resultado
            echo "<h2>Contador de Visitas</h2>";
            echo "<p>Desde la fecha: <b>" . $fechaConcreta . "</b> la página ha registrado un total de <b>" . $total_visitas . "</b> visitas.</p>";
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

