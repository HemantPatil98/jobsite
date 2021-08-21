<?php $page_session = \Config\Services::session()?>
<?= $this->extend("layouts/base.php")?>
	<?= $this->section("content")?>
		<div class="tr-breadcrumb bg-image section-before">
			<div class="container">
				<div class="breadcrumb-info text-center">
					<div class="page-title">
						<h1>Create a New Account</h1>
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
		<div class="container text-center mt-4">
			<?php if($validation->getError('fname')) {?>
			<div class='alert alert-danger'>
			<?= $error = $validation->getError('fname'); ?>
		</div>
		<?php }?>
		<?php if($validation->getError('lname')) {?>
			<div class='alert alert-danger'>
			<?= $error = $validation->getError('lname'); ?>
		</div>
		<?php }?>
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
		<?php if($validation->getError('cpass')) {?>
			<div class='alert alert-danger'>
			<?= $error = $validation->getError('cpass'); ?>
		</div>
		<?php }?>
		</div>

		<!--Account Activation -->
		<div class="container text-center mt-4">
			<?php
				if (isset($error)) {
			?>
			<div class='alert alert-danger'>
				<?= $error;?>
			</div>
			
			<?php
			}
			?>
			<?php
				if (isset($success)) {
			?>
			<div class='alert alert-success'>
				<?= $success;?>
			</div>
			
			<?php
			}
			?>
		</div>
		<div class="tr-account section-padding">
			<div class="container text-center">
				<div class="user-account">
					<ul class="nav nav-tabs nav-justified" role="tablist">
						<li role="presentation">
							<a
								class="active"
								href="#seeker"
								aria-controls="seeker"
								role="tab"
								data-toggle="tab"
								>Job Seeker</a
							>
						</li>
						<li role="presentation">
							<a
								href="#employers"
								aria-controls="employers"
								role="tab"
								data-toggle="tab"
								>Employers</a
							>
						</li>
					</ul>

					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="seeker">
							<div class="account-content">
								<form action="<?= site_url('User/signup');?>" class="tr-form" method="POST">
									<div class="form-group">
										<input
											type="text"
											class="form-control"
											placeholder="First Name"
											name="fname"
											value="<?= set_value('fname');?>"
										/>
									   
									</div>
									   	
									<div class="form-group">
										<input
											type="text"
											class="form-control"
											placeholder="Last Name"
											name="lname"
											value="<?= set_value('lname');?>"
										/>
									
									</div>
									
									<!-- <div class="form-group">
										<input
											type="text"
											class="form-control"
											placeholder="Username"
											name="username"
										/>
									</div> -->
									<div class="form-group">
										<input
											type="email"
											class="form-control"
											placeholder="your Email"
											name="email"
											value="<?= set_value('email');?>"
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
									
									<div class="form-group">
										<input
											type="password"
											class="form-control"
											placeholder="Confirm Password"
											name="cpass"
											
										/>
										
									</div>
									
									<button type="submit" class="btn btn-primary">Sign Up</button>
								</form>
								<div class="new-user text-center">
									<span
										>Already Registered? <a href="<?= base_url().'/signin';?>">Sign in</a>
									</span>
								</div>
							</div>
						</div>
						<!-- <div role="tabpanel" class="tab-pane" id="employers">
							<div class="account-content">
								<form action="#" class="tr-form" method="POST">
									<div class="form-group">
										<input
											type="text"
											class="form-control"
											placeholder="Your First Name"
											name="fname"
										/>
									</div>
									<div class="form-group">
										<input
											type="text"
											class="form-control"
											placeholder="Your Last Name"
											name="lname"
										/>
									</div>
									<div class="form-group">
										<input
											type="text"
											class="form-control"
											placeholder="Username"
											name="username"
										/>
									</div>
									<div class="form-group">
										<input
											type="email"
											class="form-control"
											placeholder="your Email"
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
									<div class="form-group">
										<input
											type="password"
											class="form-control"
											placeholder="Confirm Password"
											name="cpass"
										/>
									</div>
									<div class="dropdown tr-change-dropdown">
										<a data-toggle="dropdown" href="#" aria-expanded="false"
											><span class="change-text">Industry Type</span
											><i class="fa fa-angle-down"></i
										></a>
										<ul class="dropdown-menu tr-change">
											<li><a href="#">Industry 1</a></li>
											<li><a href="#">Industry 2</a></li>
											<li><a href="#">Industry 3</a></li>
										</ul>
									</div>
									<button type="submit" class="btn btn-primary">Sign Up</button>
								</form>
								<div class="new-user text-center">
									<span
										>Already Registered? <a href="signin.html">Sign in</a>
									</span>
								</div>
							</div>
						</div> -->
					</div>
				</div>
			</div>
		</div>
		
<?= $this->endsection()?>		
</html>
