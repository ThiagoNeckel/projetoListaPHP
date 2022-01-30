<?php 


require_once("conexao.php");
session_start();



$tarefa = $_GET['idtarefa'];


$sql = "DELETE FROM tarefa
          WHERE 
          idtarefa = $tarefa
          ";

$resultado = mysqli_query($con, $sql);

if($resultado){
  header("Location:../home.php");
}

?>