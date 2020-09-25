<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Custmodel extends CI_Model {

	
	public function view(){
    	return $this->db->get('customer')->result();
    }
	
	public function insertCustomer($name, $address, $filter_gender,$filter_married,$email,$password) {

		$dataSave = [
                    'Name' => $name,
                    'Address' => $address,
                    'Gender' => $filter_gender,
                    'Is_married' => $filter_married,
                    'Email' => $email,
                    'Password' => $password
        	];
        $query = $this->db->insert('customer',$dataSave);
	}
	
	public function deleteCustomer($ID) {
		$this->db->where('ID', $ID);
		$this->db->delete('customer');
	}
	
	
	public function updateCustomer($dataUpdate, $iddata) {

			$this->db->where('ID', $iddata);
        	$this->db->update('customer',$dataUpdate);
	}

	public function auth_cek($username, $password) {

		$id_pwd = md5($password);

		$data = $this->db->query('SELECT * FROM Customer WHERE Name ="'.$username.'" AND Password = "'.$id_pwd.'" LIMIT 1');
        return $data->result_array();

		// $this->db->where('Name', $username);
  //       $this->db->where('Password', md5($password));
  //       return $this->db->get('customer');

	}
	
	
}
