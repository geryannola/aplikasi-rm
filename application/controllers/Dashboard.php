<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

        function __construct()
        {
                parent::__construct();
                if (!isset($this->session->userdata['email'])) {
                        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> Anda belum login! </div>');
                        redirect('administrator/auth');
                }
        }

        public function index()
        {
                $this->load->view('template_administrator/header');
                $this->load->view('template_administrator/sidebar');
                $this->load->view('template_administrator/footer');
                $this->load->view('dashboard/dashboard');
        }
}
