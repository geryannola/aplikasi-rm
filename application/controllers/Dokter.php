<?php

defined('BASEPATH') or exit('No direct script access allowed');


class Dokter extends CI_Controller
{

        function __construct()
        {
                parent::__construct();
                $this->load->model('Dokter_model');
                $this->load->library('form_validation');
        }

        public function index()
        {

                $data['dokter'] = $this->Dokter_model->tampil_data()->result();

                $this->load->view('template_administrator/header');
                $this->load->view('template_administrator/sidebar');
                $this->load->view('template_administrator/footer');
                $this->load->view('dokter/dokter', $data);
        }

        public function input()
        {
                $data = array(
                        'kd_dokter' => set_value('kd_dokter'),
                        'nm_dokter' => set_value('nm_dokter'),
                        'jk' => set_value('jk'),
                        'tmp_lahir' => set_value('tmp_lahir'),
                        'tgl_lahir' => set_value('tgl_lahir'),
                        'gol_drh' => set_value('gol_drh'),
                        'agama' => set_value('agama'),
                        'almt_tgl' => set_value('almt_tgl'),
                        'no_telp' => set_value('no_telp'),
                        'stts_nikah' => set_value('stts_nikah'),
                        'kd_sps' => set_value('kd_sps'),
                        'alumni' => set_value('alumni'),
                        'no_ijn_praktek' => set_value('no_ijn_praktek'),
                        'status' => set_value('status')

                );

                $data['jk'] = $this->Dokter_model->tampil_jk();
                $data['gol_drh'] = $this->Dokter_model->tampil_gol_drh();
                $data['agama'] = $this->Dokter_model->tampil_agama();
                $data['stts_nikah'] = $this->Dokter_model->tampil_stts_nikah();

                $this->load->view('template_administrator/header');
                $this->load->view('template_administrator/sidebar');
                $this->load->view('template_administrator/footer');
                $this->load->view('dokter/dokter_form', $data);
        }

        public function input_aksi()
        {
                $this->_rules();
                if ($this->form_validation->run() == FALSE) {
                        $this->input();
                } else {
                        $data = array(
                                'kd_dokter' => $this->input->post('kd_dokter', TRUE),
                                'nm_dokter' => $this->input->post('nm_dokter', TRUE),
                                'jk' => $this->input->post('jk', TRUE),
                                'tmp_lahir' => $this->input->post('tmp_lahir', TRUE),
                                'tgl_lahir' => $this->input->post('tgl_lahir', TRUE),
                                'gol_drh' => $this->input->post('gol_drh', TRUE),
                                'agama' => $this->input->post('agama', TRUE),
                                'almt_tgl' => $this->input->post('almt_tgl', TRUE),
                                'no_telp' => $this->input->post('no_telp', TRUE),
                                'stts_nikah' => $this->input->post('stts_nikah', TRUE),
                                'alumni' => $this->input->post('alumni', TRUE),
                                'no_ijn_praktek' => $this->input->post('no_ijn_praktek', TRUE),
                                'status' => '1'
                        );
                        $this->Dokter_model->input_data($data);
                        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"> Data Dokter berhasil ditambahkan!
                    </div>');
                        redirect('dokter');
                }
        }

        public function _rules()
        {
                $this->form_validation->set_rules('kd_dokter', 'Kode Dokter', 'required', [
                        'required' => 'Data Kode Dokter wajib diisi!'
                ]);
                $this->form_validation->set_rules('nm_dokter', 'Nama Dokter', 'required', [
                        'required' => 'Data Nama Dokter wajib diisi!'
                ]);
                $this->form_validation->set_rules('jk', 'jk', 'required', [
                        'required' => 'Data Jenis Kelamin wajib diisi!'
                ]);
                $this->form_validation->set_rules('tmp_lahir', 'tmp_lahir', 'required', [
                        'required' => 'Data Tempat Lahir wajib diisi!'
                ]);
                $this->form_validation->set_rules('tgl_lahir', 'tgl_lahir', 'required', [
                        'required' => 'Data Tanggal Lahir wajib diisi!'
                ]);
                $this->form_validation->set_rules('gol_drh', 'gol_drh', 'required', [
                        'required' => 'Data Golongan Darah wajib diisi!'
                ]);
                $this->form_validation->set_rules('agama', 'agama', 'required', [
                        'required' => 'Data Agama wajib diisi!'
                ]);
                $this->form_validation->set_rules('almt_tgl', 'almt_tgl', 'required', [
                        'required' => 'Data Alamat wajib diisi!'
                ]);
                $this->form_validation->set_rules('no_telp', 'no_telp', 'required', [
                        'required' => 'Data Nomor Telepon wajib diisi!'
                ]);
                $this->form_validation->set_rules('stts_nikah', 'stts_nikah', 'required', [
                        'required' => 'Data Status Menikah Lahir wajib diisi!'
                ]);
                $this->form_validation->set_rules('alumni', 'alumni', 'required', [
                        'required' => 'Data Alumni wajib diisi!'
                ]);
                $this->form_validation->set_rules('no_ijn_praktek', 'no_ijn_praktek', 'required', [
                        'required' => 'Data Nomor Surat Ijin Praktek wajib diisi!'
                ]);
        }

        public function update($id)
        {
                $id = array('kd_dokter' => $id);
                $data['dokter'] = $this->Dokter_model->edit_data($id)->result();

                $data['jk'] = $this->Dokter_model->tampil_jk();
                $data['gol_drh'] = $this->Dokter_model->tampil_gol_drh();
                $data['agama'] = $this->Dokter_model->tampil_agama();
                $data['stts_nikah'] = $this->Dokter_model->tampil_stts_nikah();

                $this->load->view('template_administrator/header');
                $this->load->view('template_administrator/sidebar');
                $this->load->view('template_administrator/footer');
                $this->load->view('dokter/dokter_update', $data);
        }

        public function update_aksi()
        {
                $id = $this->input->post('id');


                $data = array(
                        'nm_dokter' => $this->input->post('nm_dokter', TRUE),
                        'jk'      => $this->input->post('jk', true),
                        'tmp_lahir' => $this->input->post('tmp_lahir', TRUE),
                        'tgl_lahir' => $this->input->post('tgl_lahir', TRUE),
                        'gol_drh' => $this->input->post('gol_drh', TRUE),
                        'agama' => $this->input->post('agama', TRUE),
                        'almt_tgl' => $this->input->post('almt_tgl', TRUE),
                        'no_telp' => $this->input->post('no_telp', TRUE),
                        'stts_nikah' => $this->input->post('stts_nikah', TRUE),
                        'alumni' => $this->input->post('alumni', TRUE),
                        'no_ijn_praktek' => $this->input->post('no_ijn_praktek', TRUE),
                        'status' => $this->input->post('status', TRUE),
                );

                $this->Dokter_model->update_data($id, $data);
                $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"> Data Dokter berhasil diupdate!
                    </div>');
                redirect('dokter');
        }
        public function delete($id)
        {
                // $where = array('kd_dokter' => $id);
                $this->Dokter_model->hapus_data($id);
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> Data Dokter berhasil dihapus!
                </div>');
                redirect('dokter');
        }
}
