<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		// $this->load->model('Customer_model', 'cm');
	}


	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function hello()
	{
		// $data["name"] = "Somchai";
		// $data["email"] = "somchai@gmail.com";

		// $data["books"] = array("Java", "PHP", "Python", "Kotlin");
		// $this->load->view('hello_view2', $data);

		$data['query'] = $this->se->showName();
		$this->load->view('hello_view2', $data);
	}
}
