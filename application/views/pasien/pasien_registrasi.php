<div class="container-fluid">
    <h1 class="h3 mb-0 text-gray-800"> Input Data Pasien Rawat Inap</h1>
    <br />
    <?php foreach ($pasien as $ps) : ?>
        <form method="post" action="<?php echo base_url('pasien/registrasi_aksi') ?>">
            <input type="hidden" name="id" value="<?php echo $ps->id_pasien ?>">
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
                <input type="date" name="tgl_periksa" placeholder="Masukkan Tanggal Periksa" class="form-control">
                <?php echo form_error('tgl_periksa', '<div class="text-danger small" ml-3>') ?>
            </div>
            <div class="form-group">
                <label>Jaminan</label>
                <select class="form-control" name="id_jaminan" id="id_ruangan">
                    <option value=''>-- Pilih --</option>
                    <?php foreach ($jaminan as $rows) { ?>
                        <option value="<?php echo $rows['id_jaminan'] ?>"><?php echo $rows['jenis_jaminan'] ?></option>
                    <?php } ?>
                </select>
                <?php echo form_error('id_jaminan', '<div class="text-danger small" ml-3>') ?>
            </div>
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
                <label>Nama Dokter</label>
                <select class="form-control" name="id_dokter" id="id_dokter">
                    <option value=''>-- Pilih --</option>
                    <?php foreach ($dokter as $rows) { ?>
                        <option value="<?php echo $rows['kd_dokter'] ?>"><?php echo $rows['nm_dokter'] ?></option>
                    <?php } ?>
                </select>
                <?php echo form_error('id_dokter', '<div class="text-danger small" ml-3>') ?>
            </div>
            <div class="form-group">
                <label>Nama Penyakit</label>
                <select class="form-control" name="id_dokter" id="id_dokter">
                    <option value=''>-- Pilih --</option>
                    <?php foreach ($penyakit as $rows) { ?>
                        <option value="<?php echo $rows['kd_penyakit'] ?>"><?php echo $rows['kd_penyakit'] ?> - <?php echo $rows['nm_penyakit'] ?></option>
                    <?php } ?>
                </select>
                <?php echo form_error('id_dokter', '<div class="text-danger small" ml-3>') ?>
            </div>
            <div class="form-group">
                <label>Tanggal Pulang</label>
                <input type="date" name="tgl_pulang" placeholder="Masukkan Tanggal Periksa" class="form-control">
                <?php echo form_error('tgl_periksa', '<div class="text-danger small" ml-3>') ?>
            </div>
            <button type="submit" class="btn btn-success btn-sm">Simpan</i></button>
            <?php echo anchor('pasien', '<div class="btn btn-sm btn-danger">Batal</div>') ?>
        </form>
    <?php endforeach; ?>
</div>