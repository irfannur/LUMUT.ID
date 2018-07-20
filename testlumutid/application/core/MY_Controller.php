<?php

class MY_Controller extends CI_Controller
{

	public function __construct()
	{

		parent:: __construct();

		$username	=	$this->session->userdata('username');
		$role		=	$this->session->userdata('role');
		$isLogin	=	$this->session->userdata('isLogin');


		$this->load->vars([

			'username'	=>  $username,
			'role'		=>	$role,
			'isLogin'	=>	$isLogin

			]);

	}

}