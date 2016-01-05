<?php
class Recipes_controller extends CI_Controller{


public function index(){


	$this->recipes();
}


public function recipes()
{

$this->load->helper('url');
		$this->load->view('mainHeader');
		$this->load->view('user/recipes/recipes');
		$this->load->view('mainFooter');


}

}






?>