<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>EJERCICIO 14</title>
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
        <h1><b>EJERCICIO 14</b></h1>
    </header>
    <main>   
        <section>
            <?php
            /**
            * @author: Enrique Nieto Lorenzo
            * @since: 24/10/2025
            * 14. Comprobar las librerías que estás utilizando en tu entorno de desarrollo y explotación. 
            * Crear tu propia librería de funciones y estudiar la forma de usarla en el entorno de desarrollo y en el de explotación.
            */
            echo "<h3>Listado de Extensiones</h3>";

            echo "<pre>";
            print_r(get_loaded_extensions());
            echo "</pre>";

            // Distintas maneras de importar una libreria.
            //include "231018libreriaValidacion.php";
            //include_once "231018libreriaValidacion.php";
            //require "231018libreriaValidacion.php";
            require_once "../core/231018libreriaValidacion.php";

            // Uso de la libreria en este caso con funciones estáticas
            echo "<h3>Prueba de la librería (validar DNI)</h3>";
            echo "<p>45689347P: ". validacionFormularios::validarDni('45689347P') ."</p>";
            echo "<p>71004904V: ". validacionFormularios::validarDni('71004904V') ."</p>";
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

