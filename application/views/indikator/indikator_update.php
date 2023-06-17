<div class="container-fluid">
    <h1 class="h3 mb-0 text-gray-800"> Update Data indikator</h1>
    <br />
    <?php foreach ($indikator as $indktr) : ?>

        <form method="post" action="<?php echo base_url('indikator/update_aksi') ?>">
            <input type="hidden" name="id" value="<?php echo $indktr->id_indikator ?>">
            <div class="form-group">
                <label>Nama Lembar</label>
                <select class="form-control" name="id_lembar" id="id_lembar">
                    <option value=''>-- Pilih --</option>
                    <?php foreach ($lembar as $rows) { ?>
                        <?php if ($indktr->id_lembar == $rows['id_lembar']) { ?>
                            <option value="<?php echo $rows['id_lembar'] ?>" selected><?php echo $rows['ruang_perawatan'] ?> - <?php echo $rows['nama_lembar'] ?></option>
                        <?php } else { ?>
                            <option value="<?php echo $rows['id_lembar'] ?>"><?php echo $rows['ruang_perawatan'] ?> - <?php echo $rows['nama_lembar'] ?></option>
                        <?php } ?>
                    <?php } ?>
                </select>
                <?php echo form_error('kd_bangsal', '<div class="text-danger small" ml-3>') ?>
            </div>
            <div class="form-group">
                <label>Nama Indikator</label>
                <input type="text" name="nm_indikator" placeholder="Masukkan Nama Indikator" class="form-control" value="<?php echo $indktr->nm_indikator ?>">
                <?php echo form_error('nm_indikator', '<div class="text-danger small" ml-3>') ?>
            </div>
            <div class="form-group">
                <label>Status indikator</label>
                <select class="form-control" name="status">
                    <?php if ($indktr->status == '1') { ?>
                        <option value="1" selected>Aktive</option>
                        <option value="2">Non Aktive</option>
                    <?php } else if ($indktr->status == '0') { ?>
                        <option value="1">Aktive</option>
                        <option value="2" selected>Non Aktive</option>
                    <?php } else { ?>
                        <option value="">-- Pilih --</option>
                        <option value="1">Aktive</option>
                        <option value="2">Non Aktive</option>
                    <?php } ?>
                </select>
                <?php echo form_error('kelas', '<div class="text-danger small" ml-3>') ?>
            </div>
            <button type="submit" class="btn btn-success btn-sm">Simpan</i></button>
            <?php echo anchor('indikator', '<div class="btn btn-sm btn-danger">Batal</div>') ?>
        </form>
    <?php endforeach; ?>
</div>