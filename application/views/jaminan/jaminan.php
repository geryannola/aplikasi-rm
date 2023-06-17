<div class="container-fluid">
    <h1 class="h3 mb-0 text-gray-800">Data Jaminan</h1>
    <br />
    <?php echo $this->session->flashdata('pesan') ?>
    <?php echo anchor('jaminan/input', '<button class="btn btn-sm btn-primary mb-3"><i class="fa fa-plus fa-sm"> Tambah Jaminan</i></button>') ?>
    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>NO</th>
                <th>JENIS JAMINAN</th>
                <th>AKSI</th>

            </tr>
        </thead>

        <tbody>
            <?php
            $no = 1;
            foreach ($jaminan as $jmn) : ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $jmn->jenis_jaminan ?></td>
                    <td><?php echo anchor('jaminan/update/' . $jmn->id_jaminan, '<div class="btn btn-sm btn-primary mx-3"><i class= "fa fa-edit"></i></div>') ?><?php echo anchor('jaminan/delete/' . $jmn->id_jaminan, '<div class="btn btn-sm btn-danger"><i class= "fa fa-trash"></i></div>') ?></td>

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>