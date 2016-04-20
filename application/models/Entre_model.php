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

        //set to_email id to which you want to receive mails
        $toEmail = 'entrepower@gmail.com';

        //Final messgae
        $finalMessage = $message + "<br /> Best Method to Contact by: " + $method + "<br /> School Affiliation: " + $school;

        //send mail
        $this->email->from($email, $name);
        $this->email->to($toEmail);
        $this->email->subject("Contact Us Form");
        $this->email->message($finalMessage);
        if ($this->email->send())
        {
            // mail sent
            return true;
        }
        else
        {
            //error
            return false;
        }
    }

    public function login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $this->db->where("email", $email);
        $this->db->where("password", $password);
        $query = $this->db->get("users")->result();


        if($query)
        {
            $this->session->set_userdata(array('isLoggedIn' => true));
            return true;
        }
        else
        {
            $this->session->set_userdata(array('isLoggedIn' => false));
           return false;
        }

    }

}
?>