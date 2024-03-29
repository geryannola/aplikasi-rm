<?php

class Analisis_model extends CI_Model
{

    public $table = 'reg';
    public $id = 'id_reg';
    public $order = 'DESC';

    public function tampil_data()
    {
        $this->db->join('jaminan', 'jaminan.id_jaminan = reg.id_jaminan');
        $this->db->join('penyakit', 'penyakit.kd_penyakit = reg.id_penyakit');
        $this->db->join('dokter', 'dokter.kd_dokter = reg.id_dokter');
        $this->db->join('ruang_perawatan', 'ruang_perawatan.id_ruangan = reg.id_ruang_perawatan');
        $this->db->join('pasien', 'pasien.id_pasien = reg.id_pasien');
        $this->db->join('status_pulang', 'status_pulang.id_status = reg.id_status_pulang');
        $this->db->where('berkas_pulang !=', 0);
        $this->db->where('analisis_selesai', 0);
        return $this->db->get($this->table);
    }

    public function input_data($data)
    {
        $this->db->insert($this->table, $data);
    }

    public function edit_data($id)
    {
        return $this->db->get_where($this->id, $id);
    }

    public function update_data($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }
    public function hapus_data($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

    public function tampil_pasien($id)
    {
        $this->db->join('pasien', 'pasien.id_pasien = reg.id_pasien');
        $this->db->join('ruang_perawatan', 'ruang_perawatan.id_ruangan = reg.id_ruang_perawatan');
        $this->db->join('dokter', 'dokter.kd_dokter = reg.id_dokter');
        $this->db->join('penyakit', 'penyakit.kd_penyakit = reg.id_penyakit');
        $this->db->join('status_pulang', 'status_pulang.id_status = reg.id_status_pulang');
        $this->db->join('jaminan', 'jaminan.id_jaminan = reg.id_jaminan');
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }

    public function tampil_indikator($id_ruangan)
    {
        $this->db->where('id_ruangan', $id_ruangan);
        $this->db->join('lembar', 'lembar.id_lembar = indikator.id_lembar');
        $this->db->where('lembar.id_lembar', 1);
        return $this->db->get('indikator')->result();
    }
    
    public function tampil_lembar($id_ruangan)
    {
        $this->db->where('id_ruangan', $id_ruangan);
        return $this->db->get('lembar')->result();
    }

    public function pulang_data($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    function getPasien($postData)
    {
        $response = array();
        if (isset($postData['nm_pasien'])) {
            $this->db->select('*');
            $this->db->where("nm_pasien like '%" . $postData['nm_pasien'] . "%'");
            $records = $this->db->get('pasien')->result();
            foreach ($records as $row) {
                $response[] = array(
                    "value" => $row->id_pasien,
                    "label" => $row->nm_pasien
                );
            }
            return $response;
        }
    }
}
