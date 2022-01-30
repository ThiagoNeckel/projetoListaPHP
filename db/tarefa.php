<?php 


require_once("conexao.php");
session_start();


$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];
$usuario_idusuario = $_SESSION['idusuario'];
$nivel = $_POST['nivel'];
$status = $_POST['status'];

$sql = "INSERT INTO tarefa(titulo,descricao, usuario_idusuario, nivel_idnivel, status_idstatus )
          VALUES
          ('$titulo','$descricao','$usuario_idusuario','$nivel','$status')
          ";

$resultado = mysqli_query($con, $sql);

if($resultado){
  header("Location:../index.php");
}

?>