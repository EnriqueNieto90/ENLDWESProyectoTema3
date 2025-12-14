<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>EJERCICIO 3</title>
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
        <h1><b>EJERCICIO 3</b></h1>
    </header>
    <main>   
        <section>
            <?php
            /**
            * @author: Enrique Nieto Lorenzo
            * @since: 14/12/2025
            * 3. Mostrar en tu página index la fecha y hora actual formateada en castellano. (Utilizar cuando sea posible la clase DateTime)
            */
            // Zona horaria.
            date_default_timezone_set('Europe/Madrid');
            // Crear el objeto DateTime.
            $ofechaActual = new DateTime();
            
            //Creamos un formateador donde le decimos: Idioma Español de España, Formato de Fecha COMPLETO, sin formato de hora, zona horaria y tipo de calendario.
            $formateador = new IntlDateFormatter(
                'es_ES',                    
                IntlDateFormatter::FULL,     
                IntlDateFormatter::NONE,     
                'Europe/Madrid',            
                IntlDateFormatter::GREGORIAN
            );
            
            //Formatear el objeeto DateTime directamente
            echo"<h3>Fecha y hora actual en castellano:</h3><br>";
            echo "<p>La fecha de hoy es: <span>" . $formateador->format($ofechaActual) . "</span></p>";
            //Como los números no se traducen utilizamos format() de DateTime
            echo "<p>Y la hora actual es: " . $ofechaActual->format("H:i:s") . "</p>";
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

