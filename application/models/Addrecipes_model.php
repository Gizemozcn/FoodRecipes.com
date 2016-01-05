<?php
/* 
 * File Name: employee_model.php
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Addrecipes_model extends CI_Model
{
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function get_author(){
        $this->db->select('id');
        $this->db->select('username');
        $this->db->from('users');
        //$this->db->where(' id == recipie_id')
        $query= $this->db->get();
        $result = $query->result();

        $id = array('-select-');
        $username = array('-select-');
        for($i = 0; $i< count($result); $i++)
        {
            array_push($user_id, $result[$i] ->id);
            array_push($user_name, $result[$i]->username);
        }
        return $user_result = array_combine($id, $username);

    }

    //get title of the recipie
    function get_title()     
    { 
        $this->db->select('id');
        $this->db->select('title');
        $this->db->from('recipes');
        //where what are equal
        $query = $this->db->get();
        $result = $query->result();

        //array to store department id & department name
        $id = array('-SELECT-');
        $title = array('-SELECT-');

        for ($i = 0; $i < count($result); $i++)
        {
            array_push($id, $result[$i]->id);
            array_push($title, $result[$i]->title);
        }
        return $department_result = array_combine($dept_id, $dept_name);
    }
    function get_Cooking_time()
    {
        $this->db->select('id');
        $this->db->select('cook_time');
        $this->db->from('directions');
        //where what are equals
        $query = $this->db->get();
        $result = $query->result();

        //array to store department id & department name
        $id = array('-SELECT-');
        $cook_time = array('-SELECT-');

        for ($i = 0; $i < count($result); $i++)
        {
            array_push($id, $result[$i]->id);
            array_push($cook_time, $result[$i]->cook_time);
        }
        return $cooking_result = array_combine($id, $cook_time);

    }

    //get designation table to populate the designation dropdown
    function get_Ingrediants()     
    { 
        $this->db->select('ingrediants_id');
        $this->db->select('ingrediants_name');
        $this->db->from('ingrediants');
        //where what are equal
        $query = $this->db->get();
        $result = $query->result();

        $ingrediants_id = array('-SELECT-');
        $ingrediants_name = array('-SELECT-');

        for ($i = 0; $i < count($result); $i++)
        {
            array_push($ingrediants_id, $result[$i]->ingrediants_id);
            array_push($ingrediants_name, $result[$i]->ingrediants_name);
        }
        return $ingrediants_result = array_combine($ingrediants_id, $ingrediants_name);
    }


    function get_description()
    {
        $this->db->select('description_id');
        $this->db->select('description_name');
        $this->db->from('description');
        $query = $this->db->get();
        $result = $query->result();

        $ingrediants_id = array('-SELECT-');
        $ingrediants_name = array('-SELECT-');

        for ($i = 0; $i < count($result); $i++)
        {
            array_push($description_id, $result[$i]->description_id);
            array_push($description_name, $result[$i]->description_name);
        }
        return $description_result = array_combine($description_id, $description_name);
    }


}
?>