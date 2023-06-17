<div class="container-fluid">
    <h1 class="h3 mb-0 text-gray-800"> Input Data Dokter</h1>
    <br />
    <form method="post" action="<?php echo base_url('dokter/input_aksi') ?>">
        <div class="form-group">
            <label> Kode Dokter</label>
            <input type="text" name="kd_dokter" placeholder="Masukkan kode dokter" class="form-control">
            <?php echo form_error('kd_dokter', '<div class="text-danger small" ml-3>') ?>
        </div>
        <div class="form-group">
            <label>Nama Dokter</label>
            <input type="text" name="nm_dokter" placeholder="Masukkan Nama Dokter" class="form-control">
            <?php echo form_error('nm_dokter', '<div class="text-danger small" ml-3>') ?>
        </div>
        <div class="form-group">
            <label>Jenis Kelamin</label>
            <select class="form-control" name="jk" id="jk">
                <option value=''>-- Pilih --</option>
                <?php foreach ($jk as $rows) { ?>
                    <option value="<?php echo $rows['id_jk'] ?>"><?php echo $rows['nama_jk'] ?></option>
                <?php } ?>
            </select>
            <?php echo form_error('jk', '<div class="text-danger small" ml-3>') ?>
        </div>
        <div class="form-group">
            <label> Tempat Lahir</label>
            <input type="text" name="tmp_lahir" placeholder="Masukkan Tempat Lahir" class="form-control">
            <?php echo form_error('tmp_lahir', '<div class="text-danger small" ml-3>') ?>
        </div>
        <div class="form-group">
            <label> Tanggal Lahir</label>
            <input type="date" name="tgl_lahir" placeholder="Masukkan Tanggal Lahir" class="form-control">
            <?php echo form_error('tgl_lahir', '<div class="text-danger small" ml-3>') ?>
        </div>
        <div class="form-group">
            <label>Golongan Darah</label>
            <select class="form-control" name="gol_drh" id="gol_drh">
                <option value=''>-- Pilih --</option>
                <?php foreach ($gol_drh as $rows) { ?>
                    <option value="<?php echo $rows['nama_gol_drh'] ?>"><?php echo $rows['nama_gol_drh'] ?></option>
                <?php } ?>
            </select>
            <?php echo form_error('gol_drh', '<div class="text-danger small" ml-3>') ?>
        </div>
        <div class="form-group">
            <label>Agama</label>
            <select class="form-control" name="agama" id="agama">
                <option value=''>-- Pilih --</option>
                <?php foreach ($agama as $rows) { ?>
                    <option value="<?php echo $rows['nm_agama'] ?>"><?php echo $rows['nm_agama'] ?></option>
                <?php } ?>
            </select>
            <?php echo form_error('agama', '<div class="text-danger small" ml-3>') ?>
        </div>
        <div class="form-group">
            <label> Alamat</label>
            <input type="text" name="almt_tgl" placeholder="Masukkan Alamat" class="form-control">
            <?php echo form_error('almt_tgl', '<div class="text-danger small" ml-3>') ?>
        </div>
        <div class="form-group">
            <label> Nomor Telpon</label>
            <input type="text" name="no_telp" placeholder="Masukkan Nomor Telpon" class="form-control">
            <?php echo form_error('no_telp', '<div class="text-danger small" ml-3>') ?>
        </div>
        <div class="form-group">
            <label>Status Menikah</label>
            <select class="form-control" name="stts_nikah" id="stts_nikah">
                <option value=''>-- Pilih --</option>
                <?php foreach ($stts_nikah as $rows) { ?>
                    <option value="<?php echo $rows['nm_stts_nikah'] ?>"><?php echo $rows['nm_stts_nikah'] ?></option>
                <?php } ?>
            </select>
            <?php echo form_error('agama', '<div class="text-danger small" ml-3>') ?>
        </div>
        <div class="form-group">
            <label> Alumni</label>
            <input type="text" name="alumni" placeholder="Masukkan Alumni" class="form-control">
            <?php echo form_error('alumni', '<div class="text-danger small" ml-3>') ?>
        </div>
        <div class="form-group">
            <label> No Surat Ijin Praktek</label>
            <input type="text" name="no_ijn_praktek" placeholder="Masukkan No Surat Ijin Praktek" class="form-control">
            <?php echo form_error('no_ijn_praktek', '<div class="text-danger small" ml-3>') ?>
        </div>
        <button type="submit" class="btn btn-success btn-sm">Simpan</i></button>
        <?php echo anchor('dokter', '<div class="btn btn-sm btn-danger">Batal</div>') ?>
    </form>
</div>