<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Experiencia 2 - Index</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Experiencia 2
                    </a>
                </li>
                <li>
                    <a href="#" class="nvabar-active">Index</a>
                </li>
                <li>
                    <a href="form.html">Formulario</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <?php 
                            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
                            $apellido = isset($_POST['apellido']) ? $_POST['apellido'] : '';
                            $bday = isset($_POST['bday']) ? $_POST['bday'] : '';
                            $gender = isset($_POST['gender']) ? $_POST['gender'] : '';                            
                            $state = isset($_POST['state']) ? $_POST['state'] : '';
                            $interes = isset($_POST['interes']) ? $_POST['interes'] : '';
                            $urlp = isset($_POST['urlp']) ? $_POST['urlp'] : '';
                            $email = isset($_POST['email']) ? $_POST['email'] : '';
                            $color = isset($_POST['color']) ? $_POST['color'] : '';
                            $error = '';
                                if(empty($nombre)) {
                                  $error = 'Por favor, ingrese su nombre.';
                                } else if(empty($apellido)) {
                                  $error = 'Por favor, ingrese su apellido.';
                                } else if(empty($bday)) {
                                  $error = 'Por favor, ingrese su fecha de nacimiento.';
                                } else if(empty($gender)) {
                                  $error = 'Por favor, ingrese su genero.';
                                } else {
                                echo '<pre>';
                                  print_r($_POST);
                                  echo '</pre>';
                                  exit;
                                }
                                // Vista de error
                                if(!empty($error)) {
                                ?>
                                <div class="alert alert-info">
                                  <i class="glyphicon glyphicon-info-sign"></i>
                                  <?php echo $error; ?>
                                </div>
                                <a href="./" class="btn btn-warning">
                                  <i class="glyphicon glyphicon-chevron-left"></i>
                                  Volver
                                </a>

                                <?php
                                
                                } else {
                                ?>
                                exito
                                  
<?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
