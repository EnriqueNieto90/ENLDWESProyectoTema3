<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>EJERCICIO 17</title>
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
        body { font-family: sans-serif; }
        table { border-collapse: collapse; margin: 20px auto; }
        td, th { border: 1px solid #ccc; padding: 8px; text-align: center; min-width: 50px; }
        th { background-color: #f2f2f2; }
        .ocupado { background-color: #ff6b6b; color: white; font-weight: bold; }
        .libre { background-color: #d4edda; }
        h3 { text-align: center; }

    </style>
</head>
<body>
    <header>
        <h1><b>EJERCICIO 17</b></h1>
    </header>
    <main>   
        <section>
            <?php
            /**
            * @author: Enrique Nieto Lorenzo
            * @since: 24/10/2025
            * 17. Inicializar un array (bidimensional con dos índices numéricos) donde almacenamos el nombre de las personas que tienen reservado el asiento en un teatro de 20 filas y 15 asientos por fila. 
            * (Inicializamos el array ocupando únicamente 5 asientos). Recorrer el array con distintas técnicas (foreach(), while(), for()) para mostrar los asientos ocupados en cada fila y las personas que lo ocupan.
            */
            
            //CONFIGURACIÓN E INICIALIZACIÓN

            // Usamos constantes hace el código más legible y fácil de mantener.
            const NUMERO_FILAS = 20;
            const ASIENTOS_POR_FILA = 15;

            // Se declara el array que contendrá la estructura del teatro.
            $teatro = [];

            // Bucle anidado para inicializar cada asiento del teatro a null.
            for ($fila = 1; $fila <= NUMERO_FILAS; $fila++) {
                for ($asiento = 1; $asiento <= ASIENTOS_POR_FILA; $asiento++) {
                    $teatro[$fila][$asiento] = null;
                }
            }

            // POBLACIÓN DE DATOS (SIMULACIÓN DE RESERVAS)
            // Se asignan nombres a asientos específicos para simular que están ocupados.
            $teatro[1][5]   = "Ana";
            $teatro[5][8]   = "Luis";
            $teatro[10][3]  = "Marta";
            $teatro[12][12] = "Carlos";
            $teatro[19][7]  = "Elena";

            ?>
            
            <h1>Plano del Teatro</h1>

        <!-- ========================================================================= -->
        <!-- === VISUALIZACIÓN CON BUCLE FOREACH    -->
        <!-- ========================================================================= -->
        <h3>Recorrido con <code>foreach</code></h3>
        <table>
            <?php
            // El primer bucle itera sobre las filas.
            foreach ($teatro as $numeroFila => $asientosDeLaFila) {
                echo "<tr>";
                echo "<th>Fila $numeroFila</th>"; // Encabezado de la fila

                // El segundo bucle (anidado) itera sobre los asientos de la fila actual.
                foreach ($asientosDeLaFila as $numeroAsiento => $ocupante) {
                    if ($ocupante !== null) {
                        // Si el asiento no es null, está ocupado.
                        echo "<td class='ocupado'>$ocupante</td>";
                    } else {
                        // Si es null, está libre.
                        echo "<td class='libre'>$numeroAsiento</td>";
                    }
                }
                echo "</tr>";
            }
            ?>
        </table>

        <!-- ========================================================================= -->
        <!-- === VISUALIZACIÓN CON BUCLE FOR     -->
        <!-- ========================================================================= -->
        <h3>Recorrido con <code>for</code></h3>
        <table>
            <?php
            
            for ($fila = 1; $fila <= NUMERO_FILAS; $fila++) {
                echo "<tr>";
                echo "<th>Fila $fila</th>";
                for ($asiento = 1; $asiento <= ASIENTOS_POR_FILA; $asiento++) {
                    $ocupante = $teatro[$fila][$asiento];
                    if ($ocupante !== null) {
                        echo "<td class='ocupado'>$ocupante</td>";
                    } else {
                        echo "<td class='libre'>$asiento</td>";
                    }
                }
                echo "</tr>";
            }
            ?>
        </table>

        <!-- ========================================================================= -->
        <!-- === VISUALIZACIÓN CON BUCLE WHILE    -->
        <!-- ========================================================================= -->
        <h3>Recorrido con <code>while</code></h3>
        <table>
            <?php
            // El bucle while requiere la inicialización y el incremento manual de los contadores.
            $fila = 1;
            while ($fila <= NUMERO_FILAS) {
                echo "<tr>";
                echo "<th>Fila $fila</th>";

                $asiento = 1; // El contador de asientos se resetea por cada fila.
                while ($asiento <= ASIENTOS_POR_FILA) {
                    $ocupante = $teatro[$fila][$asiento];
                    if ($ocupante !== null) {
                        echo "<td class='ocupado'>$ocupante</td>";
                    } else {
                        echo "<td class='libre'>$asiento</td>";
                    }
                    $asiento++;
                }
                echo "</tr>";
                $fila++;
            }
            ?>
        </table>
            
        </section>
    </main>

    <footer>
        <caption>
            <a href="/ENLDWESProyectoTema3/indexProyectoTema3.php">Enrique Nieto Lorenzo</a> | 09/10/2025
        </caption>
    </footer>
</body>
</html>




    

