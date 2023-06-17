<div class="container-fluid">
    <h1 class="h3 mb-0 text-gray-800"> Update Data Kamar</h1>
    <br />
    <?php foreach ($kamar as $kmr) : ?>
        <form method="post" action="<?php echo base_url('kamar/update_aksi') ?>">
            <input type="text" name="id" value="<?php echo $kmr->kd_kamar ?>">
            <div class="form-group">
                <label>Kode Kamar</label>
                <input type="text" name="kd_kamar" placeholder="Masukkan Kode Kamar" class="form-control" value="<?php echo $kmr->kd_kamar ?>" disabled>
                <?php echo form_error('kd_kamar', '<div class="text-danger small" ml-3>') ?>
            </div>
            <div class="form-group">
                <label>Nama Perawatan</label>
                <select class="form-control" name="kd_bangsal" id="kd_bangsal">
                    <option value=''>-- Pilih --</option>
                    <?php foreach ($ruang_perawatan as $rows) { ?>
                        <?php if ($kmr->kd_bangsal == $rows['id_ruangan']) { ?>
                            <option value="<?php echo $rows['id_ruangan'] ?>" selected><?php echo $rows['ruang_perawatan'] ?></option>
                        <?php } else { ?>
                            <option value="<?php echo $rows['id_ruangan'] ?>"><?php echo $rows['ruang_perawatan'] ?></option>
                        <?php } ?>
                    <?php } ?>
                </select>
                <?php echo form_error('kd_bangsal', '<div class="text-danger small" ml-3>') ?>
            </div>
            <div class="form-group">
                <label>Tarif Kamar</label>
                <input type="number" name="trf_kamar" placeholder="Masukkan Tarif Kamar" class="form-control" value="<?php echo $kmr->trf_kamar ?>">
                <?php echo form_error('trf_kamar', '<div class="text-danger small" ml-3>') ?>
            </div>
            <div class="form-group">
                <label>Status</label>
                <select class="form-control" name="status" id="status">
                    <option value=''>-- Pilih --</option>
                    <?php foreach ($status_kamar as $rows) { ?>
                        <?php if ($kmr->status == $rows['status_kamar']) { ?>
                            <option value="<?php echo $rows['status_kamar'] ?>" selected><?php echo $rows['status_kamar'] ?></option>
                        <?php } else { ?>
                            <option value="<?php echo $rows['status_kamar'] ?>"><?php echo $rows['status_kamar'] ?></option>
                        <?php } ?>
                    <?php } ?>
                </select>
                <?php echo form_error('status', '<div class="text-danger small" ml-3>') ?>
            </div>
            <div class="form-group">
                <label>Kelas</label>
                <select class="form-control" name="kelas" id="kelas">
                    <option value=''>-- Pilih --</option>
                    <?php foreach ($kelas as $rows) { ?>
                        <?php if ($kmr->kelas == $rows['nama_kelas']) { ?>
                            <option value="<?php echo $rows['nama_kelas'] ?>" selected><?php echo $rows['nama_kelas'] ?></option>
                        <?php } else { ?>
                            <option value="<?php echo $rows['nama_kelas'] ?>"><?php echo $rows['nama_kelas'] ?></option>
                        <?php } ?>
                    <?php } ?>
                </select>
                <?php echo form_error('kelas', '<div class="text-danger small" ml-3>') ?>
            </div>
            <div class="form-group">
                <label>Status Kamar</label>
                <select class="form-control" name="statusdata">
                    <?php if ($kmr->statusdata == '1') { ?>
                        <option value="1" selected>Aktive</option>
                        <option value="2">Non Aktive</option>
                    <?php } else if ($kmr->statusdata == '0') { ?>
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
            <?php echo anchor('kamar', '<div class="btn btn-sm btn-danger">Batal</div>') ?>
        </form>
    <?php endforeach; ?>
</div>