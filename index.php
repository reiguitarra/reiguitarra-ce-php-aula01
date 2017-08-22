<!doctype html>

<html>
<head>
<title> Exercicio 01</title>
	<meta charset = "utf-8">

	<style>
		table{
			border : 1px solid black;
			margin	: auto;
			width	: 500px;
			
		}
		
		td{
			border : 1px solid black;
			
		}
		
		
		body{
			text-align	: center;
		}
		
	</style>
	<?php
		$letraA = 10;
		$letraB = 20;
		
	?>
	
</head>
<body>

	<h1>PHP - Atividade 01 </h1>

	<h3>Considerando de A é igual a 10 e B é igual 20, eis os seguintes cálculos: </h3>

		<table>
		
			<tr>
				<th>Operação</th><th>Resultado</th>
			</tr>
			<tr>
				<td> A + B </td>
				<td><?php
					echo $letraA + $letraB;
				?></td>
			</tr>
			<tr>
				<td> A - B </td>
				<td><?php
					echo $letraA - $letraB;
				?></td>
			</tr>
			<tr>
				<td> A x B </td>
				<td><?php
					echo $letraA * $letraB;
				?></td>
			</tr>
			<tr>
				<td> A / B </td>
				<td><?php
					echo $letraA / $letraB;
				?></td>
			</tr>
			<tr>
				<td> A<sup>B</sup> </td>
				<td><?php
					echo number_format(pow($letraB, $letraA), 2, ',', '.');
				?></td>
			</tr>
			
		
</body>

</html>