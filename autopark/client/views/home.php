<?php
    
    if(!isset($_SESSION))
    {
        session_start();
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Home page - AutoParking</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,300" rel="stylesheet" type="text/css">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
           <script type="text/javascript" src="js/html5shiv.js"></script>
           <script type="text/javascript" src="js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="bootstrap-admin">

        <!-- main / large navbar -->
   <nav class="navbar navbar-default navbar-fixed-top bootstrap-admin-navbar bootstrap-admin" role="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".main-navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="home.php">AutoParking</a>
                        </div>
                        <div class="collapse navbar-collapse main-navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="establishments.php">Establishments</a></li>
                                
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-hover="dropdown">Profile<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li role="presentation" class="dropdown-header">User profile</li>
                                        <li><a href="profile.php">My profile</a></li>
                                        <li><a href="delProfile.php">Inactivate profile</a></li>
                                        <li><a href="logout.php">Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                                <p></p>
                                <p class="pull-right">
                                     Welcome,
                                    <?php
                                        echo($_SESSION['name']);
                                    ?>
                                </p>

                        </div><!-- /.navbar-collapse -->
                    </div>
                </div>
            </div><!-- /.container -->
        </nav>

        <div class="container">
            <!-- left, vertical navbar & content -->
            <div class="row">

                <!-- content -->
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="page-header bootstrap-admin-content-title">
                                <h1>Event System</h1>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="text-muted bootstrap-admin-box-title">Details</div>
                                </div>
                                <div class="bootstrap-admin-panel-content">
                                    <p>The system Auto Parking is a easy way to find a nice spot in a city where are only few parking spaces at malls, restaurants, etc. </p>
                                    <p>Our obejective is to deliver the best experience and facilities when comes to finding you a place for your car.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="text-muted bootstrap-admin-box-title">Sponsors</div>
                                </div>
                                <div class="bootstrap-admin-panel-content">
                                    <ul>
                                        <li>
                                            <a href="https://getbootstrap.com">Bootstrap</a>
                                        </li>
                                        <li>
                                            <a href="https://github.com/">Github</a>
                                        </li>
                                        <li>
                                            <a href="https://www.uniceub.br">UniCEUB</a>
                                        </li>
                                    </ul>
                                     <p>*The use of information or resources from this webpage is authorized only under previous authorization of all the sponsors mentioned above</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="text-muted bootstrap-admin-box-title">Available events</div>
                                </div>
                                <div>
                                    <?php
                                        returnStablishments();
                                    ?>

                                </div>
                            </div>
                        </div>
                    </div>

        <!-- footer -->
        <div class="navbar navbar-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <footer role="contentinfo">
                            <p class="left">AutoParking</p>
                            <p class="right">&copy; 2016</p>
                        </footer>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
