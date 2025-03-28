<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		$this->load->view('welcome_message');
	}


	function send_notifications()
	{
		$this->load->library('apn');
		$this->apn->payloadMethod = 'enhance'; // you can turn on this method for debuggin purpose
		$this->apn->connectToPush();

		// adding custom variables to the notification
		//$this->apn->setData(array( 'someKey' => true ));

		$deviceToken = '353e2eb7e8e1bb2c767f52b84384785bcfac3fbf8e7ea9a23d9b5a52b4124508';
		$send_result = $this->apn->sendMessage($deviceToken, 'Test notif #1 (TIME:'.date('H:i:s').')', /*badge*/ 2, /*sound*/ 'default'  );

		print_r($send_result);

		// if($send_result)
		// 	log_message('debug','Sending successful');
		// else
		// 	log_message('error',$this->apn->error);


		// $this->apn->disconnectPush();
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */