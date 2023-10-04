	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active"><?php echo $this->session->userdata('ses_name')?></li>
				</ol>
			</div>
			<div class="table-responsive cart_info">

			<form method="POST" action="<?php echo base_url().'index.php/Customer/checkout_aksi'?>">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td>&nbsp;</td>
							<td class="image">Item</td>
							<td class="description">Nama Produk</td>
							<td class="price">Harga</td>
							<td class="quantity">Jumlah</td>
							<td class="total">Total</td>
							<td class="description">Aksi</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($tbl_belanja as $belanja) { 
						$no_referensi = rand(1,999999);
						?>

						<tr>
							<td><input type="checkbox" name="no_belanja[]" value="<?php echo $belanja->no_belanja ?>">
								<input type="hidden" name="no_referensi" value="<?php echo $no_referensi ?>">
								<input type="hidden" name="id_produk[]" value="<?php echo $belanja->id_produk ?>">
								<input type="hidden" name="id_customer[]" value="<?php echo $belanja->id_customer ?>">
								<input type="hidden" name="jml_belanja[]" value="<?php echo $belanja->jml_belanja ?>">
								<input type="hidden" name="status" value="Belum Dibayar">
							</td>
							<td class="cart_product">
								<a href=""><img src="<?php echo base_url(); ?>uploads/<?php echo $belanja->gambar ?>" width='100' height='100' alt="" /></a>
							</td>
							<td class="cart_description">
								<h4><a href=""><?php echo $belanja->nm_produk ?></a></h4>
								<p>No Belanja: <?php echo $belanja->no_belanja ?></p>
							</td>
							<td class="cart_price">
								<p>Rp.<?php echo $belanja->harga ?></p>
							</td>
							<td class="cart_quantity">
								<p><?php echo $belanja->jml_belanja ?></p>
							</td>
							<td class="cart_total">
								<p class="cart_total_price"><?php echo $belanja->harga * $belanja->jml_belanja ?></p>
								<input type="hidden" name="total[]" value="<?php echo $belanja->harga * $belanja->jml_belanja ?>">
								<input type="hidden" name="tgl_checkout" value="<?php echo date('Y-m-d') ?>">
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="<?php echo base_url().'index.php/Customer/keranjang_delete/'.$belanja->id_belanja.'' ?>"><i class="fa fa-times"></i></a>
							</td>
						</tr>
					<?php } ?>
					</tbody>
				</table>

				<right><button type="submit" class="btn btn-fefault cart"><i class="fa fa-shopping-cart"></i>Checkout</button></right>
			</form>

			</div>
		</div>
	</section> <!--/#cart_items-->