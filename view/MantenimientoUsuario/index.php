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
                    <h3>Listado de Registro de Usuarios</h3>
                    <ol class="breadcrumb breadcrumb-simple">
                        <li><a href="#">Home</a></li>
                        <li class="active">Listado de Registro de Usuarios</li>
                    </ol>
                </div>
            </div>
        </div>
    </header>
		</div><!--.container-fluid-->
	</div><!--.page-content-->
	<?php require_once("../MainJs/js.php");?>
	<script type="text/javascript" src="home.js"></script>
</body>
</html>
<?php

	}else{
		header("Location:".Conectar::ruta()."index.php");
	}
?>
