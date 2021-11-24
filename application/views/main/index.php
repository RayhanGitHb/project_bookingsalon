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
	 
	 <!--datepicker-->
	 <link href="<?= base_url(); ?>assets/main/css/bootstrap-datepicker.min.css" rel="stylesheet">
	 

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
                             <li><a href="#gallery" class="scroll agileits w3layouts"><span data-hover="Gallery">Gallery</span></a></li>
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
                     <h3 class="sentence agileits w3layouts"> Cantik itu
                         <div class="popEffect agileits w3layouts">
                             <span>sample.</span>
                             <span>clean.</span>
                             <span>dummy.</span>
                             <span>text.</span>
                         </div>
                     </h3>
                 </section>
				 
                 <a href="#about" class="agileits w3layouts scroll hvr-rectangle-out agileits w3layouts wow fadeInDown animated" data-wow-delay=".5s">Baca Selanjutnya Disini</a>
             </div>
             </div>
         </div>
     </div>

     <!--about-->
     <div class="content agileits w3layouts">
         <div class="container agileits w3layouts">
             <div class="col-top agileits w3layouts" id="about">
                 <h3>Selamat Datang di The Mistress </h3>
                 <p>The Mistress adalah Salon Kecantikan yang </p>
             </div>
             <!---->
             <div class="tab-head agileits w3layouts">
                 <nav class="col-md-6 nav-sidebar wow agileits w3layouts fadeInLeft animated" data-wow-delay=".5s">
                     <ul class="nav agileits w3layouts tabs">
                         <li class="active agileits w3layouts"><a href="#tab1" data-toggle="tab"><span class="glyphicon agileits w3layouts glyphicon-home" aria-hidden="true"></span>Lorem Ipsum has</a></li>
                         <li class=""><a href="#tab2" data-toggle="tab"><span class="glyphicon agileits w3layouts glyphicon-heart-empty" aria-hidden="true"></span>At vero eos et</a></li>
                         <li class=""><a href="#tab3" data-toggle="tab"><span class="glyphicon agileits w3layouts glyphicon-leaf" aria-hidden="true"></span>On the other hand</a></li>
 
                     </ul>
                 </nav>
                 <div class="col-md-6 tab-content wow fadeInRight animated" data-wow-delay=".5s"">
			<div class=" tab-pane active text-style" id="tab1">
                     <div class="facts">
                         <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                         <h4>Lorem Ipsum has</h4>
                         

                     </div>
                 </div>
                 <div class="tab-pane  text-style" id="tab2">
                     <div class="facts">
                         <span class="glyphicon glyphicon-heart-empty" aria-hidden="true"></span>
                         <h4> At vero eos et</h4>
                         <p> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour
                             , or randomised words which don't look even slightly believable.There are many variations .</p>

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
     <div class="portfolio" id="gallery">

         <div class="portfolio-top wow fadeInDown animated" data-wow-delay=".5s">

             <div class="col-md-4 grid slideanim">
                 <figure class="effect-jazz">
                     <a href="#portfolioModal1" data-toggle="modal">

                         <img src="<?= base_url(); ?>assets/main/images/layanan/rambut.jpg" alt="img25" class="img-responsive" />
                         <figcaption>
                             <h4> Cream Bath</h4>
                             <p> Biaya : Rp. 50.000. </p>
							 <p>Klik disini untuk lebih lengkap...</p>
                         </figcaption>
                     </a>
                 </figure>
             </div>
             <div class="col-md-4 grid slideanim">
                 <figure class="effect-jazz">
                     <a href="#portfolioModal2" data-toggle="modal">

                         <img src="<?= base_url(); ?>assets/main/images/layanan/makeup.jpg" alt="img25" class="img-responsive" />
                         <figcaption>
                             <h4> Make Over</h4>
                             <p> Biaya : Rp. 80.000. </p>
							 <p>Klik disini untuk lebih lengkap...</p>
                         </figcaption>
                     </a>
                 </figure>
             </div>
             <div class="col-md-4 grid slideanim">
                 <figure class="effect-jazz">
                     <a href="#portfolioModal3" data-toggle="modal">

                         <img src="<?= base_url(); ?>assets/main/images/layanan/pijatlulur.jpg" alt="img25" class="img-responsive" />
                         <figcaption>
                             <h4> Pijat Lulur</h4>
                             <p> Biaya : Rp. 100.000. </p>
							 <p>Klik disini untuk lebih lengkap...</p>
                         </figcaption>
                     </a>
                 </figure>
             </div>

             <div class="clearfix"></div>
         </div>
         <div class="portfolio-top wow fadeInUp animated" data-wow-delay=".5s"">
			<div class=" col-md-3 grid grid-wi slideanim">
             <figure class="effect-jazz">
                 <a href="#portfolioModal4" data-toggle="modal">

                     <img src="<?= base_url(); ?>assets/main/images/layanan/kuku.jpg" alt="img25" class="img-responsive" />
                     <figcaption>
                        <h4> Pedicure</h4>
                             <p> Biaya : Rp. 75.000. </p>
							 <p>Klik Gambar</p>
                     </figcaption>
                 </a>
             </figure>
         </div>
         <div class="col-md-3 grid grid-wi slideanim">
             <figure class="effect-jazz">
                 <a href="#portfolioModal5" data-toggle="modal">

                     <img src="<?= base_url(); ?>assets/main/images/layanan/rambut2.jpg" alt="img25" class="img-responsive" />
                     <figcaption>
                         <h4> Hair Styling</h4>
                             <p> Biaya : Rp. 50.000. </p>
							 <p>Klik Gambar</p>
                     </figcaption>
                 </a>
             </figure>
         </div>
         <div class="col-md-3 grid grid-wi slideanim">
             <figure class="effect-jazz">
                 <a href="#portfolioModal6" data-toggle="modal">

                     <img src="<?= base_url(); ?>assets/main/images/layanan/wajah.jpg" alt="img25" class="img-responsive" />
                     <figcaption>
                        <h4> Face Masking</h4>
                             <p> Biaya : Rp. 55.000. </p>
							 <p>Klik Gambar</p>
                     </figcaption>
                 </a>
             </figure>
         </div>
         <div class="col-md-3 grid grid-wi slideanim">
             <figure class="effect-jazz">
                 <a href="#portfolioModal7" data-toggle="modal">
                     <img src="<?= base_url(); ?>assets/main/images/layanan/waxing.jpg" alt="img25" class="img-responsive" />
                     <figcaption>
                         <h4> Waxing</h4>
                             <p> Biaya : Rp. 90.000. </p>
							 <p>Klik Gambar</p>
                     </figcaption>
                 </a>
             </figure>
         </div>
         <div class="clearfix"></div>
     </div>
     </div>
     <!---->

     <!-- Portfolio Modals -->
     <div class="portfolio-modal modal fade slideanim" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
         <div class="modal-content">
             <div class="close-modal" data-dismiss="modal">
                 <div class="lr">
                     <div class="rl"></div>
                 </div>
             </div>
             <div class="container">

                 <div class="col-lg-8 col-lg-offset-2">
                     <div class="modal-body">
                         <h3>Creambath</h3>

                         <img src="<?= base_url(); ?>assets/main/images/layanan/rambut.jpg" class="img-responsive" alt="">
                         <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                     </div>
                 </div>

             </div>
         </div>
     </div>
     <div class="portfolio-modal modal fade slideanim" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
         <div class="modal-content">
             <div class="close-modal" data-dismiss="modal">
                 <div class="lr">
                     <div class="rl"></div>
                 </div>
             </div>
             <div class="container">

                 <div class="col-lg-8 col-lg-offset-2">
                     <div class="modal-body">
                         <h3>Dummy text</h3>

                         <img src="<?= base_url(); ?>assets/main/images/layanan/rambut.jpg" class="img-responsive" alt="">
                         <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                     </div>
                 </div>

             </div>
         </div>
     </div>
     <div class="portfolio-modal modal fade slideanim" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
         <div class="modal-content">
             <div class="close-modal" data-dismiss="modal">
                 <div class="lr">
                     <div class="rl"></div>
                 </div>
             </div>
             <div class="container">

                 <div class="col-lg-8 col-lg-offset-2">
                     <div class="modal-body">
                         <h3>Popular belief</h3>

                         <img src="<?= base_url(); ?>assets/main/images/layanan/rambut.jpg" class="img-responsive" alt="">
                         <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                     </div>
                 </div>
             </div>

         </div>
     </div>
     <div class="portfolio-modal modal fade slideanim" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
         <div class="modal-content">
             <div class="close-modal" data-dismiss="modal">
                 <div class="lr">
                     <div class="rl"></div>
                 </div>
             </div>
             <div class="container">

                 <div class="col-lg-8 col-lg-offset-2">
                     <div class="modal-body">
                         <h3>Lorem ipsum</h3>

                         <img src="<?= base_url(); ?>assets/main/images/layanan/rambut.jpg" class="img-responsive" alt="">
                         <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                     </div>
                 </div>

             </div>
         </div>
     </div>
     <div class="portfolio-modal modal fade slideanim" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
         <div class="modal-content">
             <div class="close-modal" data-dismiss="modal">
                 <div class="lr">
                     <div class="rl"></div>
                 </div>
             </div>
             <div class="container">

                 <div class="col-lg-8 col-lg-offset-2">
                     <div class="modal-body">
                         <h3>Dummy text</h3>

                         <img src="<?= base_url(); ?>assets/main/images/layanan/rambut.jpg" class="img-responsive" alt="">
                         <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                     </div>
                 </div>

             </div>
         </div>
     </div>
     <div class="portfolio-modal modal fade slideanim" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
         <div class="modal-content">
             <div class="close-modal" data-dismiss="modal">
                 <div class="lr">
                     <div class="rl"></div>
                 </div>
             </div>
             <div class="container">

                 <div class="col-lg-8 col-lg-offset-2">
                     <div class="modal-body">
                         <h3>Popular belief</h3>

                         <img src="<?= base_url(); ?>assets/main/images/layanan/rambut.jpg" class="img-responsive" alt="">
                         <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since th22121e 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                     </div>
                 </div>
             </div>
         </div>
     </div>
	 
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
                     <h5>Fasilitas 1</h5>
                     <p>Deskripsi 1.</p>
                     <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                 </div>
                 <div class="col-md-4 ser-top wow fadeInUp animated" data-wow-delay=".5s">
                     <h5>Booking Online</h5>
                     <p>The Mistress Juga punya fasilitas booking online lho . . . <br> Klik Aja Tombol dibawah </p>
                     <span class="glyphicon glyphicon-book" aria-hidden="true"></span><br>
                     <a  href="#booking" class="scroll agileits w3layoutsagileits w3layouts scroll hvr-rectangle-out agileits w3layouts  fadeInDown animated" data-wow-delay=".2s"><p style="color:black">Booking Online</p> </a>
					 <br>
                 </div>
                 <div class="col-md-4 ser-top wow fadeInRight animated" data-wow-delay=".5s">
                     <h5>Fasilitas 3</h5>
                     <p>Deskripsi 3. </p>
                     <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
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
                         <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings </p>
                         <img src="<?= base_url(); ?>assets/main/images/qu.png" alt="">
                         <div class="clearfix"> </div>
                     </div>
                     <div class="test-top3">
                         <img src="<?= base_url(); ?>assets/main/images/th.jpg" class="img-responsive" alt="">
                         <h6> The standard chunk of Lorem</h6>
                         <div class="clearfix"> </div>
                     </div>
                 </div>
                 <div class="col-md-6 test-top1 wow fadeInDown animated" data-wow-delay=".5s">
                     <div class=" test-top2">
                         <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings </p>
                         <img src="<?= base_url(); ?>assets/main/images/qu.png" alt="">
                         <div class="clearfix"> </div>
                     </div>
                     <div class=" test-top3">
                         <img src="<?= base_url(); ?>assets/main/images/th1.jpg" class="img-responsive" alt="">
                         <h6> The great explorer of the trut</h6>
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
                 <h3>Booking Tempat</h3>
                 <p>Silahkan Isi Data dibawah untuk Booking.</p>
             </div>
			 </br>
			 <div class="col-md-6 agileits w3layouts contact-top">
			<form>			
				<div class="row">
					<div class="col-md-6">
					<input type="text" placeholder="Nama Lengkap" required="" >	
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-5">
					<input type="text" placeholder="No. Hp" required="" >	
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-7">
					<input type="text" placeholder="Alamat Rumah" required="" >	
					</div>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<input type="text" class="form-control datepicker" placeholder="Tanggal Booking">
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-6">
					Total Biaya (Rp)
					<input type="text" placeholder="Total Biaya (Rp)" id="total" value="0" readonly>	
					</div>
				</div>
					
				
				<label class="hvr-rectangle-out agileits w3layouts">
						<input type="submit" value="Booking" >
				</label>		
										
			</div>
			<div id="salon" class="col-md-6 agileits w3layouts contact-top">						
					<div class="row">
					<p>Pilih Kategori </p>
						<div class="col-md-3">
							<div class="custom-control custom-checkbox image-checkbox">
								<input type="checkbox" class="custom-control-input" id="ck1a" price="50000">
								Creambath
								<label class="custom-control-label" for="ck1a">
									<img src="<?= base_url(); ?>assets/main/images/layanan/booking/rambut.jpg" alt="#" class="img-fluid">
								</label>
							</div>
						</div>
						<div class="col-md-3">
							<div class="custom-control custom-checkbox image-checkbox">
								<input type="checkbox" class="custom-control-input" id="ck1b" price="80000">
								Makeup
								<label class="custom-control-label" for="ck1b">
									<img src="<?= base_url(); ?>assets/main/images/layanan/booking/makeup.jpg" alt="#" class="img-fluid">
								</label>
							</div>
						</div>
						<div class="col-md-3">
							<div class="custom-control custom-checkbox image-checkbox">
								<input type="checkbox" class="custom-control-input" id="ck1c" price="100000">
								Pijatlulur
								<label class="custom-control-label" for="ck1c">
									<img src="<?= base_url(); ?>assets/main/images/layanan/booking/pijatlulur.jpg" alt="#" class="img-fluid">
								</label>
							</div>
						</div>
						<div class="col-md-3">
							<div class="custom-control custom-checkbox image-checkbox">
								<input type="checkbox" class="custom-control-input" id="ck1d" price="75000">
								Pedicure
								<label class="custom-control-label" for="ck1d">
									<img src="<?= base_url(); ?>assets/main/images/layanan/booking/kuku.jpg" alt="#" class="img-fluid">
								</label>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="custom-control custom-checkbox image-checkbox">
								<input type="checkbox" class="custom-control-input" id="ck1e" price="50000">
								 Hair Styling
								<label class="custom-control-label" for="ck1e">
									<img src="<?= base_url(); ?>assets/main/images/layanan/booking/rambut2.jpg" alt="#" class="img-fluid">
								</label>
							</div>
						</div>
						<div class="col-md-3">
							<div class="custom-control custom-checkbox image-checkbox">
								<input type="checkbox" class="custom-control-input" id="ck1f" price="55000">
								Masking
								<label class="custom-control-label" for="ck1f">
									<img src="<?= base_url(); ?>assets/main/images/layanan/booking/wajah.jpg" alt="#" class="img-fluid">
								</label>
							</div>
						</div>
						<div class="col-md-3">
							<div class="custom-control custom-checkbox image-checkbox">
								<input type="checkbox" class="custom-control-input" id="ck1g" price="90000">
								Waxing
								<label class="custom-control-label" for="ck1g">
									<img src="<?= base_url(); ?>assets/main/images/layanan/booking/waxing.jpg" alt="#" class="img-fluid">
								</label>
							</div>
						</div>
					</div>				
			</div>
			</form>	
         </div>
     </div>
	 
	 
	
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
	 
	 
	 <!--Booking Menu-->

     <!--Team-->
     <div class="our-team" id="team">
         <div class="container">
             <h3>Our Team</h3>
             <div class="team">
                 <div class="col-md-6 team-grid wow fadeInLeft animated" data-wow-delay=".5s">
                     <div class="team-1">
                         <div class="col-md-5 col-1 ">
                             <img class="img-responsive gray" src="<?= base_url(); ?>assets/main/images/te.jpg" alt="">
                         </div>
                         <div class="col-md-7 col-1-at">
                             <h5><a href="single.html">Victoria</a></h5>
                             <ul class="social-in">
                                 <li><a href="#"><i> </i></a></li>
                                 <li><a href="#"><i class="icon"> </i></a></li>
                                 <li><a href="#"><i class="icon1"> </i></a></li>
                             </ul>
                             <p>Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney.</p>
                         </div>
                         <div class="clearfix"> </div>
                     </div>
                 </div>
                 <div class="col-md-6 team-grid wow fadeInRight animated" data-wow-delay=".5s">
                     <div class="team-1">
                         <div class="col-md-5 col-1">
                             <img class="img-responsive gray" src="<?= base_url(); ?>assets/main/images/te1.jpg" alt="">
                         </div>
                         <div class="col-md-7 col-1-at">
                             <h5><a href="single.html">Patrick</a></h5>
                             <ul class="social-in">
                                 <li><a href="#"><i> </i></a></li>
                                 <li><a href="#"><i class="icon"> </i></a></li>
                                 <li><a href="#"><i class="icon1"> </i></a></li>
                             </ul>
                             <p>Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney.</p>
                         </div>
                         <div class="clearfix"> </div>
                     </div>
                 </div>

                 <div class="clearfix"> </div>
             </div>
             <div class="team">
                 <div class="col-md-6 team-grid wow fadeInLeft animated" data-wow-delay=".5s">
                     <div class="team-1">
                         <div class="col-md-5 col-1 ">
                             <img class="img-responsive gray" src="<?= base_url(); ?>assets/main/images/te.jpg" alt="">
                         </div>
                         <div class="col-md-7 col-1-at">
                             <h5><a href="single.html">Victoria</a></h5>
                             <ul class="social-in">
                                 <li><a href="#"><i> </i></a></li>
                                 <li><a href="#"><i class="icon"> </i></a></li>
                                 <li><a href="#"><i class="icon1"> </i></a></li>
                             </ul>
                             <p>Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney.</p>
                         </div>
                         <div class="clearfix"> </div>
                     </div>
                 </div>
                 <div class="col-md-6 team-grid wow fadeInRight animated" data-wow-delay=".5s">
                     <div class="team-1">
                         <div class="col-md-5 col-1">
                             <img class="img-responsive gray" src="<?= base_url(); ?>assets/main/images/te1.jpg" alt="">
                         </div>
                         <div class="col-md-7 col-1-at">
                             <h5><a href="single.html">Patrick</a></h5>
                             <ul class="social-in">
                                 <li><a href="#"><i> </i></a></li>
                                 <li><a href="#"><i class="icon"> </i></a></li>
                                 <li><a href="#"><i class="icon1"> </i></a></li>
                             </ul>
                             <p>Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney.</p>
                         </div>
                         <div class="clearfix"> </div>
                     </div>
                 </div>

                 <div class="clearfix"> </div>
             </div>
             <div class="team">
                 <div class="col-md-6 team-grid wow fadeInLeft animated" data-wow-delay=".5s">
                     <div class="team-1">
                         <div class="col-md-5 agileits w3layouts col-1">
                             <img class="img-responsive gray" src="<?= base_url(); ?>assets/main/images/te3.jpg" alt="">
                         </div>
                         <div class="col-md-7 agileits w3layouts col-1-at">
                             <h5><a href="single.html">William</a></h5>
                             <ul class="social-in">
                                 <li><a href="#"><i> </i></a></li>
                                 <li><a href="#"><i class="icon"> </i></a></li>
                                 <li><a href="#"><i class="icon1"> </i></a></li>
                             </ul>
                             <p>Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney.</p>
                         </div>
                         <div class="clearfix"> </div>
                     </div>
                 </div>
                 <div class="col-md-6 team-grid wow agileits w3layouts fadeInRight animated" data-wow-delay=".5s">
                     <div class="team-1 agileits w3layouts">
                         <div class="col-md-5 agileits w3layouts col-1 ">
                             <img class="img-responsive agileits w3layouts gray" src="<?= base_url(); ?>assets/main/images/te2.jpg" alt="">
                         </div>
                         <div class="col-md-7 agileits w3layouts col-1-at">
                             <h5><a href="single.html">Federica</a></h5>
                             <ul class="social-in agileits w3layouts">
                                 <li><a href="#"><i> </i></a></li>
                                 <li><a href="#"><i class="icon agileits w3layouts"> </i></a></li>
                                 <li><a href="#"><i class="icon1 agileits w3layouts"> </i></a></li>
                             </ul>
                             <p>Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney.</p>
                         </div>
                         <div class="clearfix"> </div>
                     </div>
                 </div>

                 <div class="clearfix"> </div>
             </div>
         </div>
     </div>

     <!--Client-->
     <div class="clients">
         <div class="container">
             <h3>What our client thinks about us </span></h3>
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
                         <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magnaaliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit e</p>
                         <span>Dean Martin</span>
                     </div>
                 </div>
                 <div class="item-bottom agileits w3layouts">
                     <div class="item-right agileits w3layouts">
                         <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magnaaliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit e</p>
                         <span>Dean Martin</span>
                     </div>
                 </div>
                 <div class="item-bottom agileits w3layouts">
                     <div class="item-right agileits w3layouts">
                         <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magnaaliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit e</p>
                         <span>Dean Martin</span>
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
             <ul class="social agileits w3layouts">
                 <li><a href="#"><i></i></a></li>
                 <li><a href="#"><i class="ic1"></i></a></li>
                 <li><a href="#"><i class="ic2"></i></a></li>

             </ul>
             <p class="footer-class">&copy; 2021 Innate. All Rights Reserved. </p>

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