<?= $this->extend('layouts/base');?>
	<?= $this->section('content')?>
		<div class="page-content">
			<div class="container">
				<div class="tr-found section">
					<div class="row">
						<div class="col-md-4">
							<div class="found-image">
								<img
									src="<?= base_url();?>/public/assets/images/others/404.jpg"
									alt="Image"
									class="img-fluid"
								/>
							</div>
						</div>
						<div class="col-md-8">
							<div class="found-info">
								<h1>404</h1>
								<h2>Page Not Found</h2>
								<p>We can't seem to find the page you're looking for.</p>
								<a href="<?= base_url();?>/" class="btn btn-primary">Back to home</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?= $this->endsection()?>
