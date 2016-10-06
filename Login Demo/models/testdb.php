<?php
class Testdb extends CI_Model
{
		function __construct()
		{
			parent::__construct();	
			$this->load->database();
		}
		function Insert()
		{
			$uname=$this->input->post('uname');
			$password=$this->input->post('password');
			$query = $this->db->query("INSERT INTO login(uname,password) VALUES ('$uname','$password')");
			return true;
		}
}
?>