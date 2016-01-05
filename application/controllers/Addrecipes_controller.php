<?php
class Addrecipes_controller extends CI_Controller{


public function index(){


	$this->Addrecipes();
}


public function Addrecipes()
{

$this->load->helper('url');
		$this->load->view('mainHeader');
		$this->load->view('user/recipes/myrecipes');
	


}

}






?>