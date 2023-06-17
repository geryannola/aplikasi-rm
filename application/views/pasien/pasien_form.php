<div class="container-fluid">
    <h1 class="h3 mb-0 text-gray-800"> Input Data Pasien</h1>
    <br />
    <form method="post" action="<?php echo base_url('pasien/input_aksi') ?>">
        <div class="form-group">
            <label> Nomor RM</label>
            <input type="text" name="no_rm" placeholder="Masukkan Nomor RM" class="form-control">
            <?php echo form_error('no_rm', '<div class="text-danger small" ml-3>') ?>
        </div>
        <div class="form-group">
            <label>Nama Pasien</label>
            <input type="text" name="nm_pasien" placeholder="Masukkan Nama Pasien" class="form-control">
            <?php echo form_error('nm_pasien', '<div class="text-danger small" ml-3>') ?>
        </div>
        <button type="submit" class="btn btn-success btn-sm">Simpan</i></button>
        <?php echo anchor('pasien', '<div class="btn btn-sm btn-danger">Batal</div>') ?>
    </form>
</div>