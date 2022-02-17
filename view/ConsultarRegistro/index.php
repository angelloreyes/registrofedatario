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
							
                            <button type="button" class="btn btn-alt-primary" id="btnnuevo">
                                Nuevo <i class="fa fa-newspaper-o ml-5"></i>
                            </button>
						</div>
					</div>
				</header>
				<div class="box-typical box-typical-padding">
					<table id="registro_data"  class="table table-striped table-bordered nowrap" style="width:100%">
						<thead>
							<tr>
								<th style="text-align: center;">Número de Registro</th>
								<th style="text-align: center;">Tipo de Registro</th>
								<th class="d-none d-sm-table-cell" style="text-align: center;">Fecha</th>
								<th class="d-none d-sm-table-cell" style="text-align: center;">Identificación</th>
								<th class="text-center" style="text-align: center;">Número de Folios</th>
								<th class="text-center" style="text-align: center;">Identificación del Procedimiento o Trámite</th>
								<th class="text-center" style="text-align: center;">Órgano o Área de entrega</th>
								<th class="text-center" style="text-align: center;">Nombre del usuario que solicita autenticidad</th>
								<th class="text-center" style="text-align: center;">N°DNI,pasaporte o  Carnét de extranjeria</th>
								<th class="text-center" style="text-align: center;">Fecha de Conclusion</th>
								<th class="text-center" style="text-align: center;">Editar</th>

							</tr>
						</thead>
						<tbody style="width: 15%;text-align: center;">

						</tbody>
					</table>
				</div>
			</div>
			<div id="modalcrud"  class="modal fade bd-example-modal-lg"
					 tabindex="-1"
					 role="dialog"
					 aria-labelledby="myLargeModalLabel"
					 aria-hidden="true">
                <div class="modal-dialog modal-lg">
                <form method="post" id="menu_form">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="titulo_crud">Editar Registro</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                <div class="modal-body">
					<div class="row">
					<input type="hidden" id="r_id" name="r_id">
					<div class="col-lg-4">
						<fieldset class="form-group">
							<label class="form-label semibold" for="r_ini">Iniciales de Fedatario:</label>
							<input type="text" class="form-control" id="r_ini" name="r_ini" >
						</fieldset>
					</div>
					<div class="col-lg-4">
						<fieldset class="form-group">
							<label class="form-label semibold" for="tipo_id">Tipo de registro:</label>
							<select id="tipo_id" name="tipo_id" class="form-control" >
								
							</select>
						</fieldset>
					</div>
					<div class="col-lg-4">
						<fieldset class="form-group">
							<label class="form-label semibold" for="r_fecha">Fecha:</label>
							<input type="date" class="form-control" id="r_fecha" name="r_fecha" >
						</fieldset>
					</div>
					<div class="col-lg-4">
						<fieldset class="form-group">
							<label class="form-label semibold" for="r_iden">Identificación:</label>
							<input type="text" class="form-control" id="r_iden" name="r_iden" >
						</fieldset>
					</div>
					<div class="col-lg-4">
						<fieldset class="form-group">
							<label class="form-label semibold" for="r_foli">Número de Folios:</label>
							<input type="text" class="form-control" id="r_foli" name="r_foli" >
						</fieldset>
					</div>
					<div class="col-lg-4">
						<fieldset class="form-group">
							<label class="form-label semibold" for="r_iden_trami">Identificación del procedimiento o trámite:</label>
							<input type="text" class="form-control" id="r_iden_trami" name="r_iden_trami" >
						</fieldset>
					</div>
					<div class="col-lg-4">
						<fieldset class="form-group">
							<label class="form-label semibold" for="r_organo">Órgano o Área de entrega:</label>
							<input type="text" class="form-control" id="r_organo" name="r_organo" >
						</fieldset>
					</div>
					<div class="col-lg-4">
						<fieldset class="form-group">
							<label class="form-label semibold" for="r_nom_soli">Nombre del usuario que solicita autenticidad:</label>
							<input type="text" class="form-control" id="r_nom_soli" name="r_nom_soli" >
						</fieldset>
					</div>
					<div class="col-lg-4">
						<fieldset class="form-group">
							<label class="form-label semibold" for="r_dni">N° DNI , Pasaporte o Carnét de extranjeria:</label>
							<input type="text" class="form-control" id="r_dni" name="r_dni" >
						</fieldset>
					</div>
					<div class="col-lg-4">
						<fieldset class="form-group">
							<label class="form-label semibold" for="r_fech_eclu">Fecha de Conclusión:</label>
							<input type="date" class="form-control" id="r_fech_eclu" name="r_fech_eclu" >
						</fieldset>
					</div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="action" id="#" value="add" class="btn btn-primary">Guardar</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>

			<!--.container-fluid-->
		</div>
		<!--.page-content-->
		<?php require_once("../MainJs/js.php");?>
		<script type="text/javascript" src="consultarregistro.js"></script>
	</body>

	</html>
<?php

} else {
	header("Location:" . Conectar::ruta() . "index.php");
}
?>