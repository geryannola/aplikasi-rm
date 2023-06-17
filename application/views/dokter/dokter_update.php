<div class="container-fluid">
    <h1 class="h3 mb-0 text-gray-800"> Update Data Dokter</h1>
    <br />
    <?php foreach ($dokter as $dr) : ?>
        <form method="post" action="<?php echo base_url('dokter/update_aksi') ?>">
            <input type="hidden" name="id" value="<?php echo $dr->kd_dokter ?>">
            <div class="form-group">
                <label>Kode dokter</label>
                <input type="text" name="kd_dokter" placeholder="Masukkan Kode dokter" class="form-control" value="<?php echo $dr->kd_dokter ?>" disabled>
                <?php echo form_error('kd_dokter', '<div class="text-danger small" ml-3>') ?>
            </div>
            <div class="form-group">
                <label>Nama dokter</label>
                <input type="text" name="nm_dokter" placeholder="Masukkan Nama dokter" class="form-control" value="<?php echo $dr->nm_dokter ?>">
                <?php echo form_error('nm_dokter', '<div class="text-danger small" ml-3>') ?>
            </div>
            <div class="form-group">
                <label>Jenis Kelamin</label>
                <select class="form-control" name="jk" id="jk">
                    <option value=''>-- Pilih --</option>
                    <?php foreach ($jk as $rows) { ?>
                        <?php if ($dr->jk == $rows['id_jk']) { ?>
                            <option value="<?php echo $rows['id_jk'] ?>" selected><?php echo $rows['nama_jk'] ?></option>
                        <?php } else { ?>
                            <option value="<?php echo $rows['id_jk'] ?>"><?php echo $rows['nama_jk'] ?></option>
                        <?php } ?>
                    <?php } ?>
                </select>
                <?php echo form_error('kd_bangsal', '<div class="text-danger small" ml-3>') ?>
            </div>
            <div class="form-group">
                <label>Tempat Lahir</label>
                <input type="text" name="tmp_lahir" placeholder="Masukkan Tempat Lahir" class="form-control" value="<?php echo $dr->tmp_lahir ?>">
                <?php echo form_error('tmp_lahir', '<div class="text-danger small" ml-3>') ?>
            </div>
            <div class="form-group">
                <label>Tanggal Lahir</label>
                <input type="date" name="tgl_lahir" placeholder="Masukkan Tanggal Lahir" class="form-control" value="<?php echo $dr->tgl_lahir ?>">
                <?php echo form_error('tgl_lahir', '<div class="text-danger small" ml-3>') ?>
            </div>
            <div class="form-group">
                <label>Golongan Darah</label>
                <select class="form-control" name="gol_drh" id="gol_drh">
                    <option value=''>-- Pilih --</option>
                    <?php foreach ($gol_drh as $rows) { ?>
                        <?php if ($dr->gol_drh == $rows['nama_gol_drh']) { ?>
                            <option value="<?php echo $rows['nama_gol_drh'] ?>" selected><?php echo $rows['nama_gol_drh'] ?></option>
                        <?php } else { ?>
                            <option value="<?php echo $rows['nama_gol_drh'] ?>"><?php echo $rows['nama_gol_drh'] ?></option>
                        <?php } ?>
                    <?php } ?>
                </select>
                <?php echo form_error('gol_drh', '<div class="text-danger small" ml-3>') ?>
            </div>
            <div class="form-group">
                <label>Agama</label>
                <select class="form-control" name="agama" id="agama">
                    <option value=''>-- Pilih --</option>
                    <?php foreach ($agama as $rows) { ?>
                        <?php if ($dr->agama == $rows['nm_agama']) { ?>
                            <option value="<?php echo $rows['nm_agama'] ?>" selected><?php echo $rows['nm_agama'] ?></option>
                        <?php } else { ?>
                            <option value="<?php echo $rows['nm_agama'] ?>"><?php echo $rows['nm_agama'] ?></option>
                        <?php } ?>
                    <?php } ?>
                </select>
                <?php echo form_error('gol_drh', '<div class="text-danger small" ml-3>') ?>
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="alamat" placeholder="Masukkan Alamat" class="form-control" value="<?php echo $dr->almt_tgl ?>">
                <?php echo form_error('alamat', '<div class="text-danger small" ml-3>') ?>
            </div>
            <div class="form-group">
                <label>Nomor Telpon</label>
                <input type="text" name="no_telp" placeholder="Masukkan Nomor Telpon" class="form-control" value="<?php echo $dr->no_telp ?>">
                <?php echo form_error('no_telp', '<div class="text-danger small" ml-3>') ?>
            </div>
            <div class="form-group">
                <label>Status Menikah</label>
                <select class="form-control" name="agama" id="agama">
                    <option value=''>-- Pilih --</option>
                    <?php foreach ($stts_nikah as $rows) { ?>
                        <?php if ($dr->stts_nikah == $rows['nm_stts_nikah']) { ?>
                            <option value="<?php echo $rows['nm_stts_nikah'] ?>" selected><?php echo $rows['nm_stts_nikah'] ?></option>
                        <?php } else { ?>
                            <option value="<?php echo $rows['nm_stts_nikah'] ?>"><?php echo $rows['nm_stts_nikah'] ?></option>
                        <?php } ?>
                    <?php } ?>
                </select>
                <?php echo form_error('gol_drh', '<div class="text-danger small" ml-3>') ?>
            </div>
            <div class="form-group">
                <label>Alumni</label>
                <input type="text" name="alumni" placeholder="Masukkan Alumni" class="form-control" value="<?php echo $dr->alumni ?>">
                <?php echo form_error('alumni', '<div class="text-danger small" ml-3>') ?>
            </div>
            <div class="form-group">
                <label>Nomor Telpon</label>
                <input type="text" name="no_ijn_praktek" placeholder="Masukkan Nomor Ijin Praktek" class="form-control" value="<?php echo $dr->no_ijn_praktek ?>">
                <?php echo form_error('no_ijn_praktek', '<div class="text-danger small" ml-3>') ?>
            </div>
            <div class="form-group">
                <label>Status dokter</label>
                <select class="form-control" name="status">
                    <?php if ($dr->status == '1') { ?>
                        <option value="1" selected>Aktive</option>
                        <option value="2">Non Aktive</option>
                    <?php } else if ($dr->status == '0') { ?>
                        <option value="1">Aktive</option>
                        <option value="2" selected>Non Aktive</option>
                    <?php } else { ?>
                        <option value="">-- Pilih --</option>
                        <option value="1">Aktive</option>
                        <option value="2">Non Aktive</option>
                    <?php } ?>
                </select>
                <?php echo form_error('status', '<div class="text-danger small" ml-3>') ?>
            </div>
            <button type="submit" class="btn btn-success btn-sm">Simpan</i></button>
            <?php echo anchor('dokter', '<div class="btn btn-sm btn-danger">Batal</div>') ?>
        </form>
    <?php endforeach; ?>
</div>