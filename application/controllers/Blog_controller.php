<?php
class Blog_controller extends CI_Controller {


public function index(){

	$this->comments();
}
 public function comments()
	{
		$this->load->helper('url');
		$this->load->view('mainHeader');
		$this->load->view('comments');
		$this->load->view('mainFooter');
	}


}
?>
