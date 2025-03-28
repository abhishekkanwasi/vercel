<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index() {
		$this->load->view('login');
	}

	public function login() {
		$this->load->model('admin_model');
		$response = $this->admin_model->loginModel();
		print_r($response);
		die();
	}

	public function addtrek() {
		$this->load->model('admin_model');
		$response = $this->admin_model->addtrekModel();
		print_r($response);
		die();
	}

	public function uploadTrekImage() {
		$this->load->model('admin_model');
		$response = $this->admin_model->uploadTrekImageModel();
		print_r($response);
		die();	
	}

	public function updateTrek1() {
		$this->load->model('admin_model');
		$response = $this->admin_model->updateTrek1Model();
		print_r($response);
		die();
	}

	public function updateTrek() {
		$this->load->model('admin_model');
		$response = $this->admin_model->updateTrekModel();
		print_r($response);
		die();
	}
}
