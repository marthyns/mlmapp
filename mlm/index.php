<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <?php include('includes/headtag.php');?>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Letsliftgh - Login </title>

  <!-- ========== Css Files ========== -->
  <link href="css/root.css" rel="stylesheet">
  <link href="img/letsliftgh-fav.png" rel="shortcut icon">
  <style type="text/css">
    body{background: #F5F5F5;}
    
    .no-js #loader { display: none;  }
	.js #loader { display: block; position: absolute; left: 100px; top: 0; }
	.se-pre-con {
	position: fixed;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 9999;
	background: url('img/loading.gif') center no-repeat #fff;
}
  </style>
  <script>
    $(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");;
	});
  </script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
  </head>
  <body>
    
    <div class="login-form">
      <form action="login.php" method="POST">
        <div class="top">
          <img src="img/letsliftgh-icon.png" alt="icon" class="icon">
          <h1>Letsliftgh</h1>
          <h4>Login to your Account</h4>
        </div>
        <div class="form-area">
          <div class="group">
              <input type="text" id="username" class="form-control" placeholder="Username" name="username" autocomplete="off" required>
            <i class="fa fa-user"></i>
          </div>
          <div class="group">
            <input type="password"  id="password" class="form-control" placeholder="Password" name="password" autocomplete="off" required>
            <i class="fa fa-key"></i>
          </div>
          <div class="checkbox checkbox-primary">
              <input id="remember" name="remember" type="checkbox">
            <label for="remember"> Remember Me</label>
          </div>
          <button type="submit" class="btn btn-default btn-block">LOGIN</button>
        </div>
      </form>
      <div class="footer-links row">
        <div class="col-xs-6"><a href="register.php"><i class="fa fa-external-link"></i> Register Now</a></div>
        <div class="col-xs-6 text-right"><a href="forgot_password"><i class="fa fa-lock"></i> Forgot password</a></div>
      </div>
    </div>
      <?php include('includes/footer_home.php');?>

</body>
<script type="text/javascript">


</script>
</html>