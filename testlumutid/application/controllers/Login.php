<?php

class Login extends MY_Controller
{

	public function index()
	{

		$input = (object) $this->input->post(null,true);
		if(! $_POST)
		{
			$input = (object) $this->m_login->getDefaultValues();
		}

		if(! $this->m_login->validate())
		{
			$this->load->view('login/form', compact('input'));
			return;
		}

		if($this->m_login->login($input))
		{
			redirect(site_url('dashboard'), 'refresh');
		}
		
		flashMessage(
            'error',
            'Username atau password salah.
             Atau akun anda sedang diblokir.'
        );
		redirect('login', 'refresh'); //bila login salah

	}

	public function logout()
	{

		$this->m_login->logout();
		redirect(base_url(), 'refresh');

	}

}
