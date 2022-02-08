<?php
require_once("../../config/conexion.php");
if (isset($_SESSION["usu_id"])) {

?>

	<!DOCTYPE html>
	<html>
	<?php require_once("../MainHead/head.php"); ?>
	<title>Registro de Fedatarios - Consultar Ticket </title>
	</head>

	<body class="with-side-menu">
		<?php require_once("../MainHeader/header.php"); ?>

		<div class="mobile-menu-left-overlay"></div>
		<?php require_once("../MainNav/nav.php"); ?>
		<!-- Contenido -->
		<div class="page-content">
			<div class="container-fluid">
				<header class="section-header">
					<div class="tbl">
						<div class="tbl-row">
							<div class="tbl-cell">
								<h3>Listado de Registro de Documentos Fedateados</h3>
								<ol class="breadcrumb breadcrumb-simple">
									<li><a href="#">Home</a></li>
									<li class="active">Listado de Registro de Documentos Fedateados</li>
								</ol>
							</div>
						</div>
					</div>
				</header>
				<div class="box-typical box-typical-padding">
					<table id="registro_data"  class="table table-bordered table-striped table-vcenter js-dataTable-full">
						<thead>
							<tr>
								<th style="width: 10%;text-align: center;">Número de Registro</th>
								<th style="width: 10%;text-align: center;">Tipo de Registro</th>
								<th class="d-none d-sm-table-cell" style="width: 5%;text-align: center;">Fecha</th>
								<th class="d-none d-sm-table-cell" style="width: 20%;text-align: center;">Identificación</th>
								<th class="text-center" style="width: 5%;text-align: center;">Número de Folios</th>
								<th class="text-center" style="width: 10%;text-align: center;">Identificación del Procedimiento o Trámite</th>
								<th class="text-center" style="width: 10%;text-align: center;">Órgano o Área de entrega</th>
								<th class="text-center" style="width: 10%;text-align: center;">Nombre del usuario que solicita autenticidad</th>
								<th class="text-center" style="width: 5%;text-align: center;">N°DNI,pasaporte o  Carnét de extranjeria</th>
								<th class="text-center" style="width: 5%;text-align: center;">Fecha de Conclusion</th>
								<th class="text-center" style="width: 5%;text-align: center;">Editar</th>

							</tr>
						</thead>
						<tbody style="width: 15%;text-align: center;">

						</tbody>
					</table>
				</div>
			</div>
			<!--.container-fluid-->
		</div>
		<!--.page-content-->
		<?php require_once("../MainJs/js.php"); ?>
		<script type="text/javascript" src="consultarregistro.js"></script>
	</body>

	</html>
<?php

} else {
	header("Location:" . Conectar::ruta() . "index.php");
}
?>