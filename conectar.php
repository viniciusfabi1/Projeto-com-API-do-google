<?php
$host = "localhost";
$usuario = "root";
$senha = "";
$bd = "denuncia";

$conn = mysqli_connect($host, $usuario,$senha,$bd);
mysqli_select_db($conn,"denuncia");
mysqli_set_charset($conn, "utf8");
?>