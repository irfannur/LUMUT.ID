<?php

class User extends AdminController

{
	
	private $pk		= 'ID';
	private $table	= 'account';

	public function index()
	{
		$this->data['query']	=	$this->db->select()
											 ->get('account');
		$this->data['alert']    =   $this->session->flashdata('alert');
		$this->data['title']	=	'Data User';
		$this->data['mainView']	=	'user/read';
		$this->load->view('template', $this->data);
	}

	public function create()
	{
		if ($_POST)
        {
            if ($this->validation())
            {
                if ($this->db->insert($this->table, $this->field_data()))
                {
                    $this->session->set_flashdata('alert', alert('success', status('created')));
                }
                else
                {
                    $this->session->set_flashdata('alert', alert('warning', status('existed')));
                }
            }
            else
            {
                 $this->session->set_flashdata('alert', alert('error', validation_errors(), TRUE));
            }

            redirect('user');
        }
		else
		{
			$this->data['action']	=	site_url(uri_string());
			$this->data['button']	=	'BUAT';
			$this->data['title']	=	'Tambah Data User';
			$this->data['alert']    =   $this->session->flashdata('alert');
			$this->data['query']	=	false;
			$this->data['mainView']	=	'user/create';
			$this->load->view('template', $this->data);
		}
	}

	public function update()
	{
		$id = $this->uri->segment(3);

		if($_POST)
		{	
			if($this->validation())
			{

				if($this->db->where($this->pk, $id)->update($this->table, $this->field_data()))
				{
                    $this->session->set_flashdata('alert', alert('success', status('updated')));
                }
                else
                {
                    $this->session->set_flashdata('alert', alert('warning', status('existed')));
                }
            }
            else
            {
                 $this->session->set_flashdata('alert', alert('error', validation_errors(), TRUE));
            }
			redirect('user');
		}
		else
		{
			$this->data['action']	=	site_url(uri_string());
			$this->data['button']	=	'UPDATE';
			$this->data['title']	=	'Update Data User';
			$this->data['alert']    =   $this->session->flashdata('alert');
			$this->data['query']	=	$this->m_univers->find($this->table, $this->pk, $id)->row_array();
			$this->data['mainView']	=	'user/create';
			$this->load->view('template', $this->data);
		}
	} 

	public function delete()
	{
		if($this->uri->segment(3))
		{
			if($this->db->where($this->pk, $this->uri->segment(3))->delete($this->table))
			{
				 $this->session->set_flashdata('alert', alert('success', status('deleted')));
			}
			else
			{
				$this->session->set_flashdata('alert', alert('info', status('not_deleted')));
			}
		}
		return redirect('user');
	}

	public function field_data()
	{
		if ($this->input->post('password') != '')
        {
            $this->data['password'] = md5($this->input->post('password'));
        }

		$this->data['username']	=	$this->input->post('username');
		$this->data['name']	=	$this->input->post('name');
		$this->data['role']	=	$this->input->post('role');
		return $this->data;
	}

	private function validation()
	{
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username',     'Username',    'trim|required');
        $this->form_validation->set_rules('password',     'Password',   'trim|required');
        $this->form_validation->set_error_delimiters('', '<br>');
        return $this->form_validation->run();
	}
}
