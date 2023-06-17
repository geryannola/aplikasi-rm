<div class="container-fluid">
    <h1 class="h3 mb-0 text-gray-800"> Input Data Jaminan</h1>
    <br />
    <form method="post" action="<?php echo base_url('jaminan/input_aksi') ?>">
        <div class="form-group">
            <label>Jenis Jaminan</label>
            <input type="text" name="jenis_jaminan" placeholder="Masukkan Jenis Jaminan" class="form-control">
            <?php echo form_error('jenis_jaminan', '<div class="text-danger small" ml-3>') ?>
        </div>
        <button type="submit" class="btn btn-success btn-sm">Simpan</i></button>
        <?php echo anchor('jaminan', '<div class="btn btn-sm btn-danger">Batal</div>') ?>
    </form>
</div>