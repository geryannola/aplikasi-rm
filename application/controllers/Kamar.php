<?php

defined('BASEPATH') or exit('No direct script access allowed');


class Kamar extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Kamar_model');
        $this->load->model('Ruang_perawatan_model');
        $this->load->model('Kelas_model');
        $this->load->library('form_validation');
    }

    public function index()
    {

        $data['kamar'] = $this->Kamar_model->tampil_data()->result();

        $this->load->view('template_administrator/header');
        $this->load->view('template_administrator/sidebar');
        $this->load->view('template_administrator/footer');
        $this->load->view('kamar/kamar', $data);
    }

    public function input()
    {
        $data = array(
            'kd_kamar' => set_value('kd_kamar'),
            'kd_bangsal' => set_value('kd_bangsal'),
            'trf_kamar' => set_value('trf_kamar'),
            'status' => set_value('status'),
            'kelas' => set_value('kelas')
        );

        $data['ruang_perawatan'] = $this->Ruang_perawatan_model->tampil_perawatan();
        $data['kelas'] = $this->Kelas_model->tampil_kelas();
        $data['status_kamar'] = $this->Kamar_model->tampil_status();

        $this->load->view('template_administrator/header');
        $this->load->view('template_administrator/sidebar');
        $this->load->view('template_administrator/footer');
        $this->load->view('kamar/kamar_form', $data);
    }

    public function input_aksi()
    {
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->input();
        } else {
            $data = array(
                'kd_kamar' => $this->input->post('kd_kamar', TRUE),
                'kd_bangsal' => $this->input->post('kd_bangsal', TRUE),
                'trf_kamar' => $this->input->post('trf_kamar', TRUE),
                'status' => $this->input->post('status', TRUE),
                'kelas' => $this->input->post('kelas', TRUE),
                'statusdata' => '1'
            );
            $this->Kamar_model->input_data($data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"> Data Ruangan Perawatan berhasil ditambahkan!
                    </div>');
            redirect('kamar');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules(
            'kd_kamar',
            'kd_kamar',
            'required',
            array('required' => 'data kamar wajib diisi!')
        );
        $this->form_validation->set_rules('kd_bangsal', 'kd_bangsal', 'required', [
            'required' => 'data bangsal wajib diisi!'
        ]);
        $this->form_validation->set_rules('trf_kamar', 'trf_kamar', 'required', [
            'required' => 'data tarif kamar wajib diisi!'
        ]);
        $this->form_validation->set_rules('status', 'status', 'required', [
            'required' => 'data status wajib diisi!'
        ]);
        $this->form_validation->set_rules('kelas', 'kelas', 'required', [
            'required' => 'data kamar wajib diisi!'
        ]);
    }

    public function update($id)
    {
        $where = array('kd_kamar' => $id);
        $data['kamar'] = $this->Kamar_model->edit_data($where, 'kamar')->result();

        $data['ruang_perawatan'] = $this->Ruang_perawatan_model->tampil_perawatan();
        $data['kelas'] = $this->Kelas_model->tampil_kelas();
        $data['status_kamar'] = $this->Kamar_model->tampil_status();

        $this->load->view('template_administrator/header');
        $this->load->view('template_administrator/sidebar');
        $this->load->view('template_administrator/footer');
        $this->load->view('kamar/kamar_update', $data);
    }

    public function update_aksi()
    {
        $id = $this->input->post('id');
        $kd_bangsal = $this->input->post('kd_bangsal');
        $trf_kamar = $this->input->post('trf_kamar');
        $status = $this->input->post('status');
        $kelas = $this->input->post('kelas');
        $statusdata = $this->input->post('statusdata');

        $data = array(
            'kd_bangsal' => $this->input->post('kd_bangsal', TRUE),
            'trf_kamar'      => $this->input->post('trf_kamar', true),
            'status' => $this->input->post('status', TRUE),
            'kelas' => $this->input->post('kelas', TRUE),
            'statusdata' => $this->input->post('statusdata', TRUE),
        );

        $this->Kamar_model->update_data($id, $data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"> Data Ruang Perawatan berhasil diupdate!
                    </div>');
        redirect('kamar');
    }
    public function delete($id)
    {
        // $where = array('kd_kamar' => $id);
        $this->Kamar_model->hapus_data($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> Data Ruang Perawatan berhasil dihapus!
                </div>');
        redirect('kamar');
    }
}
