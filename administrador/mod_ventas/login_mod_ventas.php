 
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
    <link href="css/font-awesome.css" rel="stylesheet"/>
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }

      @media (max-width: 980px) {
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
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">FoodCo ERP</a>
          <div class="nav-collapse collapse">
            <!--<p class="navbar-text pull-right">
              Logged in as <a href="#" class="navbar-link">Username</a>
            </p>-->
            <ul class="nav">
              <li><a href="http://localhost/codigo_base/administrador/index_admin.php">Home ADMIN</a></li>
              <li><a href="http://localhost/codigo_base/administrador/mod_clientes/login_mod_clientes.php">Clientes</a></li>
              <li><a href="http://localhost/codigo_base/administrador/mod_contratacion/login_mod_contratacion.php">Contratación</a></li>
              <li><a href="http://localhost/codigo_base/administrador/mod_costos/login_mod_costos.php">Costos</a></li>
              <li><a href="http://localhost/codigo_base/administrador/mod_despacho/login_mod_despacho.php">Despachos</a></li>
              <li><a href="http://localhost/codigo_base/administrador/mod_personal/login_mod_personal.php">Personal</a></li>
              <li><a href="http://localhost/codigo_base/administrador/mod_produccion/login_mod_produccion.php">Producción</a></li>
              <li><a href="http://localhost/codigo_base/administrador/mod_ventas/login_mod_ventas.php">Ventas</a></li>
              <li><a href="http://localhost/codigo_base/administrador/mod_facturacion/login_mod_facturacion.php">Facturación</a></li>
              <li><a href="#">Contacto</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

<div class="container login">
    <div class="row ">
        <div class="center span4 well">
            <legend>Modulo Ventas</legend>
            <div class="alert alert-error">
                <a class="close" data-dismiss="alert" href="#">×</a>Incorrect Username or Password!
            </div>
            <form method="POST" action="" accept-charset="UTF-8">
            <input type="text" id="username" class="span4" name="username" placeholder="Username" />
            <input type="password" id="password" class="span4" name="password" placeholder="Password" />
            <label class="checkbox">
                <input type="checkbox" name="remember" value="1" /> Remember Me
            </label>
            <button type="submit" name="submit" class="btn btn-primary btn-block">Sign in</button>
            </form>
        </div>
    </div>
</div>

      <hr>

      <footer>
        <p>&copy; Company 2012</p>
      </footer>

    </div><!--/.fluid-container-->
     

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

  </body>
</html>
