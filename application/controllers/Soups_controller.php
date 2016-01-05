<?php
class Recipes_controller extends CI_Controller{


public function index(){


	$this->soupliist();
}


public function soupList()
{

$this->load->helper('url');
		$this->load->view('mainHeader');
		$this->load->view('user/recipes/soups/soupList');
		$this->load->view('mainFooter');


}

}






?>