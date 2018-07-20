<?php

class M_login extends CI_Model
{
	public $table = 'account';

	public function validate()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters(
			'<span class="help-block">',
			'</span>');

		$validationRules = $this->getValidationRules();
		$this->form_validation->set_rules($validationRules);
		return $this->form_validation->run();
	}

	public function getValidationRules()
	{

		$validationRules = [
		[
			'field'		=>	'username',
			'label'		=>	'Username',
			'rules'		=>	'trim|required'
		],
		[
			'field'		=>	'password',
			'label'		=>	'Password',
			'rules'		=>	'trim|required'
		]
		];
		return $validationRules;
		

	}

	public function getDefaultValues()
	{

		return [
			'username' =>	'',
			'password' =>	''
		];

	}

	public function login($input)
	{

		$input->password =	md5($input->password);
		$user = $this->db->where('username', $input->username)
						->where('password', $input->password)
						->limit(1)
						->get($this->table)
						->row();

		if(count($user))
		{

			$data	=	[

			'username'	=> 	$user->username,
			'role'		=>	$user->role,
			'isLogin'	=>	true,
			'userID'	=>	$user->ID
			];

			$this->session->set_userdata($data);
			return true;

		}

		return false;

	}

	public function logout()
	{

		$data = ['username', 'role', 'isLogin', 'userID'];
		$this->session->unset_userdata($data);
		$this->session->sess_destroy();

	}

}
