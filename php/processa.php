<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "banco";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

$nome = $_POST['nome'];
$idade = $_POST['idade'];
$sexo = $_POST['sexo'];

// Consulta no banco
$sql = "SELECT * FROM usuarios WHERE nome = '$nome' AND idade = '$idade' AND sexo = '$sexo'";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    echo "Registro encontrado!";
} else {
    echo "Nenhum registro corresponde aos dados informados.";
}

$conn->close();
?>
