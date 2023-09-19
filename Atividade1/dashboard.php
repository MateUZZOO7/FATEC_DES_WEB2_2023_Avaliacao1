<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;

}
$dados = file("dados.txt");
?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
<head>
    <title>Dashboard</title>
</head>
<body>
    <h2>Alunos Cadastrados</h2>
    <ul>
        <?php foreach ($dados as $registro) {
            echo $registro . "<br>";}
        ?>
    </ul>
    <a href="logout.php" class="btn btn-danger">Logout</a>
    <a href="cadastro.php" class="btn btn-danger">Cadastrar</a>
</body>
</html>