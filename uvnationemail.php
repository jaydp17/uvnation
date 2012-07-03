<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Uvnationemail extends CI_Controller {
	
	public function index(){
		$this->load->library('email');

		$this->email->from($_POST['emailfield'], $_POST['namefield']);
		$this->email->to('jaydp17@gmail.com'); 

		$this->email->subject('UVnation - Contact Us');
		$this->email->message($_POST['descfield']);	
	
		$this->email->send();
	
		echo $this->email->print_debugger();
	}
}