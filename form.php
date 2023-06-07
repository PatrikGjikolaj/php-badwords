<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form di invio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <form action="risposta.php" method="GET">
        <div class="container">
            <div class="row">
                <div class="col-12 m-3 p-3 text-center">
                    <h1>Badwords</h1>
                </div>
                <div class="col-12 mx-5 p-5">
                    <label for="exampleFormControlTextarea1" class="form-label">Inserisci il testo da controllare</label>
                    <textarea type="text" class="form-control" name="testo" rows="3"></textarea>
                </div>
                <div class="col-4 d-flex px-5 m-auto gap-3">
                    <input name="ban"class="form-control" type="text" placeholder="Parola da censurare">
                    <button type="submit" class="btn btn-outline-success">Invia</button>
                </div>
            </div>
        </div>
    </form>
</body>
</html>