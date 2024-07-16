<?php
const API_URL = "https://whenisthenextmcufilm.com/api";
#Inicializar una nueva sesion de curl; ch = curl handle
$ch = curl_init(API_URL);
//indicar que queremos recibir el resultado de la peticion y no mostrarlo en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//ejecutar la peticion y gardamos el resultado
$result = curl_exec($ch);
$data = json_decode($result, true);
curl_close($ch);


?>

<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }

    section{
        display: flex;
        justify-content: center;
        text-align: center;
    }

    hgroup{
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
    }
</style>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La proxima pelicula de marvel</title>
    <!-- Centered viewport -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css" />
</head>

<body>

    

    <section>
        <img src="<?=$data["poster_url"];?>" width="300" alt="">
    </section>

    <hgroup>
        <h2><?=$data["title"];?></h2>
        <p>Fecha de estreno <?=$data["release_date"];?> </p>
    </hgroup>




</body>

</html>



