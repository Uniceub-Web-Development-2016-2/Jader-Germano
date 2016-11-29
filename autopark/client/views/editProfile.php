<?php
    session_start();
?>  
<!DOCTYPE html>
<html lang="en">
<form  action="update.php" method="post">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Auto Parking</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,300" rel="stylesheet" type="text/css">

    </head>
<ol class="breadcrumb">
    <li>
        <a class="hiperlink" href="javascript:void(0)">Home</a>
    </li>
    <li>
    <a a class="hiperlink" href="javascript:void(0)">Profile</a></li>
    <li class="active">Editing Profile</li>

</ol>

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
                            <a class="navbar-brand" href="home.php">EventSys</a>
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
        
<div class="row">

    <div class="col-sm-12 form-group">
   
    <div class="col-md-2 form-group">
    </div>
    <div class="col-md-8 form-group">

        <div id="perfil">

            <div class="text-center" style="padding: 30px">
                 
                <div class="avatar">

                    <img src="../img/silhueta.svg" >

                    <div class="cover" style="padding: 20px">

                        <i class="fa fa-camera"></i>

                        <span>Alterar foto</span>

                    </div>

                </div>

            </div>

            <div class="list-group">

                <div class="list-group-item">

                    <i class="fa fa-user"></i> 
                    <label class="control-label label-wrap-detail"> Nome</label>
                    <imput id="name" type="name" name="name" class="form-control" type="text" required>
                    <?php   
                    echo "    {$_SESSION["name"]}";
                    ?>
                    </imput>
                   

                </div>

                <div class="list-group-item">

                    <i class="fa fa-suitcase"></i> Password

                     <imput id="password" type="password" name="password"class="form-control" type="text" required>
                    <?php   
                    echo "    {$_SESSION["password"]}";
                    ?>

                </div>
                <div class="list-group-item">

                    <i class="fa fa-suitcase"></i> User

                    

                </div>
                

                <div class="list-group-item">

                    <i class="fa fa-building"></i> SECOM

                    

                </div>

                <div class="list-group-item">

                    <i class="fa fa-phone"></i> 
                    <label class="control-label label-wrap-detail"> Phone</label>
                    <imput id="phone" type="phone" name="phone"class="form-control" class="form-control" type="text" required>
                    <?php   
                    echo " {$_SESSION["phone"]}";
                    ?>
                    </imput>

                </div>

                <div class="list-group-item">

                    <i class="fa fa-envelope"></i> 
                      
                    
                    <label class="control-label label-wrap-detail"> E-mail</label>
                    <imput id="email" type="email" name="email"class="form-control" class="form-control" type="text" required>
                    <?php   
                    echo "    {$_SESSION["email"]}";
                    ?>
                    </imput>

                   

                </div>
                
            </div>

        </div>
        
        <div class="text-center">
            
                <button  type="submit"  class="btn btn-info"  data-dismiss="modal"> <i class="fa fa-pencil"></i>  Salvar</button>

               <a type="button" href="./profile.php" class="btn btn-info" data-dismiss="modal">Voltar</a>
            
        </div>
         
    </div>

    </div>

</div>
</form>
</html>