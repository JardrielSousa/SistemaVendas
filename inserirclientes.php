<?php

try{
   include_once 'conexao.php';
   
   $nome = $_POST['nome'];
   $endereco = $_POST['endereco'];
   $email = $_POST['email'];
   $contato = $_POST['contato'];
   $cpf = $_POST['cpf'];

   $inseri = 'INSERT INTO clientes(nome,endereco,cpf,email,contato)VALUES(:nome,:endereco,:email,:contato,:cpf)';

   $status = $pdo->prepare($inseri);
   $status->bindValue(":nome",$nome);
   $status->bindValue(":cpf",$cpf);
   $status->bindValue(":endereco",$endereco);
   $status->bindValue(":email",$email);
   $status->bindValue(":contato",$contato);
   $status->execute();

   echo '<script type="javascript">';
   echo 'alert("Cadastrado com sucesso!!")';
   echo '</script>';

   
   
   header('location:clientes.php');
}catch(PDOException $e){
   echo("Erro ao Inserir no Banco".$e->mensage());
   }


?>