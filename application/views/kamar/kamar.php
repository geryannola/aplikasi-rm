<div class="container-fluid">
    <h1 class="h3 mb-0 text-gray-800"> Data Kamar</h1>
    <br />
    <?php echo $this->session->flashdata('pesan') ?>
    <?php echo anchor('kamar/input', '<button class="btn btn-sm btn-primary mb-3"><i class="fa fa-plus fa-sm"> Tambah Jenis Ruangan</i></button>') ?>
    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th> NO</th>
                <th> KODE KAMAR</th>
                <th> KODE BANGSAL</th>
                <th> TARIF KAMAR</th>
                <th> STATUS</th>
                <th> KELAS</th>
                <th> AKSI</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $no = 1;
            foreach ($kamar as $kmr) : ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $kmr->kd_kamar ?></td>
                    <td><?php echo $kmr->ruang_perawatan ?></td>
                    <td><?php echo $kmr->trf_kamar ?></td>
                    <td><?php echo $kmr->status ?></td>
                    <td><?php echo $kmr->kelas ?></td>
                    <td>
                        <?php echo anchor('kamar/update/' . $kmr->kd_kamar, '<div class="btn btn-sm btn-primary mx-3"><i class= "fa fa-edit"></i></div>') ?><?php echo anchor('kamar/delete/' . $kmr->kd_kamar, '<div class="btn btn-sm btn-danger"><i class= "fa fa-trash"></i></div>') ?>
                    </td>

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>