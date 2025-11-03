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
        <h1><b>EJERCICIO 1</b></h1>
    </header>
    <main>   
        <section>
            <?php
            /**
            * @author: Enrique Nieto Lorenzo
            * @since: 10/10/2025
            * 1. Inicializar variables de los distintos tipos de datos básicos(string, int, float, bool) y mostrar los datos por pantalla (echo, print, printf, print_r,var_dump).
            */
            $scadena = "Hola, mundo";
            $ientero = 500;
            $fdecimal = 9.5;
            $booleano = true;
            $aDatos = [$scadena,$ientero,$fdecimal,$booleano];
            
            echo("<h3>Uso de echo</h3>");
            echo('La variable $scadena es de tipo "'.gettype($scadena).'" y contiene el valor '.$scadena.'<br>');
            echo('La variable $ientero es de tipo "'.gettype($ientero).'" y contiene el valor '.$ientero.'<br>');
            echo('La variable $fdecimal es de tipo "'.gettype($fdecimal).'" y contiene el valor '.$fdecimal.'<br>');
            echo('La variable $booleano es de tipo "'.gettype($booleano).'" y contiene el valor '.$booleano.'<br>');
            
            print("<h3>Uso de print</h3>");
            print('La variable $scadena es de tipo "'.gettype($scadena).'" y contiene el valor '.$scadena.'<br>');
            print('La variable $ientero es de tipo "'.gettype($ientero).'" y contiene el valor '.$ientero.'<br>');
            print('La variable $fdecimal es de tipo "'.gettype($fdecimal).'" y contiene el valor '.$fdecimal.'<br>');
            print('La variable $booleano es de tipo "'.gettype($booleano).'" y contiene el valor '.($booleano?"true":"false").'<br>');

            printf("<h3>Uso de printf</h3>");
            printf("La variable %s es de tipo %s y tiene el valor %s <br>", '$texto', gettype($scadena), $scadena);
            printf("La variable %s es de tipo %s y tiene el valor %d <br>", '$entero', gettype($ientero), $ientero);
            printf("La variable %s es de tipo %s y tiene el valor %.2f <br>", '$decimal', gettype($fdecimal), $fdecimal);
            printf("La variable %s es de tipo %s y tiene el valor %s <br>", '$booleano', gettype($booleano), ($booleano?"true":"false"));

            print_r("<h3>Uso de print_r</h3>");
            print_r($aDatos,false);
            echo("<br>");
            print_r($aDatos,true);
            echo("<br>");
            print_r('La variable $scadena es de tipo '.gettype($scadena).' y tiene el valor '.$scadena.'<br>');
            print_r('La variable $ientero es de tipo '.gettype($ientero).' y tiene el valor '.$ientero.'<br>');
            print_r('La variable $fdecimal es de tipo '.gettype($fdecimal).' y tiene el valor '.$fdecimal.'<br>');
            print_r('La variable $booleano es de tipo '.gettype($booleano).' y tiene el valor '.($booleano?"true":"false").'<br>');

            echo("<h3>Uso de var_dump</h3>");
            var_dump($scadena);echo("<br>");
            var_dump($ientero);echo("<br>");
            var_dump($fdecimal);echo("<br>");
            var_dump($booleano);echo("<br>");
            
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

