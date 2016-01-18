<?php

Class membership_model extends CI_Model {
	
	public function create_member(){

		$email = $this->input->post('email'); //Grabs email from post array and stores it in $email

		$new_member_insert_data = array(
			'email'=> $this->input->post('email'),
			'password'=> md5($this->input->post('password'))
			);
		$insert = $this->db->insert('members', $new_member_insert_data); //Inserts into the members table and passes in the $new_member_insert_data array
			return $insert;
		}

	public function check_if_email_exists($email){

		$this->db->where('email', $email);
		$result = $this->db->get('members');  //Selects from the db where email is set to email
	}

	}
?>