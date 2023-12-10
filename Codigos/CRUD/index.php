<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Lista Usuarios</title>
		<link rel="stylesheet" href="../css/Tablas.css">
	</head>
	<?php
		include("../Conexion.php");
		$ruta="select * from usucompleto";
		$Resul=mysqli_query($conect,$ruta);
	?>
	<body>
		<div class="Lista">
			<table>
				<thead>
					<tr>
						<th>Id</th>
						<th>Rol</th>
						<th>Nombre</th>
						<th>Apellido</th>
						<th>Edad</th>
						<th>NickName</th>
						<th>Telefono</th>
						<th>Correo</th>
						<th>Contraseña</th>
						<th>Ultima Modificacion</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
					<?php while($fila=mysqli_fetch_assoc($Resul)){
					?>
					<tr>
						<td><?php echo $fila['Id']; ?></td>
						<td><?php echo $fila['Rol']; ?></td>
						<td><?php echo $fila['Nombre']; ?></td>
						<td><?php echo $fila['Apellido']; ?></td>
						<td><?php echo $fila['Edad']; ?></td>
						<td><?php echo $fila['Apodo']; ?></td>
						<td><?php echo $fila['Telefono']; ?></td>
						<td><?php echo $fila['Correo']; ?></td>
						<td><?php echo $fila['Contraseña']; ?></td>
						<td><?php echo $fila['FechaModi']; ?></td>
						<td><br><a href="">Editar</a><br><br><a href="">Eliminar</a><br></td>
					</tr>
					<?php }?>
				</tbody>
			</table>
		</div>
	</body>
</html>