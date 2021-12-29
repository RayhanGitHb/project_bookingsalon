
<section id="main-content">
	<section class="wrapper">
	<div class="form-w3layouts">
        <!-- page start-->
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Ubah Profil
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <?= form_open_multipart('Admin/ubahprofile'); ?>
                                <div class="form-group col-lg-7">
                                    <img class="img-thumbnail" src="<?= base_url('/assets/admin/images/profile/').$admin['image'];?>" width="300" height="320" alt="...">
                                </div>
								 <div class="form-group col-lg-7">
                                    <input type="file" name="image" id="image">
                                </div>
                                <div class="form-group col-lg-7">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email" placeholder="email" name="email" value="<?= $admin['email']; ?>" readonly>
                                </div>
								  <div class="form-group col-lg-7">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control" id="nama" placeholder="nama" name="nama" value="<?= $admin['nama']; ?>">
									<?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
								<div class="form-group col-lg-7">
                                      <button type="submit" class="btn btn-info">Submit</button>
                                </div>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
            
        </div>
        

        

       


        