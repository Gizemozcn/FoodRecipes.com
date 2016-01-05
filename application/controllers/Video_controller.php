<?php
class Video_controller extends CI_Controller {


public function index(){

	$this->videos();
}
 public function videos()
	{
		$this->load->helper('url');
		$this->load->view('mainHeader');
		$this->load->view('videos');
		$this->load->view('mainFooter');
	}

}
?>
