<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SLMF Login</title>

    <!-- Core CSS - Include with every page -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="dist/css/font-awesome.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="dist/css/sb-admin.css" rel="stylesheet">

</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default" style="background-color: #000;">
                <div class="panel-heading">
                    <h3 class="panel-title">Acceso al sitio</h3>
                </div>
                <div class="panel-body">

                    <img src="files/images/SLMF/slmf-logo.png" style="max-width:100%;
            max-height:100%; position: relative; left: 2%; top: 2px"/><br><br>
                    <form role="form" action="files/php/validatorcu.php" method="post">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Correo" name="usuario" type="text" autofocus id="usuario" required >
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Contraseña" name="password" type="password" id="password" required >
                            </div>
                            <!-- Change this to a button or input when using this as a form -->
                            <button type="submit" name="Login" class="btn btn-lg btn-primary btn-block" style="background-color:#ddcd1e; ">Ingresar</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Core Scripts - Include with every page -->
<script src="dist/js/jquery-1.10.2.js"></script>
<script src="dist/js/bootstrap.min.js"></script>
<script src="dist/js/plugins/metisMenu/jquery.metisMenu.js"></script>

<!-- SB Admin Scripts - Include with every page -->
<script src="dist/js/sb-admin.js"></script>

</body>

</html>
