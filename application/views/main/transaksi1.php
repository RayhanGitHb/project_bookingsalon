 <!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<head>
<title>Transaksi</title>
<link rel="icon" type="image/x-icon" href="<?= base_url();?>/assets/main/images/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="<?= base_url(); ?>assets/admin/css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="<?= base_url(); ?>assets/admin/css/style.css" rel='stylesheet' type='text/css' />
<link href="<?= base_url(); ?>assets/admin/css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="<?= base_url(); ?>assets/admin/css/font.css" type="text/css"/>
<link href="<?= base_url(); ?>assets/admin/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="<?= base_url(); ?>assets/admin/js/jquery2.0.3.min.js"></script>
</head>
<body>
<div class="log-w3">
<div class="w3layouts-main">
	<h2>The Mistress Booking</h2>
		<?= form_open_multipart('Main/kirimbukti'); ?>
			<div class="col-lg-12">
			<?= $this->session->flashdata('message') ?>
			</div>
			<div class="col-lg-12">
			<label for="nama">Nama : </label><input type="text" class="ggg" name="nama" id="nama" value="<?= $this->session->userdata('nama'); ?>" readonly>
			</div>
			<div class="col-lg-5">
			<label for="nama">No. Handphone : </label>
			<input type="text" class="ggg" name="no_hp" id="no_hp" value="<?= $this->session->userdata('no_hp'); ?>" readonly>
			</div>
			<div class="col-lg-4">
				<label for="tgl_booking">Tanggal : </label>
				<input type="text" class="ggg" name="tgl_booking" id="tgl_booking" value="<?php $date = $this->session->userdata('tgl_booking');
				$tglbooking = date("d-m-Y", strtotime($date));
				echo $tglbooking;
				?>" readonly>
			</div>
			<div class="col-lg-3">
				<label for="jam">Jam :</label>
				<input type="text" class="ggg" name="jam" id="jam" value="<?= $this->session->userdata('jam');
			?>" readonly>
			</div>
			<div class="col-lg-5">
				<label for="alamat">Alamat : </label>
				<input type="text" class="ggg" name="alamat" id="alamat" value="<?= $this->session->userdata('alamat'); ?>" readonly>
			</div>
			<div class="col-lg-4">
				<label for="jml_kategori">Layanan : </label>
				<input type="text" class="ggg" name="jml_kategori" id="jml_kategori" value="<?= $this->session->userdata('jml_kategori'); ?>" readonly>
			</div>
			<div class="col-lg-6">
				<label for="jml_biaya">Total Pembayaran : 
				<h2>Rp. <?= $this->session->userdata('jml_biaya'); ?></h2>
				</label>
			</div>
			<div class="col-lg-12">
			<a href="<?= base_url(); ?>main/invoice/<?= $this->session->userdata('id_user'); ?>" name ="invoice" class="btn btn-primary">
                     Print Invoice
			</a>
			</div>
			<div class="clearfix"></div>
			<br>
		
		
			<br>
			<div class="col-lg-5">
				<a href="<?= base_url('main'); ?>">Kembali ke Home</a>
			</div>
			
			</div>
			
			
	</form>
<script>
$(document).ready(function(){
    $("input[data-type='number']").keyup(function(event){
      // skip for arrow keys
      if(event.which >= 37 && event.which <= 40){
          event.preventDefault();
      }
      var $this = $(this);
      var num = $this.val().replace(/,/gi, "");
      var num2 = num.split(/(?=(?:\d{3})+$)/).join(",");
      console.log(num2);
      // the following line has been simplified. Revision history contains original.
      $this.val(num2);
  });
});
</script>			
<script src="<?= base_url(); ?>assets/admin/js/bootstrap.js"></script>
<script src="<?= base_url(); ?>assets/admin/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="<?= base_url(); ?>assets/admin/js/scripts.js"></script>
<script src="<?= base_url(); ?>assets/admin/js/jquery.slimscroll.js"></script>
<script src="<?= base_url(); ?>assets/admin/js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="<?= base_url(); ?>assets/admin/js/jquery.scrollTo.js"></script>
</body>
</html>
