<body onload="javascript:window.print()" style="margin auto; width: 100%;">
	<div style="margin-left: 10px; margin-right: 10px"></div>

<table style="width: 100%" cellpadding="0" cellspacing="0"> 
	<tr>
		<td align="center"><font size="7">E-Farming</font>  </td>
	</tr>
	<tr>
		<td align="center"><font size="3">Desa Panjalin Kidul</font></td>
	</tr>
</table><br>
<div style="border-bottom: 3px dotted gray"></div><br>
	
<font size="5"><center><u> Kwitansi Pembelian Barang</u></center></font>
<p>&nbsp;</p>
<?php foreach ($tbl_checkout as $checkout)?>
<font size="3">Nama Customer : <?php echo $checkout->nm_customer ?></font><br>
<font size="3">Alamat : <?php echo $checkout->alamat ?></font>

<table width="100%" cellpadding="0" cellspacing="0">
	<tr>
		<td align="center" style="border-left: 1px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-top: 1px solid #000; padding: 3px 5px; background-color: lightgray;">Item</td>
		<td align="center" style="border-left: 1px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-top: 1px solid #000; padding: 3px 5px; background-color: lightgray;">Nama Produk</td>
		<td align="center" style="border-left: 1px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-top: 1px solid #000; padding: 3px 5px; background-color: lightgray;">Harga</td>
		<td align="center" style="border-left: 1px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-top: 1px solid #000; padding: 3px 5px; background-color: lightgray;">Jumlah</td>
		<td align="center" style="border-left: 1px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-top: 1px solid #000; padding: 3px 5px; background-color: lightgray;">Total</td>
	</tr>

<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); 
$tot = array();
$a = 0;
foreach ($tbl_checkout as $checkout) { 
$a++;
$tot[$a] =$checkout->total;
?>

	<tr>
		<td align="center" style="border-left: 1px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-top: 1px solid #000; padding: 3px 5px;"><img src="<?php echo base_url(); ?>uploads/<?php echo $checkout->gambar ?>" width='100' height='100' alt="" /></td>
		<td style="border-left: 1px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-top: 1px solid #000; padding: 3px 5px;"><h4><?php echo $checkout->nm_produk ?></h4>
								<p>No Belanja: <?php echo $checkout->no_belanja ?></p></td>

		<td style="border-left: 1px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-top: 1px solid #000; padding: 3px 5px;"><?php echo "Rp".number_format($checkout->harga,0,',','.').""?></td>

		<td align="center" style="border-left: 1px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-top: 1px solid #000; padding: 3px 5px;"><?php echo $checkout->jml_belanja ?></td>

		<td style="border-left: 1px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-top: 1px solid #000; padding: 3px 5px;"><?php echo "Rp".number_format($checkout->total,0,',','.').""?></td>
	</tr>

<?php } ?>

	<tr>
		<td colspan="4" style="border-left: 1px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-top: 1px solid #000; padding: 3px 5px;">Total Belanja</td>
		<td style="border-left: 1px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-top: 1px solid #000; padding: 3px 5px;"><?php echo "Rp".number_format(array_sum($tot),0,',','.').""?></td>
	</tr>
	<tr>
		<td colspan="4" style="border-left: 1px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-top: 1px solid #000; padding: 3px 5px;">Ongkos Kirim</td>
		<td style="border-left: 1px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-top: 1px solid #000; padding: 3px 5px;">Rp. 10.000</td>
	</tr>
	<tr>
		<td colspan="4" style="border-left: 1px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-top: 1px solid #000; padding: 3px 5px;">Total Bayar</td>
		<?php
		$total = array_sum($tot)+10000;
		?>
		<td style="border-left: 1px solid #000; border-right: 1px solid #000; border-bottom: 1px solid #000; border-top: 1px solid #000; padding: 3px 5px;"><?php echo "Rp".number_format($total) ?>
			
		</td>
	</tr>

</table>
</body>