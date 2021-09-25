<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    
    public function index()
    {
        $data['title'] = 'Login Toko 234';
        $this->load->view('templates/auth_header',$data);
        $this->load->view('auth/login');
        $this->load->view('templates/auth_footer');
    }

    public function register()
    {
        $data['title'] = 'Register Akun';
        $this->load->view('templates/auth_header',$data);
        $this->load->view('auth/register');
        $this->load->view('templates/auth_footer');
    }

}