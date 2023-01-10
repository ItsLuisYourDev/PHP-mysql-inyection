<?php
include 'cone.php';
$result = mysqli_query($conn, "SELECT * FROM datos");
$extraido= mysqli_fetch_array($result);
echo "- Nombre: ".$extraido['Email']."<br/>";
echo "- Contrasenia: ".$extraido['Contrasenia']."<br/>";

echo "estoi en secreta web"
?>