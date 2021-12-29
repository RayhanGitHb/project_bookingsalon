
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Data Booking 
    </div>
    
    <div class="table-responsive">
	 
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
		  <td></td>
			<?php echo form_open('admin/caribooking') ?>
			<td colspan="2">
			<div class="input-group m-bot15">
			<input type="text" class="form-control" placeholder="cari data booking..." name="keyword" id="cari" autocomplete="off">
			<span class="input-group-btn">
				<button class="btn btn-primary" type="submit" id="cari">Cari</button>
			</span>
			<?php echo form_close() ?>
            </div>
			</td>
			
		  </tr>
		  <tr>
            <th style="width:20px;">
              <label class="i-checks m-b-none">
         
              </label>
            </th>
			<th style="width:2px;">No</th>
            <th>Nama Pelanggan</th>
            <th>No Handphone</th>
			<th>Alamat</th>
			<th>Tanggal Booking</th>
			<th>Jam Booking</th>
            <th>Jumlah Layanan</th>
			<th>Total Biaya</th>
			<th style="width:10px;">Bukti Pembayaran</th>
            <th style="width:30px;">Konfirmasi</th>
			<th style="width:5px;">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
		  $i = 1;
		  $modal_a = 1;
		  $modal_b = 1; 
		  foreach($booking as $bk) : ?>
		  <tr>
            <td><label class="i-checks m-b-none"> </label></td>
            <td><?= $i++; ?></td>
			<td><?= $bk['nama']; ?></td>
            <td><?= $bk['no_hp']; ?></td>
            <td><?= $bk['alamat']; ?></td>
			<td><?php $date = $bk['tgl_booking'];
			$tglbooking = date("d-m-Y", strtotime($date));
			echo $tglbooking;
			?></td>
			<td><?= $bk['jam']; ?></td>
			<td><?= $bk['jml_kategori']; ?></td>
			<td><?= $bk['jml_biaya']; ?></td>
			<td>
				<a href="#<?= $modal_a++; ?>" data-toggle="modal" class="btn btn-info">
                     Lihat Bukti
				</a>
			</td>
			<td>
			<?php 
				if ($bk['konfirmasi'] == 1) : ?>
					<a href="<?= base_url(); ?>admin/balikkonfirmasi/<?= $bk['id']; ?>" name ="konfirmasi" class="btn btn-success" onclick="return confirm('Apa data tersebut ingin dikembalikan?');">
                     Terkonfirmasi
				</a>
			<?php 
				else : ?>
				<a href="<?= base_url(); ?>admin/konfirmasi/<?= $bk['id']; ?>"  class="btn btn-danger">
                     Konfirmasi
				</a>
			<?php endif; ?>	
			</td>
			<td>
			  <a href="<?= base_url(); ?>admin/hapusBooking/<?= $bk['id']; ?>" class="active" ui-toggle-class=""><i class="fa fa-times text-danger text" onclick="return confirm('Apa data tersebut ingin dihapus?');"></i></a>
            </td>
          </tr>
		   <tr>
                            <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="<?= $modal_b++; ?>" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                        <h4 class="modal-title">Bukti Pembayaran</h4>
                                    </div>
                                    <div class="modal-body">

                                        <img src="<?= base_url('/assets/admin/images/bukti/').$bk['bukti_pembayaran'];?>" width="550" alt="...">
                                    </div>
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
