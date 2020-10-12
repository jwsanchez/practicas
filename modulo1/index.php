<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <h1>Practica de Arrays</h1>
    <?php
    #Arrays Asosiativos multidimencionales
    $suscriptores=[
        ['nombre'=> 'Thaliana', 'edad'=> 7 , 'pais'=>'Colombia'],
        ['nombre'=> 'Jesus', 'edad'=> 24 , 'pais'=>'Colombia'],
        ['nombre'=> 'Valentina', 'edad'=> 25 , 'pais'=>'Colombia'],

    ];
    //var_dump($suscriptores);
    $contador = count($suscriptores);
    for ($detener = 0; $detener<$contador; $detener++){
        echo "<p>"."Hola mi nombre es ".$suscriptores[$detener]['nombre'] . " , tengo ". $suscriptores[$detener]['edad'] . ' años'.', soy de '. $suscriptores[$detener]['pais'] ."</p>";
    }
    //echo $detener;
    ?>
</body>
</html>