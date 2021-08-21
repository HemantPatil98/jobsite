<?php $page_session = \Config\Services::session()?>
<?= $this->extend("layouts/base.php")?>
	<?= $this->section("content")?>
		<div class="tr-breadcrumb bg-image section-before">
			<div class="container">
				<div class="breadcrumb-info text-center">
					<div class="page-title">
						<h1>Sign In</h1>
						<span
							>Lorem Ipsum is simply dummy text of the printing pesetting.</span
						>
					</div>
				</div>
			</div>
		</div>
		<!-- session -->
		<?php
		if ($page_session->getTempdata('success')) {
		?>
		<div class="container text-center mt-4">
			<div class='alert alert-success'><?= $page_session->getTempdata('success');?></div>
		</div>
		<?php
		};
		?>
		<?php
		if ($page_session->getTempdata('error')) {
		?>
		<div class="container text-center mt-4">
			<div class='alert alert-danger'><?= $page_session->getTempdata('error');?></div>
		</div>
		<?php
		};
		?>

		<!-- validation -->
		<?php $validation = \Config\Services::validation(); ?>
		<div class="container validations text-center mt-4" style="width: fit-content;">		
			<?php if($validation->getError('email')) {?>
			<div class='alert alert-danger'>
				<?= $error = $validation->getError('email'); ?>
			</div>
			<?php }?>
			<?php if($validation->getError('pass')) {?>
			<div class='alert alert-danger'>
				<?= $error = $validation->getError('pass'); ?>
			</div>
			<?php }?>
		</div>
		<div class="tr-account section-padding">
			<div class="container text-center">
				<div class="user-account">
					<div class="account-content">
						<form action="<?= base_url().'/signin';?>" class="tr-form" method="POST">
							<div class="form-group">
								<input
									type="text"
									class="form-control"
									placeholder="Please Enter Your Email"
									name="email"
								/>
							</div>
							<div class="form-group">
								<input
									type="password"
									class="form-control"
									placeholder="Password"
									name="pass"
								/>
							</div>
							<div class="user-option">
								<div class="checkbox">
									<label for="logged"
										><input type="checkbox" name="logged" id="logged" />Remember
										me</label
									>
								</div>
								<div class="forgot-password">
									<a href="#">I forgot password</a>
								</div>
							</div>
							<button type="submit" class="btn btn-primary">Login</button>
						</form>
						<div class="new-user text-center">
							<span><a href="<?= base_url().'/signup';?>">Create a New Account</a> </span>
						</div>
					</div>
				</div>
			</div>
		</div>
		
<?= $this->endsection()?>		
</html>

