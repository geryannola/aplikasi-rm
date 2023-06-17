<div class="container-fluid">
    <h1 class="h3 mb-0 text-gray-800"> Update Data Ruang Perawatan</h1>
    <br />
    <?php foreach ($ruang_perawatan as $rpn) : ?>
        <form method="post" action="<?php echo base_url('ruang_perawatan/update_aksi') ?>">
            <div class="form-group">
                <label>Ruang Perawatan</label>
                <input type="hidden" name="id_ruangan" value="<?php echo $rpn->id_ruangan ?>">
                <input type="text" name="ruang_perawatan" placeholder="Masukkan Ruang Perawatan" class="form-control" value="<?php echo $rpn->ruang_perawatan ?>">
                <?php echo form_error('ruang_perawatan', '<div class="text-danger small" ml-3>') ?>
            </div>
            <button type="submit" class="btn btn-success btn-sm">Simpan</i></button>
            <?php echo anchor('ruang_perawatan', '<div class="btn btn-sm btn-danger">Batal</div>') ?>
        </form>
    <?php endforeach; ?>
</div>