<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>EJERCICIO 16</title>
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
        <h1><b>EJERCICIO 16</b></h1>
    </header>
    <main>   
        <section>
            <?php
            /**
            * @author: Enrique Nieto Lorenzo
            * @since: 20/10/2025
            * 16. Recorrer el array anterior utilizando funciones para obtener el mismo resultado.
            */
                $aSueldoDiario = [
                    'Lunes' => 80,
                    'Martes' => 90,
                    'Miercoles' => 70,
                    'Jueves' => 80,
                    'Viernes' => 95,
                    'Sabado' => 75,
                    'Domingo' => 85
                ];


            // Función para calcular el sueldo semanal.

                /**
                 * Calcula la suma de los valores del array de sueldos.
                 * @param $aSueldoDiario El array con los sueldos diarios.
                 * @return El total del sueldo semanal.
                 */
                function calcularSueldoSemanal( $aSueldoDiario) {
                    $iTotalSueldoSemana = 0;
                    foreach ($aSueldoDiario as $iSueldoDia) {
                        $iTotalSueldoSemana += $iSueldoDia;
                    }
                    return $iTotalSueldoSemana;
                }

            // Función para imprimir sueldo diario

                /**
                 * Imprime el contenido del array clave(día) y valor(sueldo).
                 * @param $aSueldoDiario El array con los sueldos diarios.
                 * 
                 */
                function imprimirSueldoDiario($aSueldoDiario) {
                    foreach ($aSueldoDiario as $sDia => $iSueldoDia) {
                        echo "$sDia : $iSueldoDia euros<br>";
                    }
                }

            // Llamada de las funciones
         
                echo "<h3>Sueldo diario: </h3>";
                imprimirSueldoDiario($aSueldoDiario);

           
                $iSueldoSemanal = calcularSueldoSemanal($aSueldoDiario);

                echo '<h3>El total del sueldo semanal es: ' . $iSueldoSemanal . " euros</h3><br>";
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

