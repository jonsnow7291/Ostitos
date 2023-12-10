<!DOCTYPE html>
<html lang="en">
<head>
    <!--incluimos nuestra conexion a  base de datos--> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ostitos Inicio</title>
    <link rel="shortcut icon" href="/Adicionales/Imagen principal/logos/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/Codigos/css/Inicio.css">
    <link rel="stylesheet" href="/Codigos/css/Tablas.css">
</head>
<?php
		include("../Conexion.php");
		$ruta="select * from producto";
		$Resul=mysqli_query($conect,$ruta);
		
	?>
<body>

    <!--aqui empieza el menu de navegacion-->
    <nav class="navbar navbar-expand-lg navbar-dark  fixed-top">

        <div class="container">

            <a href="" class="navbar-brand"> <span class="text-primary">osti</span>tos </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarS"
                aria-controls="navbarS" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarS">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="/Codigos/Inicio.php" class="nav-link">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <li class="nav-item">
                            <a href="/Codigos/login.php" class="nav-link">Inicio de Sesion</a>
                        </li>
                        <li class="nav-item">    
                        <a href="/Codigos/registro.php" class="nav-link">Registro</a>
                        </li>
                </ul>
            </div>
        </div>
    </nav>
	<div class="Lista">
			<table>
				<thead>
					<tr>
						<th class="columnas">Id</th>
						<th class="columnas">Producto</th>
						<th class="columnas">Serial</th>
						<th class="columnas">Marca</th>
						<th class="columnas">Caracteristicas</th>
						<th class="columnas">Resumen</th>
						<th class="columnas">Modelo</th>
						<th class="columnas">Precio</th>
						<th class="columnas">Unidades Disponibles</th>
						<th class="columnas">Acciones</th>
					</tr>
				</thead>
				<tbody>
					<?php while($fila=mysqli_fetch_assoc($Resul)){
					?>
					<tr>
						<td class="filas"><?php echo $fila['IdPro']; ?></td>
						<td class="filas"><?php echo $fila['NombrePro']; ?></td>
						<td class="filas"><?php echo $fila['SerialPro']; ?></td>
						<td class="filas"><?php echo $fila['MarcaPro']; ?></td>
						<td class="filas"><?php echo $fila['CaracteristicasPro']; ?></td>
						<td class="filas"><?php echo $fila['ResumenPro']; ?></td>
						<td class="filas"><?php echo $fila['ModeloPro']; ?></td>
						<td class="filas"><?php echo $fila['PrecioPro']; ?></td>
						<td class="filas"><?php echo $fila['UniDispoPro']; ?></td>
						<td class="filas"><br><a  href="/Codigos/CRUD/editar.producto.php">Editar</a><br><br><a href="">Eliminar</a><br></td>
					</tr>
					<?php }?>
				</tbody>
			</table>
		</div>
	</body>

</html>
