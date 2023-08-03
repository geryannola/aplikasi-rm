<div class="container-fluid">
    <h1 class="h3 mb-0 text-gray-800"> Input Data Pasien Pulang</h1>
    <br />
    <?php
    // var_dump($pasien);
    ?>
    <?php foreach ($pasien as $ps) : ?>
        <?php
        // var_dump($ps);
        ?>
        <form method="post" action="<?php echo base_url('registrasi/pulang_aksi') ?>">
            <input type="hidden" name="id" value="<?php echo $ps->id_reg ?>">
            <div class="form-group">
                <label>No Rekam Medis</label>
                <div class="col-sm-10">
                    <b>
                        <p class="form-control-static"><?php echo $ps->no_rm ?></p>
                    </b>
                </div>
            </div>
            <div class="form-group">
                <label>Nama Pasien</label>
                <div class="col-sm-10">
                    <b>
                        <p class="form-control-static"><?php echo $ps->nm_pasien ?></p>
                    </b>
                </div>
            </div>
            <div class="form-group">
                <label>Tanggal Periksa</label>
                <input type="date" name="tgl_periksa" value="<?php echo $ps->tgl_periksa ?>" placeholder="Masukkan Tanggal Periksa" class="form-control">
                <?php echo form_error('tgl_periksa', '<div class="text-danger small" ml-3>') ?>
            </div>

            <div class="form-group">
                <label>Jaminan</label>
                <select class="form-control" name="id_jaminan" id="id_jaminan">
                    <option value=''>-- Pilih --</option>
                    <?php foreach ($jaminan as $rows) { ?>
                        <?php if ($ps->id_jaminan == $rows['id_jaminan']) { ?>
                            <option value="<?php echo $rows['id_jaminan'] ?>" selected><?php echo $rows['jenis_jaminan'] ?></option>
                        <?php } else { ?>
                            <option value="<?php echo $rows['id_jaminan'] ?>"><?php echo $rows['jenis_jaminan'] ?></option>
                        <?php } ?>
                    <?php } ?>
                </select>
                <?php echo form_error('id_jaminan', '<div class="text-danger small" ml-3>') ?>
            </div>
            <div class="form-group">
                <label>Ruangan Perawatan</label>
                <select class="form-control" name="id_ruang_perawatan" id="id_ruang_perawatan">
                    <option value=''>-- Pilih --</option>
                    <?php foreach ($ruang_perawatan as $rows) { ?>
                        <?php if ($ps->id_ruang_perawatan == $rows['id_ruangan']) { ?>
                            <option value="<?php echo $rows['id_ruangan'] ?>" selected><?php echo $rows['ruang_perawatan'] ?></option>
                        <?php } else { ?>
                            <option value="<?php echo $rows['id_ruangan'] ?>"><?php echo $rows['ruang_perawatan'] ?></option>
                        <?php } ?>
                    <?php } ?>
                </select>

                <?php echo form_error('id_ruang_perawatan', '<div class="text-danger small" ml-3>') ?>
            </div>
            <div class="form-group">
                <label>Nama Dokter</label>
                <select class="form-control" name="id_dokter" id="id_dokter">
                    <option value=''>-- Pilih --</option>
                    <?php foreach ($dokter as $rows) { ?>
                        <?php if ($ps->id_dokter == $rows['kd_dokter']) { ?>
                            <option value="<?php echo $rows['kd_dokter'] ?>" selected><?php echo $rows['nm_dokter'] ?></option>
                        <?php } else { ?>
                            <option value="<?php echo $rows['kd_dokter'] ?>"><?php echo $rows['nm_dokter'] ?></option>
                        <?php } ?>
                    <?php } ?>
                </select>
                <?php echo form_error('id_dokter', '<div class="text-danger small" ml-3>') ?>
            </div>
            <div class="form-group">
                <label>Nama Penyakit</label>
                <select class="form-control" name="id_penyakit" id="id_penyakit">
                    <option value=''>-- Pilih --</option>
                    <?php foreach ($penyakit as $rows) { ?>
                        <?php if ($ps->id_penyakit == $rows['kd_penyakit']) { ?>
                            <option value="<?php echo $rows['kd_penyakit'] ?>" selected><?php echo $rows['kd_penyakit'] ?> - <?php echo $rows['nm_penyakit'] ?></option>
                        <?php } else { ?>
                            <option value="<?php echo $rows['kd_penyakit'] ?>"><?php echo $rows['kd_penyakit'] ?> - <?php echo $rows['nm_penyakit'] ?></option>
                        <?php } ?>
                    <?php } ?>
                </select>
                <?php echo form_error('id_penyakit', '<div class="text-danger small" ml-3>') ?>
            </div>
            <div class="form-group">
                <label>Tanggal Pulang</label>
                <input type="date" name="tgl_pulang" value="<?= $ps->tgl_pulang; ?>" placeholder=" Masukkan Tanggal Pulang" class="form-control">
                <?php echo form_error('tgl_pulang', '<div class="text-danger small" ml-3>') ?>
            </div>
            <div class="form-group">
                <label>Status Pulang</label>
                <select class="form-control" name="status_pulang" id="status_pulang">
                    <option value=''>-- Pilih --</option>
                    <?php foreach ($statusPulang as $rows) { ?>
                        <option value="<?php echo $rows['id_status'] ?>"><?php echo $rows['status_pulang'] ?></option>
                    <?php } ?>
                </select>
                <?php echo form_error('status_pulang', '<div class="text-danger small" ml-3>') ?>
            </div>
            <button type="submit" class="btn btn-success btn-sm">Simpan</i></button>
            <?php echo anchor('registrasi', '<div class="btn btn-sm btn-danger">Batal</div>') ?>
        </form>
    <?php endforeach; ?>
</div>