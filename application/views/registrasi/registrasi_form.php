<div class="container-fluid">
    <h1 class="h3 mb-0 text-gray-800"> Input Data Rawat Inap Pulang</h1>
    <br />
    <!-- <form method="post" action="<?php echo base_url('registrasi/input_aksi') ?>"> -->
    <div class="form-group">
        <label> Nomor RM</label>
        <input type="text" name="no_rm" id="no_rm" placeholder="Masukkan Nomor RM" class="form-control" value='0'>
        <?php echo form_error('no_rm', '<div class="text-danger small" ml-3>') ?>
    </div>
    <div class="form-group">
        <label>Nama Pasien</label>
        <input type="text" name="nm_pasien" id="searchpasien" placeholder="Masukkan Nama Pasien" class="form-control">
        <?php echo form_error('nm_pasien', '<div class="text-danger small" ml-3>') ?>
    </div>
    <button type="submit" class="btn btn-success btn-sm">Simpan</i></button>
    <?php echo anchor('pasien', '<div class="btn btn-sm btn-danger">Batal</div>') ?>
    <!-- </form> -->
</div>

<!-- Script -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
<!-- jQuery UI -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script> -->

<script type="text/javascript">
    $(document).ready(function()) {
        $('#searchpasien').autocomplete({
            source: function(request, response) {
                $.ajax({
                    url: '<?= base_url() ?>index.php/registrasi/pasienList',
                    type: 'post',
                    dataType: 'json',
                    data: {
                        search: request.term
                    },
                    success: function(data) {
                        response(data);
                    }
                });
            },
            select: function(event, ui) {
                $('#searchpasien').val(ui.item.label);
                $('#no_rm').val(ui.item.label);

                return false;
            }
        })
    }
</script>