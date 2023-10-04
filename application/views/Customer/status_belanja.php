	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active"><?php echo $this->session->userdata('ses_name')?></li>
				</ol>
			</div>
			<div class="table-responsive cart_info">

			<form method="POST" action="<?php echo base_url().'index.php/Customer/cetak_kwitansi'?>" target="_Blank">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description">Nama Produk</td>
							<td class="price">Harga</td>
							<td class="quantity">Jumlah</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						<?php
						error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); 
						$tot = array();
						$a = 0;
						foreach ($tbl_checkout as $checkout) { 
						$a++;
						$tot[$a] =$checkout->total;
						?>
           

						<tr>

							<td class="cart_product">
								<a href=""><img src="<?php echo base_url(); ?>uploads/<?php echo $checkout->gambar ?>" width='100' height='100' alt="" /></a>
							</td>
							<td class="cart_description">
								<h4><a href=""><?php echo $checkout->nm_produk ?></a></h4>
								<p>No Belanja: <?php echo $checkout->no_belanja ?></p>
							</td>
							<td class="cart_price">
								<p><?php echo "Rp".number_format($checkout->harga,0,',','.').""?></p>
							</td>
							<td class="cart_quantity">
								<p align="center"><?php echo $checkout->jml_belanja ?></p>
							</td>
							<td class="cart_total">
								<p class="cart_total_price"><?php echo "Rp".number_format($checkout->total,0,',','.').""?></p>
							</td>
						</tr>
					<?php } ?>
					<tr>
						<td class="cart_description" colspan="3" rowspan="3" align="center">
							<h4>Status Belanja Anda : <b><?php echo $checkout->status ?></b> </h4>
						</td>
						<td class="cart_description" align="left">
							<h4>Total Belanja</h4>
						</td>
						<td class="cart_total">
							<p class="cart_total_price"><?php echo "Rp".number_format(array_sum($tot),0,',','.').""?></p>
						</td>
					</tr>
					<tr>
						<td class="cart_description" align="left">
							<h4>Ongkos Kirim</h4>
						</td>
						<td class="cart_total">
							<p class="cart_total_price">Rp. 10.000</p>
						</td>
					</tr>
					<tr>
						<td class="cart_description" align="center">
							<h4>Total Bayar</h4>
						</td>
						<td class="cart_total">
							<?php
							$total = array_sum($tot)+10000;
							?>
							<p class="cart_total_price"><?php echo "Rp".number_format($total) ?></p>
						</td>
					</tr>
					
				</tbody>
				</table>

				<button type="submit" class="btn btn-fefault cart"><i class="fa fa-shopping-cart"></i>Cetak Kwitansi</button>
				
				
			</form>

			</div>
		</div>
	</section> <!--/#cart_items-->