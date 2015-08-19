<!DOCTYPE html>
<?php
 include 'config.php';
//checking is theres any error message in redirection
 if(isset($_GET["error"])){ $error=$_GET["error"]; }

 ?>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <?php include('includes/headtag.php');?>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Letsliftgh - Register New Member</title>

  <!-- ========== Css Files ========== -->
  <link href="css/root.css" rel="stylesheet">
  <style type="text/css">
    body{background: #F5F5F5;}
  </style>
  </head>
  <body>

    <div class="login-form">
      <form action="registerp.php" method="POST">
        <div class="top">
          <h1>Register</h1>
          <h4>Join our community now !</h4>
        </div>
        <?php if (!empty($error)) { ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $error?>
        </div>
        <?php } ?>
        <div class="form-area">
          <div class="group">
            <input type="text" class="form-control" placeholder="Username" name="username">
            <i class="fa fa-user"></i>
          </div>
          <div class="group">
            <input type="text" class="form-control" placeholder="E-mail" name="email">
            <i class="fa fa-envelope-o"></i>
          </div>
          <div class="group">
            <input type="password" class="form-control" placeholder="Password" name="password">
            <i class="fa fa-key"></i>
          </div>
          <div class="group">
            <input type="password" class="form-control" placeholder="Password again" name="confirm_password">
            <i class="fa fa-key"></i>
          </div>
          <button type="submit"  name="register_btn" class="btn btn-default btn-block">REGISTER NOW</button>
        </div>
      </form>
      <div class="footer-links row">
        <div class="col-xs-6"><a href="index.php"><i class="fa fa-sign-in"></i> Login</a></div>
        <div class="col-xs-6 text-right"><a href="#"><i class="fa fa-lock"></i> Forgot password</a></div>
      </div>
      
    </div>
      <?php include('includes/footer_home.php');?>

</body>

</html>