<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
</head>
<body>
	<?php
	include 'con_db_ttareas.php';
	$sql="select * from tareas";
	$resultado=mysqli_query($sql);
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
				<?php while ($filas=mysqli_fetch_assoc($resultado)){
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
