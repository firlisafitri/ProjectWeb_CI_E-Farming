<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Category Items</h2>

					<?php
					foreach ($tbl_produk as $produk) {
                    ?>

					<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="<?php echo base_url(); ?>uploads/<?php echo $produk->gambar ?>" alt="" />
											<h2><?php echo $produk->harga ?></h2>
											<p><?php echo $produk->nm_produk ?></p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2><?php echo $produk->harga ?></h2>
												<p><?php echo $produk->nm_produk ?></p>
												<a href="<?php echo base_url().'index.php/Customer/belanja/'.$produk->id_produk.'' ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
										</div>
								</div>
								
							</div>
						</div>
					<?php } ?>
					</div><!--features_items-->
					
					
					
				</div>