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
            for($iFila=1;$iFila<=20;$iFila++){
                for($iColumna=1;$iColumna<=15;$iColumna++){
                    $aTeatro[$iFila][$iColumna]=null;
                }
            }
            $aTeatro[3][5]="Pedro";
            $aTeatro[9][17]="Marta";
            $aTeatro[7][10]="Ricardo";
            $aTeatro[12][10]="Roberto";
            $aTeatro[7][7]="Sara";
            $aTeatro[15][20]="Rebeca";

            print '<table>';

            $fila = 0;
            $numAsiento = 0;
            foreach ($aTeatro as $numFila=>$aFila) {
                echo "<tr>";
                $fila++;
                //echo "<th>Pasillo ".$fila."</th>";
                echo "<th>Pasillo ".$numFila."</th>";
                foreach ($aFila as $numAsiento=>$asiento) {
                    //$numAsiento++;
                    if(is_string($asiento)){
                        echo '<td class="ocupado">'.$asiento.'</td>';
                    } else {
                        echo '<td>'.$fila.'-'.$numAsiento.'</td>';
                    }
                }
                $numAsiento = 0;
                echo "</tr>";
            }
            echo "</table>";
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

