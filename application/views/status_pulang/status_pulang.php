<div class="container-fluid">
    <h1 class="h3 mb-0 text-gray-800">Data Status Pulang</h1>
    <br />
    <?php echo $this->session->flashdata('pesan') ?>
    <?php echo anchor('status_pulang/input', '<button class="btn btn-sm btn-primary mb-3"><i class="fa fa-plus fa-sm"> Tambah Status Pulang</i></button>') ?>
    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>NO</th>
                <th>STATUS PULANG</th>
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($status_pulang as $sts) : ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $sts->status_pulang ?></td>
                    <td><?php echo anchor('status_pulang/update/' . $sts->id_status, '<div class="btn btn-sm btn-primary mx-3"><i class= "fa fa-edit"></i></div>') ?><?php echo anchor('status_pulang/delete/' . $sts->id_status, '<div class="btn btn-sm btn-danger"><i class= "fa fa-trash"></i></div>') ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>