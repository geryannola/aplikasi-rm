<div class="container-fluid">
    <h1 class="h3 mb-0 text-gray-800"> Input Data Ruang Perawatan</h1>
    <br />
    <form method="post" action="<?php echo base_url('lembar/input_aksi') ?>">
        <div class="form-group">
            <label>Ruangan Perawatan</label>
            <select class="form-control" name="id_ruangan" id="id_ruangan">
                <option value=''>-- Pilih --</option>
                <?php foreach ($ruang_perawatan as $rows) { ?>
                    <option value="<?php echo $rows['id_ruangan'] ?>"><?php echo $rows['ruang_perawatan'] ?></option>
                <?php } ?>
            </select>
            <?php echo form_error('id_ruangan', '<div class="text-danger small" ml-3>') ?>
        </div>
        <div class="form-group">
            <label>Kode Lembar 1</label>
            <input type="text" name="kode_lembar1" placeholder="Masukkan Kode Lembar 1" class="form-control">
            <?php echo form_error('kode_lembar1', '<div class="text-danger small" ml-3>') ?>
        </div>
        <div class="form-group">
            <label>Kode Lembar 2</label>
            <input type="text" name="kode_lembar2" placeholder="Masukkan Kode Lembar 2" class="form-control">
            <?php echo form_error('kode_lembar2', '<div class="text-danger small" ml-3>') ?>
        </div>
        <div class="form-group">
            <label>Nama Lembar</label>
            <input type="text" name="nama_lembar" placeholder="Masukkan Nama Lembar" class="form-control">
            <?php echo form_error('nama_lembar', '<div class="text-danger small" ml-3>') ?>
        </div>
        <button type="submit" class="btn btn-success btn-sm">Simpan</i></button>
        <?php echo anchor('lembar', '<div class="btn btn-sm btn-danger">Batal</div>') ?>
    </form>
</div>