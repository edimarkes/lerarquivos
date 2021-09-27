<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Arquivo Xml</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

	<center>
<br>
<br>

<button type="submit" class="btn btn-primary" onclick="window.location.href='../index.php' ">Voltar
</button>
<br>
<br>

	<table>
	<tr><td>
<ul class="list-group">
  <li class="list-group-item active">Dados Xml</li>
  <li class="list-group-item">
  	<?php 
  	$xml = simplexml_load_file('dados.xml') or die("Não foi possível abrir o arquivo xml");
  	foreach ($xml->children() as  $dado) {
	echo "Dia: ".$dado->dia;
	echo " - ";

	$valor = $dado->valor;
	$novovalor = doubleval($valor);
	echo "Valor: ".number_format($novovalor,2,",",".");
	
	echo "<br>";

}
?>
  </li>
  
</ul>
</td><td>


</body>
</html>