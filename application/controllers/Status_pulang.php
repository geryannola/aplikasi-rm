<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Status_pulang extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Status_pulang_model');
        // $this->load->model('Ruang_perawatan_model');
        // $this->load->model('Kelas_model');
        $this->load->library('form_validation');
    }


    public function index()
    {
        $data['status_pulang'] = $this->Status_pulang_model->tampil_data()->result();

        $this->load->view('template_administrator/header');
        $this->load->view('template_administrator/sidebar');
        $this->load->view('template_administrator/footer');
        $this->load->view('status_pulang/status_pulang', $data);
    }
    public function input()
    {
        $data = array(
            'status_pulang' => set_value('status_pulang'),
        );

        $this->load->view('template_administrator/header');
        $this->load->view('template_administrator/sidebar');
        $this->load->view('template_administrator/footer');
        $this->load->view('status_pulang/status_pulang_form', $data);
    }

    public function input_aksi()
    {
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->input();
        } else {
            $data = array(
                'status_pulang' => $this->input->post('status_pulang', TRUE),
            );
            $this->Status_pulang_model->input_data($data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"> Data status pulang berhasil ditambahkan!
            </div>');
            redirect('status_pulang');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('status_pulang', 'status_pulang', 'required', [
            'required' => 'Jenis status pulang wajib diisi!'
        ]);
    }

    public function update($id)
    {
        $id = array('id_status' => $id);
        $data['status_pulang'] = $this->Status_pulang_model->edit_data($id)->result();

        $this->load->view('template_administrator/header');
        $this->load->view('template_administrator/sidebar');
        $this->load->view('template_administrator/footer');
        $this->load->view('status_pulang/status_pulang_update', $data);
    }

    public function update_aksi()
    {
        $id = $this->input->post('id_status');
        $status_pulang = $this->input->post('status_pulang');

        $data = array(
            'status_pulang' => $status_pulang
        );
        $this->Status_pulang_model->update_data($id, $data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"> Data status pulang berhasil diupdate!
            </div>');
        redirect('status_pulang');
    }
    public function delete($id)
    {
        $id = array('id_status' => $id);
        $this->Status_pulang_model->hapus_data($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> Data status pulang berhasil dihapus!
        </div>');
        redirect('status_pulang');
    }
}
