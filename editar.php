

<?php 

session_start();
require_once("db/conexao.php");
$sql1 = "SELECT * FROM nivel";
$sql2 = "SELECT * FROM status";
$sql3 = "SELECT * FROM tarefa";
$tarefa = $_GET['idtarefa'];
$sql4 = "SELECT * FROM tarefa WHERE idtarefa = $tarefa ";
$result_nivel = mysqli_query($con, $sql1);
$result_status = mysqli_query($con, $sql2);
$result_tarefa = mysqli_query($con, $sql3);
$result_tarefas = mysqli_query($con, $sql4);
$tarefas = mysqli_fetch_array($result_tarefas);


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="tarefa_sytle.css" rel="stylesheet">
  <title>Editar</title>
</head>
<body>
<div class="menu">
         <a href="nova_tarefa.php"><button>Cadastrar</button> </a>
         <a href="home.php"><button>Listar</button></a>
         <a href="lougout.php"><button>Sair</button></a>
  </div>  

  <div class="novo">
  <form action="db/editar_tarefa.php" method="POST">
  <h1>Editar Tarefa</h1>
  <input type="hidden" value="<?=$tarefa?>" name="idusuario">
    <input type="text" name="titulo" value="<?= $tarefas['titulo']?>" placeholder="Nome"><br>
    <textarea  name="descricao" cols="20" rows="5"   placeholder="Descrição"><?= $tarefas['descricao']?></textarea><br>
     <select name="nivel" id="">
    <?php foreach ($result_nivel as $dados){ ?>
        <option value= "<?php echo $dados['idnivel']?>">
        <?php
        if ($dados['idnivel'] == $tarefas['idtarefa']){
            echo "selected";
          }
        
        ?>
      >  
        
        <?php echo $dados['nome']?></option>
      <?php } ?>
     
    </select><br>
      <select name="status" id="">
    <?php foreach ($result_status as $dados){ ?>
        <option value= "<?php echo $dados['idstatus']?>">
        <?php 
          if ($dados['idstatus'] == $tarefas['idtarefa']){
            echo "selected";
          }
        
        ?>
      >  
        <?php echo $dados['nome']?></option>
      <?php } ?>
     
    </select>
    <button>Salvar</button>

  </form>
  </div> 
</body>
</html>