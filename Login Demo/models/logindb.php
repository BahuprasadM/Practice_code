<?php
class Logindb extends CI_Model
{
		function __construct()
		{
			parent::__construct();	
			$this->load->database();
		}
		function Insert()
		{
			$user_name=$this->input->post('username');
			$user_email=$this->input->post('email');
			$user_password=md5($this->input->post('password'));
			$query = $this->db->query("INSERT INTO `user_login`(`user_name`, `user_email`, `user_password`) VALUES ('$user_name','$user_email','$user_password')");
			echo 'Data Inserted Successfully..!!!';
			return true;
		}
		
		function login()
		{
			$user_name=$this->input->post('username');
			$user_password=$this->input->post('password');
			//$password=$this->input->post('password');
			$condition = "user_name =" . "'" . $user_name . "' AND " . "user_password =" . "'" . $user_password . "'";
			$this->db->select('*');
			$this->db->from('user_login');
			$this->db->where($condition);
			$this->db->limit(1);
			$query = $this->db->get();
			

			if ($query->num_rows() == 1) {
			$query=$query->result_array();
			return $query;
			} else {
			return false;
			}
		}

}
?>