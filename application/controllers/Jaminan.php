<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jaminan extends CI_Controller
{


    function __construct()
    {
        parent::__construct();
        $this->load->model('Jaminan_model');
        // $this->load->model('Ruang_perawatan_model');
        // $this->load->model('Kelas_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['jaminan'] = $this->Jaminan_model->tampil_data()->result();

        $this->load->view('template_administrator/header');
        $this->load->view('template_administrator/sidebar');
        $this->load->view('template_administrator/footer');
        $this->load->view('jaminan/jaminan', $data);
    }
    public function input()
    {
        $data = array(
            'jenis_jaminan' => set_value('jenis_jaminan'),
        );

        $this->load->view('template_administrator/header');
        $this->load->view('template_administrator/sidebar');
        $this->load->view('template_administrator/footer');
        $this->load->view('jaminan/jaminan_form', $data);
    }

    public function input_aksi()
    {

        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->input();
        } else {
            $data = array(
                'jenis_jaminan' => $this->input->post('jenis_jaminan', TRUE),
            );
            $this->Jaminan_model->input_data($data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"> Data jaminan berhasil ditambahkan!
            </div>');
            redirect('jaminan');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('jenis_jaminan', 'jenis_jaminan', 'required', [
            required => 'Jenis jaminan wajib diisi!'
        ]);
    }

    public function update($id)
    {
        $where = array('id_jaminan' => $id);
        $data['jaminan'] = $this->Jaminan_model->edit_data($where, 'jaminan')->result();

        $this->load->view('template_administrator/header');
        $this->load->view('template_administrator/sidebar');
        $this->load->view('template_administrator/footer');
        $this->load->view('jaminan/jaminan_update', $data);
    }

    public function update_aksi()
    {
        $id = $this->input->post('id_jaminan');

        $data = array(
            'jenis_jaminan' => $this->input->post('jenis_jaminan', TRUE),
        );

        $this->Jaminan_model->update_data($id, $data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert"> Data jaminan berhasil diupdate!
            </div>');
        redirect('jaminan');
    }
    public function delete($id)
    {
        $id = array('id_jaminan' => $id);
        $this->Jaminan_model->hapus_data($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert"> Data jaminan berhasil dihapus!
        </div>');
        redirect('jaminan');
    }
}
