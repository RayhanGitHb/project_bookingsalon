 <!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

 <!DOCTYPE html>
 <html>

 <head>
     <title>The Mistress | Beauty Salon </title>
	 <link rel="icon" type="image/x-icon" href="<?= base_url();?>/assets/main/images/favicon.ico">
     <link href="<?= base_url(); ?>assets/main/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
     <!-- Custom Theme files -->
     <script src="<?= base_url(); ?>assets/main/js/jquery.min.js"></script>
     <!--theme-style-->
     <link href="<?= base_url(); ?>assets/main/css/style.css" rel="stylesheet" type="text/css" media="all" />
     <!--//theme-style-->
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
     <meta name="keywords" content="Innate Responsive web template, Bootstrap Web Templates, Flat Web Templates, AndroId Compatible web template, 
 Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
     <script type="application/x-javascript">
         addEventListener("load", function() {
             setTimeout(hideURLbar, 0);
         }, false);

         function hideURLbar() {
             window.scrollTo(0, 1);
         }
     </script>
	 
     <script src="<?= base_url(); ?>assets/main/js/bootstrap.min.js"></script>
     <script type="text/javascript" src="<?= base_url(); ?>assets/main/js/move-top.js"></script>
     <script type="text/javascript" src="<?= base_url(); ?>assets/main/js/easing.js"></script>
     <script type="text/javascript">
         jQuery(document).ready(function($) {
             $(".scroll").click(function(event) {
                 event.preventDefault();
                 $('html,body').animate({
                     scrollTop: $(this.hash).offset().top
                 }, 1000);
             });
         });
     </script>
	 
	 <!--CheckboxChecker-->
	 <script type="text/javascript">
        jQuery(function ($) {
			//form submit handler
			$('#booking').submit(function (e) {
				//check atleat 1 checkbox is checked
				if (!$('.categoryselect').is(':checked')) {
					//prevent the default form submit if it is not checked
					e.preventDefault();
				}
			})
		})
     </script>
	 
	 
	 <!--datepicker-->


     <!----start-top-nav-script---->

     <script type="text/javascript" src="<?= base_url(); ?>assets/main/js/modernizr.custom.js"></script>
     <!--animate-->
     <link href="<?= base_url(); ?>assets/main/css/animate.css" rel="stylesheet" type="text/css" media="all">
     <script src="<?= base_url(); ?>assets/main/js/wow.min.js"></script>
     <script>
         new WOW().init();
     </script>
     <!--//end-animate-->

 </head>

 <body>
     <!--header-->
     <div class="header agileits w3layouts" id="home">
         <div class="container w3layouts">
             <div class="head agileits">
                 <nav class="navbar aits navbar-default">
                     <!-- Brand and toggle get grouped for better mobile display -->
                     <div class="wthree navbar-header">
                         <button type="button" class="navbar-toggle agile collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                             <span class="sr-only w3ls">Toggle navigation</span>
                             <span class="icon-bar aits"></span>
                             <span class="icon-bar w3l"></span>
                             <span class="icon-bar aits"></span>
                         </button>
                         <div class="navbar-brand logo w3layouts wow fadeInLeft animated" data-wow-delay=".5s">
                             <h1><a class="agileits" href="<?= base_url('');?>">The<br><span>Mistress</span><br>Salon</a></h1>
                         </div>
                     </div>

                     <!-- Collect the nav links, forms, and other content for toggling -->
                     <div class="collapse navbar-collapse agileits w3layouts nav-wil" id="bs-example-navbar-collapse-1">
                         <ul class="nav navbar-nav wow fadeInDown agileits w3layouts animated" data-wow-delay=".5s">
                             <li><a href="#home" class="scroll agileits w3layouts"><span data-hover="Home">Home</span></a> </li>
                             <li><a href="#about" class="agileits w3layouts scroll"><span data-hover="About">About</span> </a> </li>
                             <li><a href="#gallery" class="scroll agileits w3layouts"><span data-hover="Gallery">Category</span></a></li>
                             <li><a href="#services" class="scroll agileits w3layouts"><span data-hover="Services">Services</span> </a></li>
                             <li><a href="#team" class="scroll agileits w3layouts"><span data-hover="Team">Team</span> </a></li>
							 <li><a href="<?= base_url('auth') ?>" class="agileits w3layouts"><span data-hover="Team">Halaman Admin</span> </a></li>
                         </ul>
                     </div><!-- /.navbar-collapse -->
                 </nav>

             </div>
             <div class="banner agileits w3layouts">

                 <section class="wrapper wow agileits w3layouts fadeInUp animated" data-wow-delay=".5s">
                     <h2>Cantik adalah impian setiap manusia.</h2>
                     <h3 class="sentence agileits w3layouts"> Kecantikan adalah
                         <div class="popEffect agileits w3layouts">
                             <span>Musik Yang Terlihat</span>
                             <span>Kekuatan.</span>
                             <span>Kesenangan abadi.</span>
							 <span>Kepercayaan Diri.</span>
							 <span>The Mistress.</span>
                         </div>
                     </h3>
                 </section>
				 <a  href="#booking" class="scroll agileits w3layoutsagileits w3layouts scroll hvr-rectangle-out agileits w3layouts  fadeInDown animated" data-wow-delay=".2s"><h4 style="color:white"><strong>Booking Online</strong></h4> </a>
				 <br>
                 <a href="#about" class="agileits w3layouts scroll hvr-rectangle-out agileits w3layouts wow fadeInDown animated" data-wow-delay=".5s">Baca Selanjutnya Disini</a>
             </div>
             </div>
         </div>
     </div>

     <!--about-->
     <div class="content agileits w3layouts">
         <div class="container agileits w3layouts">
             <div class="col-top agileits w3layouts" id="about">
                 <h3>Selamat Datang di The Mistress Salon</h3>
             </div>
             <!---->
             <div class="tab-head agileits w3layouts">
                 <nav class="col-md-6 nav-sidebar wow agileits w3layouts fadeInLeft animated" data-wow-delay=".5s">
                     <ul class="nav agileits w3layouts tabs">
                         <li class="active agileits w3layouts"><a href="#tab1" data-toggle="tab"><span class="glyphicon agileits w3layouts glyphicon-leaf " aria-hidden="true"></span>Apa itu The Mistress?</a></li>
                         <li class=""><a href="#tab2" data-toggle="tab"><span class="glyphicon agileits w3layouts glyphicon-heart-empty" aria-hidden="true"></span>Kenapa Harus The Mistress?</a></li>
                         <li class=""><a href="#tab3" data-toggle="tab"><span class="glyphicon agileits w3layouts glyphicon-map-marker" aria-hidden="true"></span>Temukan Kami</a></li>
 
                     </ul>
                 </nav>
                 <div class="col-md-6 tab-content wow fadeInRight animated" data-wow-delay=".5s">
			<div class=" tab-pane active text-style" id="tab1">
                     <div class="facts">
                         <span class="glyphicon glyphicon-leaf" aria-hidden="true"></span>
                         <h4>The Mistress Salon</h4>
						 <p> Kalau dari Arti dan makna mistress dalam istilah Kamus Bahasa Inggris: kb. 1 nyonya rumah. 2 kekasih, gundik. 3 nyonya. Maksudnya, Setiap pelanggan yang akan berkunjung ke salon The Mitress akan diperlakukan layaknya seorang <i>Mistress</i>.</p>
                         

                     </div>
                 </div>
                 <div class="tab-pane  text-style" id="tab2">
                     <div class="facts">
                         <span class="glyphicon glyphicon-heart-empty" aria-hidden="true"></span>
                         <h4>Alasan The Mistress Salon</h4>
                         <p> The Mistress Salon merupakan salon yang memiliki fasilitas unik yaitu Layanan Booking dan Layanan Home Salon. The Mistress Salon juga bertempat di lokasi yang strategis sehingga mudah terjangkau oleh siapapun.</p>

                     </div>
                 </div>
                 <div class="tab-pane  text-style" id="tab3">
                     <div class="facts">
                         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d571.4990971612489!2d108.22681003326451!3d-7.328396129122246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f575ac796e5bd%3A0x1266496f1d655684!2sUniversitas%20Bina%20Sarana%20Informatika!5e0!3m2!1sen!2sid!4v1636903456628!5m2!1sen!2sid" width="500" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                     </div>
                 </div>
                 

             </div>
             <div class="clearfix"></div>
         </div>
     </div>

     <!--Gallery-->
	 <!--Gallery-->
	 <!--Gallery-->
     <div class="portfolio" id="gallery">

        <div class="portfolio-top wow fadeInDown animated" data-wow-delay=".5s">
			<?php
			  $gallery_a = 1;
			  $gallery_b = 1; 
			 foreach($list_kategori as $lk) : ?>
			 <div class=" col-md-3 grid grid-wi slideanim">
             <figure class="effect-jazz">
                 <a href="#<?= $gallery_a++; ?>" data-toggle="modal">

                     <img src="<?= base_url('/assets/main/images/layanan/').$lk['gambar'];?>" alt="layanan" class="img" width="300" height="400" />
                     <figcaption>
                        <h4> <?= $lk['kategori']; ?></h4>
                             <p> Biaya : Rp. <?= $lk['harga']; ?>. </p>
							 <p>Klik Untuk Lebih Jelasnya</p>
                     </figcaption>
                 </a>
             </figure>
         </div>
             
			<?php endforeach; ?>
			
         <div class="clearfix"></div>
		</div>
		
        
     </div>
     <!---->



     <!-- Portfolio Modals -->

     <?php
			  $gallery_a = 1;
			  $gallery_b = 1; 
			 foreach($list_kategori as $lk) : ?>
	 <div class="portfolio-modal modal fade slideanim" id="<?= $gallery_a++; ?>" tabindex="-1" role="dialog" aria-hidden="true">
         <div class="modal-content">
             <div class="close-modal" data-dismiss="modal">
                 <div class="lr">
                     <div class="rl"></div>
                 </div>
             </div>
             <div class="container">

                 <div class="col-lg-8 col-lg-offset-2">
                     <div class="modal-body">
                         <h3><?= $lk['kategori']; ?></h3>
						 <img src="<?= base_url('/assets/main/images/layanan/').$lk['gambar'];?>" alt="layanan" class="img-responsive" />
                         <p style="font-size:160%;"><?= $lk['deskripsi']; ?></p>
                     </div>
                 </div>

             </div>
         </div>
     </div>
	 <?php endforeach; ?>
     
     
    
	 
		 <!--Model Submit-->
							 <div class="portfolio-modal modal fade slideanim" id="bookingmodal" tabindex="-1" role="dialog" aria-hidden="true">
								 <div class="modal-content">
									 <div class="close-modal" data-dismiss="modal">
										 <div class="lr">
											 <div class="rl"></div>
										 </div>
									 </div>
									 <div class="container">
										 <div class="col-lg-8 col-lg-offset-2">
											 <div class="modal-body">
												 <h3>Booking Online</h3>
												 <br>
												<form action="<?= base_url(); ?>/main/booking" method="post">
													<div class="form-group">
														<div class="col-xs-3">
														<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap">
														</div>	
													</div>
													
													<label class="hvr-rectangle-out agileits w3layouts">
														<input type="submit" value="Send" >
													</label>
														<input type="submit" value="Send" >
												 </form>
											 </div>
										 </div>
									 </div>

								 </div>
							 </div>
						 
     <!-- /Portfolio Modals -->


     <!--Services-->
     <div class="container">
         <div class="services" id="services">
             <h3>Services</h3>
             <div class="ser-grid ">
                 <div class="col-md-4 ser-top wow fadeInLeft animated" data-wow-delay=".5s">
                     <h5>OTS</h5>
                     <p><b>On The Spot Langsung Datang Ke Salon<b></p>
                     <span class="glyphicon glyphicon-scissors" aria-hidden="true"></span>
                 </div>
                 <div class="col-md-4 ser-top wow fadeInUp animated" data-wow-delay=".5s">
                     <h5>Booking Online</h5>
                     <p><b>The Mistress punya fasilitas booking online lho</b><br> 
                     <span class="glyphicon glyphicon-book" aria-hidden="true"></span>
                 </div>
                 <div class="col-md-4 ser-top wow fadeInRight animated" data-wow-delay=".5s">
                     <h5>Home Salon</h5>
                     <p><b>Coming Soon... </b></p>
                     <span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>
                 </div>
                 <div class="clearfix"></div>
             </div>
         </div>
     </div>
     <!---->

     <!--Testimoni-->
     <div class="test">
         <div class="container">
             <h3>Testimonials</h3>
             <div class="test-top">
                 <div class="col-md-6 test-top1 test-to wow fadeInUp animated" data-wow-delay=".5s">
                     <div class=" test-top2">
                         <p><i>Aku sebenarnya suka bngtt mekappnyaa. Tahan seharian pdhl dipake foto dari pagi ampe malem. Ga ada crack sama sekali, ttp flawless bahkan pas seharian foto outdoor. Flawlessnya itu kulit khususnya di area pipi halus banget cem bayi</i></p>
                         <img src="<?= base_url(); ?>assets/main/images/qu.png" alt="">
                         <div class="clearfix"> </div>
                     </div>
                     <div class="test-top3">
                         <img src="<?= base_url(); ?>assets/main/images/th.jpg" class="img-responsive" alt="">
                         <h6> Costumer</h6>
                         <div class="clearfix"> </div>
                     </div>
                 </div>
                 <div class="col-md-6 test-top1 wow fadeInDown animated" data-wow-delay=".5s">
                     <div class=" test-top2">
                         <p><i>Salon yang memiliki fasilitas bagus. Mulai dari Salonnya yang bersih, rapi, nyaman, sampai fasilitas booking yang berjalan memudahkan pelanggan tanpa perlu pusing memesan di salon. Rekomended banget bagi yang belum pernah salon.</i></p>
                         <img src="<?= base_url(); ?>assets/main/images/qu.png" alt="">
                         <div class="clearfix"> </div>
                     </div>
                     <div class=" test-top3">
                         <img src="<?= base_url(); ?>assets/main/images/th1.jpg" class="img-responsive" alt="">
                         <h6> Costumer</h6>
                         <div class="clearfix"> </div>
                     </div>
                 </div>
                 <div class="clearfix"> </div>
             </div>
         </div>
     </div>
	 
     <!--Booking Menu-->
     <div class="advantage" id="booking">
         <div class="container">
             <div class="advantage-top">
                 <h3>Booking Layanan</h3>
                 <p>Silahkan Isi Data dibawah untuk Booking.</p>
             </div>
			 </br>
			 <div class="col-md-6 agileits w3layouts contact-top">
			<form id="booking" method="post" action="<?= base_url('main/tambah'); ?>">			
				<div class="row">
					<div class="col-md-6">
					<input type="text" placeholder="Nama Lengkap" name="nama" id="nama" required="" >	
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-5">
					<input type="text" placeholder="No. Hp" name="nohp" id="nohp" required="" >	
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-7">
					<input type="text" placeholder="Alamat Rumah" name="alamat" id="alamat" required="" >	
					</div>
				</div>

				<div class="row">
					<div class="col-md-5">
						<div class="form-group">
						<p>Isi Tanggal Booking</p>
							<input min='2021-12-30' max='2022-12-12' type="date" class="form-control " placeholder="Tanggal Booking" name="tglbooking" id="tglbooking">
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-5">
						<div class="form-group">
							<label for="jam">Pilih jam:</label>
							<select name="jam" id="jam">
								<option value="09.00">09.00</option>
								<option value="10.00">10.00</option>
								<option value="11.00">11.00</option>
								<option value="13.00">13.00</option>
								<option value="14.00">14.00</option>
								<option value="16.00">16.00</option>
								<option value="17.00">17.00</option>
							</select>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-6">
					Total Biaya (Rp)
					<input type="text" placeholder="Total Biaya (Rp)" id="total" name="total" readonly>	
					</div>
				</div>
					
				
				<label class="hvr-rectangle-out agileits w3layouts">
						<input type="submit" value="Booking" name="save" onclick="return confirm('Apa anda sudah yakin?');">
				</label>		
										
			</div>
			
			<div id="salon" class="col-md-6 agileits w3layouts contact-top">						
					<div class="row">
					<br>
					<p>Pilih Kategori </p>
					<?php
					$ceklis_a = 1; 
					$ceklis_b = 1; 
					foreach($list_kategori as $lk) : ?>
						<div class="col-md-3">
							<div class="custom-control custom-checkbox image-checkbox">
								<input type="checkbox" class="custom-control-input categoryselect" id="a<?= $ceklis_a++; ?>" price="<?= $lk['harga']; ?>" name="kategori[]" value="<?= $lk['kategori']; ?>">
								<label class="custom-control-label" for="a<?= $ceklis_b++; ?>">
									<?= $lk['kategori']; ?> <br><img src="<?= base_url('/assets/main/images/layanan/').$lk['gambar'];?>" alt="#" class="img-fluid " width="135" height="125"/>
								</label>
							</div>
						</div>
					<?php endforeach; ?>	
					</div>			
				</div>
			</form>	
         </div>
     </div>
	 
    <!--/Booking Menu-->
	
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
	 
     <!--Team-->
	
	<div class="our-team" id="team">
         <div class="container">
			 <h3>Our Team</h3>
             <div class="team">
                 <?php foreach($karyawan as $kry) : ?>
				 <div class="col-md-6 team-grid wow fadeInLeft animated" data-wow-delay=".5s">
					 <div class="team-1">
                         <div class="col-md-5 col-1 ">
                             <img src="<?= base_url('/assets/admin/images/profile/').$kry['profil'];?>" alt="#" class="img-fluid" width="220" height="280"/>
                         </div>
                         <div class="col-md-7 col-1-at">
                             <h5><?= $kry['nama']; ?></h5>
                             
                             <p>No. HP : <?= $kry['no_hp']; ?></p>
							 <p>Email  : <?= $kry['email']; ?></p>
							 <p>Alamat : <?= $kry['alamat']; ?></p>
                         </div>
                         <div class="clearfix"> </div>
                     </div>
                 </div>
				 <?php endforeach; ?>
                 

                 <div class="clearfix"> </div>
             </div>
			
         </div>
     </div>

     <!--Client-->
     <div class="clients">
         <div class="container">
             <h3>Visi & Misi</span></h3>
             <!---->
             <!-- requried-jsfiles-for owl -->
             <link href="<?= base_url(); ?>assets/main/css/owl.carousel.css" rel="stylesheet">
             <script src="<?= base_url(); ?>assets/main/js/owl.carousel.js"></script>
             <script>
                 $(document).ready(function() {
                     $("#owl-demo1").owlCarousel({
                         items: 1,
                         lazyLoad: true,
                         autoPlay: true,
                         navigation: true,
                         navigationText: true,
                         pagination: false,
                     });
                 });
             </script>
             <!-- //requried-jsfiles-for owl -->
             <!-- start content_slider -->
             <div id="owl-demo1" class="owl-carousel agileits w3layouts wow fadeInDown animated" data-wow-delay=".5s">
                 <div class="item-bottom agileits w3layouts">
                     <div class="item-right agileits w3layouts">
                         <p>Memberikan pelayanan kecantikan rambut, wajah dan tubuh dengan mengedepankan kepuasan pelanggan
