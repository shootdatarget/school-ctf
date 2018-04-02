<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login-CI Login Registration</title>
<link rel="stylesheet" href="http://localhost/ctf/application/views/css/bootstrap.min.css" media="screen" title="no title">
 <link href="http://localhost/ctf/application/views/css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
   
                <?php
				ini_set('display_errors', 1);
error_reporting(E_ALL ^ E_NOTICE);
              $success_msg= $this->session->flashdata('success_msg');
              $error_msg= $this->session->flashdata('error_msg');
			  $msg="";
                  if($success_msg){
                    ?>
                    <div class="">
                      <?php $msg = $success_msg; ?>
                    </div>
                  <?php
                  }
                  if($error_msg){
                    ?>
                    <div class="">
                      <?php $msg = $error_msg; ?>
                    </div>
                    <?php
                  }
                  ?>

    <form class="form-signin" role="form" method="post" action="<?php echo base_url('user/login_user'); ?>">
		 <b>
	  <?php 
		echo $msg;
		?>
		<br>
      <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
	 
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" name="user_email" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="user_password" class="form-control" placeholder="Password" required>
      <div class="checkbox mb-3">
        <label>
          <b>Not registered ?</b> <br></b><a href="<?php echo base_url('user'); ?>">Register here</a>
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>

             
             
 
          


  </body>
</html>