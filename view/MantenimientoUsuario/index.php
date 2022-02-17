<?php
	require_once("../../config/conexion.php");
	if(isset($_SESSION["usu_id"])){
	
?>

<!DOCTYPE html>
<html>
	<?php require_once("../MainHead/head.php");?>
	<title>Registro de Usuarios</title>
</head>
<body class="with-side-menu">
<?php require_once("../MainHeader/header.php");?>

	<div class="mobile-menu-left-overlay"></div>
	<?php require_once("../MainNav/nav.php");?>
		<!-- Contenido -->
	<div class="page-content">
		<div class="container-fluid">
					
		<header class="section-header">
		<div class="tbl">
			<div class="tbl-row">
				<div class="tbl-cell">
					<h3>Listado de Usuarios Registrado</h3>
					<ol class="breadcrumb breadcrumb-simple">
						<li><a href="#">Home</a></li>
						<li class="active">Listado de Usuarios Registrado</li>
					</ol>
				</div>
				<div class="tbl-cell">	
				<button type="button" class="btn btn-alt-primary" id="btnnuevo">
					Nuevo <i class="fa fa-solid fa-user"></i>
				</button>
				</div>
			</div>
		</div>
	</header>
	<div class="box-typical box-typical-padding">
	<table id="usuario_data"  class="table table-striped table-bordered nowrap" style="width:100%">
						<thead>
							<tr>
								<th style="text-align: center;">Número de Usuario</th>
								<th style="text-align: center;">Nombre</th>
								<th class="d-none d-sm-table-cell" style="text-align: center;">Apellido</th>
								<th class="d-none d-sm-table-cell" style="text-align: center;">Correo</th>
								<th class="text-center" style="text-align: center;">Contraseña</th>
								<th class="text-center" style="text-align: center;">Rol de Usuario</th>
								<th class="text-center" style="text-align: center;">Editar</th>
								<th class="text-center" style="text-align: center;">Eliminar</th>
							</tr>
						</thead>
						<tbody style="width: 15%;text-align: center;">

						</tbody>
					</table>
	</div>
		</div><!--.container-fluid-->
	</div><!--.page-content-->
	<?php require_once("modalnuevo.php");?>
	<?php require_once("../MainJs/js.php");?>
	<script type="text/javascript" src="mantenimientousuario.js"></script>
</body>
</html>
<?php

	}else{
		header("Location:".Conectar::ruta()."index.php");
	}
?>
