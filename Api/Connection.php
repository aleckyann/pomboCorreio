<?php
require_once '../Libs/Medoo.php';

###ESCOLHA O MODO DE TRABALHO###
$mode = ['desenvolvimento', 'producao'];
$activeMode = $mode[0];

switch ($activeMode) {
  case $mode[0]:
    $database = new medoo([
        'database_type' => 'mysql',
        'database_name' => 'pomboCorreio',
        'server'        => 'localhost',
        'username'      => 'root',
        'password'      => 'root',
        'charset'       => 'utf8'
    ]);
    break;

  case $mode[1]:
    $database = new medoo([
        'database_type' => 'mysql',
        'database_name' => 'busca903_mrChat',
        'server'        => 'localhost',
        'username'      => 'busca903_admin',
        'password'      => '@gmail.com',
        'charset'       => 'utf8'
    ]);
    break;
}

?>
