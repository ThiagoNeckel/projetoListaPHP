<?php 


require_once("conexao.php");

$nome = $_POST['nome'];
$senha = $_POST['senha'];


$sql = "INSERT INTO usuario(nome,senha)
          VALUES
          ('$nome','$senha')";

$resultado = mysqli_query($con, $sql);

if($resultado){
  header("Location:../index.php");
}

?>