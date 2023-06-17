<div class="container-fluid">
<h1 class="h3 mb-0 text-gray-800">Data ICD 10</h1>
<br/>
<?php echo $this->session->flashdata('pesan')?>
<?php echo anchor('administrator/penyakit/input','<button class="btn btn-sm btn-primary mb-3"><i class="fa fa-plus fa-sm"> Tambah Jenis Penyakit</i></button>') ?>
<table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th> NO</th>
                                        <th> KODE PENYAKIT</th>
                                        <th> NAMA PENYAKIT</th>
                                        <th> STATUS</th>
                                        <th> AKSI</th>
                                        </tr>
                                    </thead>
                
                                    <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($penyakit as $pny) : ?>
                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $pny->kd_penyakit?></td>
                                            <td><?php echo $pny->nm_penyakit?></td>
                                            <td><?php echo $pny->status?></td>
                                            <td><div class="btn btn-sm btn-primary mb-2"><i class= "fa fa-edit"></i></div>
                                            <div class="btn btn-sm btn-danger"><i class= "fa fa-trash"></i></div>
                                        </td>
                                           
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
</div>