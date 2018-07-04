<?php
	session_start();
?>
<?php
	include_once "topo.php";
	
?>
	<form method="post" action="valida.php" class="col-md-6 col-md-offset-3">
	<div class="form-group ">
		<label for="exampleInputEmail1">Email address</label>
		<input type="email" name="email" id="email" placeholder="Email" class="form-control" required><br>
	</div>
	<div class="form-group">
		<label for="exampleInputPassword1">Password</label>
		<input type="password" class="form-control" name="senha" id="senha" placeholder="Senha">
	</div>
	<div class="checkbox">
		<label>
		<p> Não é Cadastrado? <a href="cadastro.php">Cadastre-se</a></p>
		</label>
	</div>
	<button type="submit" class="btn btn-default">Submit</button>
	</form>
<?php
	include_once "rodape.php";
?>
