<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Log in</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="dist/css/font-awesome.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dist/css/style.css" rel="stylesheet">
    <link href="dist/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<!-- **********************************************************************************************************************************************************
MAIN CONTENT
*********************************************************************************************************************************************************** -->

<div id="login-page">
    <div class="container">


        <form method="POST" action="http://pathofthefood.me/store" accept-charset="UTF-8" class="form-login"><input
                name="_token" type="hidden" value="DeQavR6nl2sLhqxWTB1JHz9JGt4foOAfrWJbM1t4">

            <h2 class="form-login-heading">
                <img src="files/images/SLMF/slmf-logo.png" style="max-width:20%;
		        max-height:100%; position: relative; margin-bottom: 10px;"><br>
                Acceso al sitio</h2>

            <div class="login-wrap">
                <input class="form-control" placeholder="Username" id="inputEmail" name="username" type="text">
                <br>
                <input class="form-control" placeholder="Password" id="inputPassword" required="required"
                       name="password" type="password" value="">
                <br>
                <input class="btn btn-theme btn-block" type="submit" value="Acceder">
            </div>

        </form>

    </div>
</div>

<!-- js placed at the end of the document so the pages load faster -->
<script src="dist/js/jquery.js"></script>
<script src="dist/js/bootstrap.min.js"></script>

<!--BACKSTRETCH-->
<!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
<script>
    $.backstretch("assets/img/rest.jpg", {speed: 500});
</script>
<script type="text/javascript" src="dist/js/jquery.backstretch.min.js"></script>
<div class="backstretch"
     style="left: 0px; top: 0px; overflow: hidden; margin: 0px; padding: 0px; height: 100%; width: 1553px; z-index: -999999; position: fixed;">
    <img src="files/images/SLMF/unnamed.png"
         style="position: absolute; margin: 0px; padding: 0px; border: none; width: 1553px; height: 100%; max-width: none; z-index: -999999; left: 0px;">
</div>


</body>
</html>