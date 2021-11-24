
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
          <tr>
            <th style="width:20px;">
              <label class="i-checks m-b-none">
         
              </label>
            </th>
			<th style="width:2px;">No</th>
            <th>Nama Karyawan</th>
            <th>Email</th>
			<th>No HP</th>
			<th>Alamat</th>
            <th>Tanggal</th>
			<th>Agama</th>
			<th style="width:10px;">Aksi</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          <?php
		  $i = 1;
		  foreach($karyawan as $kry) : ?>
		  <tr>
            <td><label class="i-checks m-b-none"> </label></td>
            <td><?= $i++; ?></td>
			<td><?= $kry['nama']; ?></td>
            <td><?= $kry['email']; ?></td>
            <td><?= $kry['no_hp']; ?></td>
			<td><?= $kry['alamat']; ?></td>
			<td><?= $kry['tanggal_lahir']; ?></td>
			<td><?= $kry['agama']; ?></td>
            <td>
              <a href="" class="active" ui-toggle-class=""><i class="fa fa-edit  text-active"></i></a>
			  <a href="" class="active" ui-toggle-class=""><i class="fa fa-times text-danger text"></i></a>
            </td>
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
