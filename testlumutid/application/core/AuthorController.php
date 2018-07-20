<?php
class AuthorController extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        // Data yang berkaitan dengan login.
        $username = $this->session->userdata('username');
        $role   = $this->session->userdata('role');
        $isLogin  = $this->session->userdata('isLogin');

        if (!$isLogin) {
            redirect(site_url('login'));
            return;
        }
    }
}
