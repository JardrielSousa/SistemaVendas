<?php 
	include_once "topo.php";

?>
	<div class="panel panel">
  <!-- Default panel contents -->


  <!-- Table -->
  <table class="table table-striped table-responsive">

    <thead>
    <tr>
      <th>Código</th>
	  <th>Nome do Produto</th>
	  <th>Descrição</th>
	  <th>Valor</th>
	  <th>Imagem</th>
      
    </tr>
    </thead>

      <tbody>
	  
	  
	<?php 
        include_once("conexao.php");
        $lista = $pdo->query("SELECT * FROM produtos");
        $resol = $lista->fetchAll();


        

              foreach ($resol as $row)              
              {?>

			   <tr>
			   <td> <?php echo $row['codprod'];?></td>
				<td> <?php echo $row['nomeprod'];?></td>
				<td> <?php echo $row['descricao'];?></td>
				<td> <?php echo $row['valor'];?></td>
				<td> <?php echo $row['imagem'];?></td>
				
			   </tr>
                
			   </div>
    <?php } ?>
      </tbody>
    
  </table>     
  <div class="col-md-2">
	  <a href="inserirproduto.php" class="btn btn-primary">Inserir</a>
  </div>
<?php 
	include_once "rodape.php";

?>