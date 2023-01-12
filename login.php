<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
    <title>LC</title>
</head>
<body>

<?php
include 'cone.php';

$user = $_POST["email"];
$contrasenia = $_POST["Contra"];
$sql="SELECT * FROM datos WHERE Email='".$user."' and Contrasenia= '".$contrasenia."'";
$sql_query=  mysqli_query($conn,$sql);

// ! Mostrar datos 
// ? Controla errores
if ($sql_query!=FALSE){
    //? si no existen datos
    if($sql_query->num_rows==0){
        echo "Datos Incorrectos!";
    };
    //? si existen datos 
    ?>
    <h1>Sql utilizado <?php echo $sql ?></h1>
    <?php
    while ($row =mysqli_fetch_array($sql_query)){
        //? html mostrar datos
        ?>
        <div class="container d-flex justify-content-center">
            
            <table class="tablaStilo table table-dark table-striped-columns">
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
// ? si los datos ingresados no coinciden con sql
}else{
    echo "Datos Invalidos🤡";
}
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>