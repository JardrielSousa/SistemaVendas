<?php
	include_once "topo.php";

?>


<form method="post" action="inserirclientes.php" class="col-md-6">
		<div class="form-group ">
			<input type="text" name="nome" id="nome" placeholder="Nome" class="form-control" required>
		</div>
		<div class="form-group">
			<input type="text" class="form-control" name="Endereco" id="endereco" placeholder="Endereco">
		</div>
		<div class="form-group">
			<input type="number" class="form-control" name="cpf" id="cpf" placeholder="Cpf">
		</div>
		<div class="form-group">
			<input type="email" class="form-control" name="email" id="email" placeholder="Email">
        </div>
        <div class="form-group">
			<input type="number" class="form-control" name="contato" id="contato" placeholder="Contato">
		</div>
		<button type="submit" class="btn btn-default" value="enviar">Submit</button>
</form>

<?php
	include_once "rodape.php";

?>
