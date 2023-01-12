<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login LC</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container d-flex mb-3 flex-column justify-content-center align-items-center text-danger-emphasis bg-primary-subtle rounded">
        <h1 class="p-2 text-uppercase">iniciar sesion</h1>
        <form class="flex-column  g-3 p-2 bg-secondary rounded-bottom border border-warning" action="login.php" method="post">
                <div class="col-auto">
                    <label class="visually-hidden" for="correo">Correo</label>
                    <input class="form-control" placeholder="Email" type="text" id="idem" name="email">
                </div>
                <br>
                <div class="col-auto">
                    <label class="visually-hidden" for="pw">Contrasenia</label>
                    <input class="form-control" placeholder="Password" type="password" name="Contra" id="idpw">
                </div>
                <br>
                <div class="col-auto d-flex justify-content-center">
                    <input class="px-2 rounded" type="submit" value="enviar">
                </div>
        </form>
        <br>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>