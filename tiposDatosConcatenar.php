<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de datos en PHP</title>
</head>

<body>
    <?php
    $dia = 4; //Tipo entero
    $salario = 2000000.50; // Tipo double
    $nombre = "Ana";
    $estado = true; // tipo boolean

    //Impresion de variables
    echo "<br>Variable tipo entero: $dia";
    echo "<br>Variable tipo double: " . $salario;
    echo "<br>Variable tipo String: " . $nombre;
    echo "<br>Variable tipo boolean: " . $estado;
    echo "<hr>";

    echo "{$nombre} gana \$$salario";
    echo "<br>";
    $texto = sprintf("Hoy es %d", $dia);
    echo "<br>";

    echo $texto;
    $peras = 3;
    $manzanas = 4;
    $mangos = 5;
    $precioFrutas = 25500.30;

    //Uso de sprintf
    $texto = sprintf("Soy %s y Tengo %d peras, %d  manzanas y %d mangos  y costaron $%.2f", $nombre, $peras, $manzanas, $mangos, $precioFrutas);

    echo "<br>" . $texto;

    //Uso de Heredoc
    echo "<hr>";
    $titulo = "Programa de Formacion";
    $texto = "Análisis y Desarrollo de Software";
    $html = <<<HTML
    <div class="card"> 
        <h2>$titulo</h2>//Escribe en pantalla "Programa de Formacion"
        <p>$texto</p>

    </div>

    HTML;
    echo $html;

    $numeroAleatorio = rand(10, 15);
    echo "<hr>Número Aleatorio";
    echo "<br>";

    /* Opcion 1: condicionales anidados (if, elseif)
    
    if($numeroAleatorio == 10) {
        echo " , El numero es Diez (10) ";
    }elseif($numeroAleatorio == 11) {
        echo " , El numero es once (11) ";
    }elseif($numeroAleatorio == 12) {
        echo " , El numero es doce (12) ";
    }elseif($numeroAleatorio == 13) {
        echo " , El numero es trece (13) ";
    }elseif($numeroAleatorio == 14 ) {
        echo " , El numero es catorce (14) ";
    }elseif($numeroAleatorio == 15){
        echo " , El numero es quince (15) "; 
    }

    // Opcion dos: Switch-case

    switch ($numeroAleatorio) {
        case 10:
            echo " El numero es diez ($numeroAleatorio)";
            break;
        case 11:
            echo " El numero es once ($numeroAleatorio)";
            break;
        case 12:
            echo " El numero es doce ($numeroAleatorio)";
            break;
        case 13:
            echo " El numero es trece ($numeroAleatorio)";
            break;
        case 14:
            echo " El numero es catorce ($numeroAleatorio)";
            break;
        
        default:
            echo " El numero es quince ($numeroAleatorio)";
            break;
    }*/

            // Opcion 3: Array (vectores)

    // Vector secuencial: índice 0 => "diez", índice 1 => "once", ...
    $numeros = ["diez", "once", "doce", "trece", "catorce", "quince"];

    $indice = $numeroAleatorio - 10;

    // Si el índice está dentro del rango válido, tomamos ese valor;
    // si no, usamos "quince" (que ya está en la posición 5 del vector).
    $mensaje = ($indice >= 0 && $indice < count($numeros))
        ? $numeros[$indice]
        : "quince";

    echo " El numero es $mensaje ($numeroAleatorio)";

    ?>

</body>

</html>