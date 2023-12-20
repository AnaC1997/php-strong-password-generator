<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Form php</title>
</head>

<body class="bg-info">
    <div class="container mt-5">
        <h1 class="text-center p-3">Strong Password Generador</h1>
        <h6 class="text-center p-3">Genera una password sicura</h6>
        <form action="password.php">
            <div class="d-flex mb-3">

             <!--Imput lunghezza-->
                <input class="form-control me-2" type="text" placeholder="Inserisci la lunghezza della password"
                    name="lunghezza" required>
                <button class="btn btn-outline-success bg-danger text-white" type="submit">Genera Password</button>
            </div>
           <!--Opzione Lettere-->
            <div class="form-check mb-3">
                <input name="lettereMaiuscoleMinuscole"  class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Lettere
                </label>
            </div>

               <!--Opzione Numeri-->
            <div class="form-check mb-3">
                <input name="numeri" class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Numeri
                </label>
            </div>

             <!--Opzione Simboli-->
            <div class="form-check mb-3">
                <input name="simboli" class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Simboli
                </label>
            </div>
        </form>

    </div>
</body>

</html>