Menjadikan The Mistress Salon unggul dalam pelayanan
Menjadikan The Mistress Salon sebagai barometer salon kecantikan di Indonesia</p>
                         <span>Visi The Mistress Salon</span>
                     </div>
                 </div>
                 <div class="item-bottom agileits w3layouts">
                     <div class="item-right agileits w3layouts">
                         <p>Menggunakan produk berkualitas aman dan teruji dalam memberikan pelayanan
Menjaga komitmen dan kreatifitas pelayanan
Menjamin kepuasan pelanggan melalui layanan terbaik
Menggunakan tenaga ahli profesional
Menggunakan peralatan salon yang modern dengan standar internasional
Menggunakan riset tentang dunia kecantikan secara terus menerus</p>
                         <span>Misi The Mistress Salon</span>
                     </div>
                 </div>

             </div>
         </div>
     </div>

     <!---->

     <!---->
     </div>

     </div>
     <!--//content-->
     <!--//footer-->
     <div class="footer agileits w3layouts">

         <div class="container">
             
             <p class="footer-class">&copy; 2021 The Mistress. All Rights Reserved To W3layout. </p>

         </div>

     </div>
     <!--//footer-->
     <script type="text/javascript">
         $(document).ready(function() {
             /*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/

             $().UItoTop({
                 easingType: 'easeOutQuart'
             });

         });
     </script>
	 
     <a href="#" id="toTop" class="agileits w3layouts" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	 <script src="<?= base_url(); ?>assets/main/js/bootstrap-datepicker.min.js"></script>
	 <script src="<?= base_url(); ?>assets/main/js/custom.js"></script>
	 <script>
    $(document).ready(function(){
        setDatePicker()
        setDateRangePicker(".startdate", ".enddate")
        setMonthPicker()
        setYearPicker()
        setYearRangePicker(".startyear", ".endyear")
    })
    </script>


 </body>

 </html>