<?php 
	include_once ('../config.php');
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    

    <title>Login Blog</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
   
    <!-- Custom styles for this template -->
    <link href="assets/css/login.css" rel="stylesheet">
   
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

      <form  method="POST" class="form-signin" role="form" action="<?= do_action('login'); ?>">
        <h2 class="form-signin-heading">Acesso Admin</h2>
        <label for="inputEmail" class="sr-only">Email</label>
        <input type="email" id="inputEmail" name="user_email" class="form-control" placeholder="Email " required autofocus>
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" id="inputPassword" name="user_pass" class="form-control" placeholder="Password" required>

        <input type="hidden"  value="1" name="_login_form"></input>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me">Lembrar-me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Acessar o sistema</button>
      </form>

    </div> <!-- /container -->
    
  </body>
</html>
