<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ruang_perawatan extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Ruang_perawatan_model');
        // $this->load->model('Ruang_perawatan_model');
        // $this->load->model('Kelas_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['ruang_perawatan'] = $this->Ruang_perawatan_model->tampil_data()->result();

        $this->load->view('template_administrator/header');
        $this->load->view('template_administrator/sidebar');
        $this->load->view('template_administrator/footer');
        $this->load->view('ruang_perawatan/ruang_perawatan', $data);
    }
    public function input()
    {
        $data = array(
            'ruang_perawatan' => set_value('ruang_perawatan'),
        );

        $this->load->view('template_administrator/header');
        $this->load->view('template_administrator/sidebar');
        $this->load->view('template_administrator/footer');
        $this->load->view('ruang_perawatan/ruang_perawatan_form', $data);
    }

    public function input_aksi()
    {

        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->input();
        } else {
            $data = array(
                'ruang_perawatan' => $this->input->post('ruang_perawatan', TRUE),
            );
            $this->Ruang_perawatan_model->input_data($data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"> Data Ruang Perawatan berhasil ditambahkan!
            </div>');
            redirect('ruang_perawatan');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('ruang_perawatan', 'ruang_perawatan', 'required', [
            'required' => 'data ruang perawatan wajib diisi!'
        ]);
    }

    public function update($id)
    {
        $where = array('id_ruangan' => $id);
        $data['ruang_perawatan'] = $this->Ruang_perawatan_model->edit_data($where, 'ruang_perawatan')->result();

        $this->load->view('template_administrator/header');
        $this->load->view('template_administrator/sidebar');
        $this->load->view('template_administrator/footer');
        $this->load->view('ruang_perawatan/ruang_perawatan_update', $data);
    }

    public function update_aksi()
    {
        $id = $this->input->post('id_ruangan');
        $data = array(
            'ruang_perawatan' => $this->input->post('ruang_perawatan', TRUE),
        );

        $this->Ruang_perawatan_model->update_data($id, $data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"> Data Ruang Perawatan berhasil diupdate!
            </div>');
        redirect('ruang_perawatan');
    }
    public function delete($id)
    {
        $this->Ruang_perawatan_model->hapus_data($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> Data ruang perawatan berhasil dihapus!
        </div>');

        redirect('ruang_perawatan');
    }
}
