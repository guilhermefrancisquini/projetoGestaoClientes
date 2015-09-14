<?php
	define('CLASS_DIR', 'src/');
	set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
	//spl_autoload_extensions(".php");
	spl_autoload_register();
	//require_once 'Vendor\Cliente\Types\ClienteType.php';

    //use Vendor\Cliente\Types;

	$Clientes = array();
	$clientes[] = new Vendor\Cliente\Types\ClienteType("Amanda", "fisico", 14578996323, 1, "Rua da sinceridade", 19);
	$clientes[] = new Vendor\Cliente\Types\ClienteJuridicoType("Cida", "juridico", 78945685996, 3, "Rua da paixao", 49, "Rua Pedro Henrique");
	$clientes[] = new Vendor\Cliente\Types\ClienteType("Cris", "fisico", 14578912365, 	5, "Rua da alegria", 45);
	$clientes[] = new Vendor\Cliente\Types\ClienteJuridicoType("Gerson", "juridico", 36985274178, 1,"Rua Pedro", 60);
	$clientes[] = new Vendor\Cliente\Types\ClienteType("Guilherme", "fisico", 78963258912, 2, "Rua General", 21, "Rua Padre João");
	$clientes[] = new Vendor\Cliente\Types\ClienteJuridicoType("Kleber", "juridico",	12365478996, 0, "Rua Cabo", 26);
	$clientes[] = new Vendor\Cliente\Types\ClienteType("Maria", "fisico", 32165498785, 2,"Rua Benedito", 19);
	$clientes[] = new Vendor\Cliente\Types\ClienteJuridicoType("Pamela", "juridico",21365489821, 4,"Rua do polio", 23);
	$clientes[] = new Vendor\Cliente\Types\ClienteType("Rafael", "fisico", 47895289365, 3,"Rua do toro", 21);
	$clientes[] = new Vendor\Cliente\Types\ClienteJuridicoType("Raquel", "juridico", 58741289362, 2,"Rua de Maria", 22, "Rua Joaquim");

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
            <th>Tipo</th>
	        <th>Serie</th>
            <th>Estrelas</th>
	        <th>Endereço</th>
	        <th>Idade</th>
            <th>Endereço Cobrança</th>
	        <th>Editar</th>
	    </tr>

	    <?php
			foreach ($clientes as $key => $cliente) {
				echo "<tr>";
				echo "<td>" .$key ."</td>";
				echo "<td onclick='show(".$key.")'>" .$cliente->getNome() ."</td>";
                echo "<td class='cliente".$key."' style='display:none;'>" .$cliente->getTipo() ."</td>";
                if($cliente->getTipo() == "fisico"){
                    echo "<td class='cliente".$key."' style='display:none;'>" .$cliente->getCpf() ."</td>";
                }else
                {
                    echo "<td class='cliente".$key."' style='display:none;'>" .$cliente->getCnpj() ."</td>";
                }
                echo "<td class='cliente".$key."' style='display:none;'>" .$cliente->getEstrelas() ."</td>";
				echo "<td class='cliente".$key."' style='display:none;'>" .$cliente->getEndereco() ."</td>";
				echo "<td class='cliente".$key."' style='display:none;'>" .$cliente->getIdade() ."</td>";
                echo "<td class='cliente".$key."' style='display:none;'>" .$cliente->getEnderecoCobrar() ."</td>";
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
