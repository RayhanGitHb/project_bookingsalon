<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<title>Invoice</title>

		<!-- Favicon -->
		<link rel="icon" type="image/x-icon" href="<?= base_url();?>/assets/main/images/favicon.ico">

		<!-- Invoice styling -->
		<style>
			body {
				font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
				text-align: center;
				color: #777;
			}

			body h1 {
				font-weight: 300;
				margin-bottom: 0px;
				padding-bottom: 0px;
				color: #000;
			}

			body h3 {
				font-weight: 300;
				margin-top: 10px;
				margin-bottom: 20px;
				font-style: italic;
				color: #555;
			}

			body a {
				color: #06f;
			}

			.invoice-box {
				max-width: 800px;
				margin: auto;
				padding: 30px;
				border: 1px solid #eee;
				box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
				font-size: 16px;
				line-height: 24px;
				font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
				color: #555;
			}

			.invoice-box table {
				width: 100%;
				line-height: inherit;
				text-align: left;
				border-collapse: collapse;
			}

			.invoice-box table td {
				padding: 5px;
				vertical-align: top;
			}

			.invoice-box table tr td:nth-child(2) {
				text-align: right;
			}

			.invoice-box table tr.top table td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.top table td.title {
				font-size: 45px;
				line-height: 45px;
				color: #333;
			}

			.invoice-box table tr.information table td {
				padding-bottom: 40px;
			}

			.invoice-box table tr.heading td {
				background: #eee;
				border-bottom: 1px solid #ddd;
				font-weight: bold;
			}

			.invoice-box table tr.details td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.item td {
				border-bottom: 1px solid #eee;
			}

			.invoice-box table tr.item.last td {
				border-bottom: none;
			}

			.invoice-box table tr.total td:nth-child(2) {
				border-top: 2px solid #eee;
				font-weight: bold;
			}

			@media only screen and (max-width: 600px) {
				.invoice-box table tr.top table td {
					width: 100%;
					display: block;
					text-align: center;
				}

				.invoice-box table tr.information table td {
					width: 100%;
					display: block;
					text-align: center;
				}
			}
		</style>
	</head>
<script>
function calcAndShowTotal() {
  var total = 0;
  $('#salon :checkbox:checked').each(function() {
    total += parseFloat($(this).attr('price')) || 0;
  });
  $('#total').val(total);
}

$('#salon :checkbox').change(calcAndShowTotal).change();
</script>

	<body onload="window.print()">
		<div class="invoice-box">
			<table>
				<tr class="top">
					<td colspan="2">
						<table>
							<tr>
								<td class="title">
									<img src="<?= base_url();?>/assets/admin/images/logo.png" alt="Company logo" style="width: 100%; max-width: 300px" />
								</td>

								<td>
								<script  type="text/javascript">
									var today = new Date();
									var dd = String(today.getDate()).padStart(2, '0');
									var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
									var yyyy = today.getFullYear();

									today = dd + '/' + mm + '/' + yyyy;
									document.write(today);
								</script>
								</td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="information">
					<td colspan="2">
						<table>
							<tr>
								<td>
									The Mistress Salon, Inc.<br />
									Jl. Tanuwijaya No.4, Empangsari<br />
									Kec. Tawang, Kota Tasikmalaya, Jawa Barat 46113
								</td>

								<td>
									<br />
									<br />
									admin@themistress.com
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<?php 
				foreach($booking as $bk) : ?>
				<tr class="heading">
					<td>Identitas :</td>
					<td></td>

				</tr>
				
				<tr class="item">
					<td>Nama</td>

					<td><?= $bk['nama']; ?></td>
				</tr>
				<tr class="item">
					<td>No Handphone</td>

					<td><?= $bk['no_hp']; ?></td>
				</tr>
				<tr class="item">
					<td>Alamat</td>

					<td><?= $bk['alamat']; ?></td>
				</tr>
				<tr class="item">
					<td>Tanggal Booking</td>

					<td><?php $date = $bk['tgl_booking'];
				$tglbooking = date("d-m-Y", strtotime($date));
				echo $tglbooking;
				?></td>
				</tr>
				<tr class="item">
					<td>Jam Booking</td>

					<td><?= $bk['jam']; ?></td>
				</tr>
				<?php endforeach; ?>
				<tr class="heading">
					<td>List Kategori Booking :</td>

					<td>Biaya</td>
				</tr>
				<?php 
				foreach($kategori as $kt): ?>
				<tr class="item last">
					<td><?= $kt['kategori']; ?></td>

					<td>Rp.<?= $kt['harga']; ?></td>
					
				</tr>
				<?php endforeach; ?>

				<tr class="total">
					<td></td>
					<?php 
					foreach($booking as $bk) : ?>
					<td>Total: Rp.<?= $bk['jml_biaya']; ?></td>
					<?php endforeach; ?>
				</tr>
				<tr class="heading">
					<?php 
					foreach($booking as $bk) : ?>
					<td>
					Status :
					<?php
						$status = $bk['bukti_pembayaran'];
						if ($status != "default_bukti.jpg") {
						  echo "Sudah Dibayar";
						} else {
						  echo "Belum dibayar";
						}
						?>
						</td>
					<?php endforeach; ?>
					<td></td>

				</tr>
			</table>
		</div>
	</body>
</html>
