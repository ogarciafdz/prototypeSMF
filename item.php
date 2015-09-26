<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include "files/php/con.php";

    $id = $_GET['id'];
    $producto = mysql_query("SELECT * FROM products WHERE id = $id") or die  (mysql_error());

    $name = mysql_result($producto, 0, 1);
    $desc = mysql_result($producto, 0, 2);
    $type = mysql_result($producto, 0, 3);
    $sku = mysql_result($producto, 0, 4);
    $price = mysql_result($producto, 0, 5);
    $qty = mysql_result($producto, 0, 6);
    $vis = mysql_result($producto, 0, 7);
    $imagepath = mysql_result($producto, 0, 9);





    ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SLMF Tienda</title>
    <link rel="shortcut icon" href="files/images/SLMF/favicon.png"/>

    <!-- Bootstrap Core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/shop-item.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">SLMF</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.html">Inico</a>
                    </li>
                    <li>
                        <a href="registro.php">Registro</a>
                    </li>
                    <li>
                        <a href="tienda.php">Tienda</a>
                    </li>
                    <?php

                    if (isset($_SESSION['k_username'])) {?>
                        <li>
                            <a href="#">Mi cuenta</a>
                        </li>
                        <li>
                            <a href="files/php/cu.php">Cerrar Sesion</a>
                        </li>

                    <?php }else{

                        echo '  <li><a href="login.php">Iniciar Sesion</a></li>';

                    }
                    ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">
                <p class="lead">Solo los Mas Fuertes </p>
                <div class="list-group">
                    <a href="#" class="list-group-item active">Category 1</a>
                    <a href="#" class="list-group-item">Category 2</a>
                    <a href="#" class="list-group-item">Category 3</a>
                </div>
            </div>

            <div class="col-md-9">

                <div class="thumbnail">
                    <img class="img-responsive" src="<?php echo $imagepath?>"  style="max-width:50%;">
                    <div class="caption-full">
                        <h4 class="pull-right">$<?php echo $price?></h4>
                        <h4><a href="#"><?php echo $name?></a>
                        </h4>
                        <p><?php echo $desc?></p>
                        <p>
                            <a href="item.php?id=<?php echo $id?>" class="btn btn-primary">Compralo .!</a>
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="dist/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="dist/js/bootstrap.min.js"></script>

</body>

</html>
