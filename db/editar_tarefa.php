<?php 


require_once("conexao.php");
session_start();


$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];
$idtarefa = $_POST['idusuario'];
$nivel = $_POST['nivel'];
$status = $_POST['status'];

$sql = "UPDATE  tarefa SET titulo = '$titulo',descricao = '$descricao', nivel_idnivel = '$nivel', status_idstatus = '$status' 
          WHERE 
          idtarefa = $idtarefa
          ";

$resultado = mysqli_query($con, $sql);

if($resultado){
  header("Location:../home.php");
}

?>