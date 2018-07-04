<?php
	include_once "topo.php";

?>


<form method="post" action="inseri.php" class="col-md-6">
		<div class="form-group ">
			<label for="exampleInputEmail1">Nome</label>
			<input type="nome" name="nome" id="nome" placeholder="Nome" class="form-control" required><br>
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">Senha</label>
			<input type="password" class="form-control" name="senha" id="senha" placeholder="Senha">
		</div>
		<div class="form-group">
				<label for="exampleInputPassword1">Email</label>
				<input type="email" class="form-control" name="email" id="email" placeholder="Email">
			</div>
		<button type="submit" class="btn btn-default">Submit</button>
</form>

<?php
	include_once "rodape.php";

?>
