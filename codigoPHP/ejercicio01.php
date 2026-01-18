<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 | Enrique Nieto</title>
    
    <link rel="stylesheet" href="../../webroot/css/all.min.css">
    <link rel="stylesheet" href="../../webroot/css/estilos.css">
</head>
<body>

    <header class="cabecera-principal">
        <div class="contenedor contenido-cabecera">
            <div class="identidad">
                <a href="../indexProyectoTema3.php" style="text-decoration:none;">
                    <div class="logo-iniciales">EN</div>
                </a>
                <h1>Enrique Nieto Lorenzo</h1>
            </div>
            
            <div class="curso-badge" style="background-color: #777BB4; color: white;">
                Ejercicio 1
            </div>
        </div>
    </header>

    <main class="contenedor-principal">
        
        <h2 class="titulo-pagina">Inicializar variables y mostrar datos</h2>
        
        <div class="caja-ejercicio">
            
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
            
        </div>
        
        <div style="text-align: center; margin-top: 20px;">
            <a href="../mostrarcodigo/muestraejercicio01.php" class="boton boton-primario">
                <i class="fa-solid fa-code"></i> Ver Código Fuente
            </a>
        </div>

    </main>

    <footer class="pie-pagina">
        <div class="contenedor contenido-footer">
            <div class="texto-legal">
                <p>2025-26 IES LOS SAUCES. ©Todos los derechos reservados.</p>
                <p class="autor">Enrique Nieto Lorenzo. Fecha de Actualización: 20-11-2025</p>
            </div>
            <div class="iconos-footer">
                <a href="https://github.com/EnriqueNieto" target="_blank" title="GitHub"><i class="fa-brands fa-github"></i></a>
                <a href="../../index.php" title="Inicio"><i class="fa-solid fa-house"></i></a> 
                <a href="../indexProyectoTema3.php" title="Volver al Tema 3"><i class="fa-solid fa-arrow-turn-up"></i></a>
            </div>
        </div>
    </footer>

</body>
</html>

