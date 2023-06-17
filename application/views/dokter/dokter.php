<div class="container-fluid">
    <h1 class="h3 mb-0 text-gray-800">Data Dokter</h1>
    <br />
    <?php echo $this->session->flashdata('pesan') ?>
    <?php echo anchor('dokter/input', '<button class="btn btn-sm btn-primary mb-3"><i class="fa fa-plus fa-sm"> Tambah Dokter</i></button>') ?>
    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th> NO</th>
                <th> KODE DOKTER</th>
                <th> NAMA DOKTER</th>
                <th> TANGGAL LAHIR</th>
                <th> AGAMA</th>
                <th> STATUS</th>
                <th> AKSI</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $no = 1;
            foreach ($dokter as $dr) : ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $dr->kd_dokter ?></td>
                    <td><?php echo $dr->nm_dokter ?></td>
                    <td><?php echo $dr->tgl_lahir ?></td>
                    <td><?php echo $dr->agama ?></td>
                    <td><?php echo $dr->status ?></td>
                    <td>
                        <?php echo anchor('dokter/update/' . $dr->kd_dokter, '<div class="btn btn-sm btn-primary mx-3"><i class= "fa fa-edit"></i></div>') ?>
                        <?php echo anchor('dokter/delete/' . $dr->kd_dokter, '<div class="btn btn-sm btn-danger"><i class= "fa fa-trash"></i></div>') ?>
                    </td>

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>