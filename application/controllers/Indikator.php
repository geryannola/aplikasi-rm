<?php

defined('BASEPATH') or exit('No direct script access allowed');


class Indikator extends CI_Controller
{

        function __construct()
        {
                parent::__construct();
                $this->load->model('Indikator_model');
                $this->load->model('Lembar_model');
                $this->load->model('Ruang_perawatan_model');
                $this->load->library('form_validation');
        }
        public function index()
        {
                $data['indikator'] = $this->Indikator_model->tampil_data()->result();

                $this->load->view('template_administrator/header');
                $this->load->view('template_administrator/sidebar');
                $this->load->view('template_administrator/footer');
                $this->load->view('indikator/indikator', $data);
        }
        public function input()
        {
                $data = array(
                        'id_lembar' => set_value('id_lembar'),
                        'nm_indikator' => set_value('nm_indikator')
                );

                $data['lembar'] = $this->Lembar_model->tampil_lembar_ruangan();

                $this->load->view('template_administrator/header');
                $this->load->view('template_administrator/sidebar');
                $this->load->view('template_administrator/footer');
                $this->load->view('indikator/indikator_form', $data);
        }

        public function input_aksi()
        {
                $this->_rules();
                if ($this->form_validation->run() == FALSE) {
                        $this->input();
                } else {
                        $data = array(
                                'id_lembar' => $this->input->post('id_lembar', TRUE),
                                'nm_indikator' => $this->input->post('nm_indikator', TRUE),
                                'status' => '1'
                        );
                        $this->Indikator_model->input_data($data);
                        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"> Data Indikator berhasil ditambahkan!
                    </div>');
                        redirect('indikator');
                }
        }

        public function _rules()
        {
                $this->form_validation->set_rules('id_lembar', 'id_lembar', 'required', [
                        'required' => 'data bangsal wajib diisi!'
                ]);
                $this->form_validation->set_rules('nm_indikator', 'nm_indikator', 'required', [
                        'required' => 'data tarif lembar wajib diisi!'
                ]);
        }

        public function update($id)
        {
                $id = array('id_indikator' => $id);
                $data['indikator'] = $this->Indikator_model->edit_data($id)->result();

                $data['lembar'] = $this->Lembar_model->tampil_lembar_ruangan();

                $this->load->view('template_administrator/header');
                $this->load->view('template_administrator/sidebar');
                $this->load->view('template_administrator/footer');
                $this->load->view('indikator/indikator_update', $data);
        }

        public function update_aksi()
        {
                $id = $this->input->post('id');

                $data = array(
                        'id_lembar' => $this->input->post('id_lembar', TRUE),
                        'nm_indikator'      => $this->input->post('nm_indikator', true),
                        'status' => $this->input->post('status', TRUE),
                );

                $this->Indikator_model->update_data($id, $data);
                $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"> Data Indikator berhasil diupdate!
                    </div>');
                redirect('indikator');
        }
        public function delete($id)
        {
                // $where = array('kd_lembar' => $id);
                $this->Indikator_model->hapus_data($id);
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> Data Indikator berhasil dihapus!
                </div>');
                redirect('lembar');
        }
}
