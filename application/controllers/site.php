<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

	public function index()
	{
		//$this->load->view('welcome_message');
		//$this->addStaff();
		$this->home();
	}
	
	public function home(){
		$data["title"] = "Welcome";
		$data["var1"] = 1;
		$data["var2"] = 9;
		
		$this->load->model("math");
		$data["addTotal"] = $this->math->add($data["var1"], $data["var2"]);
		$data["subTotal"] = $this->math->sub($data["var1"], $data["var2"]);
		
		$this->load->view("view_home", $data);
	}
}