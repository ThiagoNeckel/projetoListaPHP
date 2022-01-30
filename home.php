

<?php 
require_once("db/conexao.php");
session_start();
$usuario_idusuario = $_SESSION['idusuario'];
$sql = "SELECT * FROM tarefa WHERE usuario_idusuario= $usuario_idusuario order by status_idstatus asc";

$resulttarefas = mysqli_query($con, $sql);




?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="home.css" rel="stylesheet">
  <title>Tarefas</title>
</head>
<body>
<div class="menu">
         <a href="nova_tarefa.php"><button>Cadastrar</button> </a>
         <a href="home.php"><button>Listar</button></a>
         <a href="lougout.php"><button>Sair</button></a>
  </div>  

  <table class="lista">
    <tr id=top>
      <td>Titulo</td>
      <td>Descriçâo</td>
      <td>Status</td>
      <td>Nivel</td>
      
    </tr>
    <?php foreach ($resulttarefas as $tarefas){?>
    <tr >

      <td><?= $tarefas['titulo']?></td>
      <td><?= $tarefas['descricao']?></td>
      <td><?= $tarefas['status_idstatus']?></td>
      <td><?= $tarefas['nivel_idnivel']?></td>
      <!--
      <?php
      $id_status = $tarefas['idtarefa'];
      $sql2 = "SELECT * FROM status, tarefa WHERE idstatus=$id_status";
      $result_status = mysqli_query($con, $sql2);
      $saida_status = mysqli_fetch_array($result_status);
      var_dump($saida_status);
      ?>
      <td><?= $saida_status['nome']?></td>
      
      <?php
      $id_nivel = $tarefas['idtarefa'];
      $sql3 = "SELECT * FROM nivel WHERE idnivel=$id_nivel";
      $result_nivel = mysqli_query($con, $sql3);
      $saida_nivel = mysqli_fetch_array($result_nivel);

      ?>
      <td><?= $saida_nivel['nome']?></td>-->
      <td><a href="editar.php?idtarefa=<?= $tarefas['idtarefa']?>"><button id="btn">Editar</button></a>
      <td><a href="db/excluir_tarefa.php?idtarefa=<?= $tarefas['idtarefa']?>"><button id="btn">Excluir</button></a>
    </td>
    </tr>
    <?php } ?> 
  </table>
  </div>
  
</body>
</html>