<?php
$servername = "localhost";
$username = "root";
$password = ""; // Coloque a senha do seu MySQL se houver
$dbname = "login_system";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
