<!DOCTYPE html>
<html lang="en">
<head>
    <!--incluimos nuestra conexion a  base de datos--> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista productos</title>
    <link rel="shortcut icon" href="/Adicionales/Imagen principal/logos/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/Inicio.css">
    <link rel="stylesheet" href="css/Tablas.css">
</head>
<?php
		include("../Conexion.php");
		session_start();
		if($_SESSION['IdUsu']){
		$ruta="select * from usucompleto";
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
                        <a href="../InicioAdmin.php" class="nav-link">Inicio</a>
                    </li>
					<li>
						<a href="../Admin.php" class="nav-link">Funciones Admin</a>
					</li>
                    <li class="nav-item">
                        <li class="nav-item">
                            <a href="CRUD/ListaProductos.php" class="nav-link">Lista de productos</a>
                        </li>
                        <li class="nav-item">    
                        <a href="CerrarSesion.php" class="nav-link">Cerrar sesion</a>
                        </li>
                </ul>
            </div>
        </div>
    </nav>
	<div class="DivTBnAgg">
		<p>Aqui Puedes:<a href="CRUD/AgregarUsuarios.php"><button class="BtnAgg">Ingresar Nuevos Usuarios</button></a></p>
	</div>
		<div class="Lista">
			<table>
				<thead>
					<tr>
						<th class="columnas">Id</th>
						<th class="columnas">Rol</th>
						<th class="columnas">Nombre</th>
						<th class="columnas">Apellido</th>
						<th class="columnas">Apodo</th>
						<th class="columnas">Edad</th>
						<th class="columnas">Telefono</th>
						<th class="columnas">Corrreo</th>
						<th class="columnas">Contraseña</th>
						<th class="columnas">Ultima modificacion</th>
						<th class="columnas">Acciones</th>
					</tr>
				</thead>
				<tbody>
					<?php while($fila=mysqli_fetch_assoc($Resul)){
					?>
					<tr>
						<td class="filas"><?php echo $fila['IdUsu']; ?></td>
						<td class="filas"><?php echo $fila['NombreRol']; ?></td>
						<td class="filas"><?php echo $fila['NombreUsu']; ?></td>
						<td class="filas"><?php echo $fila['ApellidoUsu']; ?></td>
						<td class="filas"><?php echo $fila['NicknameUsu']; ?></td>
						<td class="filas"><?php echo $fila['EdadUsu']; ?></td>
						<td class="filas"><?php echo $fila['TelefonoUsu']; ?></td>
						<td class="filas"><?php echo $fila['CorreoUsu']; ?></td>
						<td class="filas"><?php echo $fila['ContraseñaUsu']; ?></td>
						<td class="filas"><?php echo $fila['FyHRegUsu']; ?></td>

						<td class="filas"><br><a class="Enlace" href="CRUD/EditarUsuarios.php?IdUsu=<?php echo $fila['IdUsu']?>"><i class="bi bi-pencil-square"></i></a><br>
						<br><a class="Enlace" href="EliminarUsuarios.php?IdUsu=<?php echo $fila['IdUsu']?>"><i class="bi bi-trash-fill"></i></a><br></td>
					</tr>
					<?php }?>
				</tbody>
			</table>
		</div>
	</body>
				<?php	} else{
					header("Location:../Errores/Error_404.html");
				}?>
</html>

