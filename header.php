<?php 
  require_once "config.php";
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo SITE_NAME; ?></title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link href="css/style.css" rel="stylesheet">


    </style>
    <script src="js/jquery.min.js"></script>
    <script src="js/custom.js"></script>
    <script type="text/javascript">
      var SITE_URL = "<?php echo  SITE_URL; ?>";
      var SITE_NAME = "<?php echo  SITE_NAME; ?>";
    </script>
  </head>

  <body>

   <!--  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="<?php echo SITE_URL; ?>"><?php echo SITE_NAME; ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <?php 
              if(is_user_logged_in()) {

            ?>
            <li class="nav-item active"><a class="nav-link" href="logout.php">Logout</a></li>
            <?php 
              }
              else {?>
                <li class="nav-item active"><a class="nav-link" href="login.php">Login</a></li>
                <li class="nav-item active"><a class="nav-link" href="register.php">Register</a></li>

              <?php }
            ?>
          
          </ul>
        </div>
      </div>
    </nav> -->

  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="<?php echo SITE_URL; ?>"><?php echo SITE_NAME; ?></a>
      </div>

      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo SITE_URL; ?>">Home</a></li>
        <?php 
        if(is_user_logged_in()): ?>
          <li><a href="#">Page 1</a></li>
        <?php endif; ?>
      </ul>

      <?php 
        if(!is_user_logged_in()): ?>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
          <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
      <?php
        endif;
      ?>
    </div>
  </nav>

    <!-- Page Content -->
    <div class="container">