
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Data Karyawan 
    </div>
    
    <div class="table-responsive">
	
      <table class="table table-striped b-t b-light">
        <thead>
			<tr><th></th>
			<th colspan="2" ><a href="#tambah" data-toggle="modal" class="btn btn-info" ui-toggle-class="">Tambah Data</a></th>
			</tr>
		  <tr>
            <th style="width:20px;">
              <label class="i-checks m-b-none">
         
              </label>
            </th>
			<th style="width:2px;">No</th>
            <th>Foto Karyawan</th>
			<th>Nama Karyawan</th>
            <th>Email</th>
			<th>No HP</th>
			<th>Alamat</th>
            <th>Tanggal lahir</th>
			<th>Tempat lahir</th>
			<th>Agama</th>
			<th style="width:10px;">Aksi</th>
         
          </tr>
        </thead>
        <tbody>
          <?php
		  $i = 1;
		  $modal_a = 1;
		  $modal_b = 1; 
		  foreach($karyawan as $kry) : ?>
		  <tr>
            <td><label class="i-checks m-b-none"> </label></td>
            <td><?= $i++; ?></td>
			<td><img alt="photo karyawan" src="<?= base_url('/assets/admin/images/profile/').$kry['profil'];?>" width="100" height="120"></td>
			<td><?= $kry['nama']; ?></td>
            <td><?= $kry['email']; ?></td>
            <td><?= $kry['no_hp']; ?></td>
			<td><?= $kry['alamat']; ?></td>
			<td><?php $date = $kry['tanggal_lahir'];
			$tgllahir = date("d-m-Y", strtotime($date));
			echo $tgllahir;
			?></td>
			<td><?= $kry['tempat_lahir']; ?></td>
			<td><?= $kry['agama']; ?></td>
            <td>
              <a href="#<?= $modal_a++; ?>" data-toggle="modal" class="active" ui-toggle-class=""><i class="fa fa-edit  text-active"></i></a>
			  <a href="<?= base_url(); ?>admin/hapusKaryawan/<?= $kry['id_karyawan']; ?>" class="active" onclick="return confirm('Apa data tersebut ingin dihapus?');" ui-toggle-class=""><i class="fa fa-times text-danger text"></i></a>
            </td>
			<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="<?= $modal_b++; ?>" class="modal fade">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
							<h4 class="modal-title">Ubah Data Karyawan</h4>
						</div>
						<div class="modal-body">
						<?= form_open_multipart('Admin/editKaryawan'); ?>
						<input type="hidden" name="id_karyawan" value="<?= $kry['id_karyawan']; ?>">
							<div class="form-group">
								<label for="exampleInputEmail1">Nama Karyawan</label>
								<input type="text" class="form-control" value="<?= $kry['nama']; ?>" name="nama">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Email</label>
								<input type="email" class="form-control" value="<?= $kry['email']; ?>" name="email">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">No HP</label>
								<input type="text" class="form-control" value="<?= $kry['no_hp']; ?>" name="nohp">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Alamat</label>
								<input type="text" class="form-control" value="<?= $kry['alamat']; ?>" name="alamat">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Tanggal Lahir</label>
								<input type="date" class="form-control" placeholder="Tanggal Booking" name="tanggal_lahir" id="tgl_lahir" value="<?= 
									$kry['tanggal_lahir'];
									?>">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Tempat Lahir</label>
								<input type="text" class="form-control" value="<?= $kry['tempat_lahir']; ?>" name="tempat_lahir">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Agama</label>
								<input type="text" value="<?= $kry['agama']; ?>" class="form-control" name="agama">
							</div>
							<div class="form-group">
								<img alt="image" src="<?= base_url('/assets/admin/images/profile/').$kry['profil'];?>" width="170" height="200">
								<input type="file" name="image" id="image">
							</div>
							<div class="form-group">
							<button type="submit" class="btn btn-info" onclick="return confirm('Apa data tersebut ingin diubah?');">Submit</button>
							</div>
						</form>
					</div>
				</div>
			</div>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    
  </div>
</div>
</section>


 <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="tambah" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
					<h4 class="modal-title">Tambah Data Karyawan</h4>
				</div>
				<div class="modal-body">
				<?= validation_errors(); ?>
				<?= form_open_multipart('Admin/tambahKaryawan'); ?>
					<div class="form-group">
						<label for="exampleInputEmail1">Nama Karyawan</label>
						<input type="text" class="form-control" value="" name="nama" required="">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Email</label>
						<input type="text" class="form-control" value="" name="email" required="">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">No HP</label>
						<input type="text" class="form-control" value="" name="nohp" required="">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Alamat</label>
						<input type="text" class="form-control" value="" name="alamat" required="">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Tanggal Lahir</label>
						<input type="date" class="form-control" placeholder="Tanggal Lahir" name="tgl_lahir" id="tgl_lahir" value="" required="">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Tempat Lahir</label>
						<input type="text" class="form-control" value="" name="tempat_lahir" required="">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Agama</label>
						<input type="text" value="" class="form-control" name="agama" required="">
					</div>
					<div class="form-group">
						<input type="file" name="image" id="image">
					</div>
					<div class="form-group">
					<button type="submit" class="btn btn-info" onclick="return confirm('Apa data tersebut ingin diubah?');">Tambah</button>
					</div>
				</form>
			</div>
		</div>
	</div>
         
 </div>
</section>

<!--main content end-->
</section>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>

