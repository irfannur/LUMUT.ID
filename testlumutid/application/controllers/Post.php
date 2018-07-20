<?php

class Post extends AuthorController{
	
	private $pk		= 'idpost';
	private $table	= 'post';

	public function index()
	{
		$this->data['query']	=	$this->db->select()
											 ->get('post');
		$this->data['alert']    =   $this->session->flashdata('alert');
		$this->data['title']	=	'Data Post';
		$this->data['mainView']	=	'post/read';
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

            redirect('post');
        }
		else
		{
			$this->data['action']	=	site_url(uri_string());
			$this->data['button']	=	'BUAT';
			$this->data['title']	=	'Tambah Artikel';
			$this->data['alert']    =   $this->session->flashdata('alert');
			$this->data['query']	=	false;
			$this->data['mainView']	=	'post/create';
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
			redirect('post');
		}
		else
		{
			$this->data['action']	=	site_url(uri_string());
			$this->data['button']	=	'UPDATE';
			$this->data['title']	=	'Update Artikel';
			$this->data['alert']    =   $this->session->flashdata('alert');
			$this->data['query']	=	$this->m_univers->find($this->table, $this->pk, $id)->row_array();
			$this->data['mainView']	=	'post/create';
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
		return redirect('post');
	}

	public function field_data()
	{
		date_default_timezone_set('Asia/Jakarta');

		$this->data['title']	=	$this->input->post('title');
		$this->data['content']	=	$this->input->post('content');
		$this->data['date']		=	date('Y-m-d');
        $this->data['username'] =   $this->session->userdata('username');
		return $this->data;
	}

	private function validation()
	{
        $this->load->library('form_validation');
        $this->form_validation->set_rules('title',     'Title',    'trim|required');
        $this->form_validation->set_rules('content',     'Content',   'trim|required');
        $this->form_validation->set_error_delimiters('', '<br>');
        return $this->form_validation->run();
	}

}