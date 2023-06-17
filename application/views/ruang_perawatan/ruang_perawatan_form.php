<div class="container-fluid">
    <h1 class="h3 mb-0 text-gray-800"> Input Data Ruang Perawatan</h1>
    <br />
    <form method="post" action="<?php echo base_url('ruang_perawatan/input_aksi') ?>">
        <div class="form-group">
            <label>Ruang Perawatan</label>
            <input type="text" name="ruang_perawatan" placeholder="Masukkan Ruang Perawatan" class="form-control">
            <?php echo form_error('ruang_perawatan', '<div class="text-danger small" ml-3>') ?>
        </div>
        <button type="submit" class="btn btn-success btn-sm">Simpan</i></button>
        <?php echo anchor('ruang_perawatan', '<div class="btn btn-sm btn-danger">Batal</div>') ?>
    </form>
</div>