<div class="container-fluid">
    <h1 class="h3 mb-0 text-gray-800">Data Analisis BRM</h1>
    <br />
    <?php echo $this->session->flashdata('pesan') ?>
    <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
    <!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script> -->
    <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    <!------ Include the above in your HEAD tag ---------->
    <table class="table" cellspacing="0">
        <tr>
            <td>No Rekam Medis</td>
            <td>:</td>
            <td><?= $pasien->no_rm; ?></td>
        </tr>
        <tr>
            <td>Nama Pasien</td>
            <td>:</td>
            <td><?= $pasien->nm_pasien; ?></td>
        </tr>
        <tr>
            <td>Tanggal Daftar</td>
            <td>:</td>
            <td><?= $pasien->tgl_periksa; ?></td>
        </tr>
        <tr>
            <td>Nama Ruangan</td>
            <td>:</td>
            <td><?= $pasien->ruang_perawatan; ?></td>
        </tr>
        <tr>
            <td>Nama Dokter</td>
            <td>:</td>
            <td><?= $pasien->nm_dokter; ?></td>
        </tr>
        <tr>
            <td>Diagnosa</td>
            <td>:</td>
            <td><?= $pasien->nm_penyakit; ?></td>
        </tr>
        <tr>
            <td>Tanggal Pulang</td>
            <td>:</td>
            <td><?= $pasien->tgl_pulang; ?></td>
        </tr>
        <tr>
            <td>Status Pulang</td>
            <td>:</td>
            <td><?= $pasien->status_pulang; ?></td>
        </tr>
        <tr>
            <td>Jaminan</td>
            <td>:</td>
            <td><?= $pasien->jenis_jaminan; ?></td>
        </tr>
    </table>

    <section id="tabs" class="project-tab">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav>
                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                            <?php
                            $no = 1;
                            foreach ($lembar as $lmbr) : ?>
                                <a class="nav-item nav-link" id="nav-<?= $lmbr->kode_lembar1; ?>-tab" data-toggle="tab" href="#nav-<?= $lmbr->kode_lembar1; ?>" role="tab" aria-controls="nav-<?= $lmbr->kode_lembar1; ?>" aria-selected="false"><?= $lmbr->kode_lembar1; ?></a>
                            <?php endforeach; ?>
                            <!-- <a class="nav-item nav-link" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">RM 1/IRD</a> -->
                            <!-- <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Project Tab 2</a> -->
                            <!-- <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Project Tab 3</a> -->

                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <table class="table" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Indikator</th>
                                        <th>Hasil</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($indikator as $indi) : ?>
                                        <tr>
                                            <td><a href="#"><?= $no++; ?></a></td>
                                            <td><?= $indi->nm_indikator; ?></td>
                                            <td></td>
                                        </tr>
                                    <?php endforeach; ?>

                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="nav-RM 1/IRD" role="tabpanel" aria-labelledby="nav-RM 1/IRD-tab">
                            <table class="table" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Project Name</th>
                                        <th>Employer</th>
                                        <th>Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="#">Work 1</a></td>
                                        <td>Doe</td>
                                        <td>john@example.com</td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">Work 2</a></td>
                                        <td>Moe</td>
                                        <td>mary@example.com</td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">Work 3</a></td>
                                        <td>Dooley</td>
                                        <td>july@example.com</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th> NO</th>
                <th> TANGGAL MASUK</th>
                <th> NOMOR RM</th>
                <th> NAMA PASIEN</th>
                <th> JAMINAN</th>
                <th> RUANGAN</th>
                <th> DOKTER</th>
                <th> STATUS PULANG</th>
                <th> AKSI</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $no = 1;
            foreach ($pasien as $ps) :
                if ($ps->status == '1') {
                    $status = 'Aktif';
                } else {
                    $status = 'Tidak Aktif';
                }
            ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $ps->tgl_periksa ?></td>
                    <td><?php echo $ps->no_rm ?></td>
                    <td><?php echo $ps->nm_pasien ?></td>
                    <td><?php echo $ps->jenis_jaminan ?></td>
                    <td><?php echo $ps->ruang_perawatan ?></td>
                    <td><?php echo $ps->nm_dokter ?></td>
                    <td><?php echo $ps->status_pulang ?></td>
                    <td>
                        <?php echo anchor('analisis/input/' . $ps->id_reg, '<div class="btn btn-sm btn-success"><i class="fa fa-plus" aria-hidden="true"></i></div>') ?>
                        <?php echo anchor('analisis/batal/' . $ps->id_reg, '<div class="btn btn-sm btn-danger">Batal</div>') ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table> -->
</div>