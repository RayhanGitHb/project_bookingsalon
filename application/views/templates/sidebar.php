<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
				<?php if ($title == 'Dashboard Admin') : ?>
                    <a class="active" href="<?= base_url('admin'); ?>">
					<?php else : ?>
						 <a href="<?= base_url('admin'); ?>">
					<?php endif; ?>
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                
                <li class="sub-menu">
                    <?php if ($title == 'Data Booking') : ?>
                    <a class="active" href="<?= base_url('admin/bookingdata'); ?>">
					<?php else : ?>
						 <a href="<?= base_url('admin/bookingdata'); ?>">
					<?php endif; ?>
                        <i class="fa fa-book"></i>
                        <span>Data Booking</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <?php if ($title == 'Data Karyawan') : ?>
                    <a class="active" href="<?= base_url('admin/karyawan'); ?>">
					<?php else : ?>
						 <a href="<?= base_url('admin/karyawan'); ?>">
					<?php endif; ?>
                        <i class="fa fa-user"></i>
                        <span>Data Karyawan</span>
                    </a>
                </li>
				<li class="sub-menu">
                    <?php if ($title == 'Data Kategori') : ?>
                    <a class="active" href="<?= base_url('admin/kategori'); ?>">
					<?php else : ?>
						 <a href="<?= base_url('admin/kategori'); ?>">
					<?php endif; ?>
                        <i class="fa fa-th"></i>
                        <span>Data Kategori</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('auth/logout'); ?>">
                        <i class="fa fa-sign-out"></i>
                        <span>Log Out</span>
                    </a>
                </li>
            </ul>            
		</div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->