<?php 
require_once ("conexao.php");

session_start();


$nome = $_POST['nome'];
$senha = $_POST['senha'];


$query= "SELECT * FROM $banco.usuario WHERE nome='".$nome."' and senha='".$senha."'"; 

$result = mysqli_query($con, $query);

$dados = mysqli_fetch_array($result);
var_dump($dados);


if(mysqli_num_rows($result)>0){

  $_SESSION['idusuario'] = $dados['idusuario'];
  $_SESSION['nome'] = $dados['nome'] ;
  $_SESSION['senha'] = $dados['senha'] ;


  header("Location:../home.php");
  }else{
    echo "<script>alert('Login ou senha Invalido');</script>";
    unset ($_SESSION['nome']);
    unset ($_SESSION ['senha']);
    echo $login;
    echo $senha;
    header("Location:../index.php?erro=2");
}


?>