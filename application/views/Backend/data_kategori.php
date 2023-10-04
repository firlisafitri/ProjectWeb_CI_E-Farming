                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Data Kategori</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Kategori Produk E-Farming</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Tabel Data Kategori Produk</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                                        <a href="<?php echo base_url().'index.php/Backend/data_kategori_input' ?>" class="btn btn-primary">Tambah Data</a><p></p>

                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Kategori</th>
                                                <th>Keterangan</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Kategori</th>
                                                <th>Keterangan</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($tbl_kategori as $kategori) {

                                            
                                            ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $kategori->nm_kategori ?></td>
                                                <td><?php echo $kategori->ket ?></td>
                                                <td>
                                                    <a href="<?php echo base_url().'index.php/Backend/data_kategori_edit/'.$kategori->id_kategori.'' ?>" class="btn btn-success">Edit</a>
                                                    <a href="<?php echo base_url().'index.php/Backend/data_kategori_delete/'.$kategori->id_kategori.'' ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Ingin Menghapus Data Ini ?')">Delete</a>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                
