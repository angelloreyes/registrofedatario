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
			<form>
				<div class="row">
					<div class="col-lg-4">
						<fieldset class="form-group">
							<label class="form-label semibold" for="ini_fe">Iniciales de Fedatario:</label>
							<input type="text" class="form-control" id="ini_fe" placeholder="">
						</fieldset>
					</div>
					<div class="col-lg-4">
						<fieldset class="form-group">
							<label class="form-label semibold" for="tipo_re">Tipo de registro:</label>
							<select id="tipo_re" class="form-control">
								<option>AD</option>
								<option>CF</option>
							</select>
						</fieldset>
					</div>
					<div class="col-lg-4">
						<fieldset class="form-group">
							<label class="form-label semibold" for="fecha1">Fecha:</label>
							<input type="date" class="form-control" id="fecha1" placeholder="">
						</fieldset>
					</div>
					<div class="col-lg-4">
						<fieldset class="form-group">
							<label class="form-label semibold" for="identi">Identificación:</label>
							<input type="text" class="form-control" id="identi" placeholder="">
						</fieldset>
					</div>
					<div class="col-lg-4">
						<fieldset class="form-group">
							<label class="form-label semibold" for="n_folios">Número de Folios:</label>
							<input type="text" class="form-control" id="n_folios" placeholder="">
						</fieldset>
					</div>
					<div class="col-lg-4">
						<fieldset class="form-group">
							<label class="form-label semibold" for="identi_tra">Identificación del procedimiento o trámite:</label>
							<input type="text" class="form-control" id="identi_tra" placeholder="">
						</fieldset>
					</div>
					<div class="col-lg-4">
						<fieldset class="form-group">
							<label class="form-label semibold" for="orga_area">Órgano o Área de entrega:</label>
							<input type="text" class="form-control" id="orga_area" placeholder="">
						</fieldset>
					</div>
					<div class="col-lg-4">
						<fieldset class="form-group">
							<label class="form-label semibold" for="nom_usu_auten">Nombre del usuario que solicita autenticidad:</label>
							<input type="text" class="form-control" id="nom_usu_auten" placeholder="">
						</fieldset>
					</div>
					<div class="col-lg-4">
						<fieldset class="form-group">
							<label class="form-label semibold" for="dni_pasa">N° DNI , Pasaporte o Carnét de extranjeria:</label>
							<input type="text" class="form-control" id="dni_pasa" placeholder="">
						</fieldset>
					</div>
					<div class="col-lg-4">
						<fieldset class="form-group">
							<label class="form-label semibold" for="fech_con">Fecha de Conclusión:</label>
							<input type="date" class="form-control" id="fech_con" placeholder="">
						</fieldset>
					</div>
					<div class="col-lg-12">
					<button type="button" class="btn btn-rounded btn-inline btn-primary">Registrar</button>
					</div>
				</div>
				</form>

		</div>
		</div><!--.container-fluid-->
	</div><!--.page-content-->
	<?php require_once("../MainJs/js.php");?>
	<script type="text/javascript" src="nuevoticket.js"></script>
</body>
</html>
<?php

	}else{
		header("Location:".Conectar::ruta()."index.php");
	}
?>
