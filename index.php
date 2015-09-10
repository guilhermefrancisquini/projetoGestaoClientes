<?php
	
	require_once 'cliente.php';

	$Clientes = array();
	$clientes[] = new Cliente("Amanda", 14578996323, "Rua da sinceridade", 19);
	$clientes[] = new Cliente("Cida", 78945685996, 	"Rua da paixao", 49);
	$clientes[] = new Cliente("Cris", 14578912365, 	"Rua da alegria", 45);
	$clientes[] = new Cliente("Gerson", 36985274178, "Rua Pedro", 60);
	$clientes[] = new Cliente("Guilherme", 78963258912, "Rua General", 21);
	$clientes[] = new Cliente("Kleber",	12365478996, "Rua Cabo", 26);
	$clientes[] = new Cliente("Maria", 	32165498785, "Rua Benedito", 19);
	$clientes[] = new Cliente("Pamela", 21365489821, "Rua do polio", 23);
	$clientes[] = new Cliente("Rafael", 47895289365, "Rua do toro", 21);
	$clientes[] = new Cliente("Raquel", 58741289362, "Rua de Maria", 22);	

?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Gestão de Clientes</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="js/sorttable.js"></script>
</head>
<body>
<div class="container">
	<h1>Gestão de Clientes</h1>
	<div class="table-responsive ">
	  <table class="table sortable">
	  	<tr>
	        <th>#</th>
	        <th>Nome</th>
	        <th>Cpf</th>
	        <th>Endereço</th>
	        <th>Idade</th>
	        <th>Editar</th>
	    </tr>
	    
	    <?php
			foreach ($clientes as $key => $cliente) {
				echo "<tr>";
				echo "<td>" .$key ."</td>";
				echo "<td onclick='show(".$key.")'>" .$cliente->getNome() ."</td>";
				echo "<td class='cliente".$key."' style='display:none;'>" .$cliente->getCpf() ."</td>";
				echo "<td class='cliente".$key."' style='display:none;'>" .$cliente->getEndereco() ."</td>";
				echo "<td class='cliente".$key."' style='display:none;'>" .$cliente->getIdade() ."</td>";
				echo "<td class='cliente".$key."' style='display:none;'><a onclick='hide(".$key.")' href='javascript:void(0)'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a></td>";
				echo "</tr>";
			}
		?>
		
	  </table>
	</div>
</div>
</body>
</html>

<script type="text/javascript">
function show(id) {
	var x = document.getElementsByClassName('cliente'+id);
	for(i=0; i<x.length; i++){
		x[i].removeAttribute("style");
	}
}
function hide(id) {
	var x = document.getElementsByClassName('cliente'+id);
	for(i=0; i<x.length; i++){
		x[i].style.display = 'none';
	}
}
</script>
	
	
	
	
