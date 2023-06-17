<?php

defined('BASEPATH') or exit('No direct script access allowed');


class Lembar extends CI_Controller
{
        function __construct()
        {
                parent::__construct();
                $this->load->model('Lembar_model');
                $this->load->model('Ruang_perawatan_model');
                // $this->load->model('Kelas_model');
                $this->load->library('form_validation');
        }

        public function index()
        {
                $data['lembar'] = $this->Lembar_model->tampil_data()->result();

                $this->load->view('template_administrator/header');
                $this->load->view('template_administrator/sidebar');
                $this->load->view('template_administrator/footer');
                $this->load->view('lembar/lembar', $data);
        }

        public function input()
        {
                $data = array(
                        'id_ruangan' => set_value('id_ruangan'),
                        'kode_lembar1' => set_value('kode_lembar1'),
                        'kode_lembar2' => set_value('kode_lembar2'),
                        'nama_lembar' => set_value('nama_lembar'),
                        'status' => set_value('status')
                );

                $data['ruang_perawatan'] = $this->Ruang_perawatan_model->tampil_perawatan();
                // $data['kelas'] = $this->Kelas_model->tampil_kelas();
                // $data['status_lembar'] = $this->lembar_model->tampil_status();

                $this->load->view('template_administrator/header');
                $this->load->view('template_administrator/sidebar');
                $this->load->view('template_administrator/footer');
                $this->load->view('lembar/lembar_form', $data);
        }

        public function input_aksi()
        {
                $this->_rules();
                if ($this->form_validation->run() == FALSE) {
                        $this->input();
                } else {
                        $data = array(
                                'id_ruangan' => $this->input->post('id_ruangan', TRUE),
                                'kode_lembar1' => $this->input->post('kode_lembar1', TRUE),
                                'kode_lembar2' => $this->input->post('kode_lembar2', TRUE),
                                'nama_lembar' => $this->input->post('nama_lembar', TRUE),
                                'status' => '1'
                        );
                        $this->lembar_model->input_data($data);
                        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"> Data Lembar berhasil ditambahkan!
                    </div>');
                        redirect('lembar');
                }
        }

        public function _rules()
        {
                $this->form_validation->set_rules('id_ruangan', 'id_ruangan', 'required', [
                        'required' => 'Data Ruang Perawatan wajib diisi!'
                ]);
                $this->form_validation->set_rules('kode_lembar1', 'kode_lembar1', 'required', [
                        'required' => 'Data Kode Lembar 1 wajib diisi!'
                ]);
                $this->form_validation->set_rules('kode_lembar2', 'kode_lembar2', 'required', [
                        'required' => 'Data Kode Lemar 2 wajib diisi!'
                ]);
                $this->form_validation->set_rules('nama_lembar', 'nama_lembar', 'required', [
                        'required' => 'Data Nama Lembar wajib diisi!'
                ]);
        }

        public function update($id)
        {
                $id = array('id_lembar' => $id);
                $data['lembar'] = $this->Lembar_model->edit_data($id)->result();
                // $data['lembar'] = $this->Lembar_model->tampil_data()->result();

                $data['ruang_perawatan'] = $this->Ruang_perawatan_model->tampil_perawatan();

                $this->load->view('template_administrator/header');
                $this->load->view('template_administrator/sidebar');
                $this->load->view('template_administrator/footer');
                $this->load->view('lembar/lembar_update', $data);
        }

        public function update_aksi()
        {
                $id = $this->input->post('id');
                $data = array(
                        'id_ruangan' => $this->input->post('id_ruangan', TRUE),
                        'kode_lembar1'      => $this->input->post('kode_lembar1', true),
                        'kode_lembar2' => $this->input->post('kode_lembar2', TRUE),
                        'nama_lembar' => $this->input->post('nama_lembar', TRUE),
                        'status' => $this->input->post('status', TRUE),
                );

                $this->lembar_model->update_data($id, $data);
                $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"> Data Lembar berhasil diupdate!
                    </div>');
                redirect('lembar');
        }
        public function delete($id)
        {
                // $where = array('kd_lembar' => $id);
                $this->lembar_model->hapus_data($id);
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> Data Lembar berhasil dihapus!
                </div>');
                redirect('lembar');
        }
}
