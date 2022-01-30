
<?php 
require_once("db/conexao.php");
$sql1 = "SELECT * FROM nivel";
$sql2 = "SELECT * FROM status";
$sql3 = "SELECT * FROM tarefa";
$result_nivel = mysqli_query($con, $sql1);
$result_status = mysqli_query($con, $sql2);
$result_tarefa = mysqli_query($con, $sql3);

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="tarefa_sytle.css" rel="stylesheet">
  <title>Nova Tarefa</title>
</head>
<body>
<div class="menu">
         <a href="nova_tarefa.php"><button>Cadastrar</button> </a>
         <a href="home.php"><button>Listar</button></a>
         <a href="lougout.php"><button>Sair</button></a>
  </div>  

<div class="novo">
  <form action="db/tarefa.php" method="POST">
    <h1>Nova Tarefa</h1>
    <input type="text" name="titulo" placeholder="Nome"><br>
    <textarea  name="descricao" cols="20" rows="5" placeholder="Descrição"></textarea><br>
     <select name="nivel" id="">
    <?php foreach ($result_nivel as $dados){ ?>
        <option value= "<?php echo $dados['idnivel']?>"><?php echo $dados['nome']?></option>
      <?php } ?>
     
    </select>
      <select name="status" id="">
    <?php foreach ($result_status as $dados){ ?>
        <option value= "<?php echo $dados['idstatus']?>"><?php echo $dados['nome']?></option>
      <?php } ?>
     
    </select><br>
    <a href="./home.php"> <button>Salvar</button></a>

  </form>
</div> 
</body>
</html>