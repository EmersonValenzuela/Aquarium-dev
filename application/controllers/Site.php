<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Site extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('LoginModel');
    }
    public function index()
    {

        if ($this->input->post('user_name')) {
            $jsonData['rsp'] = 200;
            $jsonData['name'] = $this->input->post('user_name');
            header('Content-type: application/json; charset=utf-8');
            echo json_encode($jsonData);
        }

        $data['title'] = 'Inicio Sesión';
        $this->load->view('login', $data);
    }
    public function authUser()
    {
        $u = $this->input->post('u');

        $r = $this->LoginModel->auth_user_login(array('user_name' => $u));
        if ($r) {
            $jsonData['rsp'] = 200;
            $this->session->set_userdata('key', $r->user_pass);
        } else {
            $jsonData['rsp'] = 400;
            $this->session->set_userdata('key', false);
        }
        header('Content-type: application/json; charset=utf-8');
        echo json_encode($jsonData);
    }

    public function verify_pass()
    {
        $p = $this->input->post('p');
        $key = $this->session->userdata('key');
        if ($p == $key) {
            $jsonData['rsp'] = 200;
            $this->session->unset_userdata('key');
        } else {
            $jsonData['rsp'] = 400;
        }
        header('Content-type: application/json; charset=utf-8');
        echo json_encode($jsonData);
    }
}
