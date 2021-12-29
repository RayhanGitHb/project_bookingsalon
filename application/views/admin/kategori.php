
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Data Kategori 
    </div>
    
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
		  <tr>
			<th></th>
			<th colspan="2"><a href="#tambah" data-toggle="modal" class="btn btn-info" ui-toggle-class="">Tambah Data</a></th>
			</tr>
          <tr>
            <th style="width:20px;">
              <label class="i-checks m-b-none">
         
              </label>
            </th>
            <th style="width:5px;">No</th>
            <th>Gambar</th>
			<th>Nama Kategori</th>
			<th>Deskripsi</th>
			<th>Harga</th>
			<th style="width:10px;">Aksi</th>
          </tr>
        </thead>
        <tbody>
		 <?php
		  $i = 1;
		  $modal_a = 1;
		  $modal_b = 1; 
		  foreach($list_kategori as $lis) : ?>
          <tr>
            <td><label class="i-checks m-b-none"> </label></td>
            <td><?= $i++; ?></td>
			<td><img alt="image" src="<?= base_url('/assets/main/images/layanan/').$lis['gambar'];?>" width="200" height="150"></td>
			<td><?= $lis['kategori']; ?></td>
            <td><?= $lis['deskripsi']; ?></td>
			<td><?= $lis['harga']; ?></td>
			<td>
			<a href="#<?= $modal_a++; ?>" data-toggle="modal" class="active" ui-toggle-class=""><i class="fa fa-edit  text-active"></i></a>
			<a href="<?= base_url(); ?>Admin/hapuskategori/<?= $lis['id']; ?>" class="active" onclick="return confirm('Apa data tersebut ingin dihapus?');" ui-toggle-class=""><i class="fa fa-times text-danger text"></i></a>
			</td>
			<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="<?= $modal_b++; ?>" class="modal fade">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
							<h4 class="modal-title">Ubah Data Kategori</h4>
						</div>
						<div class="modal-body">
						<?= form_open_multipart('Admin/editkategori'); ?>
						<input type="hidden" name="id" value="<?= $lis['id']; ?>">
							<div class="form-group">
								<label for="exampleInputEmail1">Data Kategori</label>
								<input type="text" class="form-control" value="<?= $lis['kategori']; ?>" name="kategori">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Deskripsi</label>
								<textarea name="deskripsi" class="form-control" rows="4" placeholder="cek"><?= $lis['deskripsi']; ?></textarea>
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Harga</label>
								<input type="text" class="form-control" value="<?= $lis['harga']; ?>" name="harga">
							</div>
							<div class="form-group">
								<img alt="image" src="<?= base_url('/assets/main/images/layanan/').$lis['gambar'];?>" width="200" height="150">
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
					<h4 class="modal-title">Tambah Data Kategori</h4>
				</div>
				<div class="modal-body">
				<?= validation_errors(); ?>
				<?= form_open_multipart('Admin/tambahkategori'); ?>
					<div class="form-group">
						<label for="exampleInputEmail1">Nama Kategori</label>
						<input type="text" class="form-control" value="" name="kategori" required="">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Harga</label>
						<input type="text" class="form-control" value="" name="harga" required="">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Deskripsi</label>
						<textarea name="deskripsi" class="form-control" rows="4" placeholder="deskripsi"></textarea>
					</div>
					<div class="form-group">
						<input type="file" name="image" id="image">
					</div>
					<div class="form-group">
					<button type="submit" class="btn btn-info" onclick="return confirm('Apa anda yakin?');">Tambah</button>
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
</body>
</html>
