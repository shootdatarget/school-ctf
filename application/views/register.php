<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registration-CI Login Registration</title>

<link rel="stylesheet" href="http://localhost/ctf/application/views/css/bootstrap.min.css" media="screen" title="no title">
<link href="http://localhost/ctf/application/views/css/signin.css" rel="stylesheet">

  </head>
  <body class="text-center">


                  <?php
                  $error_msg=$this->session->flashdata('error_msg');
				  $msg="";
                  if($error_msg){
                    $msg = $error_msg;
                  }
                   ?>

                      <form class="form-signin" role="form" method="post" action="<?php echo base_url('user/register_user'); ?>">
						 <b>
	  <?php 
		echo $msg;
		?>
		<br>
						<img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
                                <h1 class="h3 mb-3 font-weight-normal">Please register</h1>
                           <input class="form-control" placeholder="Username" name="user_name" type="text" autofocus>
                            <input class="form-control" placeholder="E-mail" name="user_email" type="email" autofocus>
                             <input class="form-control" placeholder="Password" name="user_password" type="password" value="">
                      		<input class="form-control" placeholder="Nama Pasukan" name="user_nama_pasukan" type="text" value="">
                             <input class="form-control" placeholder="Nama sekolah" name="user_nama_sekolah" type="text" value="">
								  <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
								  <p class="mt-5 mb-3 text-muted">&copy; 2018</p>
								
								 <b>Already registered ?</b> <br></b><a href="<?php echo base_url('user/login_view'); ?>">Sign-in here!</a>
								</form>
					  
					  
					  
					  
					  
                    <!--for centered text-->
                 

  </body>
</html>