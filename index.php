<?php
/*
require_once("config.php");

$sql = new Sql();

$usuarios = $sql->select("SELECT *FROM tb_usuarios");

echo json_encode($usuarios);
*/
require_once("config.php");

// //Carrega um usuario
// $root = new Usuario();
// $root -> loadById(4);
// echo $root;

// Carrega uma lista de usuarios
// $lista= Usuario::getList();
// echo json_encode($lista);

// carrega uma lista de usuarios buscando pelo login
// $search = Usuario::search("ca");
// echo json_encode($search);

// carrega um usuario usando login e senha 
$usuario = new Usuario();
$usuario->login("carlos", "83294");

echo $usuario;
