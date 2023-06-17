<?php

defined('BASEPATH') or exit('No direct script access allowed');


class Pasien_pulang extends CI_Controller
{

        function __construct()
        {
                parent::__construct();
                $this->load->model('Pasien_pulang_model');
                $this->load->library('form_validation');
        }

        public function index()
        {
                $data['Pasien_pulang'] = $this->Pasien_pulang_model->tampil_data()->result();

                $this->load->view('template_administrator/header');
                $this->load->view('template_administrator/sidebar');
                $this->load->view('template_administrator/footer');
                $this->load->view('pasien_pulang/pasien_pulang', $data);
        }

        public function input()
        {
                $data = array(
                        'no_rm' => set_value('no_rm'),
                        'nm_Pasien_pulang' => set_value('nm_Pasien_pulang'),
                );

                // $data['jk'] = $this->Pasien_pulang_model->tampil_jk();
                // $data['gol_drh'] = $this->Pasien_pulang_model->tampil_gol_drh();
                // $data['agama'] = $this->Pasien_pulang_model->tampil_agama();
                // $data['stts_nikah'] = $this->Pasien_pulang_model->tampil_stts_nikah();

                $this->load->view('template_administrator/header');
                $this->load->view('template_administrator/sidebar');
                $this->load->view('template_administrator/footer');
                $this->load->view('Pasien_pulang/Pasien_pulang_form', $data);
        }

        public function input_aksi()
        {
                $this->_rules();
                if ($this->form_validation->run() == FALSE) {
                        $this->input();
                } else {
                        $data = array(
                                'no_rm' => $this->input->post('no_rm', TRUE),
                                'nm_Pasien_pulang' => $this->input->post('nm_Pasien_pulang', TRUE),
                                'status' => '1'
                        );
                        $this->Pasien_pulang_model->input_data($data);
                        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"> Data Pasien berhasil ditambahkan!
                    </div>');
                        redirect('Pasien');
                }
        }

        public function _rules()
        {
                $this->form_validation->set_rules('no_rm', 'Nomor Rekam Medis', 'required', [
                        'required' => 'Data Nomor Rekam Medis  wajib diisi!'
                ]);
                $this->form_validation->set_rules('nm_Pasien_pulang', 'Nama Pasien', 'required', [
                        'required' => 'Data Nama Pasien wajib diisi!'
                ]);
        }

        public function update($id)
        {
                $id = array('id_Pasien_pulang' => $id);
                $data['Pasien_pulang'] = $this->Pasien_pulang_model->edit_data($id)->result();

                // $data['jk'] = $this->Pasien_pulang_model->tampil_jk();
                // $data['gol_drh'] = $this->Pasien_pulang_model->tampil_gol_drh();
                // $data['agama'] = $this->Pasien_pulang_model->tampil_agama();
                // $data['stts_nikah'] = $this->Pasien_pulang_model->tampil_stts_nikah();

                $this->load->view('template_administrator/header');
                $this->load->view('template_administrator/sidebar');
                $this->load->view('template_administrator/footer');
                $this->load->view('Pasien_pulang/Pasien_pulang_update', $data);
        }

        public function update_aksi()
        {
                $id = $this->input->post('id');


                $data = array(
                        'nm_Pasien_pulang'      => $this->input->post('nm_Pasien_pulang', true),
                        'status' => $this->input->post('status', TRUE),
                );

                $this->Pasien_pulang_model->update_data($id, $data);
                $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"> Data Pasien berhasil diupdate!
                    </div>');
                redirect('Pasien');
        }
        public function delete($id)
        {
                // $where = array('kd_Pasien' => $id);
                $this->Pasien_pulang_model->hapus_data($id);
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> Data Pasien berhasil dihapus!
                </div>');
                redirect('Pasien');
        }
}
