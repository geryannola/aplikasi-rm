<div class="container-fluid">
    <h1 class="h3 mb-0 text-gray-800">Data Rawat Pulang</h1>
    <br />
    <?php echo $this->session->flashdata('pesan') ?>
    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th> NO</th>
                <th> TANGGAL MASUK</th>
                <th> NOMOR RM</th>
                <th> NAMA PASIEN</th>
                <th> JAMINAN</th>
                <th> RUANGAN</th>
                <th> DOKTER</th>
                <th> STATUS PULANG</th>
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
                    <td><?php echo $ps->no_rm ?></td>
                    <td><?php echo $ps->nm_pasien ?></td>
                    <td><?php echo $ps->jenis_jaminan ?></td>
                    <td><?php echo $ps->ruang_perawatan ?></td>
                    <td><?php echo $ps->nm_dokter ?></td>
                    <td><?php echo $ps->status_pulang ?></td>
                    <td>
                        <?php
                        if ($ps->berkas_pulang == 0) {
                        ?>
                            <?php echo anchor('pulang/brm_kembali/' . $ps->id_reg, '<div class="btn btn-sm btn-success">BRM Kembali</div>') ?>
                        <?php
                        } else {
                        ?>
                            <?php echo anchor('analisis/kualitatif/' . $ps->id_reg, '<div class="btn btn-sm btn-primary">Analisis</div>') ?>
                        <?php
                        }
                        ?>
                        <?php echo anchor('pulang/batal/' . $ps->id_reg, '<div class="btn btn-sm btn-danger">Batal</div>') ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>