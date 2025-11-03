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
            <body>
                <h2>Formulario registro de datos del usuario</h2>
                <form name="formularioDatosUsuario" action="Tratamiento.php" method="post">
                    <label for="nombre">Nombre y apellidos: </label>
                    <input type="text" name="nombre" id="nombre"/><br><br> 

                    <label for="edad">Edad: </label>
                    <input type="number" name="edad" id="edad"/><br><br>
                    
                    <label for="sueldo">Sueldo mensual: </label>
                    <input type="number" name="sueldo" id="sueldo"/><br><br>
                    
                    <label for="trabajo">Marca la casilla si eres autónomo: </label>
                    <input type="checkbox" name="trabajo" id="trabajo"/><br><br>

                    <input type="submit" name="enviar" value="Enviar">
                </form>
                <?php
                
                ?>
            </body>
        </section>
    </main>

    <footer>
        <caption>
            <a href="/ENLDWESProyectoTema3/indexProyectoTema3.php">Enrique Nieto Lorenzo</a> | 09/10/2025
        </caption>
    </footer>
</body>
</html>

