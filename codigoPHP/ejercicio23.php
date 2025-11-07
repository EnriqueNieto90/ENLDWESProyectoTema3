<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>EJERCICIO 23</title>
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
        #telefono, #nombre {
            background-color: lightgoldenrodyellow;
        }
        form *{
            margin-top: 10px; 
        }
        label{
            display: inline-block;
            width: 80px;
            margin-left: 20px;
        }
        .aviso{font-size: 0.75em;}
        input[name="enviar"], button{
            padding: 5px 15px;
            margin: 10px 50px;
            border-radius: 20px;
            background-color: rgb(73, 136, 187);
            color: white;
        }
        .error{color: red;}

    </style>
</head>
<body>
    <header>
        <h1><b>EJERCICIO 23</b></h1>
    </header>
    <main>   
        <section>
            <?php
            /**
             * @author: Enrique Nieto Lorenzo
             * @since: 06/11/2025
             * 23.Construir un formulario para recoger un cuestionario realizado a una persona y mostrar
             * en la misma página las preguntas y las respuestas recogidas; en el caso de que alguna
             * respuesta esté vacía o errónea volverá a salir el formulario con el mensaje correspondiente.
             */

            // Importación de la librería de validación necesaria
            require_once "../core/231018libreriaValidacion.php";
            
            //Variable interruptor que nos indica que la entrada es correcta
            $entradaOK = true;
            
            //Array asociativo preparado para recoger los mensajes de error
            $aErrores = [
                'nombre' => '', 
                'email' => '', 
                'telefono'=> ''
            ];
            
            //Array asociativo preparado para recoger las respuestas correctas (si $entradaOK)
            $aRespuestas=[ 
                'nombre' => '', 
                'email' => '', 
                'telefono'=> ''
            ]; 

            //Para cada campo del formulario: Validar entrada de los datos
            if (isset($_REQUEST["enviar"])) {//Código que se ejecuta cuando se envía el formulario

                // Validamos los datos del formulario
                $aErrores['nombre']= validacionFormularios::comprobarAlfabetico($_REQUEST['nombre'],100,0,1,);
                $aErrores['email']= validacionFormularios::validarEmail($_REQUEST['email']);
                $aErrores['telefono'] = validacionFormularios::validarTelefono($_REQUEST['telefono']);

                if(!empty($_REQUEST['telefono'])){ // Comprobar si el telefono está vacío
                    foreach($aErrores as $campo => $valor){
                        if(!empty($valor)){ // Comprobar si el valor es válido
                            $entradaOK = false;
                        } 
                    }
                }else{ //Construir mensajes de error
                    $aErrores['telefono']='Introduce un teléfono';
                    $entradaOK = false;
                }

            } else {//Código que se ejecuta antes de rellenar el formulario
                $entradaOK = false;
            }
            //Tratamiento del formulario
            if($entradaOK){ //Cargar la variable $aRespuestas y tratamiento de datos OK

                // Recuperar los valores del formulario
                $aRespuestas['nombre'] = $_REQUEST['nombre'];
                $aRespuestas['email'] = $_REQUEST['email'];
                $aRespuestas['telefono'] = $_REQUEST['telefono'];

                echo "<h2>Resultados:</h2>";
                foreach ($aRespuestas as $campo => $valor) {
                    echo "<p>$campo: <b>$valor</b></p>";
                }

                // Botón para volver a recargar el formulario inicial
                echo '<a href="' . $_SERVER['PHP_SELF'] . '"><button>Volver</button></a>';

            } else { //Mostrar el formulario hasta que lo rellenemos correctamente
                //Mostrar los datos tecleados correctamente en intentos anteriores
                //Mostrar mensajes de error (si los hay y el formulario no se muestra por primera vez)
                ?>
                    <h2>Datos personales</h2>
                    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post"> 
                        <label for="nombre">Nombre:</label>
                        <input type="text" id="nombre" name="nombre"><span class="error">*<?php echo $aErrores['nombre'] ?></span>
                        <br>
                        <label for="email">Email:</label>
                        <input type="text" name="email">
                        <br>
                        <label for="telefono">Telefono:</label> 
                        <input type="text" id="telefono" name="telefono"><span class="error">*<?php echo $aErrores['telefono'] ?></span>
                        <br>
                        <input type="submit" value="Enviar" name="enviar">
                        <p class="aviso">*Campos obligatorios</p>
                    </form>

                <?php

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


