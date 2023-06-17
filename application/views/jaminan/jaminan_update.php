<div class="container-fluid">
    <h1 class="h3 mb-0 text-gray-800"> Update Data Jaminan</h1>
    <br />
    <?php foreach ($jaminan as $jmn) : ?>
        <form method="post" action="<?php echo base_url('jaminan/update_aksi') ?>">
            <input type="hidden" name="id_jaminan" value="<?php echo $jmn->id_jaminan ?>">
            <div class="form-group">
                <label>Jenis Jaminan</label>
                <input type="text" name="jenis_jaminan" placeholder="Masukkan Jenis Jaminan" class="form-control" value="<?php echo $jmn->jenis_jaminan ?>">
                <?php echo form_error('jenis_jaminan', '<div class="text-danger small" ml-3>') ?>
            </div>
            <button type="submit" class="btn btn-success btn-sm">Simpan</i></button>
            <?php echo anchor('jaminan', '<div class="btn btn-sm btn-danger">Batal</div>') ?>
        </form>
    <?php endforeach; ?>
</div>