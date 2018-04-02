<?php

class User extends CI_Controller {

public function __construct(){ //function  wajib ada buat session dan tarik data user dari db

        parent::__construct();
  	$this->load->helper('url'); 
  	$this->load->model('user_model'); // tarik data dari db
        $this->load->library('session'); // cipta session 

}

public function index() // loadkan page register.php tu
{
$this->load->view("register.php");
}


public function register_user(){

      $user=array(
      'user_name'=>$this->input->post('user_name'),
      'user_email'=>$this->input->post('user_email'),
      'user_password'=>md5($this->input->post('user_password')),
      'user_nama_pasukan'=>$this->input->post('user_nama_pasukan'),
      'user_nama_sekolah'=>$this->input->post('user_nama_sekolah')
        );
        print_r($user);

$email_check=$this->user_model->email_check($user['user_email']);

if($email_check){
  $this->user_model->register_user($user);
  $this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');
  redirect('user/login_view');

}
else{

  $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
  redirect('user');


}

}

// view function
public function login_view(){

$this->load->view("login.php");

}

function login_user(){ // function utk user login
  $user_login=array(

  'user_email'=>$this->input->post('user_email'),
  'user_password'=>md5($this->input->post('user_password'))

    );

    $data=$this->user_model->login_user($user_login['user_email'],$user_login['user_password']);
      if($data)
      {
        $this->session->set_userdata('user_id',$data['user_id']);
        $this->session->set_userdata('user_email',$data['user_email']);
        $this->session->set_userdata('user_name',$data['user_name']);
        $this->session->set_userdata('user_nama_pasukan',$data['user_nama_pasukan']);
        $this->session->set_userdata('user_nama_sekolah',$data['user_nama_sekolah']);

        $this->load->view('user_profile.php');

      }
      else{
        $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
        $this->load->view("login.php");

      }


}

// load user profile page
function user_profile(){

$this->load->view('user_profile.php');

}

// function utk logoutkan user
public function user_logout(){

  $this->session->sess_destroy();
  redirect('user/login_view', 'refresh');
}



}
?>