<div class="container-fluid">
    <h1 class="h3 mb-0 text-gray-800"> Input Indikator</h1>
    <br />
    <form method="post" action="<?php echo base_url('indikator/input_aksi') ?>">
        <div class="form-group">
            <label>Nama Lembar</label>
            <select class="form-control" name="id_lembar" id="id_lembar">
                <option value=''>-- Pilih --</option>
                <?php foreach ($lembar as $rows) { ?>
                    <option value="<?php echo $rows['id_lembar'] ?>"> <?php echo $rows['ruang_perawatan'] ?> - <?php echo $rows['nama_lembar'] ?></option>
                <?php } ?>
            </select>
            <?php echo form_error('id_lembar', '<div class="text-danger small" ml-3>') ?>
        </div>
        <div class="form-group">
            <label>Nama Indikator</label>
            <input type="text" name="nm_indikator" placeholder="Masukkan Nama Indikator" class="form-control">
            <?php echo form_error('nm_indikator', '<div class="text-danger small" ml-3>') ?>
        </div>
        <button type="submit" class="btn btn-success btn-sm">Simpan</i></button>
        <?php echo anchor('indikator', '<div class="btn btn-sm btn-danger">Batal</div>') ?>
    </form>
</div>