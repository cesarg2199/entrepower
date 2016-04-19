<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Entre_model extends CI_Model 
{
	public function __construct() 
	{
        parent::__construct();
    }

    public function sendContactEmail()
    {
    	$name = $this->input->post('name');
    	$school = $this->input->post('school');
    	$email = $this->input->post('email');
    	$phone = $this->input->post('phone');
    	$message = $this->input->post('message');
    	$method = $this->input->post('method');

    	echo $method;
    }

    public function login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $success = $this->db->query("select * from users where email = '{$email}' and password = '{$password}'");

        if($success){ return true; }
        else { return false; }
    }

}
?>