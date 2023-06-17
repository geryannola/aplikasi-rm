<div class="container-fluid">
    <h1 class="h3 mb-0 text-gray-800">Data Ruang Perawatan</h1>
    <br />
    <?php echo $this->session->flashdata('pesan') ?>
    <?php echo anchor('ruang_perawatan/input', '<button class="btn btn-sm btn-primary mb-3"><i class="fa fa-plus fa-sm"> Tambah Ruang Perawatan</i></button>') ?>
    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>NO</th>
                <th>RUANG PERAWATAN</th>
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($ruang_perawatan as $rpn) : ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $rpn->ruang_perawatan ?></td>
                    <td><?php echo anchor('ruang_perawatan/update/' . $rpn->id_ruangan, '<div class="btn btn-sm btn-primary mx-3"><i class= "fa fa-edit"></i></div>') ?><?php echo anchor('ruang_perawatan/delete/' . $rpn->id_ruangan, '<div class="btn btn-sm btn-danger"><i class= "fa fa-trash"></i></div>') ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>