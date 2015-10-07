<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class First extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('first_view');
	}

		public function about()
	{
		$data['name'] = "Oleg";
		$data['surname'] = "Shevchenko";
		$this->load->view('about_view', $data);
		
	}

		public function ar()
	{
		
		$this->load->model('ar_model');
		$data['ar'] =$this->ar_model->get_ar();
		$this->load->view('ar_view', $data);
		
	}
}
