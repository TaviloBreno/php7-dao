<?php 

require_once("config.php");




$sql = new Sql();

$usarios = $sql->select("SELECT * FROM tb_usuarios");



echo json_encode($usarios);


 ?>