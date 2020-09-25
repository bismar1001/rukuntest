<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->database();
		$this->load->model('custmodel');
	}


	public function index() {

        $this->load->view('temp/login');       
    }

    public function log() {
    	if ($this->input->server('REQUEST_METHOD') == 'POST') {
			
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$filter_married = $this->input->post('filter_married');

			$dataEmp = $this->custmodel->auth_cek($username, $password);

			//print_r($dataEmp); exit();

			if(count($dataEmp)>0){  
				return print_r(1);
			}
			else {
				return print_r(0);     
			}

		}

    }


}