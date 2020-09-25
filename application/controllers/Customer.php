<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customer extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->database();
		$this->load->model('custmodel');
	}

	public function index()
	{
		$this->load->model('custmodel');
		$this->data['model'] = $this->custmodel->view();
        $this->load->view('name_display', $this->data);
	}

	public function dashboard()
	{
		$this->load->model('custmodel');
		$this->data['model'] = $this->custmodel->view();
        $this->load->view('name_display', $this->data);
	}

	
	public function cust() {
		
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			
			$name = $this->input->post('name');
			$filter_gender = $this->input->post('filter_gender');
			$filter_married = $this->input->post('filter_married');
            $email = $this->input->post('email');
            $password = md5($this->input->post('password'));
            $address = $this->input->post('address');

			$data = $this->custmodel->insertCustomer($name, $address, $filter_gender,$filter_married,$email,$password);

			$data['model'] = $this->custmodel->view();
            $html = $this->load->view('list_customer', array('model'=>$this->custmodel->view()), true);

			$callback = array(
		      'response'=>'success',
		      'message'=>'Data berhasil disimpan',
		      'html'=>$html
		    );

			echo json_encode($callback);
		}
		
	}

	public function get_delete() {
		if ($this->input->server('REQUEST_METHOD') == 'POST') {

			$ID = $this->input->post('id_filetype');
			 
			$deleted = $this->custmodel->deleteCustomer($ID);
			$callback = array(
		      'response'=>'success',
		      'message'=>'Data berhasil dihapus'
		    );
			
			echo json_encode($callback);
	    }

	}
	public function get_edit() {

		if ($this->input->server('REQUEST_METHOD') == 'POST') {

			$ID = $this->input->post('id_filetype');
			$data = $this->db->query('SELECT * FROM customer WHERE ID = "'.$ID.'" ')->result_array();
            return print_r(json_encode($data));
	    }
	}


	
	public function saveedit() {
		
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			
			$iddata = $this->input->post('id_data');

            $dataUpdate = array(
                    'Name' => $this->input->post('name'),
                    'Email' => $this->input->post('email'),
                    'Password' => md5($this->input->post('password')),
                    'Gender' => $this->input->post('filter_gender'),
                    'Is_married' => $this->input->post('filter_married'),
                    'Address' => $this->input->post('address')
            );
			$update = $this->custmodel->updateCustomer($dataUpdate, $iddata);
			$callback = array(
		      'response'=>'success',
		      'message'=>'Data berhasil di update'
		    );

			echo json_encode($callback);
		}
		
	}
	
	
}
