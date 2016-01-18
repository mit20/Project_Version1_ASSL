<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class LoginController extends CI_Controller{

    public function index()
    {
        $this->load->view('login'); 
    }

 	// Displays welcome page 
	public function user_welcome() {
	
	$this->load->view('welcome_gallery');
	}
}
?>