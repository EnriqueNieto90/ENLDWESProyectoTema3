<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>EJERCICIO 12</title>
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
        <h1><b>EJERCICIO 12</b></h1>
    </header>
    <main>   
        <section>
            <?php
            /**
            * @author: Enrique Nieto Lorenzo
            * @since: 17/10/2025
            * 12. Mostrar el contenido de las variables superglobales (utilizando print_r() y foreach()).
            */
            // Primero $_server con for each y luego session, cookie, request
            echo '<h3>Usando foreach y echo para la variable $_SERVER</h3>';
            foreach ($_SERVER as $clave => $valor) {
                echo $clave." = ".$valor."<br>";
            }

            echo '<h3>Usando foreach y echo para la variable $_GLOBAL</h3>';
            echo "<table>";
            foreach ($GLOBALS as $clave => $valor) {
                foreach ($valor as $c => $v) {
                    echo "<tr>";
                    echo "<th>$".$clave."</th>";
                    echo "<th>".$c."</th>";
                    echo "<td>".$v."</td>";
                    echo "</tr>";
                }  
            }
            echo "</table>";
            echo '<h3>Usando print_r para la variable $_GLOBAL</h3>';
            print_r($GLOBALS);

            echo '<h3>Usando var_dump para la variable $_SERVER</h3>';
            var_dump($_SERVER);
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
