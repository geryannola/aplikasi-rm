<div class="container-fluid">
    <h1 class="h3 mb-0 text-gray-800"> Input Data Status Pulang Pasien</h1>
    <br />
    <form method="post" action="<?php echo base_url('status_pulang/input_aksi') ?>">
        <div class="form-group">
            <label>Status Pulang</label>
            <input type="text" name="status_pulang" placeholder="Masukkan Status Pulang" class="form-control">
            <?php echo form_error('status_pulang', '<div class="text-danger small" ml-3>') ?>
        </div>
        <button type="submit" class="btn btn-success btn-sm">Simpan Data</i></button>
        <?php echo anchor('status_pulang', '<div class="btn btn-sm btn-danger">Batal</div>') ?>
    </form>
</div>