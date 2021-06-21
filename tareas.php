<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
</head>
<body>
	<?php
	include 'conexion.php';
	$sql="select * from tareas";
	$resultado=mysql_query($sql);
	?>
	<div>
		<table>
			<thead>
			<tr>
				<th>id</th>
				<th>tareas</th>
			</tr>
			</thead>
			<tbody>
				<?php while ($filas=mysql_fetch_assoc($resultado)){
					?>
				<tr>
					<td><?php echo $filas['id']?></td>
					<td><?php echo $filas['tareas']?></td>
					<td>
						<a href="">Editar</a>
						<a href="">borrar</a>

					</td>	
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>

</body>
</html>
