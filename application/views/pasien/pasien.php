<div class="container-fluid">
    <h1 class="h3 mb-0 text-gray-800">Data Pasien</h1>
    <br />
    <?php echo $this->session->flashdata('pesan') ?>
    <?php echo anchor('pasien/input', '<button class="btn btn-sm btn-primary mb-3"><i class="fa fa-plus fa-sm"> Tambah Pasien</i></button>') ?>
    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th> NO</th>
                <th> NOMOR RM</th>
                <th> NAMA PASIEN</th>
                <th> STATUS</th>
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
                    <td><?php echo $ps->no_rm ?></td>
                    <td><?php echo $ps->nm_pasien ?></td>
                    <td><?php echo $status ?></td>
                    <td>
                        <?php echo anchor('pasien/registrasi/' . $ps->id_pasien, '<div class="btn btn-sm btn-primary"><i class="fa fa-plus-square"></i></div>') ?>
                        <?php echo anchor('pasien/update/' . $ps->id_pasien, '<div class="btn btn-sm btn-primary mx-3"><i class= "fa fa-edit"></i></div>') ?>
                        <?php echo anchor('pasien/delete/' . $ps->id_pasien, '<div class="btn btn-sm btn-danger"><i class= "fa fa-trash"></i></div>') ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>