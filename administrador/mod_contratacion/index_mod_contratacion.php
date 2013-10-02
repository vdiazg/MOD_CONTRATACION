
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>:::FoodCo ERP :::</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<!-- Le styles -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet" />
<style type="text/css">
body {
	padding-top: 60px;
	padding-bottom: 40px;
}

.sidebar-nav {
	padding: 9px 0;
}

@media ( max-width : 980px) {
	/* Enable use of floated navbar text */
	.navbar-text.pull-right {
		float: none;
		padding-left: 5px;
		padding-right: 5px;
	}
}
</style>
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

</head>

<body>

	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container-fluid">
				<button type="button" class="btn btn-navbar" data-toggle="collapse"
					data-target=".nav-collapse">
					<span class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="brand" href="index.php">FoodCo ERP</a>
				<div class="nav-collapse collapse">
					<!--<p class="navbar-text pull-right">
              Logged in as <a href="#" class="navbar-link">Username</a>
            </p>-->
					<ul class="nav">
						<li class="active"><a
							href="http://localhost/codigo_base/administrador/mod_contratacion/index_mod_contratacion.php"
							class="icon-home icon-large" style="padding-top: 16px;"></a></li>
						<li class="dropdown"><a href="#" class="dropdown-toggle"
							data-toggle="dropdown">Subcontratos</a>
							<ul class="dropdown-menu">
								<li class="nav-header">Subcontratos</li>
								<li><a
									href="http://localhost/codigo_base/administrador/mod_contratacion/subcontratos/agregar_subcon.php">Agregar
										Subcontrato</a></li>
								<li><a
									href="http://localhost/codigo_base/administrador/mod_contratacion/subcontratos/editar_subcon.php">
										Editar Subcontrato</a></li>
								<li><a
									href="http://localhost/codigo_base/administrador/mod_contratacion/subcontratos/borrar_subcon.php">Borrar
										Subcontrato</a></li>

								<li class="divider"></li>
								<li class="nav-header">Cotizaciones</li>
								<li><a
									href="http://localhost/codigo_base/administrador/mod_contratacion/subcontratos/cotizacion_subcon.php">Cotización
										por Subcontratos</a></li>
							</ul>
						</li>
						<li class="dropdown"><a href="#" class="dropdown-toggle"
							data-toggle="dropdown">Facturas</a>
							<ul class="dropdown-menu">

								<li class="nav-header">Facturas</li>
								<li><a
									href="http://localhost/codigo_base/administrador/mod_contratacion/facturas/fac_servicio_subcontrato.php">
										Servicios Subcontratos</a></li>
								<li class="divider"></li>

								<li class="nav-header">Estado Facturas</li>
								<li><a
									href="http://localhost/codigo_base/administrador/mod_contratacion/facturas/fac_emitidas_subcontratistas.php">Emitidas
										a Subcontratistas</a></li>
								<li><a
									href="http://localhost/codigo_base/administrador/mod_contratacion/facturas/fac_pagadas.php">Facturas
										Pagadas</a></li>
								<li><a
									href="http://localhost/codigo_base/administrador/mod_contratacion/facturas/fac_atrasadas.php">Facturas
										Atrasadas</a></li>
								<li><a
									href="http://localhost/codigo_base/administrador/mod_contratacion/facturas/fac_emitidas_fecha_pago.php">Facturas
										Emitidas con Fecha Pago</a></li>
							</ul>
						</li>
						<li class="dropdown"><a href="#" class="dropdown-toggle"
							data-toggle="dropdown">Clientes</a>
							<ul class="dropdown-menu">

								<li class="nav-header">Estado Clientes</li>
								<li><a
									href="http://localhost/codigo_base/administrador/mod_contratacion/cliente/client_enviado_cobranza.php">
										Morosos</a></li>
								<li><a
									href="http://localhost/codigo_base/administrador/mod_contratacion/cliente/cliente/client_moroso.php">
										Enviado a Cobranza</a></li>
							</ul>
						</li>
						<li><a href="http://localhost/codigo_base/contacto.php">Contacto</a>
						</li>
					</ul>
				</div>
				<!--/.nav-collapse -->
			</div>
		</div>
	</div>

	<div class="container">

		<!-- Main hero unit for a primary marketing message or call to action -->
		<div class="hero-unit">
			<h1>Hello, world!</h1>
			<p>This is a template for a simple marketing or informational
				website. It includes a large callout called the hero unit and three
				supporting pieces of content. Use it as a starting point to create
				something more unique.</p>
			<p>
				<a class="btn btn-primary btn-large">Learn more &raquo;</a>
			</p>
		</div>



		<hr>

		<footer>
			<p class="text-center">
				&copy; Company 2012. Todos los Derechos Reservados. <img
					src="img/itecsys_logo.png" style="width: 100px;">
			</p>
		</footer>

	</div>
	<!-- /container -->


	<!-- Le javascript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap-transition.js"></script>
	<script src="js/bootstrap-alert.js"></script>
	<script src="js/bootstrap-modal.js"></script>
	<script src="js/bootstrap-dropdown.js"></script>
	<script src="js/bootstrap-scrollspy.js"></script>
	<script src="js/bootstrap-tab.js"></script>
	<script src="js/bootstrap-tooltip.js"></script>
	<script src="js/bootstrap-popover.js"></script>
	<script src="js/bootstrap-button.js"></script>
	<script src="js/bootstrap-collapse.js"></script>
	<script src="js/bootstrap-carousel.js"></script>
	<script src="js/bootstrap-typeahead.js"></script>

</body>
</html>
