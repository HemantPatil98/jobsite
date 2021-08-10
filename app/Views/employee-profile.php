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

	</style>
		<div class="tr-breadcrumb bg-image section-before">
			<div class="container">
				<div class="breadcrumb-info text-center">
					<div class="user-image">
						<img src="<?= base_url();?>/public/assets/images/others/author.png" alt="Image" class="img-fluid" />
					</div>
					<div class="user-title">
						<h1>Jhon Doe</h1>
					</div>
					<ul class="job-meta tr-list list-inline">
						<li>
							<i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco,
							CA, US
						</li>
						<li><i class="fa fa-phone" aria-hidden="true"></i>+0123 456 789</li>
						<li>
							<i class="fa fa-envelope" aria-hidden="true"></i
							><a href="#"
								><span
									class="__cf_email__"
									data-cfemail="d7bdbfb8b9b3b8b297b0bab6bebbf9b4b8ba"
									>[email&#160;protected]</span
								></a
							>
						</li>
						<li>
							<i class="fa fa-briefcase" aria-hidden="true"></i>UI & UX Designer
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
							<a href="#"
								><i class="fa fa-facebook"></i><span>Facebook</span></a
							>
						</li>
						<li>
							<a href="#"
								><i class="fa fa-twitter"></i> <span>Twitter</span>
							</a>
						</li>
						<li>
							<a href="#"
								><i class="fa fa-google-plus"></i> <span>Google Plus</span>
							</a>
						</li>
						<li>
							<a href="#"
								><i class="fa fa-linkedin"></i><span>Linkedin</span>
							</a>
						</li>
						<li>
							<a href="#"
								><i class="fa fa-dribbble"></i> <span>Dribbble</span></a
							>
						</li>
						<li>
							<a href="#"><i class="fa fa-behance"></i> <span>Behance</span></a>
						</li>
						<li>
							<a href="#"><i class="fa fa-globe"></i> <span>Website</span> </a>
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
									<form action="">
										<div class="form-group input-group">
											<input type="file" class="form-control" name="cand_resume" id="cand_resume" style="padding:12px;">
											<button class="btn btn-primary" type="button" id="button-addon2">Upload Resume</button>
										</div>
										<div style="text-align:center; color:#9c9c9c">
											Supported Formats: doc, docx, pdf, upto 2MB
										</div>
									</form>
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
									<form action="">
										<div class="form-group input-group">
											<input type="file" accept="audio/*,video/*" class="form-control" name="vid_profile" id="vid_profile" style="padding:12px;">
											<button class="btn btn-primary" type="button" id="button-addon2">Upload Video Profile</button>
										</div>
										<div style="text-align:center; color:#9c9c9c">
											Supported Formats: 
										</div>
									</form>	
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
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium eligendi velit doloremque. Ipsam dignissimos libero repudiandae ullam aliquam, ea eum omnis labore dolorum nobis, eaque autem. At nulla sit autem.</p>
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
										<form action="">
											<div class="form-group">
												<label for="headline">Resume Headline</label>
												<input type="text" class="form-control" name="headline" id="headline">
											</div>
											
										</form>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
										<button type="button" class="btn btn-primary">Save</button>
									</div>
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
										<div class="user-image">
											<img
												src="<?= base_url();?>/public/assets/images/others/author.png"
												alt="Image"
												class="img-fluid"
											/>
										</div>
										<div class="upload-photo">
											<label class="btn btn-primary" for="upload-photo">
												<input type="file" id="upload-photo" />
												Change Photo
											</label>
											<span class="max-size">Max 20 MB</span>
										</div>
									</div>
									<ul class="tr-list account-details">
										<li>Display Name<span>Jhon Doe</span></li>
										<li>Address<span>San Francisco, CA, US</span></li>
										<li>Phone Number<span>+0123456789</span></li>
										<li>
											Email Id<span
												><a href="#"
													><span
														class="__cf_email__"
														data-cfemail="7a101215141e151f3a1d171b131654191517"
														>[email&#160;protected]</span
													></a
												></span
											>
										</li>
										<li>Industry Expertise<span>UI & UX Designer</span></li>
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
												<form action="">
													<div class="form-group">
														<label for="cand_name">Name</label>
														<input type="text" class="form-control" name="cand_name" id="cand_name">
													</div>
													<div class="form-group">
														<label for="cand_com">Company Name</label>
														<input type="text" class="form-control" name="cand_com" id="cand_com">
													</div>
													<div class="form-group">
														<label for="cand_exp">Total Experience</label>
														<input type="text" class="form-control" name="cand_exp" id="cand_exp">
													</div>
													<div class="form-group">
														<label for="cand_sal">Annual Salary</label>
														<input type="text" class="form-control" name="cand_sal" id="cand_sal">
													</div>
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
														<input type="text" class="form-control" name="cand_email" id="cand_email">
													</div>
													
												</form>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												<button type="button" class="btn btn-primary">Save</button>
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
										<span><h4>Education Details</h4></span>
										
									</div>
									<div id="edu1">
										<h5 style="display:inline;">Course Name</h5> - <h5 style="display:inline;">Specialization</h5><span class=""><i type="button" class="fa fa-pencil-square-o" aria-hidden="true" data-bs-toggle="modal" data-bs-target="#candEdu"></i></span>
										<p>University/College</p>
										<p>Educational Year</p>
									</div><hr>
									<div> <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#candEdu">Add Another</button> </div>
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
												<form action="">
													<div class="form-group">
														<label for="cand_Edu">Education</label>
														<input type="text" class="form-control" name="cand_Edu" id="cand_Edu">
													</div>
													<div class="form-group">
														<label for="cand_course">Course</label>
														<input type="text" class="form-control" name="cand_course" id="cand_course">
													</div>
													<div class="form-group">
														<label for="cand_spl">Specialization</label>
														<input type="text" class="form-control" name="cand_spl" id="cand_spl">
													</div>
													<div class="form-group">
														<label for="cand_uni">University/Institute</label>
														<input type="text" class="form-control" name="cand_uni" id="cand_uni">
													</div>
													<div class="form-group">
														<h6>Course Type</h6>
														<div class="form-check">
															<input type="radio" class="form-check-input" name="cand_coty" id="cand_coty1" checked>
															<label for="cand_coty1">Full Time</label>
														</div>
														<div class="form-check">
															<input type="radio" class="form-check-input" name="cand_coty" id="cand_coty2">
															<label for="cand_coty2">Part Time</label>
														</div>
														<div class="form-check">
															<input type="radio" class="form-check-input" name="cand_coty" id="cand_coty3">
															<label for="cand_coty3">Correspondence/Distance Learning</label>
														</div>		
													</div>
													<div class="form-group">
														<label for="cand_passyr">Passing Out Year</label>
														<input type="text" class="form-control pass-yr" name="cand_passyr" id="cand_passyr">
													</div>
													<div class="form-group">
														<label for="cand_grade">Grading System</label>
															<select class="form-select" id="cand_grade">
																<option class="dropdown-item" selected>Choose...</option>
																<option class="dropdown-item" value="Percentage">Percentage</option>
																<option class="dropdown-item" value="CGPA">CGPA (scale of 10)</option>
															</select>
													</div>
													<div class="form-group" id="marks"></div>
												</form>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												<button type="button" class="btn btn-primary">Save</button>
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
												<form action="">
													<div class="form-group">
														<label for="cand_skill">Select Skills</label>
														<!-- <input type="text" class="form-control" name="cand_Edu" id="cand_Edu"> -->
														<select class="form-control select2" name="cand_skill[]" id="cand_skill" style="width:100%" multiple>
															<option value="HTML5">HTML5</option>
															<option value="CSS">CSS</option>
															<option value="Bootstrap">Bootstrap</option>
															<option value="Javascript">Javascript</option>
															<option value="Python">Python</option>
															<option value="Java">Java</option>
															<option value="Angular">Angular</option>
														</select>
													</div>
													
												</form>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												<button type="button" class="btn btn-primary">Save</button>
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
										<span><h4>Employment Details (If Any)</h4></span><span><i type="button" class="fa fa-pencil-square-o" aria-hidden="true" data-bs-toggle="modal" data-bs-target="#candEmp"></i></span></span>
										
									</div>
									<div id="edu1">
										<h5 style="display:inline;">Designation</h5>
										<p>Company Name</p>
										<p>Experience</p>
									</div><hr>
									<div> <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#candEmp">Add Another</button> </div>
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
												<form action="">
													<div class="form-group">
														<label for="cand_des">Designation</label>
														<input type="text" class="form-control" name="cand_des" id="cand_des">
													</div>
													<div class="form-group">
														<label for="cand_cname">Company Name</label>
														<input type="text" class="form-control" name="cand_cname" id="cand_cname">
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
														<input type="text" class="form-control" name="cand_jst" id="cand_jst">
													</div>
													<div class="form-group">
														<label for="cand_jtill">Till</label>
														<input type="text" class="form-control" name="cand_jtill" id="cand_jtill">
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
														<input type="text" class="form-control" name="cand_sal" id="cand_sal">
													</div>
													<div class="form-group">
														<label for="cand_jrd">Job Role Description</label>
														<textarea class="form-control" name="cand_jrd" id="cand_jrd" cols="30" rows="6"></textarea>
													</div>
													<div class="form-group">
														<label for="cand_notice">Notice Period</label>
															<select class="form-select" id="cand_notice">
																<option selected>Choose...</option>
																<option value="15 Days or less">15 Days or less</option>
																<option value="1 month">1 month</option>
																<option value="2 month">2 month</option>
																<option value="3 month">3 month</option>
																<option value="More than 3 Months">More than 3 Months</option>
																<option value="Serving Notice Period">Serving Notice Period</option>
															</select>
													</div>
												</form>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												<button type="button" class="btn btn-primary">Save</button>
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
									<ul class="social social-icon-bg tr-list">
										<li>
											<i class="fa fa-facebook"></i
											><span class="media-body"
												><a href="#">https://www.facebook.com/jhondoe</a></span
											>
										</li>
										
										<li>
											<i class="fa fa-google-plus"></i
											><span class="media-body"
												><a href="#"
													>https://www.googleplus.com/jhondoe</a
												></span
											>
										</li>
										<li>
											<i class="fa fa-linkedin"></i
											><span class="media-body"
												><a href="#">https://www.linkedin.com/jhondoe</a></span
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
												<form action="">
													<div class="form-group input-group mb-3">
														<span class="input-group-text" id="basic-addon1"><i class="fab fa-facebook-square"></i></span>
														<input type="text" class="form-control" name="cand_face" id="cand_face">
													</div>
													<div class="form-group">
														<label for="cand_cname">Company Name</label>
														<input type="text" class="form-control" name="cand_cname" id="cand_cname">
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
														<input type="text" class="form-control" name="cand_jst" id="cand_jst">
													</div>
													<div class="form-group">
														<label for="cand_jtill">Till</label>
														<input type="text" class="form-control" name="cand_jtill" id="cand_jtill">
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
														<input type="text" class="form-control" name="cand_sal" id="cand_sal">
													</div>
													<div class="form-group">
														<label for="cand_jrd">Job Role Description</label>
														<textarea class="form-control" name="cand_jrd" id="cand_jrd" cols="30" rows="6"></textarea>
													</div>
													<div class="form-group">
														<label for="cand_notice">Notice Period</label>
															<select class="form-select" id="cand_notice">
																<option selected>Choose...</option>
																<option value="15 Days or less">15 Days or less</option>
																<option value="1 month">1 month</option>
																<option value="2 month">2 month</option>
																<option value="3 month">3 month</option>
																<option value="More than 3 Months">More than 3 Months</option>
																<option value="Serving Notice Period">Serving Notice Period</option>
															</select>
													</div>
												</form>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												<button type="button" class="btn btn-primary">Save</button>
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
						$('#cand_jtill').datepicker({
						startView:"months",
						minViewMode: "months",
						autoclose: true,
                     	format: 'mm-yyyy'
       				});
					}
					
				});

				$('#cand_grade').on('change', function() {
					console.log('changed');
					$('#marks').html("<label for='cand_mrkr'>Marks</label><input type='text' class='form-control' name='cand_mrk' id='cand_mrk'>");
				});
				$(".select2").select2({
					minimumSelectionLength: 1,
					maximumSelectionLength: 10
				});
			});
		</script>
		<?= $this->endsection()?>
	
</html>
