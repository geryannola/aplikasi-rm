<?php

defined('BASEPATH') or exit('No direct script access allowed');


class Pasien extends CI_Controller
{

        function __construct()
        {
                parent::__construct();
                $this->load->model('Pasien_model');
                $this->load->model('Ruang_perawatan_model');
                $this->load->model('Dokter_model');
                $this->load->model('Penyakit_model');
                $this->load->model('Jaminan_model');
                $this->load->model('Registrasi_model');
                $this->load->library('form_validation');
        }

        public function index()
        {
                $data['pasien'] = $this->Pasien_model->tampil_data()->result();

                $this->load->view('template_administrator/header');
                $this->load->view('template_administrator/sidebar');
                $this->load->view('template_administrator/footer');
                $this->load->view('pasien/pasien', $data);
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
                $this->load->view('pasien/pasien_form', $data);
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
                        $this->Pasien_model->input_data($data);
                        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"> Data Pasien berhasil ditambahkan!
                    </div>');
                        redirect('Pasien');
                }
        }

        public function update($id)
        {
                $id = array('id_pasien' => $id);
                $data['pasien'] = $this->Pasien_model->edit_data($id)->result();

                $this->load->view('template_administrator/header');
                $this->load->view('template_administrator/sidebar');
                $this->load->view('template_administrator/footer');
                $this->load->view('pasien/pasien_update', $data);
        }

        public function update_aksi()
        {
                $id = $this->input->post('id');
                $data = array(
                        'nm_pasien' => $this->input->post('nm_pasien', true),
                        'status' => $this->input->post('status', TRUE),
                );

                $this->Pasien_model->update_data($id, $data);
                $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"> Data Pasien berhasil diupdate!
                    </div>');
                redirect('Pasien');
        }
        public function delete($id)
        {
                $this->Pasien_model->hapus_data($id);
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> Data Pasien berhasil dihapus!
                </div>');
                redirect('Pasien');
        }

        public function registrasi($id)
        {
                $id = array('id_pasien' => $id);
                $data['pasien'] = $this->Pasien_model->edit_data($id)->result();
                $data['ruang_perawatan'] = $this->Ruang_perawatan_model->tampil_perawatan();
                $data['dokter'] = $this->Dokter_model->tampil_dokter();
                $data['penyakit'] = $this->Penyakit_model->tampil_penyakit();
                $data['jaminan'] = $this->Jaminan_model->tampil_jaminan();

                $this->load->view('template_administrator/header');
                $this->load->view('template_administrator/sidebar');
                $this->load->view('template_administrator/footer');
                $this->load->view('pasien/pasien_registrasi', $data);
        }
        public function registrasi_aksi()
        {
                $id = $this->input->post('id', true);

                $this->_rules_registrasi();
                if ($this->form_validation->run() == FALSE) {
                        $this->registrasi($id);
                } else {
                        $data = array(
                                'id_pasien' => $this->input->post('id', TRUE),
                                'tgl_periksa' => $this->input->post('tgl_periksa', TRUE),
                                'id_ruang_perawatan' => $this->input->post('id_ruang_perawatan', TRUE),
                                'id_dokter' => $this->input->post('id_dokter', TRUE),
                                'id_penyakit' => $this->input->post('id_penyakit', TRUE),
                                'tgl_pulang' => $this->input->post('tgl_pulang', TRUE),
                                'id_status_pulang' => 0,
                                'id_jaminan' => $this->input->post('id_jaminan', TRUE),
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
        public function _rules_registrasi()
        {
                $this->form_validation->set_rules('tgl_periksa', 'Tanggal Periksa', 'required', [
                        'required' => 'Tanggal Periksa wajib diisi!'
                ]);
                $this->form_validation->set_rules('id_jaminan', 'Jaminan', 'required', [
                        'required' => 'Data Jaminan wajib diisi!'
                ]);
                $this->form_validation->set_rules('id_ruang_perawatan', 'Ruangan Perawatan', 'required', [
                        'required' => 'Data Ruangan Perawatan wajib diisi!'
                ]);
                $this->form_validation->set_rules('id_penyakit', 'Nama Penyakit', 'required', [
                        'required' => 'Data Penyakit wajib diisi!'
                ]);
                $this->form_validation->set_rules('tgl_pulang', 'Tanggal Pulang', 'required', [
                        'required' => 'Data Tanggal Pulang wajib diisi!'
                ]);
        }
}
