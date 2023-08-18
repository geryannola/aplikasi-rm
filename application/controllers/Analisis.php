<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Analisis extends CI_Controller
{

        function __construct()
        {
                parent::__construct();
                $this->load->model('Analisis_model');
                // $this->load->model('Pulang_model');
                // $this->load->model('Registrasi_model');

                $this->load->library('form_validation');
                $this->load->helper('url');
        }

        public function index()
        {
                $data['pasien'] = $this->Analisis_model->tampil_data()->result();

                $this->load->view('template_administrator/header');
                $this->load->view('template_administrator/sidebar');
                $this->load->view('template_administrator/footer');
                $this->load->view('analisis/analisis', $data);
        }

        public function brm_kembali($id)
        {
                $data = array(
                        'berkas_pulang'      => 1,
                        'tgl_kembali'      => date('Y-m-d'),
                );

                $this->Registrasi_model->update_data($id, $data);
                $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"> Data Pasien berhasil diupdate!
                    </div>');
                redirect('pulang');
        }
        public function batal($id)
        {
                $data = array(
                        'id_status_pulang'      => 0,
                        'tgl_kembali'      => NULL,
                );
                $this->Registrasi_model->update_data($id, $data);
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> Data Pasien berhasil dibatal pulang!
                </div>');
                redirect('pulang');
        }
        public function kualitatif($id)
        {
                $pasien = $this->Analisis_model->tampil_pasien($id);
                $id_ruangan = $pasien->id_ruangan;
                $lembar = $this->Analisis_model->tampil_lembar($id_ruangan);
                $indikator = $this->Analisis_model->tampil_indikator($id_ruangan);

                $data = array( 
                        'pasien' => $pasien,
                        'indikator' => $indikator,
                        'lembar' => $lembar
                );
                // // die();

                $this->load->view('template_administrator/header');
                $this->load->view('template_administrator/sidebar');
                $this->load->view('template_administrator/footer');
                $this->load->view('analisis/analisis', $data);
        }
}
