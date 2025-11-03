<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>EJERCICIO 21</title>
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
        <h1><b>EJERCICIO 21</b></h1>
    </header>
    <main>   
        <section>
            <?php
            /**
            * @author: Enrique Nieto Lorenzo
            * @since: 20/10/2025
            * 21. Construir un formulario para recoger un cuestionario realizado a una persona 
            * y enviarlo a una página Tratamiento.php para que muestre las preguntas y las respuestas recogidas.
            */
                echo("<h1>Formulario datos de usuario</h1>");
                echo("<h2>Respuestas recogidas para {$_REQUEST['nombre']}</h2>");

                // Mostramos las respuestas del formulario

                echo("<p><strong>Nombre: </strong>". $_REQUEST['nombre'] . "</p>");
                echo("<p><strong>Edad: </strong>". $_REQUEST['edad'] ."</p>");
                echo("<p><strong>Sueldo mensual: </strong>". $_REQUEST['sueldo'] ."</p>");
                echo("<p><strong>Es autónomo: </strong></p>"); 
                if(isset($_REQUEST['trabajo'])){
                    echo("Sí");

                }else{
                    echo("No");

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
