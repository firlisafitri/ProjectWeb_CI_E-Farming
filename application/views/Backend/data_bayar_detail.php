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
                                                <th>No Belanja</th>
                                                <th>Nama Produk </th>
                                                <th>Harga</th>
                                                <th>Jumlah</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($tbl_detail as $detail) {

                                            
                                            ?>
                                            <tr>
                                                <td><img width="100" src="<?php echo base_url(); ?>uploads/<?php echo $detail->gambar ?>"></td>
                                                <td><?php echo $detail->no_referensi ?></td>
                                                <td><?php echo $detail->nm_produk ?></td>
                                                <td><?php echo $detail->harga ?></td>
                                                <td><?php echo $detail->jml_belanja ?></td>
                                                <td><?php echo $detail->total ?></td>
                                            </tr>
                                            <?php } ?>
                                            <tr>
                                                <td colspan="5" align="center">Total Belanja (Sudah Termasuk Ongkir)</td>
                                                <td><?php echo $detail->tot_bayar?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>



<main>
    <div class="container-fluid">
        
        <div class="card mb-4">
            
            <div class="card-body">
                <form method="POST" action="<?php echo base_url().'index.php/Backend/data_bayar_aksi' ?>" >

                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Verifikasi Pembayaran</label>
                                <input type="hidden" name="no_referensi" value="<?php echo $detail->no_referensi?>">
                                <select name="status" class="form-control">
                                    <option>~Pilih Verifikasi</option>
                                    <option value="Terkonfirmasi">Terkonfirmasi</option>
                                    <option value="Belum Terkonfirmasi">Belum Terkonfirmasi</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <center>
                        <div class="form-group mt-4 mb-0">
                            <input type="submit" name="proses" class="btn btn-primary" value="Verifikasi Pembayaran">
                            <button type="reset" class="btn btn-dark">Reset</button>
                        </div>
                    </center>

                </form>
            </div>
        </div>
    </div>
</main>
                
