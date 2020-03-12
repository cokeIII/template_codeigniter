<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
	}
	public function get_data()
	{
		$this->load->model('Home_model');
		
		$json_data = array();
		$json_data['status'] = true;
		$json_data['send_data'] = $this->input->post();
		
		$query_data = $this->Home_model->get_data();
		$json_data['query_data'] = $query_data;

		echo json_encode($json_data);
	}
}
