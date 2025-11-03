<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>EJERCICIO 19</title>
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
        <h1><b>EJERCICIO 19</b></h1>
    </header>
    <main>   
        <section>
            <?php
            /**
            * @author: Enrique Nieto Lorenzo
            * @since: 24/10/2025
            * 19. Construir una librería de funciones de validación de campos de formularios (LibreríaValidacionFormularios.php) para utilizarla en los siguientes ejercicios. 
            * Discusión: diferencia entre librería de funciones y clase.
            */
            // Importar y usar la libreria 231018libreriaValidacion.php
            require_once "231018libreriaValidacion.php";

            echo "<h3>Prueba libreria con validar email (correcto no devuelve nada)</h3>";
            echo "<p>Email gonzalo: ". validacionFormularios::validarEmail('gonzalo') ."</p>";
            echo "<p>Email gonzalo@mail.es: ". validacionFormularios::validarEmail('gonzalo@mail.es') ."</p>";
            echo "<p>Email gonzalo@hotmail.com: ". validacionFormularios::validarEmail('gonzalo@hotmail.com') ."</p>";

            echo "<h3>Prueba libreria con validar DNI  (correcto no devuelve nada)</h3>";
            echo "<p>12345678Z: ". validacionFormularios::validarDni('12345678Z') ."</p>";
            echo "<p>12365478J: ". validacionFormularios::validarDni('12365478J') ."</p>";
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

