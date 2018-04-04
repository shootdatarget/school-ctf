<?php
$user_id=$this->session->userdata('user_id');

if(!$user_id){

  redirect('user/login_view');
}

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>User Profile Dashboard Login Registration</title>
    <link rel="stylesheet" href="http://localhost/ctf/application/views/css/bootstrap.min.css">
  </head>
  <body>

<div class="container">
  <div class="row">
    <div class="col-md-4">

      <table class="table table-bordered table-striped">


        <tr>
          <th colspan="2"><h4 class="text-center">User Info</h3></th>

        </tr>
          <tr>
            <td>User Name</td>
            <td><?php echo $this->session->userdata('user_name'); ?></td>
          </tr>
          <tr>
            <td>User Email</td>
            <td><?php echo $this->session->userdata('user_email');  ?></td>
          </tr>
          <tr>
            <td>Nama Pasukan</td>
            <td><?php echo $this->session->userdata('user_nama_pasukan');  ?></td>
          </tr>
          <tr>
            <td>Nama Sekolah</td>
            <td><?php echo $this->session->userdata('user_nama_sekolah');  ?></td>
          </tr>
      </table>


    </div>
  </div>
<a href="<?php echo base_url('quest/landing');?>" >  <button type="button" class="btn-primary">Start Question</button></a>
  
<a href="<?php echo base_url('user/user_logout');?>" >  <button type="button" class="btn-primary">Logout</button></a>
</div>
  </body>
</html>