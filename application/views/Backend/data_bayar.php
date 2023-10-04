                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Data Pembayaran Belanja Customer</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Belanja Customer</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Data Belanja Customer E-Farming</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>No. Referensi</th>
                                                <th>Tanggal Bayar </th>
                                                <th>Total</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>No. Referensi</th>
                                                <th>Tanggal Bayar </th>
                                                <th>Total</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($tbl_bayar as $byr) {

                                            
                                            ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $byr->no_referensi ?></td>
                                                <td><?php echo $byr->tgl_bayar ?></td>
                                                <td><?php echo $byr->tot_bayar ?></td>
                                                <td><?php echo $byr->status ?></td>
                                                <td>

                                                <?php if ($byr->status != "Terkonfirmasi") {
                                                ?>
                                
                                                    <a href="<?php echo base_url().'index.php/Backend/data_bayar_detail/'.$byr->no_referensi.'' ?>" class="btn btn-success">Verifikasi</a>
                                                
                                                <?php } 
                                                else
                                                echo"<td>&nbsp;</td>";
                                                ?>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                
