<?php

class Quest extends CI_Controller {
	
public function __construct(){ //function  wajib ada buat session dan tarik data user dari db

        parent::__construct();
  	$this->load->helper('url'); 
  	$this->load->model('user_model'); // tarik data dari db
        $this->load->library('session'); // cipta session 

}

public function landing(){
	
$this->load->view("landing.php");


}

public function scoreboard(){
	
$this->load->view("scoreboard.php");


}


}


?>