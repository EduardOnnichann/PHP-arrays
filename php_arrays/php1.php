<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <?php
    $datos_personales = ['nombre' => 'Eduard','apellido' => 'Caringal','edad' => 18, 'ciudad' => 'Barcelona'];
    ?>
    
    <h2>Ejercicio 1</h2>

    <?php
    $contador_e1 = 1;

    foreach ($datos_personales as $valor) {
        echo "<p>dato " . $contador_e1 . "º: " . $valor . "</p>";
        $contador_e1++;
    }
    ?>


    <h2>Ejercicio 2</h2>

    <?php
    foreach ($datos_personales as $clave => $valor) {
    echo "<p>" . $clave . ": " . $valor . "</p>";
    }
    ?>

    <?php
    $datos_personales['edad'] = 20;
    ?>

    <h2>Ejercicio 3</h2>

    <?php
    $contador_e3 = 1;
 
    foreach ($datos_personales as $valor) {
        echo "<p>dato " . $contador_e3 . "º: " . $valor . "</p>";
        $contador_e3++;
    }
    ?>

    <h2>Ejercicio 4</h2>

    <?php

    var_dump($datos_personales);
    
    ?>

    <h2>Ejercicio 5</h2>

    <?php

    $letras = "a,b,c,d,e,f";

    $explotador = (explode(",", $letras));
    $contador_e4 = count($explotador);

    for ($i = count($explotador) - 1; $i >= 0; $i--) {
        echo "letter " . $contador_e4 . ": " . $explotador[$i] . "<br>";
        $contador_e4--;
    }

    ?>

    <?php
    $notas = array("Eduard" => 1,"Ivan" => 7,"Luis" => 10,"Gian" => 8,"Pol" => 4,"Joel" => 10);
    ?>

    <h2>Ejercicio 6</h2>

    <?php

    arsort($notas);
    echo "Notas de los estudiantes:<br>";

    foreach ($notas as $nombre => $nota) {
        echo $nombre . ": " . $nota . "<br>";
    }
    ?>

    <h2>Ejercicio 7</h2>

    <?php

    $suma = 0;
    foreach ($notas as $nota) {
        $suma += $nota;
    }

    $media = $suma / count($notas);

    echo "Media de las notas: " . number_format($media, 2) . "<br>";
    echo "Alumnos con nota por encima de la media:<br>";

    foreach ($notas as $nombre => $nota) {
        if ($nota > $media) {
            echo $nombre . "<br>";
        }
    }

    ?>

    <h2>Ejercicio 8</h2>

    <?php

    $maxNota = max($notas);
    $mejores = array_keys($notas, $maxNota);

    echo "La nota más alta es $maxNota y los mejores alumnos son: " . implode(", ", $mejores);

    ?>


    </body>
    </html>