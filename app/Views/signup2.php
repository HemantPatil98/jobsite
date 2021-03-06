<?php $page_session = \Config\Services::session()?>
<?= $this->extend("layouts/base.php")?>
	<?= $this->section("content")?>
        <style>
        /*custom font*/
            /* @import url(https://fonts.googleapis.com/css?family=Montserrat); */

            /*basic reset*/
            * {margin: 0; padding: 0;}

            html {
                height: 100%;
                /*Image only BG fallback*/
                
                /*background = gradient + image pattern combo*/
                background: 
                    linear-gradient(rgba(196, 102, 0, 0.6), rgba(155, 89, 182, 0.6));
            }

            body {
                font-family: montserrat, arial, verdana;
            }
            /*form styles*/
            #msform {
                width: 75%;
                margin: 50px auto;
                text-align: center;
                position: relative;
            }
            #msform fieldset {
                background: white;
                border: 0 none;
                border-radius: 3px;
                /* box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4); */
                padding: 20px 30px;
                box-sizing: border-box;
                width: 80%;
                margin: 0 10%;
                
                /*stacking fieldsets above each other*/
                position: relative;
            }
            /*Hide all except first fieldset*/
            #msform fieldset:not(:first-of-type) {
                display: none;
            }
            /*inputs*/
            #msform input, #msform textarea {
                padding: 15px;
                border: 1px solid #ccc;
                border-radius: 3px;
                margin-bottom: 10px;
                width: 100%;
                box-sizing: border-box;
                font-family: montserrat;
                color: #2C3E50;
                font-size: 13px;
            }
            /*buttons*/
            #msform .action-button {
                width: 100px;
                background: #008def;
                font-weight: bold;
                color: white;
                border: 0 none;
                border-radius: 1px;
                cursor: pointer;
                padding: 10px 5px;
                margin: 10px 5px;
            }
            #msform .action-button:hover, #msform .action-button:focus {
                /* box-shadow: 0 0 0 2px white, 0 0 0 3px #27AE60; */
            }
            /*headings*/
            .fs-title {
                font-size: 15px;
                text-transform: uppercase;
                color: #2C3E50;
                margin-bottom: 10px;
            }
            .fs-subtitle {
                font-weight: normal;
                font-size: 13px;
                color: #666;
                margin-bottom: 20px;
            }
            /*progressbar*/
            #progressbar {
                margin-bottom: 30px;
                overflow: hidden;
                /*CSS counters to number the steps*/
                counter-reset: step;
            }
            #progressbar li {
                list-style-type: none;
                color: #008def;
                text-transform: uppercase;
                font-size: 13px;
                width: 33.33%;
                float: left;
                position: relative;
            }
            #progressbar li:before {
                content: counter(step);
                counter-increment: step;
                width: 20px;
                line-height: 20px;
                display: block;
                font-size: 13px;
                color: #333;
                background: white;
                border-radius: 3px;
                margin: 0 auto 5px auto;
            }
            /*progressbar connectors*/
            #progressbar li:after {
                content: '';
                width: 100%;
                height: 2px;
                background: #008def;
                position: absolute;
                left: -50%;
                top: 9px;
                z-index: -1; /*put it behind the numbers*/
            }
            #progressbar li:first-child:after {
                /*connector not needed before the first step*/
                content: none; 
            }
            /*marking active/completed steps green*/
            /*The number of the step and the connector before it = green*/
            #progressbar li.active:before,  #progressbar li.active:after{
                background: #008def;
                color: white;
            }




        </style>
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
		<!-- multistep form -->
        <div class="tr-account section-padding">
			<div class="container-fluid text-center">
				<!-- <div class="user-account"> -->
                    <form id="msform">
                    <!-- progressbar -->
                    <ul id="progressbar">
                        <li class="active">Account Setup</li>
                        <li>Social Profiles</li>
                        <li>Personal Details</li>
                    </ul>
                    <!-- fieldsets -->
                    <fieldset>
                        <h2 class="fs-title">Create your account</h2>
                        <h3 class="fs-subtitle">This is step 1</h3>
                        <input type="text" name="email" placeholder="Email" />
                        <input type="password" name="pass" placeholder="Password" />
                        <input type="password" name="cpass" placeholder="Confirm Password" />
                        <input type="button" name="next" class="next action-button" value="Next" />
                    </fieldset>
                    <fieldset>
                        <h2 class="fs-title">Social Profiles</h2>
                        <h3 class="fs-subtitle">Your presence on the social network</h3>
                        <input type="text" name="twitter" placeholder="Twitter" />
                        <input type="text" name="facebook" placeholder="Facebook" />
                        <input type="text" name="gplus" placeholder="Google Plus" />
                        <input type="button" name="previous" class="previous action-button" value="Previous" />
                        <input type="button" name="next" class="next action-button" value="Next" />
                    </fieldset>
                    <fieldset>
                        <h2 class="fs-title">Personal Details</h2>
                        <h3 class="fs-subtitle">We will never sell it</h3>
                        <input type="text" name="fname" placeholder="First Name" />
                        <input type="text" name="lname" placeholder="Last Name" />
                        <input type="text" name="phone" placeholder="Phone" />
                        <textarea name="address" placeholder="Address"></textarea>
                        <input type="button" name="previous" class="previous action-button" value="Previous" />
                        <input type="submit" name="submit" class="submit action-button" value="Submit" />
                    </fieldset>
                    </form>
                <!-- </div> -->
            </div>
        </div>
		
<?= $this->endsection()?>		
</html>
