<?php 

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With'); 
header('Content-Type: application/json; charset=utf-8');  

$host = 'localhost';
$banco = 'camaraoo';
$usuario = 'root';
$senha = '';



try {

	$pdo = new PDO("mysql:dbname=$banco; host=$host", "$usuario", "$senha");
	
	
} catch (Exception $e) {
	echo 'Erro ao conectar com o banco de dados do aplicativo!! '. $e;
}

 ?>