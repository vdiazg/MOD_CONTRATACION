
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
				<a class="brand" href="#">FoodCo ERP</a>
				<div class="nav-collapse collapse">
					<!--<p class="navbar-text pull-right">
              Logged in as <a href="#" class="navbar-link">Username</a>
            </p>-->
					<ul class="nav">

						<li><a href="contacto.php">Contacto</a></li>

					</ul>
				</div>
				<!--/.nav-collapse -->
			</div>
		</div>
	</div>

	<div id="preview">
		<div class="" id="loginModal">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"
					aria-hidden="true">×</button>
				<h3>¿Tienes Cuenta?</h3>
			</div>
			<div class="modal-body">
				<div class="well">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#login" data-toggle="tab">Login</a></li>
						<!--<li><a href="#create" data-toggle="tab">Create Account</a></li>-->
					</ul>
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane active in" id="login">
							<form class="form-horizontal" action='' method="POST">
								<fieldset>
									<div id="legend">
										<legend class="">Login</legend>
									</div>
									<div class="control-group">
										<!-- Username -->
										<label class="control-label" for="username">Username</label>
										<div class="controls">
											<input type="text" id="username" name="username"
												placeholder="" class="input-xlarge">
										</div>
									</div>

									<div class="control-group">
										<!-- Password-->
										<label class="control-label" for="password">Password</label>
										<div class="controls">
											<input type="password" id="password" name="password"
												placeholder="" class="input-xlarge">
										</div>
									</div>


									<div class="control-group">
										<!-- Button -->
										<div class="controls">
											<button class="btn btn-success">Login</button>
										</div>
									</div>
								</fieldset>
							</form>
						</div>
						<div class="tab-pane fade" id="create">
							<form id="tab">
								<label>Username</label> <input type="text" value=""	class="input-xlarge"> <label>First Name</label> <input
									type="text" value="" class="input-xlarge"> <label>Last Name</label>
								<input type="text" value="" class="input-xlarge"> <label>Email</label>
								<input type="text" value="" class="input-xlarge"> <label>Address</label>
								<textarea value="Smith" rows="3" class="input-xlarge">
                    </textarea>

								<div>
									<button class="btn btn-primary">Create Account</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<hr>

		<footer>
			<p>&copy; Company 2012</p>
		</footer>

	</div>
	<!--/.fluid-container-->


	<!-- Le javascript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="../js/jquery.js"></script>
	<script src="../js/bootstrap-transition.js"></script>
	<script src="../js/bootstrap-alert.js"></script>
	<script src="../js/bootstrap-modal.js"></script>
	<script src="../js/bootstrap-dropdown.js"></script>
	<script src="../js/bootstrap-scrollspy.js"></script>
	<script src="../js/bootstrap-tab.js"></script>
	<script src="../js/bootstrap-tooltip.js"></script>
	<script src="./js/bootstrap-popover.js"></script>
	<script src="../js/bootstrap-button.js"></script>
	<script src="../js/bootstrap-collapse.js"></script>
	<script src="../js/bootstrap-carousel.js"></script>
	<script src="../js/bootstrap-typeahead.js"></script>
	<script src="../js/bootstrap-tab.js"></script>


</body>
</html>
