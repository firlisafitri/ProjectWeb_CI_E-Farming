	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h2>Buah-buahan</h2>
									<p>Sumber Vitamin, Berbagai jenis vitamin ada di buah. Sumber Air dan Gizi, buah merupakan salah satu sumber air untuk tubuh dan kebutuhan gizi yang dapat meningkatkan metabolisme tubuh. Sumber antioksidan, buah merupakan salah satu sumber antioksidan alami.</p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="<?php echo base_url().'assets/Frontend/images/home/buah.png'?>" class="girl img-responsive" alt="" />
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h2>Sayur Mayur</h2>
									<p>Sayuran sudah tidak diragukan lagi merupakan sumber serat yang oke banget. Serat baik bagi kesehatan jantung, usus dan bisa mengurangi risiko diabetes. Toppers bisa pilih sayur mana saja yang sesuai dengan selera Toppers, karena hampir semua sayuran memiliki serat. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="<?php echo base_url().'assets/Frontend/images/home/sayur buah.png'?>" class="girl img-responsive" alt="" />
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
									<h2>Bahan Pokok</h2>
									<p>Makanan pokok adalah makanan yang dikonsumsi dalam porsi yang banyak, menjadi sumber karbohidrat, memiliki rasa yang netral, mengenyangkan, dan didapatkan dari hasil alam daerah setempat. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="<?php echo base_url().'assets/Frontend/images/home/bahan pokok.png'?>" class="girl img-responsive" alt="" />
								</div>
							</div>
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->

	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<?php foreach ($tbl_kategori as $kategori) { ?>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="<?php echo base_url().'index.php/Customer/produk_kategori/'.$kategori->id_kategori.'' ?>"><?php echo $kategori->nm_kategori ?></a></h4>
								</div>
							</div>
							<?php } ?>
						</div><!--/category-products-->
						
					
					</div>
					
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>

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
			</div>
		</div>


		
					
	</section>