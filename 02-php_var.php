<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introducción</title>
    <style>
         .mayor {
            color: red;
         }
    </style>
</head>
<body>
    <p>Las variables en PHP se definen con un $ delante $contador = 6 </p>
    <?php
    $ano = 2015 ;
    //$ahora = 2023;
    $ahora = date("Y");
    $texto1 = 'Mi año de nacimiento es : ';
    echo '<p>';
   // echo 'Mi año de nacimiento es : ';
    echo $texto1;
    echo $ano;
    echo ' tengo ';
    echo $ahora - $ano;
    echo '</p>';
    echo '<hr>';
    $edad = $ahora - $ano;
    $mayor = '';
    if ($edad>=18) {$mayor = 'mayor';}
    echo '<p>Mi año de nacimiento es :' . $ano . ' y tengo ' . $edad  . ' años</p>';
    echo '<hr>';
    echo '<p>Mi año de nacimiento es : $ano  y tengo  $edad   años $mayor</p>';
    echo '<hr>';
    echo "<p class='$mayor'>Mi año de nacimiento es : $ano  y tengo  $edad   años  $mayor</p>";

    echo date ("Y-m-d H:i:s");
    ?>
    
   



    
</body>
</html>