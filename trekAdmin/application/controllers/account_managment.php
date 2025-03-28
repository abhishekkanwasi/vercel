<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account_managment extends CI_Controller {

	public function index() {
		$this->load->view('account_managment');
	}
}
