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
        <h1><b>EJERCICIO 4</b></h1>
    </header>
    <main>   
        <section>
            <?php
            /**
            * @author: Enrique Nieto Lorenzo
            * @since: 16/10/2025
            * 2. Inicializar y mostrar una variable heredoc.
            */
            // Zona horaria 
            date_default_timezone_set('Europe/Lisbon');
            
            // Crear el objeto DateTime.
            $ofechaActual = new DateTime();
        
            // Locale en portugués
            setlocale(LC_TIME, 'pt_PT.UTF-8', 'pt_PT', 'portuguese');

            echo("<h3>Fecha y hora actual en portugués.</h3><br>");
            echo( "Hoje é " .$ofechaActual->format("l")." ".$ofechaActual->format("d")." de ". $ofechaActual->format("F"). " de ". $ofechaActual->format("o"). " e a hora é ". $ofechaActual->format("H:i:s"));
            
            date_default_timezone_set('Europe/Madrid');
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

