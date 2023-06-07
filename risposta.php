<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risposta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>

<?php 
$testo = $_GET["testo"];
$ban = $_GET["ban"];
$hide = "<spans>***</span>";
$numWords = strlen($testo);
$testoban = str_ireplace($ban, $hide, $testo);
?>

<div class="container">
    <div class="rows">
        <div class="col-12 my-5">
            <h1 class="text-center bg-warning p-2">Testo inserito dall'utente</h1>
            <p class="p-5 bg-primary"><?php echo $testo; ?></p>
            <p class="text-end fw-light"><?php echo "Il testo contiene ". $numWords . " caratteri" ?></p>
        </div>
        <div class="col-12">
            <h1 class="text-center bg-warning p-2">Testo censurato</h1>
            <p class="p-5 bg-primary"><?php echo $testoban; ?></p>
        </div>
    </div>
</div>
</body>
</html>