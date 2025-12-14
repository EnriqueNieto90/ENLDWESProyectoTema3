<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>EJERCICIO 1</title>
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
            max-width: 800px;
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
        img {
            height: 25px;
        }

        footer{
            margin: auto;
            background-color: green;
            text-align: center;
            height: 150px;
	    color: white;
        }

    </style>
</head>
<body>
    <header>
        <h1><b>EJERCICIO 6</b></h1>
    </header>
    <main>   
        <section>
            <?php
            /**
            * @author: Enrique Nieto Lorenzo
            * @since: 16/10/2025
            * 6. Operar con fechas: calcular la fecha y el día de la semana de dentro de 60 días.
            */
            
            // Configuramos zona horaria
            date_default_timezone_set('Europe/Madrid');

            // Creamos el objeto de la clase DateTimeInmutable.
            $ofechaActual = new DateTimeImmutable(); 

            // Calculamos la fecha que queramos. En este caso sumamos 60 días
            $ofechaFutura = $ofechaActual->modify('+60 days'); 

            // Formateamos en Español la fecha y la hora.
            $formateador = new IntlDateFormatter(
                'es_ES', 
                IntlDateFormatter::FULL, 
                IntlDateFormatter::MEDIUM,
                'Europe/Madrid'
            );

            echo "<h3>Cálculo de fechas con PHP:</h3>";

            // Mostramos el original (sigue intacto gracias a Immutable)
            echo "<p>Fecha de hoy: " . $formateador->format($ofechaActual) . "</p>";

            // Mostramos el resultado
            echo "<p>Fecha dentro de 60 días: <strong>" . $formateador->format($ofechaFutura) . "</strong></p>";
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

