<?php

class Customer extends CI_Model {

	function insertUser($table,$data){
		$this->db->insert($table,$data);
	}

	function get_user($table,$where){
		$data = $this->db->get_where($table,$where);
		return $data->result_array();

	}

	function login_authen($email, $password){
		//$this->db->select('*');
		$sql = "select * from users where email = '$email' and password = '$password'";
		$query = $this->db->query($sql);

		if($query->num_rows()==1){
			return true;
		}else{
			return false;
		}
	}


	function cek_email($email){
		//$this->db->select('*');
		$sql = "select * from users where email = '$email'";
		$query = $this->db->query($sql);

		if($query->num_rows()==1){
			return true;
		}else{
			return false;
		}
	}


	function authen_user($email){
		$sql = "select authentication from users where email = '$email'";
		$query = $this->db->query($sql);

		if ($query->num_rows() == 1) {
			return $query->result_array();
		}else{
			return false;
		}
	}
	function wrong_password($email,$value){
		$sql = "update users set authentication = $value where email = '$email'";
		$query = $this->db->query($sql);
	}

	function update_password($table,$where,$data){
			
		$this->db->update($table,$data,$where);

		}
	
}

?>