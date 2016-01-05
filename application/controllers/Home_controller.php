<?php
class Home_controller extends CI_Controller {


public function index(){

	$this->home();
}



	public function home()
	{
		$this->load->helper('url');
		$this->load->view('mainHeader');
		$this->load->view('user/home/home');
		$this->load->view('mainFooter');
	}
  

	


}
?>
