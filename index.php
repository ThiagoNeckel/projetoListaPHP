<?php

if (isset($_GET['erro'])){
  if($_GET['erro'] ==1){
    $erro = "Crie uma Usuario para poder seguir!!";
  }else if($_GET['erro'] ==2){
    $erro = "Usuario Invalido!";
  }

}else{
  $erro = "";

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="sytle.css" rel="stylesheet">
  <title>Login</title>
</head>
<script  async src="./Login/index.js" ></script>
<body>
  

  <div class="container">
  <div class="tarefa">
  <img src='./assets/tarefa.png' alt="tarefa" id='tarefa' />
  </div>
  <div class="login">
          
   <form action="db/verificacao_login.php" method="POST"><br>
   <h1>Login</h1>
   <img src= './assets/email.png'alt="email" id='image' />
    <input type="text" name="nome" id placeholder="Nome"> <br>
    <img src= './assets/senha.png'alt="senha" id='image' />
    <input type="password" name="senha" placeholder="Senha"><br>
    <span><?php echo $erro; ?></span><br>
    <button >Entrar</button>
    
    
  </form>
  <a href="usuario.php"><button>Novo Usuario</button></a>
  </div>
  </div>


  
</body>
</html>