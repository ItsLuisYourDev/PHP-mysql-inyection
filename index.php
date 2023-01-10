<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<?php
include 'cone.php';
$result = mysqli_query($conn, "SELECT * FROM datos");
$extraido= mysqli_fetch_array($result);
// echo "- Nombre: ".$extraido['Email']."<br/>";
// echo "- Contrasenia: ".$extraido['Contrasenia']."<br/>";
mysqli_close($conn);

?>

<body>
    <div class="container d-flex mb-3 flex-column justify-content-center align-items-center">
        <h1 class="p-2 text-uppercase">login</h1>

        <form class="row g-3 p-2" action="login.php" method="post">

                <div class="col-auto">
                    <label class="visually-hidden" for="correo">correo</label>
                    <input class="form-control" placeholder="Email" type="text" id="idem" name="em">
                </div>

                <div class="col-auto">
                    <label class="visually-hidden" for="pw">pw</label>
                    <input class="form-control" placeholder="Password" type="password" name="pw" id="idpw">
                </div>

                <div class="col-auto">
                    <input type="submit" value="enviar">
                </div>

        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>



</html>