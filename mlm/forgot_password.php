<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <?php include('includes/headtag.php');?>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Letsliftgh - Forgot Password </title>

  <!-- ========== Css Files ========== -->
  <link href="css/root.css" rel="stylesheet">
  <style type="text/css">
    body{background: #F5F5F5;}
  </style>
  </head>
  <body>

    <div class="login-form">
      <form action="#" method="POST">
        <div class="top">
          <img src="img/letsliftgh-icon.png" alt="icon" class="icon">
          <h1>Letsliftgh</h1>
          <h4>Send password link</h4>
        </div>
        <div class="form-area">
          <div class="group">
            <input type="text" class="form-control" placeholder="Email Address" name="email" required>
            <i class="fa fa-user"></i>
          </div>
          <button type="submit" class="btn btn-default btn-block" name="reset_btn">SEND PASSWORD LINK</button>
        </div>
      </form>
    </div>
      <?php include ('includes/footer_home.php');?>

</body>
</html>