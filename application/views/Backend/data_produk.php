                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Data Produk Hasil Pertanian</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Produk E-Farming</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Tabel Data Produk E-Farming</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                                        <a href="<?php echo base_url().'index.php/Backend/data_produk_input' ?>" class="btn btn-primary">Tambah Data</a><p></p>

                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Foto Produk</th>
                                                <th>Kode Produk</th>
                                                <th>Nama Produk</th>
                                                <th>Kategori</th>
                                                <th>Harga</th>
                                                <th>Stok</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Foto Produk</th>
                                                <th>Kode Produk</th>
                                                <th>Nama Produk</th>
                                                <th>Kategori</th>
                                                <th>Harga</th>
                                                <th>Stok</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($tbl_produk as $produk) {

                                            
                                            ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><img width="100" src="<?php echo base_url(); ?>uploads/<?php echo $produk->gambar ?>"></td>
                                                <td><?php echo $produk->kd_produk ?></td>
                                                <td><?php echo $produk->nm_produk ?></td>
                                                <td><?php echo $produk->nm_kategori ?></td>
                                                <td><?php echo $produk->harga ?></td>
                                                <td><?php echo $produk->stok ?></td>
                                                <td>
                                                    <a href="<?php echo base_url().'index.php/Backend/data_produk_edit/'.$produk->id_produk.'' ?>" class="btn btn-success">Edit</a>
                                                    <a href="<?php echo base_url().'index.php/Backend/data_produk_delete/'.$produk->id_produk.'' ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Ingin Menghapus Data Ini ?')">Delete</a>
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
                
