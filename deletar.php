<?php
include("conecta.php");
$id = $_GET["id"];
$comando = $pdo->prepare("DELETE FROM usuarios WHERE id=$id");
$resultado = $comando->execute();

header("Location: adminpage.php");

?>