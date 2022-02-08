<?php
	require_once("../../config/conexion.php");
	if(isset($_SESSION["usu_id"])){
	
?>

<!DOCTYPE html>
<html>
	<?php require_once("../MainHead/head.php");?>
	<title>Registro de Fedatarios - Nuevo Ticket </title>
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
							<h3>Nuevo Registro Fedatarios</h3>
							<ol class="breadcrumb breadcrumb-simple">
								<li><a href="#">Home</a></li>
								<li class="active">Nuevo Registro Fedatarios</li>
							</ol>
						</div>
					</div>
				</div>
		</header>

		<div class="box-typical box-typical-padding">
				<p>
					Desde esta ventana se realizaran los registros de los documentos fedatarios:
				</p>
			<form method="POST" id="registro_form">
				<input type="hidden" id="usu_id" name="usu_id" value="<?php echo $_SESSION["usu_id"] ?>">
				<div class="row">
					<div class="col-lg-4">
						<fieldset class="form-group">
							<label class="form-label semibold" for="r_ini">Iniciales de Fedatario:</label>
							<input type="text" class="form-control" id="r_ini" name="r_ini" placeholder="">
						</fieldset>
					</div>
					<div class="col-lg-4">
						<fieldset class="form-group">
							<label class="form-label semibold" for="tipo_id">Tipo de registro:</label>
							<select id="tipo_id" name="tipo_id" class="form-control">
								
							</select>
						</fieldset>
					</div>
					<div class="col-lg-4">
						<fieldset class="form-group">
							<label class="form-label semibold" for="r_fecha">Fecha:</label>
							<input type="date" class="form-control" id="r_fecha" name="r_fecha" placeholder="">
						</fieldset>
					</div>
					<div class="col-lg-4">
						<fieldset class="form-group">
							<label class="form-label semibold" for="r_iden">Identificación:</label>
							<input type="text" class="form-control" id="r_iden" name="r_iden" placeholder="">
						</fieldset>
					</div>
					<div class="col-lg-4">
						<fieldset class="form-group">
							<label class="form-label semibold" for="r_foli">Número de Folios:</label>
							<input type="text" class="form-control" id="r_foli" name="r_foli"placeholder="">
						</fieldset>
					</div>
					<div class="col-lg-4">
						<fieldset class="form-group">
							<label class="form-label semibold" for="r_iden_trami">Identificación del procedimiento o trámite:</label>
							<input type="text" class="form-control" id="r_iden_trami" name="r_iden_trami" placeholder="">
						</fieldset>
					</div>
					<div class="col-lg-4">
						<fieldset class="form-group">
							<label class="form-label semibold" for="r_organo">Órgano o Área de entrega:</label>
							<input type="text" class="form-control" id="r_organo" name="r_organo" placeholder="">
						</fieldset>
					</div>
					<div class="col-lg-4">
						<fieldset class="form-group">
							<label class="form-label semibold" for="r_nom_soli">Nombre del usuario que solicita autenticidad:</label>
							<input type="text" class="form-control" id="r_nom_soli" name="r_nom_soli" placeholder="">
						</fieldset>
					</div>
					<div class="col-lg-4">
						<fieldset class="form-group">
							<label class="form-label semibold" for="r_dni">N° DNI , Pasaporte o Carnét de extranjeria:</label>
							<input type="text" class="form-control" id="r_dni" name="r_dni" placeholder="">
						</fieldset>
					</div>
					<div class="col-lg-4">
						<fieldset class="form-group">
							<label class="form-label semibold" for="r_fech_eclu">Fecha de Conclusión:</label>
							<input type="date" class="form-control" id="r_fech_eclu" name="r_fech_eclu" placeholder="">
						</fieldset>
					</div>
					<div class="col-lg-12">
					<button type="submit" name="action" value="add" class="btn btn-rounded btn-inline btn-primary">Registrar</button>
					</div>
				</div>
				</form>

		</div>
		</div><!--.container-fluid-->
	</div><!--.page-content-->
	<?php require_once("../MainJs/js.php");?>
	<script type="text/javascript" src="nuevoregistro.js"></script>
</body>
</html>
<?php

	}else{
		header("Location:".Conectar::ruta()."index.php");
	}
?>
