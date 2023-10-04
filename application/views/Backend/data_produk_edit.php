<main>
    <div class="container-fluid">
        <h1 class="mt-4">Data Produk Hasil Pertanian</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Produk E-Farming</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header"><i class="fas fa-edit mr-1"></i>Update Data Produk E-Farming
            </div>
            <div class="card-body">

                <?php foreach ($tbl_produk as $produk) { ?>

                <form method="POST" action="<?php echo base_url().'index.php/Backend/data_produk_edit_aksi' ?>" enctype="multipart/form-data">

                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Kode Produk</label>
                                <input type="hidden" name="id_produk" class="form-control" value="<?php echo $produk->id_produk ?>">
                                <input type="text" name="kd_produk" class="form-control" value="<?php echo $produk->kd_produk ?>">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Kategori Produk</label>
                                <select name="kategori" class="form-control">
                                    <?php
                                    foreach ($tbl_kategori as $kategori) {
                                    ?>
                                    <option value="<?php echo $kategori->id_kategori ?>" <?php echo ($kategori->id_kategori == $produk->kategori) ? 'selected' : '' ?>  ><?php echo $kategori->nm_kategori ?></option>
                                <?php  } ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Nama Produk</label>
                                <input type="text" name="nm_produk" class="form-control" value="<?php echo $produk->nm_produk ?>">
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Harga Produk</label>
                                <input type="number" name="harga" class="form-control" value="<?php echo $produk->harga ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Stok Produk</label>
                                <input type="number" name="stok" class="form-control" value="<?php echo $produk->stok ?>">
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Keterangan Produk</label>
                                <textarea name="ket" class="form-control"><?php echo $produk->ket ?></textarea>  
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Foto Produk</label>
                                <input type="file" name="gambar" class="form-control">
                                <img width="100" src="<?php echo base_url(); ?>uploads/<?php echo $produk->gambar ?>"> 
                            </div>
                        </div>
                    </div>

                    <center>
                        <div class="form-group mt-4 mb-0">
                            <input type="submit" name="proses" class="btn btn-primary" value="Update Data Produk">
                            <button type="reset" class="btn btn-dark">Reset</button>
                        </div>
                    </center>

                </form>
            <?php } ?>
            </div>
        </div>
    </div>
</main>