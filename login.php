<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    

<?php
include 'cone.php';
$result = mysqli_query($conn, "SELECT * FROM datos");
$extraido= mysqli_fetch_array($result);
$usuario_correcto = $extraido['Email'];
$palabra_secreta_correcta = $extraido['Contrasenia'];

$usuario = $_POST["em"];
$palabra_secreta = $_POST["pw"];

$dValidados=  mysqli_query($conn, "SELECT * FROM datos WHERE Email='".$usuario."' and Contrasenia= '".$palabra_secreta."'");
//echo gettype($dValidados);
$sql="SELECT * FROM datos WHERE Email='$usuario' and Contrasenia= '$palabra_secreta'";
//echo $sql;
$res =$conn->query($sql);
//echo gettype($res);
//echo $dValidados->num_rows;

// echo "<br/>";
// echo "user=>".$usuario."==".$usuario_correcto." ";
// echo "<br/>";
// echo "psaword=>".$palabra_secreta."==".$palabra_secreta_correcta." ";

// ! en la misma pagina
if ($dValidados!=FALSE){
    if($dValidados->num_rows==0){
        echo "Usuario o contraseña incorrecta 😥";
    };
    while ($row =mysqli_fetch_array($dValidados)){
        ?>
        <div class="container">
            <h1>Bienvenido Usuario <?php echo $usuario ?></h1>
        <table class="table">
        <tr>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
        </tr>
        <tr>
        <td> <?php echo $row['Email'] ?> </td>
        <td> <?php echo $row['Contrasenia'] ?> </td>
        </tr>
        </table>
        </div>
    </br>
        <?php
        
    }

}else{
    echo "Datos incorrectos 🤡";
}
// while ($row =mysqli_fetch_array($dValidados)){
//     echo "vienvenido";
// }


// //!con pagina extra
// if ($row =mysqli_fetch_array($dValidados)) {
//     session_start();

//     $_SESSION["usuario"] = $usuario;
//     header("Location: datos.php");
// } else {
//     # No coinciden, así que simplemente imprimimos un
//     # mensaje diciendo que es incorrecto
//     echo "El usuario o la contraseña son incorrectos";
// }


# Luego de haber obtenido los valores, ya podemos comprobar:
// if ($dValidados->num_rows ==1) {
//     session_start();

//     $_SESSION["usuario"] = $usuario;
//     header("Location: datos.php");
// } else {
//     # No coinciden, así que simplemente imprimimos un
//     # mensaje diciendo que es incorrecto
//     echo "El usuario o la contraseña son incorrectos";
// }
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>