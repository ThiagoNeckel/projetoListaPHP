<?php
session_start();
if (isset($_GET['erro'])){
  if($_GET['erro'] ==1){
    $erro = "Crie uma Usuario!!";
  }
else{
  $erro = "";
}
}

?>