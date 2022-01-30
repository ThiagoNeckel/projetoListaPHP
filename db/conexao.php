<?php 

$servidor = "127.0.0.1";
$senha = "neckel907T@";
$usuario = "root";
$banco = "mydb";


$con = mysqli_connect($servidor,$usuario,$senha,$banco);

if (mysqli_connect_error()){
  echo "Failed to connect to MySQOl: ".mysqli_connect_error();

}

mysqli_select_db($con,$banco);


?>