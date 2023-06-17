<div class="container-fluid">
    <h1 class="h3 mb-0 text-gray-800"> Data Indikator Rekam Medis</h1>
    <br />
    <?php echo $this->session->flashdata('pesan') ?>
    <?php echo anchor('indikator/input', '<button class="btn btn-sm btn-primary mb-3"><i class="fa fa-plus fa-sm"> Tambah Indikator</i></button>') ?>
    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th> NO</th>
                <th> Nama lembar</th>
                <th> Nama Indikator</th>
                <th> AKSI</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $no = 1;
            foreach ($indikator as $ind) : ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $ind->nama_lembar ?></td>
                    <td><?php echo $ind->nm_indikator ?></td>
                    <td>
                        <?php echo anchor('indikator/update/' . $ind->id_indikator, '<div class="btn btn-sm btn-primary mx-3"><i class= "fa fa-edit"></i></div>') ?><?php echo anchor('indikator/delete/' . $ind->id_indikator, '<div class="btn btn-sm btn-danger"><i class= "fa fa-trash"></i></div>') ?>
                    </td>

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>