<?php

class AdminController extends MY_Controller
{
	
	public function __construct()
	{

		parent:: __construct();

		$username 	= $this->session->userdata('username');
		$role		= $this->session->userdata('role');
		$isLogin	= $this->session->userdata('isLogin');

		if(!$isLogin)
		{
			redirect(site_url('login'));
		}

		if($role !== 'admin')
		{
			redirect(site_url('login'));
		}

	}

}