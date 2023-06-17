<?php

defined('BASEPATH') or exit('No direct script access allowed');


class User extends CI_Controller
{


        public function index()
        {

                $data['user'] = $this->user_model->tampil_data()->result();

                $this->load->view('template_administrator/header');
                $this->load->view('template_administrator/sidebar');
                $this->load->view('template_administrator/footer');
                $this->load->view('user/user', $data);
        }
}
