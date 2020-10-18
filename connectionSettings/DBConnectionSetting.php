<?php

$servidor = "localhost";
$username = "root";
$password = "";
$database = "glossario_de_informatica";

/*
 * criar a conexao a base de dados MySQL
 */

$conexao = new mysqli($servidor, $username, $password, $database) or die(mysqli_error());

/*
 * verificar a conexao a base de dados MySQL
 */

/*if($conexao ->mysqli_connect_error()){
    die("N&atilde;o &eacute; poss&iacute;vel conectar-se a base de dados".mysqli_connect_error);
}*/

echo '<p>Conectado</p>';
//mysqli_set_charset($database, 'utf-8');
