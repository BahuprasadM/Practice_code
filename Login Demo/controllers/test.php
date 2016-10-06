<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Test extends CI_Controller
{
		function __construct()
		{
			parent::__construct();	
			$this->load->helper('form');
			$this->load->library('session');
			//$this->load->driver('cache');
			$this->output->nocache();
		}
		function index()
		{
			//echo md5('bahuprasad');
			$this->load->view('Testview');
			$this->load->view('Registerview');
		}
		function RecordInsert()
		{	
			$this->load->model('logindb');
			$this->logindb->Insert();
			$this->load->view('Registerview');
		}
		function loginCheck()
		{
			
			$this->load->model('logindb');
			$value=$this->logindb->login();
			
			$this->load->library('form_validation');
			
			$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
			
			if ($this->form_validation->run() == FALSE) 
			{
				if(isset($this->session->userdata['username']))
				{
					$this->load->view('Testview');
				}
				else
				{
					$this->load->view('Loginview');
				}
			} 
			else 
			{
				$data = array(
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password')
				);
				$result = $this->logindb->login($data);
				if ($result == TRUE) 
				{
					$username = $this->input->post('username');
					$result = $this->logindb->login($username);
					if ($result != false) 
					{
						$session_data = array(
						'username' => $result[0]['user_name']
						);
						$this->session->set_userdata('username', $session_data);
						
						$this->load->view('Loginview');
					}
				} 
				else 
				{
					$data = array(
					'error_message' => 'Invalid Username or Password'
					);
					$this->load->view('Testview', $data);
				}
			}
		}
		public function logout() 
		{
			$this->session->unset_userdata('username');
			$this->load->view('Testview');
		}
	}
		
?>