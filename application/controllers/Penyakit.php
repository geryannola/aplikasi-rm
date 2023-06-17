<?php

defined('BASEPATH') or exit('No direct script access allowed');


class Penyakit extends CI_Controller
{


        public function index()
        {

                $data['penyakit'] = $this->Penyakit_model->tampil_data()->result();

                $this->load->view('template_administrator/header');
                $this->load->view('template_administrator/sidebar');
                $this->load->view('template_administrator/footer');
                $this->load->view('penyakit/penyakit', $data);
        }
}
