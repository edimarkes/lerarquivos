<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Arquivo Json</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<center>
<br>
<button type="submit" class="btn btn-primary" onclick="window.location.href='../index.php' ">Voltar
</button>
<br>
<br>

	<table>
	<tr><td>
<ul class="list-group">
  <li class="list-group-item active">Dados Json</li>
  <li class="list-group-item">
  	<?php
  	$dadosJson = file_get_contents('dados.json');
  	$dadosDecodificados = json_decode($dadosJson, true);
    foreach ($dadosDecodificados['dados'] as $dado) {
	echo "Dia: " .$dado['dia']. ' - '.  "Valor: " . number_format($dado['valor'],2,",","."). "<br>";
}
  	?>
  </li>
  
</ul>

</td></tr></table
</center>
</body>
</html>