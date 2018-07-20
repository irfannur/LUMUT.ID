<?php

class Dashboard extends AuthorController
{
	public function index()
	{
		$this->data['title']	=	'Test Lumu.Co.Id';
		$this->data['mainView']	=	'dashboard/read';
		$this->load->view('template', $this->data);
	}
}
