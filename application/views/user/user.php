<div class="container-fluid">
<h1 class="h3 mb-0 text-gray-800"> User Level</h1>
<br/>
<?php echo $this->session->flashdata('pesan')?>
<?php echo anchor('administrator/user/input','<button class="btn btn-sm btn-primary mb-3"><i class="fa fa-plus fa-sm"> Tambah User</i></button>') ?>
<table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th> NO</th>
                                        <th> ID</th>
                                        <th> NAMA USER</th>
                                        <th> EMAIL</th>
                                        <th> LEVEL</th>
                                        <th> BLOKIR</th>
                                        <th> ID SESSION</th>
                                        <th> AKSI</th>
                                        </tr>
                                    </thead>
                
                                    <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($user as $usr) : ?>
                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $usr->id?></td>
                                            <td><?php echo $usr->username?></td>
                                            <td><?php echo $usr->email?></td>
                                            <td><?php echo $usr->level?></td>
                                            <td><?php echo $usr->blokir?></td>
                                            <td><?php echo $usr->id_session?></td>
                                            <td><div class="btn btn-sm btn-primary mx-3"><i class= "fa fa-edit"></i></div>
                                            <div class="btn btn-sm btn-danger"><i class= "fa fa-trash"></i></div>
                                        </td>
                                           
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
</div>