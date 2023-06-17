<div class="container-fluid">
    <h1 class="h3 mb-0 text-gray-800"> Update Data Status Pulang</h1>
    <br />
    <?php foreach ($status_pulang as $sts) : ?>
        <form method="post" action="<?php echo base_url('status_pulang/update_aksi') ?>">
            <div class="form-group">
                <label>Status Pulang</label>
                <input type="hidden" name="id_status" value="<?php echo $sts->id_status ?>">
                <input type="text" name="status_pulang" placeholder="Masukkan Status Pulang" class="form-control" value="<?php echo $sts->status_pulang ?>">
                <?php echo form_error('status_pulang', '<div class="text-danger small" ml-3>') ?>
            </div>
            <button type="submit" class="btn btn-success btn-sm">Simpan</i></button>
            <?php echo anchor('status_pulang', '<div class="btn btn-sm btn-danger">Batal</div>') ?>
        </form>
    <?php endforeach; ?>
</div>