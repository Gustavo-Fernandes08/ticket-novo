<?php

	$sql = "SELECT * FROM usuarios";
	$res = $conn->query($sql);
	$qtd = $res->num_rows;


?>

<h1>Cadastrar Atendente</h1>
<form action="?page=salvar-atendente" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">

	<label>Usuário</label>
	<select name="tipo" class="form-control">
		<option>-Escolha-</option>
		<?php
			if($qtd > 0){
				while($row = $res->fetch_object()){
					if($row->tipo=='1'){
						$tipo = 'Administrador';
					}elseif($row->tipo=='2'){
						$tipo = 'Atendente';
					}else{
						$tipo = 'Usuário Comum';
					}
					if($row->status=='1'){
						$status = 'Ativo';
					}else{
						$status = 'Inativo';
					}
					print "<option>".$row->nome."</option>";
				}
			}

		?>
		</select>
		<label>Categoria</label>
		<select name="tipo" class="form-control">
			<option>-Escolha-</option>
			
			<?php

				$sqll = "SELECT * FROM categoria";
				$ress = $conn->query($sqll);
				$qtdd = $ress->num_rows;


			if($qtdd > 0){
				while($row = $ress->fetch_object()){
					if($row->tipo=='1'){
						$tipo = 'Administrador';
					}elseif($row->tipo=='2'){
						$tipo = 'Atendente';
					}else{
						$tipo = 'Usuário Comum';
					}
					if($row->status=='1'){
						$status = 'Ativo';
					}else{
						$status = 'Inativo';
					}
					print "<option>".$row->nome_categoria."</option>";
				}
			}

		?>

		</select>
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-success">Enviar</button>
	</div>
</form>