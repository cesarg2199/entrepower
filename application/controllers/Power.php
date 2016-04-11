<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Power extends CI_Controller 
{
	public function __construct() 
	{
        parent::__construct();
        $this->load->model('entre_model');
    }

    /* PAGES */
	public function index()
	{
		$this->load->view('includes/header');
		$this->load->view('home');
		$this->load->view('includes/footer');
	}

	public function about()
	{
		$this->load->view('includes/header');
		$this->load->view('about');
		$this->load->view('includes/footer');
	}

	public function contact()
	{
		$this->load->view('includes/header');
		$this->load->view('contact');
		$this->load->view('includes/footer');
	}

	public function powerTrainingPublic()
	{
		$this->load->view('includes/header');
		$this->load->view('powerTrainingPublic');
		$this->load->view('includes/footer');
	}

	public function powerTrainingPrivate()
	{
		$this->load->view('includes/header');
		$this->load->view('entreCurriculumPrivate');
		$this->load->view('includes/footer');
	}

	public function entreCurriculumPublic()
	{
		$this->load->view('includes/header');
		$this->load->view('entreCurriculumPublic');
		$this->load->view('includes/footer');
	}

	public function entreCurriculumPrivate()
	{
		$this->load->view('includes/header');
		$this->load->view('entreCurriculumPrivate');
		$this->load->view('includes/footer');
	}

	public function Alumni()
	{
		$this->load->view('includes/header');
		$this->load->view('checkback');
		$this->load->view('includes/footer');
	}

	public function jobEmployment()
	{
		$this->load->view('includes/header');
		$this->load->view('checkback');
		$this->load->view('includes/footer');
	}

	/* FUNCTIONS */
	public function sendContactEmail()
	{
		$status = $this->entre_model->sendContactEmail();
	}
}

















