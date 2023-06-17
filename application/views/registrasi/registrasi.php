<div class="container-fluid">
    <h1 class="h3 mb-0 text-gray-800">Data Rawat Inap</h1>
    <br />
    <?php echo $this->session->flashdata('pesan') ?>
    <?php echo anchor('registrasi/input', '<button class="btn btn-sm btn-primary mb-3"><i class="fa fa-plus fa-sm"> Tambah Pasien Rawat Inap Pulang</i></button>') ?>
    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th> NO</th>
                <th> TANGGAL MASUK</th>
                <th> TANGGAL PULANG</th>
                <th> NOMOR RM</th>
                <th> NAMA PASIEN</th>
                <th> JAMINAN</th>
                <th> RUANGAN</th>
                <th> DOKTER</th>
                <th> KODE PENYAKIT</th>
                <th> AKSI</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $no = 1;
            foreach ($pasien as $ps) :
                if ($ps->status == '1') {
                    $status = 'Aktif';
                } else {
                    $status = 'Tidak Aktif';
                }
            ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $ps->tgl_periksa ?></td>
                    <td><?php echo $ps->tgl_pulang ?></td>
                    <td><?php echo $ps->no_rm ?></td>
                    <td><?php echo $ps->nm_pasien ?></td>
                    <td><?php echo $ps->jenis_jaminan ?></td>
                    <td><?php echo $ps->ruang_perawatan ?></td>
                    <td><?php echo $ps->nm_dokter ?></td>
                    <td><?php echo $ps->nm_penyakit ?></td>
                    <td>
                        <?php echo anchor('registrasi/update/' . $ps->id_pasien, '<div class="btn btn-sm btn-primary mx-3"><i class= "fa fa-edit"></i></div>') ?>
                        <?php echo anchor('registrasi/delete/' . $ps->id_pasien, '<div class="btn btn-sm btn-danger"><i class= "fa fa-trash"></i></div>') ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>