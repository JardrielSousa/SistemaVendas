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
	  <th>Nome</th>
	  <th>Endereço</th>
	  <th>Email</th>
	  <th>Contato</th>
      
    </tr>
    </thead>

      <tbody>
	  </tbody>
	  
	<?php 
        include_once("conexao.php");
        $lista = $pdo->query("SELECT * FROM clientes");
        $resol = $lista->fetchAll();


        

              foreach ($resol as $row)              
              {?>

			   <tr>
			   <td> <?php echo $row['codcliente'];?></td>
				<td> <?php echo $row['nome'];?></td>
				<td> <?php echo $row['endereco'];?></td>
        <td> <?php echo $row['email'];?></td>
        <td> <?php echo $row['contato'];?></td>
				
			   </tr>
             
			   </div>
    <?php } ?>
      </tbody>
    
  </table>     
            <tr class="">
             <div class="col-md-3 col-md-offset-11">
                <a href="inserecliente.php" class="btn btn-primary">Inserir</a>
             </div>
            </tr>          
	
<?php 
	include_once "rodape.php";

?>