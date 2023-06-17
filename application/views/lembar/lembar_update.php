<div class="container-fluid">
    <h1 class="h3 mb-0 text-gray-800"> Update Data Lembar</h1>
    <br />
    <?php foreach ($lembar as $lmbr) : ?>

        <form method="post" action="<?php echo base_url('lembar/update_aksi') ?>">
            <input type="hidden" name="id" value="<?php echo $lmbr->id_lembar ?>">
            <div class="form-group">
                <label>Nama Perawatan</label>
                <select class="form-control" name="id_ruangan" id="id_ruangan">
                    <option value=''>-- Pilih --</option>
                    <?php foreach ($ruang_perawatan as $rows) { ?>
                        <?php if ($lmbr->id_ruangan == $rows['id_ruangan']) { ?>
                            <option value="<?php echo $rows['id_ruangan'] ?>" selected><?php echo $rows['ruang_perawatan'] ?></option>
                        <?php } else { ?>
                            <option value="<?php echo $rows['id_ruangan'] ?>"><?php echo $rows['ruang_perawatan'] ?></option>
                        <?php } ?>
                    <?php } ?>
                </select>
                <?php echo form_error('kd_bangsal', '<div class="text-danger small" ml-3>') ?>
            </div>
            <div class="form-group">
                <label>Kode Lembar 1</label>
                <input type="text" name="kode_lembar1" placeholder="Masukkan Kode Lembar 1" class="form-control" value="<?php echo $lmbr->kode_lembar1 ?>">
                <?php echo form_error('kode_lembar1', '<div class="text-danger small" ml-3>') ?>
            </div>
            <div class="form-group">
                <label>Kode Lembar 2</label>
                <input type="text" name="kode_lembar2" placeholder="Masukkan Kode Lembar 2" class="form-control" value="<?php echo $lmbr->kode_lembar2 ?>">
                <?php echo form_error('kode_lembar2', '<div class="text-danger small" ml-3>') ?>
            </div>
            <div class="form-group">
                <label>Nama Lembar</label>
                <input type="text" name="nama_lembar" placeholder="Masukkan Nama Lembar" class="form-control" value="<?php echo $lmbr->nama_lembar ?>">
                <?php echo form_error('nama_lembar', '<div class="text-danger small" ml-3>') ?>
            </div>
            <button type="submit" class="btn btn-success btn-sm">Simpan</i></button>
            <?php echo anchor('lembar', '<div class="btn btn-sm btn-danger">Batal</div>') ?>
        </form>
    <?php endforeach; ?>
</div>