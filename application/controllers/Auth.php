<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{	

    
      public function login()
        {
            $this->load->model('Daftar_model');
            $this->load->library('form_validation');
    
            $rules = $this->Daftar_model->rules();
            $this->form_validation->set_rules($rules);
    
            if($this->form_validation->run() == FALSE){
                return $this->load->view('login_form');
            }
    
            $username = $this->input->post('username');
            $password = $this->input->post('password');
    
            if($this->Daftar_model->login($username, $password)){
                redirect('daftar');
            } else {
                $this->session->set_flashdata('message_login_error', 'Login Gagal, pastikan username dan passwrod benar!');
            }
    
            $this->load->view('login_form');
        }
    
        public function logout()
        {
            $this->load->model('Daftar_model');
            $this->Daftar_model->logout();
            redirect(site_url());
        }

       
    
}