
<section id="main-content">
	<section class="wrapper">
	<div class="form-w3layouts">
        <!-- page start-->
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Profil admin
                        </header>
						<div class="row">
						</div>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" method="post" action="">
                                <div class="form-group col-lg-7">
                                    <img class="img-thumbnail" src="<?= base_url('/assets/admin/images/profile/').$admin['image'];?>" width="300" height="320" alt="...">
                                </div>
								<div class="col-lg-7">
							<?= $this->session->flashdata('messageprofil'); ?>
							</div>
                                <div class="form-group col-lg-7">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email" placeholder="email" name="email" value="<?= $admin['email']; ?>" readonly>
                                </div>
								
								 <div class="form-group col-lg-7">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control" id="nama" placeholder="nama" name="nama" value="<?= $admin['nama']; ?>" readonly>
                                </div>
					
								<div class="form-group col-lg-7">
                                     <a href="<?= base_url('Admin/ubahprofile'); ?>" class="btn btn-primary" role="button">Ganti Profil</a>
                                </div>
                            </form>
                            </div>
                        </div>
                    </section>
            </div>
			
        </div>
        

        

       


        
