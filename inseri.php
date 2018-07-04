<?php

 try{
    include_once 'conexao.php';
    
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];

    $inseri = 'INSERT INTO vendedor(nome,senha,email)VALUES(:nome,:senha,:email)';

    $status = $pdo->prepare($inseri);
    $status->bindValue(":nome",$nome);
    $status->bindValue(":senha",$senha);
    $status->bindValue(":email",$email);
    $status->execute();

    echo '<script type="javascript">';
    echo 'alert("Cadastrado com sucesso!!")';
    echo '</script>';
    
    
    header('location:login.php');
 }catch(PDOException $e){
    echo("Erro ao Inserir no Banco".$e->mensage());
    }


?>