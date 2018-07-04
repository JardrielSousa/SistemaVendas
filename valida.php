<!DOCTYPE html>
<html>
<head>
	<title>valida</title>
	<script type="text/javascript">
		function msgOk(){
			
			window.location.href = "home.php";
		}
		function msgError(){
			alert("Falha ao altenticar!");
			window.location.href = "login.php";
		}
	</script>
</head>
<body>
<?php
	session_start();
	$_SESSION['nome'] = $_POST['email'];
	include_once('conexao.php');
	
		//isset -> verifica campos em branco

			$email = $_POST['email'];
			$senha = $_POST['senha'];
			
			
	$lista = $pdo->prepare('SELECT * FROM vendedor where email = :email && senha = :senha ');
	$lista->bindValue(":email",$email);
	$lista->bindValue(":senha",$senha);
	$lista->execute();

	
	if($lista->rowCount() ==0){
		session_start();
		$_SESSION['user_email'] = $_POST['email'];
		$_SESSION['user_senha'] = $senha;
		echo "<script>msgError()</script>";
	}else{
		
		echo "<script>msgOk()</script>";
	}	


?>
</body>
</html>
