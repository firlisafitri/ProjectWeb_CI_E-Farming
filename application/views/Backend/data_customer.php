                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Data Customer</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Customer Register</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Tabel Customer E-Farming</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Username</th>
                                                <th>Nama Customer</th>
                                                <th>Email</th>
                                                <th>No Handphone</th>
                                                <th>Alamat</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Username</th>
                                                <th>Nama Customer</th>
                                                <th>Email</th>
                                                <th>No Handphone</th>
                                                <th>Alamat</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($tbl_customer as $cus) {

                                            
                                            ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $cus->username ?></td>
                                                <td><?php echo $cus->nm_customer ?></td>
                                                <td><?php echo $cus->email ?></td>
                                                <td><?php echo $cus->nohp ?></td>
                                                <td><?php echo $cus->alamat ?></td>

                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                
