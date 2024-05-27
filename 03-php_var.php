<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <H1>var</h1>
    <!-- Aqui enpieza PHP -->
    <?php 
    $nombre = 'Alfonso'; // pon tu nombre
    $edad = 67; // numerica 
    $cconducir = true; // var boolean
     echo "<p>hola soy <strong>$nombre</strong> y tengo $edad </p>";
     if ($cconducir){
        echo '<p>Carnet si </p>';
     }
     //echo "<p>cc : $cconducir</p>" ;
     echo '<p>hola soy <strong>' . $nombre . '</strong> y tengo $edad </p>'; 
     echo '<p>hola soy <strong>' . $nombre . '</strong> y tengo '.$edad.' </p>'; 
    
    ?>
    
</body>
</html>