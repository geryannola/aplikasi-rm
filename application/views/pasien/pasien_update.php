<div class="container-fluid">
    <h1 class="h3 mb-0 text-gray-800"> Update Data Pasien</h1>
    <br />
    <?php foreach ($pasien as $ps) : ?>
        <form method="post" action="<?php echo base_url('pasien/update_aksi') ?>">
            <input type="hidden" name="id" value="<?php echo $ps->id_pasien ?>">
            <div class="form-group">
                <label>Nomor RM</label>
                <input type="text" name="no_rm" placeholder="Masukkan Kode dokter" class="form-control" value="<?php echo $ps->no_rm ?>" disabled>
                <?php echo form_error('no_rm', '<div class="text-danger small" ml-3>') ?>
            </div>
            <div class="form-group">
                <label>Nama Pasien</label>
                <input type="text" name="nm_pasien" placeholder="Masukkan Nama Pasien" class="form-control" value="<?php echo $ps->nm_pasien ?>">
                <?php echo form_error('nm_pasien', '<div class="text-danger small" ml-3>') ?>
            </div>
            <div class="form-group">
                <label>Status Pasien</label>
                <select class="form-control" name="status">
                    <?php if ($ps->status == '1') { ?>
                        <option value="1" selected>Aktive</option>
                        <option value="2">Non Aktive</option>
                    <?php } else if ($ps->status == '0') { ?>
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
            <?php echo anchor('pasien', '<div class="btn btn-sm btn-danger">Batal</div>') ?>
        </form>
    <?php endforeach; ?>
</div>