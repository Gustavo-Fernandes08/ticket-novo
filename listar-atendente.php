<h1>Listar Atendente</h1>
<?php
	$sql = "SELECT * FROM usuarios";

	$res = $conn->query($sql);

	$qtd = $res->num_rows;

	$sqll = "SELECT * FROM categoria";
	$ress = $conn->query($sqll);
	$qtdd = $ress->num_rows;
	if($qtd > 0 && $qtdd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Nome do Atendente</th>";
		print "<th>Categoria de atendimento</th>";
		print "</tr>";
		while($row = $res->fetch_object() && $row = $ress->fetch_object()){
			print "<tr>";
			print "<td>".$row->id."</td>";
			print "<td>".$row->nome."</td>";
			print "<td>".$row->nome_categoria."</td>";
			print "</tr>";
	}}else
	{
		print "<p>Não há categoria registrada.</p>";
	}