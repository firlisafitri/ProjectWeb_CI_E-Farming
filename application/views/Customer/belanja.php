<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				
			</div>
		</div>
</section><!--/slider-->

<section>
		<div class="container">
			<div class="row">
				
				<form method="POST" action="<?php echo base_url().'index.php/Customer/belanja_input_aksi'?>">
				<?php foreach ($tbl_produk as $produk) 
				$no_belanja = 'EC-'.rand(1,99999).'';
				$tgl = date('Y-m-d');
				$cus = $this->session->userdata('ses_id_cus');
				{ ?>
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>

					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img src="<?php echo base_url(); ?>uploads/<?php echo $produk->gambar ?>" alt="" />
							</div>

						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<h2><?php echo $produk->nm_produk ?></h2>
								<p>Kode Produk: <?php echo $produk->kd_produk ?></p>
								<img src="<?php echo base_url().'assets/Frontend/images/product-details/rating.png'?>" alt="" />
								<span>
									<span>RP.<?php echo $produk->harga ?></span>
									<label>Quantity:</label>
									<input type="hidden" name="no_belanja" value="<?php echo $no_belanja?>" />
									<input type="hidden" name="tgl_belanja" value="<?php echo $tgl?>" />
									<input type="hidden" name="id_produk" value="<?php echo $produk->id_produk?>" />
									<input type="hidden" name="id_customer" value="<?php echo $cus?>" />
									<input type="text" name="jml_belanja"/>
									<button type="submit" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i>Add to cart
									</button>
								</span>
								<p><b>Kesediaan Stok:</b> <?php echo $produk->stok ?></p>
								<p><b>Keterangan:</b> <?php echo $produk->ket ?></p>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					
					</div><!--features_items-->
					
					
					
				</div>
				<?php } ?>
				</form>
			</div>
		</div>	
	</section>
	