<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{


    public function index()
    {
        $this->load->view('template_administrator/header');
        $this->load->view('login');
        $this->load->view('template_administrator/footer');
    }
    public function proses_login()
    {

        $this->form_validation->set_rules('email', 'email', 'required', ['required' => 'Email wajib diisi !']);
        $this->form_validation->set_rules('password', 'password', 'required', ['required' => 'password wajib diisi !']);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template_administrator/header');
            $this->load->view('login');
            $this->load->view('template_administrator/footer');
        } else {
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $user = $email;
            $pass = MD5($password);

            $cek = $this->login_model->cek_login($user, $pass);
            if ($cek->num_rows() > 0) {
                foreach ($cek->result() as $ck) {
                    $sess_data['email'] = $ck->email;
                    $sess_data['level'] = $ck->level;

                    $this->session->set_userdata($sess_data);
                }

                if ($sess_data['level'] == 'admin') {
                    redirect('Dashboard');
                } else {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> Email atau password salah!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> Email atau password salah!
              </div>');
                redirect('auth');
            }
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth');
    }
}
