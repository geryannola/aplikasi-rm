<?php

defined('BASEPATH') or exit('No direct script access allowed');


class Registrasi extends CI_Controller
{

        function __construct()
        {
                parent::__construct();
                $this->load->model('Registrasi_model');
                $this->load->model('Pasien_model');
                $this->load->model('Ruang_perawatan_model');
                $this->load->model('Dokter_model');
                $this->load->model('Penyakit_model');
                $this->load->model('Jaminan_model');
                $this->load->model('Status_pulang_model');
                $this->load->library('form_validation');
                $this->load->helper('url');
        }

        public function index()
        {
                $data['pasien'] = $this->Registrasi_model->tampil_data()->result();

                $this->load->view('template_administrator/header');
                $this->load->view('template_administrator/sidebar');
                $this->load->view('template_administrator/footer');
                $this->load->view('registrasi/registrasi', $data);
        }

        public function input()
        {
                $data = array(
                        'no_rm' => set_value('no_rm'),
                        'nm_pasien' => set_value('nm_pasien'),
                );

                $this->load->view('template_administrator/header');
                $this->load->view('template_administrator/sidebar');
                $this->load->view('template_administrator/footer');
                $this->load->view('registrasi/registrasi_form', $data);
        }

        public function input_aksi()
        {
                $this->_rules();
                if ($this->form_validation->run() == FALSE) {
                        $this->input();
                } else {
                        $data = array(
                                'no_rm' => $this->input->post('no_rm', TRUE),
                                'nm_pasien' => $this->input->post('nm_pasien', TRUE),
                                'status' => '1'
                        );
                        $this->Registrasi_model->input_data($data);
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
                $this->form_validation->set_rules('nm_pasien', 'Nama Pasien', 'required', [
                        'required' => 'Data Nama Pasien wajib diisi!'
                ]);
        }

        public function update($id)
        {
                $id = array('id_pasien' => $id);
                $data['pasien'] = $this->Registrasi_model->edit_data($id)->result();

                // $data['jk'] = $this->Registrasi_model->tampil_jk();
                // $data['gol_drh'] = $this->Registrasi_model->tampil_gol_drh();
                // $data['agama'] = $this->Registrasi_model->tampil_agama();
                // $data['stts_nikah'] = $this->Registrasi_model->tampil_stts_nikah();

                $this->load->view('template_administrator/header');
                $this->load->view('template_administrator/sidebar');
                $this->load->view('template_administrator/footer');
                $this->load->view('pasien/pasien_update', $data);
        }

        public function update_aksi()
        {
                $id = $this->input->post('id');


                $data = array(
                        'nm_pasien'      => $this->input->post('nm_pasien', true),
                        'status' => $this->input->post('status', TRUE),
                );

                $this->Registrasi_model->update_data($id, $data);
                $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"> Data Pasien berhasil diupdate!
                    </div>');
                redirect('registrasi');
        }
        public function delete($id)
        {
                // $where = array('kd_Pasien' => $id);
                $this->Registrasi_model->hapus_data($id);
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> Data Pasien berhasil dihapus!
                </div>');
                redirect('Pasien');
        }
        public function pasienList()
        {
                $postData = $this->input->post();
                $data = $this->Registrasi_model->getPasien($postData);
                echo json_encode($data);
        }

        public function input_pulang($id)
        {
                $data['pasien'] = $this->Registrasi_model->tampil_pasien($id)->result();

                $data['jaminan'] = $this->Jaminan_model->tampil_jaminan();
                $data['ruang_perawatan'] = $this->Ruang_perawatan_model->tampil_perawatan();
                $data['dokter'] = $this->Dokter_model->tampil_dokter();
                $data['penyakit'] = $this->Penyakit_model->tampil_penyakit();
                $data['statusPulang'] = $this->Status_pulang_model->tampil_statusPulang();

                $this->load->view('template_administrator/header');
                $this->load->view('template_administrator/sidebar');
                $this->load->view('template_administrator/footer');
                $this->load->view('registrasi/pulang', $data);
        }

        public function pulang_aksi()
        {
                $id = $this->input->post('id');

                $data = array(
                        'tgl_periksa'      => $this->input->post('tgl_periksa', true),
                        'id_ruang_perawatan' => $this->input->post('id_ruang_perawatan', TRUE),
                        'id_dokter' => $this->input->post('id_dokter', TRUE),
                        'id_penyakit' => $this->input->post('id_penyakit', TRUE),
                        'tgl_pulang' => $this->input->post('tgl_pulang', TRUE),
                        'id_status_pulang' => $this->input->post('status_pulang', TRUE),
                        'id_jaminan' => $this->input->post('id_jaminan', TRUE),
                );

                $this->Registrasi_model->pulang_data($id, $data);
                $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"> Data Pasien berhasil dipulangkan!
                    </div>');
                redirect('registrasi');
        }
}
