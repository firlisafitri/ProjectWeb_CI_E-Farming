<main>
    <div class="container-fluid">
        <h1 class="mt-4">Data Produk Hasil Pertanian</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Produk E-Farming</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header"><i class="fas fa-edit mr-1"></i>Input Data Produk E-Farming
            </div>
            <div class="card-body">
                <form method="POST" action="<?php echo base_url().'index.php/Backend/data_produk_input_aksi' ?>" enctype="multipart/form-data">

                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Kode Produk</label>
                                <input type="text" name="kd_produk" class="form-control" placeholder="Masukkan Kode Produk">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Kategori Produk</label>
                                <select name="kategori" class="form-control">
                                    <option>~Pilih Kategori Produk</option>
                                    <?php
                                    foreach ($tbl_kategori as $kategori) {
                                    ?>
                                    <option value="<?php echo $kategori->id_kategori ?>"><?php echo $kategori->nm_kategori ?></option>    

                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Nama Produk</label>
                                <input type="text" name="nm_produk" class="form-control" placeholder="Masukkan Nama Produk">
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Harga Produk</label>
                                <input type="number" name="harga" class="form-control" placeholder="000.000.000">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Stok Produk</label>
                                <input type="number" name="stok" class="form-control" placeholder="000">
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Keterangan Produk</label>
                                <textarea name="ket" class="form-control" placeholder="Masukkan Keterangan Produk"></textarea>  
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Foto Produk</label>
                                <input type="file" name="gambar" class="form-control"> 
                            </div>
                        </div>
                    </div>

                    <center>
                        <div class="form-group mt-4 mb-0">
                            <input type="submit" name="proses" class="btn btn-primary" value="Simpan Data Produk">
                            <button type="reset" class="btn btn-dark">Reset</button>
                        </div>
                    </center>

                </form>
            </div>
        </div>
    </div>
</main>