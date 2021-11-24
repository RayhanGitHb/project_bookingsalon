
<div class="w3layouts-main">
	<h2>The Mistress Admin</h2>
		<?= $this->session->flashdata('pesan'); ?>
		<form action="<?= base_url('auth'); ?>" method="post">
			<input type="email" class="ggg" name="email" id="email" placeholder="E-MAIL" value="<?= set_value('email'); ?>" >
			<?= form_error('email', '<small class="text-danger">', '</small>'); ?>
			<input type="password" class="ggg" name="password" id="password" placeholder="PASSWORD" required="">
				<div class="clearfix"></div>
				<input type="submit" value="Sign In" name="login">
		</form>
</div>
