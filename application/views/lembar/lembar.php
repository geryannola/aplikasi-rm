<div class="container-fluid">
    <h1 class="h3 mb-0 text-gray-800"> Data Lembar Rekam Medis</h1>
    <br />
    <?php echo $this->session->flashdata('pesan') ?>
    <?php echo anchor('lembar/input', '<button class="btn btn-sm btn-primary mb-3"><i class="fa fa-plus fa-sm"> Tambah Lembar</i></button>') ?>
    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th> NO</th>
                <th> ID RUANGAN</th>
                <th> KODE LEMBAR 1</th>
                <th> KODE LEMBAR 2</th>
                <th> NAMA LEMBAR</th>
                <th> AKSI</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $no = 1;
            foreach ($lembar as $lbr) : ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $lbr->ruang_perawatan ?></td>
                    <td><?php echo $lbr->kode_lembar1 ?></td>
                    <td><?php echo $lbr->kode_lembar2 ?></td>
                    <td><?php echo $lbr->nama_lembar ?></td>
                    <td>
                        <?php echo anchor('lembar/update/' . $lbr->id_lembar, '<div class="btn btn-sm btn-primary mx-3"><i class= "fa fa-edit"></i></div>') ?><?php echo anchor('lembar/delete/' . $lbr->id_lembar, '<div class="btn btn-sm btn-danger"><i class= "fa fa-trash"></i></div>') ?>

                    </td>

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>