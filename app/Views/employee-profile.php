<?= $this->extend("layouts/base.php")?>
	<?= $this->section("content")?>
	<style>
		.account-info i{
			font-size:18px;
			color:#008def;
			margin-left:8px; 
		}
		.ui-datepicker-calendar {
   		 display: none;
    	}
		.social-icon-bg i.fa-instagram {
			background: linear-gradient(#642b73, #C6426E);
		}
	</style>
	<?php $validation = \Config\Services::validation(); ?>
	<?php
	// if (isset($video)) {
	// 	echo $video;
	// }
	// ?>
		<div class="tr-breadcrumb bg-image section-before">
			<div class="container">
				<div class="breadcrumb-info text-center">
					<div class="user-image">
						<?php if ($userdata->profile_photo != '') {
						?>
						<img src="<?= base_url();?>/public/profilepic/<?= ucfirst($userdata->profile_photo);?>" alt="Image" class="img-fluid" />
						<?php
						}
						else {
						?>
						<img src="<?= base_url();?>/public/assets/images/others/author.png" alt="Image" class="img-fluid" />
						<?php	# code...
						}
						?>
						
					</div>
					<div class="user-title">
						<?php if ($userdata->first_name != '' && $userdata->last_name != '') {
						?>
						<h1><?= ucfirst($userdata->first_name);?> <?= ucfirst($userdata->last_name);?></h1>
						<?php
						}
						else {
						?>
						<h1>Guest</h1>
						<?php
						}
						?>
						
					</div>
					<ul class="job-meta tr-list list-inline">
						<li>
							<i class="fa fa-map-marker" aria-hidden="true"></i>
							<?php if ($userdata->location) {
									?>
									<?= $userdata->location;?>
									<?php
									}
									else {
									?>
									Home
									<?php
									}
									?>
						</li>
						<li><i class="fa fa-phone" aria-hidden="true"></i>
						<?php if ($userdata->contact) {
									?>
									<?= $userdata->contact;?>
									<?php
									}
									else {
									?>
									Home
									<?php
									}
									?>
						</li>
						<li>
							<i class="fa fa-envelope" aria-hidden="true"></i
							><a href="#"
								><span
									class="__cf_email__"
									data-cfemail="d7bdbfb8b9b3b8b297b0bab6bebbf9b4b8ba"
									>
									<?php if ($userdata->email) {
									?>
									<?= $userdata->email;?>
									<?php
									}
									else {
									?>
									guest@gmail.com
									<?php
									}
									?>
									<?= $userdata->email;?>
									</span
								></a
							>
						</li>
						
					</ul>
					<div class="progress_bar">
						<div class="progress">
							<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50"
							aria-valuemin="0" aria-valuemax="100" style="width:40%">
								Profile 40% Complete
							</div>
						</div>
					</div>
					
					<ul class="breadcrumb-social social-icon-bg tr-list">
						<li>
							<a href="<?=$media[0]['facebook']?>"
								><i class="fa fa-facebook"></i><span>Facebook</span></a
							>
						</li>
						<li>
							<a href="<?=$media[0]['instagram']?>"
								><i class="fa fa-instagram" style="font-size: 15px;"></i><span>Instagram</span></a
							>
						</li>
						
						<li>
							<a href="<?=$media[0]['linkedin']?>"
								><i class="fa fa-linkedin"></i><span>Linkedin</span>
							</a>
						</li>
						
					</ul>
				</div>
			</div>
		</div>
		<div class="tr-profile section-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-lg-3">
						<div class="tr-sidebar">
							<ul class="nav nav-tabs profile-tabs section" role="tablist">
								<li role="presentation">
									<a
										class="active"
										href="#account-info"
										aria-controls="account-info"
										role="tab"
										data-toggle="tab"
										><i class="fa fa-life-ring" aria-hidden="true"></i> Account
										Info</a
									>
								</li>
								<li role="presentation">
									<a
										href="#att_resume"
										aria-controls="resume"
										role="tab"
										data-toggle="tab"
										><span
											><i class="fa fa-file-text-o" aria-hidden="true"></i
										></span>
										Attach Resume</a
									>
								</li>
								<li role="presentation">
									<a
										href="#prs_detail"
										aria-controls="edit-resume"
										role="tab"
										data-toggle="tab"
										><span
											><i class="fa fa-address-book-o" aria-hidden="true"></i
										></span>
										Personal Details</a
									>
								</li>
								<li role="presentation">
									<a
										href="#edu"
										aria-controls="bookmark"
										role="tab"
										data-toggle="tab"
										><span
											><i class="fa fa-university" aria-hidden="true"></i
										></span>
										Educational Details</a
									>
								</li>
								<li role="presentation">
									<a
										href="#skill"
										aria-controls="archived"
										role="tab"
										data-toggle="tab"
										><span><i class="fa fa-lightbulb-o" aria-hidden="true"></i></span>
										Key Skills</a
									>
								</li>
								<li role="presentation">
									<a
										href="#emp"
										aria-controls="close-account"
										role="tab"
										data-toggle="tab"
										><span
											><i class="fa fa-briefcase" aria-hidden="true"></i
										></span>
										Employment Details</a
									>
								</li>
								<li role="presentation">
									<a
										href="#soc_media"
										aria-controls="close-account"
										role="tab"
										data-toggle="tab"
										><span
											><i class="fa fa-handshake-o" aria-hidden="true"></i
										></span>
										Social Media</a
									>
								</li>
							</ul>
							
						</div>
					</div>
					
					

					<?php $validation = \Config\Services::validation(); ?>

					<div class="col-md-8 col-lg-9">
						<div class="tab-content">
							<div
								role="tabpanel"
								class="tab-pane fade in show active account-info"
								id="account-info"
								>
								
								<div class="section resume-last-updated">
									<span class="icon pull-left"
										><img src="<?= base_url();?>/public/assets/images/icons/1.png" alt="Icon" class="img-fluid"
									/></span>
									<div class="updated-info">
										<span class="pull-left"><h4>Resume last updated on</h4></span>
										<span class="pull-right">24/4/2017</span>
									</div>
								</div>
							
								<!-- Resume Upload Start -->
								<div class="section resume-headline" id="att_resume">	
									<div class="title title-after">
										<div class="icon">
											<span
											><i class="fa fa-file-text-o" aria-hidden="true" style="font-size: 35px;"></i
										></span>
										</div>
										
										<span class=""><h4>Attach Resume</h4></span>
									</div>
									<form action="<?= site_url('User/uploadResume');?>" method="POST" enctype="multipart/form-data">
										<div class="form-group input-group">
											<input type="file" class="form-control" name="cand_resume" id="cand_resume" style="padding:12px;">
											<button class="btn btn-primary" type="submit" id="button-addon2">Upload Resume</button>
										</div>
										
									</form>
									<div>
										<span style="font-size: 15px;"><b>Uploaded File:</b></span>
											<?php if (isset($resume)) {
											?>
											<span><?=$resume;?></span><br>
											<a href="<?= site_url('User/deleteResume');?>">Delete Resume</a>
											<?php
											}?>
									</div><hr>
									<div style="text-align:center; color:#9c9c9c">
											Supported Formats: doc, docx, pdf, upto 2MB
										</div>

								<!-- Validation -->
									<?php if($validation->getError('cand_resume')) {?>
									<div class='alert alert-danger'>
										<?= $error = $validation->getError('cand_resume'); ?>
									</div>
									<?php }?>
									<?php if(isset($success)) {?>
									<div class='alert alert-success'>
										<?= $success;?>
									</div>
									<?php }?>
									<?php if(isset($error)) {?>
									<div class='alert alert-danger'>
										<?= $error;?>
									</div>
									<?php }?>

								</div>
								<!-- Resume Upload End -->

								<!-- Video Profile Start -->
								<div class="section resume-headline" id="att_resume">
									
									<div class="title title-after">
										<div class="icon">
											<span
											><i class="fa fa-video-camera" aria-hidden="true" style="font-size: 35px;"></i
										></span>
										</div>
										
										<span class=""><h4>Video Profile</h4></span>
									</div>
									<form action="<?= site_url('User/uploadVideo');?>" method="POST" enctype="multipart/form-data">
										<div class="form-group input-group">
											<input type="file" accept="audio/*,video/*" class="form-control" name="vid_profile" id="vid_profile" style="padding:12px;">
											<button class="btn btn-primary" type="sumbit" id="button-addon2">Upload Video Profile</button>
										</div>
										
									</form>	
									<div>
										<span style="font-size: 15px;"><b>Uploaded File:</b></span>
											<?php if(isset($video)) {
											?>
											<span><?=$video;?></span><br>
											<a href="<?= site_url('User/deleteVideo');?>">Delete Video Profile</a>
											<?php
											}?>
									</div><hr>
									<div style="text-align:center; color:#9c9c9c">
											Supported Formats: mp4, mkv, mov, upto 25MB
										</div>
									<!-- Validation -->
									<?php if($validation->getError('vid_profile')) {?>
									<div class='alert alert-danger'>
										<?= $error = $validation->getError('vid_profile'); ?>
									</div>
									<?php }?>
									<?php if(isset($vsuccess)) {?>
									<div class='alert alert-success'>
										<?= $vsuccess;?>
									</div>
									<?php }?>
									<?php if(isset($verror)) {?>
									<div class='alert alert-danger'>
										<?= $verror;?>
									</div>
									<?php }?>
								</div>
								
								<!-- Video Profile End -->

								<!-- Resume Heading Start-->
								<div class="section resume-headline">
									<span class="icon pull-left"
										><img src="<?= base_url();?>/public/assets/images/icons/category10.png" alt="Icon" class="img-fluid"
									/></span>
									<div class="title title-after">
										<span class=""><h4>Resume Headline</h4></span>
										<span class=""><i type="button" class="fa fa-pencil-square-o" aria-hidden="true" data-bs-toggle="modal" data-bs-target="#resumeHead"></i></span>
									</div>
									
										<?php
										if (isset($headline)) {
										?>
										<p><?=$headline;?></p>
										<?php
										}
										?>
										<hr>
										<div class="container validations text-center mt-4" style="width: fit-content;">		
											<?php if($validation->getError('headline')) {?>
												<div class='alert alert-danger'>
													<?= $error = $validation->getError('headline'); ?>
												</div>
											<?php }?>
										</div>
										<?php if(isset($hsuccess)) {?>
											<div class='alert alert-success'>
												<?= $hsuccess;?>
											</div>
										<?php }?>
										<?php if(isset($herror)) {?>
											<div class='alert alert-danger'>
												<?= $herror;?>
											</div>
										<?php }?>
									
								</div>
								<!-- Resume Heading End-->

								<!-- Modal Start -->
								<div class="modal fade" id="resumeHead" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="resumeHeadLabel" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
									<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="resumeHeadLabel">Resume Headline</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
									<div class="modal-body">
										<form action="<?= site_url('User/uploadHeadLine');?>" class="tr-form" method="POST">
											<div class="form-group">
												<label for="headline">Resume Headline</label>
												<input type="text" class="form-control" name="headline" value="<?=$headline?>" id="headline">
											</div>
											<button type="submit" class="btn btn-primary">Save</button>
										</form>

									</div>
									
									<!-- <div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
										
									</div> -->
									</div>
								</div>
								</div>
								<!-- Modal End -->

								<!-- Personal Info Start-->
								<div class="section display-information" id="prs_detail">
									<div class="title title-after">
										<div class="icon">
											<span 
											><i class="fa fa-address-book-o" aria-hidden="true" style="font-size: 35px;"></i
										></span>
											
										</div>
										<span><h4>Personal Details</h4></span>
										<span class=""><i type="button" class="fa fa-pencil-square-o" aria-hidden="true" data-bs-toggle="modal" data-bs-target="#candInfo"></i></span>
									</div>
									<div class="change-photo">
										<div class="user-image mb-2">
											<?php if ($userdata->profile_photo != '') {
											?>
											<img src="<?= base_url();?>/public/profilepic/<?= ucfirst($userdata->profile_photo);?>" alt="Image" class="img-fluid" />
											<?php
											}
											else {
											?>
											<img src="<?= base_url();?>/public/assets/images/others/author.png" alt="Image" class="img-fluid" />
											<?php
											}
											?>	
										</div>
										<div class="photo">
											<form action="<?= site_url('User/profilePhoto');?>" method="POST" enctype="multipart/form-data">
												<!-- <label class="btn btn-primary" for="upload-photo"> -->
													<div class="form-group input-group" >
														<input class="form-control" type="file" name="profile_photo" id="upload-photo" style="padding:12px;"/>
														<button class="btn btn-primary" type="submit">Change Photo</button>
													</div>
													
													
												<!-- </label> -->
												<span class="max-size">Max 20 MB</span>
											</form>
											<?php if($validation->getError('profile_photo')) {?>
												<div class='alert alert-danger'>
													<?= $error = $validation->getError('profile_photo'); ?>
												</div>
											<?php }?>
											<?php if(isset($psuccess)) {?>
											<div class='alert alert-success'>
												<?= $psuccess;?>
											</div>
											
										<?php }?>
										<?php if(isset($perror)) {?>
											<div class='alert alert-danger'>
												<?= $perror;?>
											</div>
										<?php }?>
											
										</div>
									</div>
									<?php if(isset($isuccess)) {?>
											<div class='alert alert-success'>
												<?= $isuccess;?>
											</div>
											
										<?php }?>
										<?php if(isset($ierror)) {?>
											<div class='alert alert-danger'>
												<?= $ierror;?>
											</div>
										<?php }?>
									<ul class="tr-list account-details">
										<li>Display Name<span><?= ucfirst($userdata->first_name);?> <?= ucfirst($userdata->last_name);?></span></li>
										<li>Address<span><?= $userdata->location;?></span></li>
										<li>Phone Number<span><?= $userdata->contact;?></span></li>
										<li>
											Email Id<span
												><a href="#"
													><span
														class="__cf_email__"
														data-cfemail="7a101215141e151f3a1d171b131654191517"
														><?= $userdata->email;?></span
													></a
												></span
											>
										</li>
										
									</ul>
								</div>
								<!-- Personal Info End-->

								<!-- Personal Info Modal Start -->
								<div class="modal fade" id="candInfo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="candInfoLabel" aria-hidden="true">
									<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="candInfoLabel">Personal Details</h5>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<form action="<?=site_url('User/updatePersonalInfo')?>" method="POST">
													<div class="form-group">
														<label for="cand_name">First Name</label>
														<input type="text" class="form-control" name="cand_fname" id="cand_fname" value="<?= ucfirst($userdata->first_name);?>">
													</div>
													<?php if($validation->getError('cand_fname')) {?>
														<div class='alert alert-danger'>
															<?= $error = $validation->getError('cand_fname'); ?>
														</div>
													<?php }?>
													<div class="form-group">
														<label for="cand_name">Last Name</label>
														<input type="text" class="form-control" name="cand_lname" id="cand_lname" value="<?= ucfirst($userdata->last_name);?>">
													</div>
													<?php if($validation->getError('cand_lname')) {?>
														<div class='alert alert-danger'>
															<?= $error = $validation->getError('cand_lname'); ?>
														</div>
													<?php }?>
													<div class="form-group">
														<label for="cand_loc">Current Location</label>
														<input type="text" class="form-control" name="cand_loc" id="cand_loc">
													</div>
													<div class="form-group">
														<label for="cand_cont">Contact Number</label>
														<input type="text" class="form-control" name="cand_cont" id="cand_cont">
													</div>
													<div class="form-group">
														<label for="cand_email">Email Address</label>
														<input type="text" class="form-control" name="cand_email" id="cand_email" value="<?= $userdata->email;?>">
													</div>
													<?php if($validation->getError('cand_email')) {?>
														<div class='alert alert-danger'>
															<?= $error = $validation->getError('cand_email'); ?>
														</div>
													<?php }?>
													<button type="submit" class="btn btn-primary">Save</button>
												</form>
											</div>
				
										</div>
									</div>
								</div>
								<!-- Personal Info Modal End -->

								<!-- Education Start-->
								<div class="section display-information" id="edu">
									<div class="title title-after">
										<div class="icon">
											<span
											><i class="fa fa-university" aria-hidden="true" style="font-size:35px"></i
										></span>
										</div>
										<span><h4>Education Details</h4></span><span><i type="button" class="fa fa-pencil-square-o" aria-hidden="true" data-bs-toggle="modal" data-bs-target="#candEdu"></i></span>
										
									</div>
									<?php if(isset($esuccess)) {?>
											<div class='alert alert-success'>
												<?= $esuccess;?>
											</div>
											
										<?php }?>
										<?php if(isset($eerror)) {?>
											<div class='alert alert-danger'>
												<?= $eerror;?>
											</div>
										<?php }?>
									<div id="edu1">
										<?php if($education[0]['education1']){
											// print_r($education);
										?>
										<h5 style="display:inline;"><?=$education[0]['course1']?></h5> - <h5 style="display:inline;"><?=$education[0]['specialization1']?></h5><span class=""></span>
										<p><?=$education[0]['university1']?></p>
										<p><?=$education[0]['passing_yr1']?></p><hr>
										<?php
										}
										?>
										<?php if($education[0]['education2']){
											// print_r($education);
										?>
										<h5 style="display:inline;"><?=$education[0]['course2']?></h5> - <h5 style="display:inline;"><?=$education[0]['specialization2']?></h5><span class=""></span>
										<p><?=$education[0]['university2']?></p>
										<p><?=$education[0]['passing_yr2']?></p><hr>
										<?php
										}
										?>

										<?php if($education[0]['education3']){
											// print_r($education);
										?>
										<h5 style="display:inline;"><?=$education[0]['course3']?></h5> - <h5 style="display:inline;"><?=$education[0]['specialization3']?></h5><span class=""></span>
										<p><?=$education[0]['university3']?></p>
										<p><?=$education[0]['passing_yr3']?></p><hr>
										<?php
										}
										?>
										
									</div>
								</div>
								<!-- Education End-->

								<!-- Education Modal Start -->
								<div class="modal fade" id="candEdu" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="candEduLabel" aria-hidden="true">
									<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="candEduLabel">Educational Details</h5>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<form action="<?=site_url('User/updateEdu')?>" method="POST">
													<h5>Please start with most recent education</h5><hr>
													<div class="form-group">
														<label for="cand_Edu1">Education</label>
														<input type="text" class="form-control" name="cand_Edu1" id="cand_Edu1" value="<?=$education[0]['education1']?>">
													</div>
													<div class="form-group">
														<label for="cand_course1">Course</label>
														<input type="text" class="form-control" name="cand_course1" id="cand_course1" value="<?=$education[0]['course1']?>">
													</div>
													<div class="form-group">
														<label for="cand_spl1">Specialization</label>
														<input type="text" class="form-control" name="cand_spl1" id="cand_spl1" value="<?=$education[0]['specialization1']?>">
													</div>
													<div class="form-group">
														<label for="cand_uni1">University/Institute</label>
														<input type="text" class="form-control" name="cand_uni1" id="cand_uni1" value="<?=$education[0]['university1']?>">
													</div>
													<div class="form-group">
														<h6>Course Type</h6>
														<div class="form-check">
															<input type="radio" class="form-check-input" name="cand_coty1" id="full1" value="Full Time" checked>
															<label for="cand_coty1">Full Time</label>
														</div>
														<div class="form-check">
															<input type="radio" class="form-check-input" name="cand_coty1" value="Part Time" id="part1">
															<label for="cand_coty2">Part Time</label>
														</div>
														<div class="form-check">
															<input type="radio" class="form-check-input" name="cand_coty1" id="corres1">
															<label for="cand_coty3">Correspondence/Distance Learning</label>
														</div>		
													</div>
													<div class="form-group">
														<label for="cand_passyr1">Passing Out Year</label>
														<input type="text" class="form-control pass-yr" name="cand_passyr1" id="cand_passyr1" value="<?=$education[0]['passing_yr1']?>">
													</div>
													<div class="form-group">
														<label for="cand_grade1">Grading System</label>
															<select class="form-select" name="cand_grade1" id="cand_grade1">
																<option class="dropdown-item" selected>Choose...</option>
																<option class="dropdown-item" value="Percentage">Percentage</option>
																<option class="dropdown-item" value="CGPA">CGPA (scale of 10)</option>
															</select>
													</div>
													<div class="form-group" id="marks1">
														<?php
														if ($education[0]['marks1']) {
														?>
														<label for='cand_mrkr1'>Marks</label>
														<input type='text' class='form-control' name='cand_mrk1' id='cand_mrk1' value="<?=$education[0]['marks1']?>">
														<?php
														}
														?>
													</div><hr>
													<div class="form-group">
														<label for="cand_Edu2">Education</label>
														<input type="text" class="form-control" name="cand_Edu2" id="cand_Edu2" value="<?=$education[0]['education2']?>">
													</div>
													<div class="form-group">
														<label for="cand_course2">Course</label>
														<input type="text" class="form-control" name="cand_course2" id="cand_course2" value="<?=$education[0]['course2']?>">
													</div>
													<div class="form-group">
														<label for="cand_spl2">Specialization</label>
														<input type="text" class="form-control" name="cand_spl2" id="cand_spl2" value="<?=$education[0]['specialization2']?>">
													</div>
													<div class="form-group">
														<label for="cand_uni2">University/Institute</label>
														<input type="text" class="form-control" name="cand_uni2" id="cand_uni2" value="<?=$education[0]['university2']?>">
													</div>
													<div class="form-group">
														<h6>Course Type</h6>
														<div class="form-check">
															<input type="radio" class="form-check-input" name="cand_coty2" id="full2" value="Full Time" checked>
															<label for="cand_coty2">Full Time</label>
														</div>
														<div class="form-check">
															<input type="radio" class="form-check-input" name="cand_coty2" value="Part Time" id="part2">
															<label for="cand_coty2">Part Time</label>
														</div>
														<div class="form-check">
															<input type="radio" class="form-check-input" name="cand_coty2" id="corres2">
															<label for="cand_coty2">Correspondence/Distance Learning</label>
														</div>		
													</div>
													<div class="form-group">
														<label for="cand_passyr2">Passing Out Year</label>
														<input type="text" class="form-control pass-yr" name="cand_passyr2" id="cand_passyr2" value="<?=$education[0]['passing_yr2']?>">
													</div>
													<div class="form-group">
														<label for="cand_grade2">Grading System</label>
															<select class="form-select" name="cand_grade2" id="cand_grade2">
																<option class="dropdown-item" selected>Choose...</option>
																<option class="dropdown-item" value="Percentage">Percentage</option>
																<option class="dropdown-item" value="CGPA">CGPA (scale of 10)</option>
															</select>
													</div>
													<div class="form-group" id="marks2">
														<?php
														if ($education[0]['marks2']) {
														?>
														<label for='cand_mrkr2'>Marks</label>
														<input type='text' class='form-control' name='cand_mrk2' id='cand_mrk2' value="<?=$education[0]['marks2']?>">
														<?php
														}
														?>
													</div><hr>
													<div class="form-group">
														<label for="cand_Edu3">Education</label>
														<input type="text" class="form-control" name="cand_Edu3" id="cand_Edu3" value="<?=$education[0]['education3']?>">
													</div>
													<div class="form-group">
														<label for="cand_course3">Course</label>
														<input type="text" class="form-control" name="cand_course3" id="cand_course3" value="<?=$education[0]['course3']?>">
													</div>
													<div class="form-group">
														<label for="cand_spl3">Specialization</label>
														<input type="text" class="form-control" name="cand_spl3" id="cand_spl3" value="<?=$education[0]['specialization3']?>">
													</div>
													<div class="form-group">
														<label for="cand_uni3">University/Institute</label>
														<input type="text" class="form-control" name="cand_uni3" id="cand_uni3" value="<?=$education[0]['university3']?>">
													</div>
													<div class="form-group">
														<h6>Course Type</h6>
														<div class="form-check">
															<input type="radio" class="form-check-input" name="cand_coty3" id="full1" value="Full Time" checked>
															<label for="cand_coty3">Full Time</label>
														</div>
														<div class="form-check">
															<input type="radio" class="form-check-input" name="cand_coty3" value="Part Time" id="part3">
															<label for="cand_coty3">Part Time</label>
														</div>
														<div class="form-check">
															<input type="radio" class="form-check-input" name="cand_coty3" id="corres3">
															<label for="cand_coty3">Correspondence/Distance Learning</label>
														</div>		
													</div>
													<div class="form-group">
														<label for="cand_passyr3">Passing Out Year</label>
														<input type="text" class="form-control pass-yr" name="cand_passyr3" id="cand_passyr3" value="<?=$education[0]['passing_yr3']?>">
													</div>
													<div class="form-group">
														<label for="cand_grade3">Grading System</label>
															<select class="form-select" name="cand_grade3" id="cand_grade3">
																<option class="dropdown-item" selected>Choose...</option>
																<option class="dropdown-item" value="Percentage">Percentage</option>
																<option class="dropdown-item" value="CGPA">CGPA (scale of 10)</option>
															</select>
													</div>
													<div class="form-group" id="marks3">
														<?php
														if ($education[0]['marks3']) {
														?>
														<label for='cand_mrkr3'>Marks</label>
														<input type='text' class='form-control' name='cand_mrk3' id='cand_mrk3' value="<?=$education[0]['marks3']?>">
														<?php
														}
														?>
													</div><hr>
													<button type="submit" class="btn btn-primary">Save</button>
												</form>
											</div>
										</div>
									</div>
								</div>
								<!--Education Modal Modal End -->

								<!-- Key Skills Start -->
								<div class="section display-information" id="skill">
									<div class="title title-after">
										<div class="icon">
											<span><i class="fa fa-lightbulb-o" aria-hidden="true" style="font-size: 35px;"></i></span>
										</div>
										<span><h4>Key Skills</h4></span><span class=""><i type="button" class="fa fa-pencil-square-o" aria-hidden="true" data-bs-toggle="modal" data-bs-target="#candSkills"></i></span>
										
									</div>
									<!-- <?php
										if (isset($skills)) {
											print_r($skills);
										}
									?> -->
								    <div name="SkillList">
										<ul class="tr-list skills">
											<li style="display:inline; border:1px solid #e8e6e8; border-radius:3px; padding:10px 20px; margin:5px 3px;background-color:#faf7fa;"><span>HTML</span> </li>
											<li style="display:inline; border:1px solid #e8e6e8; border-radius:3px; padding:10px 20px; margin:5px 3px;background-color:#faf7fa;"><span>CSS</span></li>
											<li style="display:inline; border:1px solid #e8e6e8; border-radius:3px; padding:10px 20px; margin:5px 3px;background-color:#faf7fa;">Javascript</li>
										</ul>
									</div>
								</div>
								<!-- Key Skills End -->

								<!-- Key Skills Modal Start -->
								<div class="modal fade" id="candSkills" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="candSkillsLabel" aria-hidden="true">
									<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="candSkillsLabel">Key Skills</h5>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<form action="<?=site_url('User/setSkill')?>" method="POST">
													<div class="form-group">
														<label for="cand_skill">Select Skills</label>
														<!-- <input type="text" class="form-control" name="cand_Edu" id="cand_Edu"> -->
														<select class="form-control select2" name="cand_skill[]" id="cand_skill" style="width:100%" multiple>
															<?php
																if (isset($skills)) {
																	$i = 0;
																	for ($i=0; $i < count($skills); $i++) {
																?> 
																		<option value="<?= $skills[$i]['skill_id']?>"><?= $skills[$i]['skill']?></option>
																<?php
																	}
																}
															?>
															
														</select>
													</div>
													<button type="submit" class="btn btn-primary">Save</button>
												</form>
											</div>
											
										</div>
									</div>
								</div>
								<!-- Key Skills Modal end -->
								
								<!-- Employment start-->
								<div class="section display-information" id="emp">
									<div class="title title-after">
										<div class="icon">
											<span
											><i class="fa fa-briefcase" aria-hidden="true" style="font-size: 35px;"></i
										></span>
										</div>
										<span><h4>Recent Employment Details (If Any)</h4></span><span><i type="button" class="fa fa-pencil-square-o" aria-hidden="true" data-bs-toggle="modal" data-bs-target="#candEmp"></i></span></span>
										
									</div>
									<?php if(isset($exsuccess)) {?>
											<div class='alert alert-success'>
												<?= $exsuccess;?>
											</div>
											
										<?php }?>
										<?php if(isset($exerror)) {?>
											<div class='alert alert-danger'>
												<?= $exerror;?>
											</div>
										<?php }?>
									<div id="edu1">
										<?php if(isset($experience)){
											// print_r($education);
										?>
										<h5 style="display:inline;"><?=$experience[0]['designation']?></h5> 
										<p><?=$experience[0]['company']?></p>
										<p><?=$experience[0]['total_experience']?></p><hr>
										<?php
										}
										?>
									</div>
								</div>
								<!-- Employment End-->

								<!-- Employment Modal Start -->
								<div class="modal fade" id="candEmp" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="candEmpLabel" aria-hidden="true">
									<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="candEmpLabel">Employment Details</h5>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<form action="<?=site_url('User/updateExp')?>" method="POST">
													<div class="form-group">
														<label for="cand_des">Designation</label>
														<input type="text" class="form-control" name="cand_des" id="cand_des" value="<?=$experience[0]['designation']?>">
													</div>
													
													<div class="form-group">
														<label for="cand_cname">Company Name</label>
														<input type="text" class="form-control" name="cand_cname" id="cand_cname" value="<?=$experience[0]['company']?>">
													</div>
													<div class="form-group">
														<label for="ttl_exp">Total Experience</label>
														<input type="text" class="form-control" name="ttl_exp" id="ttl_exp" value="<?=$experience[0]['total_experience']?>">
													</div>
													
													<div class="form-group" name="joboption" id="joboption">
														<h6>Is this your current job?</h6>
														<div class="form-check" style="display:inline-block; margin:2px 5px;">
															<input type="radio" class="form-check-input" name="job_current" id="job_yes1" value="yes" checked>
															<label for="job_yes1">Yes</label><br>
															
														</div>
														<div class="form-check" style="display:inline-block;">
															<input type="radio" class="form-check-input" name="job_current" value="no" id="job_no1">
															<label for="job_no1">No</label>
														</div>
														
													</div>
													<div class="form-group">
														<label for="cand_jst">Job Start Date</label>
														<input type="text" class="form-control" name="cand_jst" id="cand_jst" value="<?=$experience[0]['job_start']?>">
													</div>
													<div class="form-group">
														<label for="cand_jtill">Till</label>
														<input type="text" class="form-control" name="cand_jtill" id="cand_jtill" value="<?=$experience[0]['job_end']?>">
													</div>
													<div class="form-group">
														<h6>Job Type</h6>
														<div class="form-check">
															<input type="radio" class="form-check-input" name="cand_jty" id="cand_jty1" checked>
															<label for="cand_loc">Full Time</label>
														</div>
														<div class="form-check">
															<input type="radio" class="form-check-input" name="cand_jty" id="cand_coty2">
															<label for="cand_loc">Part Time</label>
														</div>		
													</div>
													<div class="form-group">
														<label for="cand_sal">Current Salary Per Year (In INR)</label>
														<input type="text" class="form-control" name="cand_sal" id="cand_sal" value="<?=$experience[0]['salary']?>">
													</div>
													<div class="form-group">
														<label for="cand_jrd">Job Role Description</label>
														<textarea class="form-control" name="cand_jrd" id="cand_jrd" cols="30" rows="6"><?=$experience[0]['job_description']?></textarea>
													</div>
													<div class="form-group">
														<label for="cand_notice">Notice Period</label>
															<select class="form-select" name="cand_notice" id="cand_notice">
																<option selected>Choose...</option>
																<option value="15 Days or less">15 Days or less</option>
																<option value="1 month">1 month</option>
																<option value="2 month">2 month</option>
																<option value="3 month">3 month</option>
																<option value="More than 3 Months">More than 3 Months</option>
																<option value="Serving Notice Period">Serving Notice Period</option>
															</select>
													</div>
													<button type="submit" class="btn btn-primary">Save</button>
												</form>
											</div>
										</div>
									</div>
								</div>
								<!-- Employment Modal End -->

								<!-- Social media start -->
								<div class="section" id="soc_media">
									<div class="title title-after">
										<div class="icon">
											<span
											><i class="fa fa-handshake-o" aria-hidden="true" style="font-size:35px"></i
										></span>
										</div>
										<span><h4>Social Link</h4></span><span class=""><i type="button" class="fa fa-pencil-square-o" aria-hidden="true" data-bs-toggle="modal" data-bs-target="#candSocial"></i></span>
									</div>
									<?php if(isset($msuccess)) {?>
											<div class='alert alert-success'>
												<?= $exsuccess;?>
											</div>
											
										<?php }?>
										<?php if(isset($merror)) {?>
											<div class='alert alert-danger'>
												<?= $exerror;?>
											</div>
										<?php }?>
									<ul class="social social-icon-bg tr-list">
										<li>
											<i class="fa fa-facebook"></i
											><span class="media-body"
												><a href="<?=$media[0]['facebook']?>"><?=$media[0]['facebook']?></a></span
											>
										</li>
										
										<li>
											<i class="fa fa-instagram"></i
											><span class="media-body"
												><a href="<?=$media[0]['instagram']?>"
													><?=$media[0]['instagram']?></a
												></span
											>
										</li>
										<li>
											<i class="fa fa-linkedin"></i
											><span class="media-body"
												><a href="<?=$media[0]['linkedin']?>"><?=$media[0]['linkedin']?></a></span
											>
										</li>
										
									</ul>
								</div>
								<!-- Social media start -->

								<!-- Social Media Model start -->
								<div class="modal fade" id="candSocial" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="candSocialLabel" aria-hidden="true">
									<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="candSocialLabel">Social Media Details</h5>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<form action="<?=site_url('User/updateMedia')?>" method="POST">
													<div class="form-group">
														<label for="cand_face"><i class="fa fa-facebook-square" style="font-size: 45px;"></i></label>
														<input type="text" class="form-control" name="cand_face" id="cand_face" value="<?=$media[0]['facebook']?>">
													</div>
													<div class="form-group">
														<label for="cand_face"><i class="fa fa-instagram" style="font-size: 45px;"></i></label>
														<input type="text" class="form-control" name="cand_insta" id="cand_insta" value="<?=$media[0]['instagram']?>">
													</div>
													<div class="form-group">
														<label for="cand_lndin"><i class="fa fa-linkedin-square" style="font-size: 45px;"></i></label>
														<input type="text" class="form-control" name="cand_lndin" id="cand_lndin" value="<?=$media[0]['linkedin']?>">
													</div>
													<button type="submit" class="btn btn-primary">Save</button>
												</form>
											</div>
											
										</div>
									</div>
								</div>
								<!-- Social Media Model end -->
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	
		<!-- <script>
			var myModal = document.getElementById('myModal')
			var myInput = document.getElementById('myInput')

			myModal.addEventListener('shown.bs.modal', function () {
			myInput.focus()
			})
		</script> -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
		<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" rel="stylesheet"/>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
		<script>
			$(document).ready(function(){
				$('#cand_passyr').datepicker({
         		minViewMode: "years",
                    autoclose: true,
                     format: 'yyyy'
       			});
				$('#cand_jst').datepicker({
					startView:"months",
         			minViewMode: "months",
                    autoclose: true,
                     format: 'mm-yyyy'
       			});
                
				
				$('#joboption').on('change', function() {
					selected_value = $("input[name='job_current']:checked").val();
					console.log(selected_value);
					if (selected_value=='no') {
						$('#cand_jtill').val('')
						$('#cand_jtill').datepicker({
						startView:"months",
						minViewMode: "months",
						autoclose: true,
                     	format: 'mm-yyyy'
       				});
					}
					else{
						// $(document).ready( function() {
							var now = new Date();
							var day = ("0" + now.getDate()).slice(-2);
							var month = ("0" + (now.getMonth() + 1)).slice(-2);
							var today = now.getFullYear()+"-"+(month)+"-"+(day) ;
							$('#cand_jtill').val('')
							$('#cand_jtill').val(today);	
			
					}
					
				});

				// $('#job_yes1').omchange

				$('#cand_grade1').on('change', function() {
					console.log('changed');
					$('#marks1').html("<label for='cand_mrkr1'>Marks</label><input type='text' class='form-control' name='cand_mrk1' id='cand_mrk1'>");
				});
				$('#cand_grade2').on('change', function() {
					console.log('changed');
					$('#marks2').html("<label for='cand_mrkr2'>Marks</label><input type='text' class='form-control' name='cand_mrk2' id='cand_mrk2'>");
				});
				$('#cand_grade3').on('change', function() {
					console.log('changed');
					$('#marks3').html("<label for='cand_mrkr3'>Marks</label><input type='text' class='form-control' name='cand_mrk3' id='cand_mrk3'>");
				});
				$(".select2").select2({
					tags:true,
					minimumSelectionLength: 1,
					maximumSelectionLength: 10
				});
			});
		</script>
		<?= $this->endsection()?>
	
</html>
