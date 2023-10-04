<main>
    <div class="container-fluid">
        <h1 class="mt-4">Data Kategori</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Kategori Produk E-Farming</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header"><i class="fas fa-edit mr-1"></i>Update Data Kategori E-Farming
            </div>
            <div class="card-body">

                <?php foreach ($tbl_kategori as $kategori) { ?>

                <form method="POST" action="<?php echo base_url().'index.php/Backend/data_kategori_edit_aksi' ?>" enctype="multipart/form-data">

                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Kategori Produk</label>
                                 <input type="hidden" name="id_kategori" class="form-control" value="<?php echo $kategori->id_kategori ?>">
                                <select name="nm_kategori" class="form-control">
                                    <option value="<?php echo $kategori->nm_kategori ?>">~<?php echo $kategori->nm_kategori ?>~</option>
                                    <option value="Sayur">Sayur</option>
                                    <option value="Buah">Buah</option>
                                    <option value="Bahan Pokok">Bahan Pokok</option>
                                </select>
                            </div>
                        </div>
                    </div>


                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Keterangan Produk</label>
                                <textarea name="ket" class="form-control"><?php echo $kategori->ket ?></textarea>  
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