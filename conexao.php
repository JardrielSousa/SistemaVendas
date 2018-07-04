<?php 
try{
	//conecta ao bd
$pdo = new PDO('mysql:host=localhost;dbname=sistemavendas','root','vertrigo');
}catch(PDOException $e){
echo("Erro ao Conectar ao Banco".$e->mensage());
}



?>
