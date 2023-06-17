<div class="container-fluid">
    <h1 class="h3 mb-0 text-gray-800"> Input Data Kamar</h1>
    <br />
    <form method="post" action="<?php echo base_url('kamar/input_aksi') ?>">
        <div class="form-group">
            <label> Kode Kamar</label>
            <input type="text" name="kd_kamar" placeholder="Masukkan kode kamar" class="form-control">
            <?php echo form_error('kd_kamar', '<div class="text-danger small" ml-3>') ?>
        </div>
        <div class="form-group">
            <label>Kode Bangsal</label>
            <select class="form-control" name="kd_bangsal" id="kd_bangsal">
                <option value=''>-- Pilih --</option>
                <?php foreach ($ruang_perawatan as $rows) { ?>
                    <option value="<?php echo $rows['id_ruangan'] ?>"><?php echo $rows['ruang_perawatan'] ?></option>
                <?php } ?>
            </select>
            <?php echo form_error('kd_bangsal', '<div class="text-danger small" ml-3>') ?>
        </div>
        <div class="form-group">
            <label>Tarif Kamar</label>
            <input type="number" name="trf_kamar" placeholder="Masukkan Tarif kamar" class="form-control">
            <?php echo form_error('trf_kamar', '<div class="text-danger small" ml-3>') ?>
        </div>
        <div class="form-group">
            <label>Status</label>
            <select class="form-control" name="status" id="status">
                <option value=''>-- Pilih --</option>
                <?php foreach ($status_kamar as $rows) { ?>
                    <option value="<?php echo $rows['status_kamar'] ?>"><?php echo $rows['status_kamar'] ?></option>
                <?php } ?>
            </select>
            <?php echo form_error('status', '<div class="text-danger small" ml-3>') ?>
        </div>
        <div class="form-group">
            <label>Kelas</label>
            <select class="form-control" name="kelas" id="kd_bangsal">
                <option value=''>-- Pilih --</option>
                <?php foreach ($kelas as $rows) { ?>
                    <option value="<?php echo $rows['nama_kelas'] ?>"><?php echo $rows['nama_kelas'] ?></option>
                <?php } ?>
            </select>
            <?php echo form_error('kelas', '<div class="text-danger small" ml-3>') ?>
        </div>
        <button type="submit" class="btn btn-success btn-sm">Simpan</i></button>
        <?php echo anchor('kamar/kamar', '<div class="btn btn-sm btn-danger">Batal</div>') ?>
    </form>
</div>