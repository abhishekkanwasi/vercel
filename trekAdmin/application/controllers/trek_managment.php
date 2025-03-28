<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Trek_managment extends CI_Controller {

	public function index() {
		$this->load->view('trek_managment_view');
	}

	public function trek() {
		$this->load->view('trek_view');
	}

	public function add_trek() {
		$this->load->view('add_trek_view');
	}

	public function getTrekListDetails() {
		$this->load->model('admin_model');
		$response = $this->admin_model->getTrekListDetailsModel();
		print_r($response);
		die();
	}

	public function edit($id) {
		$response = array('id' => $id); 
		$this->load->view('edit_trek_page', $response);
	}
	
	public function getTrekDetails() {
		$this->load->model('admin_model');
		$response = $this->admin_model->getTrekDetailsModel();
		print_r($response);
		die();
	}
}
