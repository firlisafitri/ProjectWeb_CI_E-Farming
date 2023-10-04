<main>
    <div class="container-fluid">
        <h1 class="mt-4">Data Kategori</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Kategori Produk E-Farming</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header"><i class="fas fa-edit mr-1"></i>Input Data Kategori E-Farming
            </div>
            <div class="card-body">
                <form method="POST" action="<?php echo base_url().'index.php/Backend/data_kategori_input_aksi' ?>" >

                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Kategori Produk</label>
                                <select name="nm_kategori" class="form-control">
                                    <option>~Pilih Kategori Produk</option>
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
                                <textarea name="ket" class="form-control" placeholder="Masukkan Keterangan Produk"></textarea>  
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