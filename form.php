<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">   
    <title>Form php</title>
</head>
<body>
    <div class="container mt-5">
    <form action="password.php" class="d-flex">
        <input class="form-control me-2"  type="text" placeholder="Inserisci la lunghezza della password" name="lunghezza" required>
        <button class="btn btn-outline-success" type="submit">Genera Password</button>
    </form>
    </div>

</body>
</html>