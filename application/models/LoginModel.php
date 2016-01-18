<?php

Class LoginModel extends CI_Model {
	
	public function login($email, $password){

		$this->db->select('email, password');
		$this->db->from('members');
		$this->db->where('email', $email);
		$this->db->where('password', $password);

		$query = $this->db->get();

		if($query->num_rows() == 1){
			return true;
		}else{
			return false;
		}
	}
}
?>