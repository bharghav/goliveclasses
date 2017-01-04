<?php 
	include('dbconfig.php');
	include('includes/dbconnection.php');
	$callConfig=new configClass();
	$callConfig->configConnection();
	
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->


<head>

<meta charset="utf-8">

<title>Go LIVE CLASSES</title>
<!--insert your title here-->
<meta name="description" content="Go LIVE CLASSES">
<!--insert your description here-->
<meta name="author" content="yashvant">
<!--insert your name here-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--meta responsive-->

<!--START CSS-->
<link rel="stylesheet" href="css/style.min.css">
<!--style-->
<link href="css/bootstrap.min.css" rel="stylesheet" />

<!--google fonts-->
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700'
	rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Varela+Round'
	rel='stylesheet' type='text/css'>
<link href='css/font-awesome.min.css' rel='stylesheet' type='text/css'>
<!--[if lt IE 9]>  
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>  
    <![endif]-->

<!--FAVICONS-->
<link rel="shortcut icon" href="img/favicon/favicon.ico">
<link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72"
	href="img/favicon/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114"
	href="img/favicon/apple-touch-icon-114x114.png">
<!--END FAVICONS-->
<!--======= Responsive Bootstrap Carousel StyleSheet =========-->
<link href="css/responsive_bootstrap_carousel_mega_min.css"
	rel="stylesheet" media="all">
<link href="css/theme.css" rel="stylesheet" media="all">

</head>
<body>



	<!--START -->
	<div class="nicdark_site">

		<!--START nicdark_site_fullwidth-->
		<div
			class="nicdark_site_fullwidth nicdark_site_fullwidth_boxed nicdark_clearfix">



			<!--START search container-->
			<div
				class="nicdark_display_table nicdark_transition_all_08_ease nicdark_navigation_3_search_content nicdark_bg_greydark_alpha_9 nicdark_position_fixed nicdark_width_100_percentage nicdark_height_100_percentage nicdark_z_index_1_negative nicdark_opacity_0">

				<!--close-->
				<div
					class="nicdark_cursor_zoom_out nicdark_navigation_3_close_search_content nicdark_width_100_percentage nicdark_height_100_percentage nicdark_position_absolute nicdark_z_index_1_negative"></div>


				<div
					class="nicdark_display_table_cell nicdark_vertical_align_middle nicdark_text_align_center">
					<div
						class="nicdark_width_700 nicdark_width_250_all_iphone nicdark_display_inline_block">
						<div
							class="nicdark_width_80_percentage nicdark_padding_5 nicdark_box_sizing_border_box nicdark_float_left nicdark_position_relative">
							<input
								class="nicdark_border_width_2 nicdark_background_none nicdark_border_top_width_0 nicdark_border_right_width_0 nicdark_border_left_width_0 nicdark_first_font nicdark_color_white nicdark_placeholder_color_white nicdark_font_size_30 nicdark_line_height_30"
								type="text" placeholder="Search">
						</div>
						<div
							class="nicdark_width_20_percentage nicdark_padding_10 nicdark_box_sizing_border_box nicdark_float_left nicdark_position_relative">
							<a
								class="nicdark_width_55 nicdark_height_55 nicdark_display_inline_block nicdark_text_align_center nicdark_box_sizing_border_box nicdark_bg_green nicdark_padding_15 nicdark_border_radius_3 "
								href="courses.html"> <img alt="" width="25"
								src="img/icons/icon-search-white.svg">
							</a>
						</div>
					</div>
				</div>



			</div>
			<!--END search container-->




			<!--START menu responsive-->
			<div
				class="nicdark_navigation_3_sidebar_content nicdark_padding_40 nicdark_box_sizing_border_box nicdark_overflow_hidden nicdark_overflow_y_auto nicdark_transition_all_08_ease nicdark_bg_green nicdark_height_100_percentage nicdark_position_fixed nicdark_width_300 nicdark_right_300_negative nicdark_z_index_9">

				<img alt="" width="25"
					class="nicdark_close_navigation_3_sidebar_content nicdark_cursor_pointer nicdark_right_20 nicdark_top_20 nicdark_position_absolute"
					src="img/icons/icon-close-white.svg">






			</div>
			<!--END menu responsive-->





			<div class="nicdark_section">

				<div class="nicdark_section nicdark_bg_green">




					<!--start nicdark_container-->
					<div class="nicdark_container nicdark_clearfix">

						<div
							class="grid grid_6 nicdark_padding_botttom_10 nicdark_padding_top_10 nicdark_text_align_center_responsive">





						</div>


						<div
							class="grid grid_6 nicdark_text_align_right nicdark_border_top_1_solid_greendark_responsive nicdark_text_align_center_responsive nicdark_padding_botttom_10 nicdark_padding_top_10">


							<div class="nicdark_navigation_top_header_3">
								<ul>
									<li><img alt=""
										class="nicdark_margin_right_10 nicdark_float_left" width="15"
										src="img/icons/icon-user-white.svg"> <a
										class="nicdark_color_white" href="#login" data-toggle="modal"
										data-target="#mylogin">LOGIN</a></li>
									<li><img alt=""
										class="nicdark_margin_right_10 nicdark_float_left" width="15"
										src="img/icons/icon-login-white.svg"> <a
										class="nicdark_color_white" href="#" data-toggle="modal"
										data-target="#mylogin">REGISTER</a></li>
								</ul>
							</div>


						</div>


					</div>
					<!--end container-->

				</div>

			</div>

			<!-- Modal -->
			<!-- -Login Modal -->
			<div class="modal fade" id="mylogin" tabindex="-1" role="dialog"
				aria-labelledby="loginModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content login-modal">
						<div class="modal-header login-modal-header">
							<button type="button" class="close" data-dismiss="modal"
								aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
							<h4 class="modal-title text-center" id="loginModalLabel">Login/Signup</h4>
						</div>
						<div class="modal-body">
							<div class="text-center">
								<div role="tabpanel" class="login-tab">
									<!-- Nav tabs -->
									<ul class="nav nav-tabs" role="tablist">
										<li role="presentation" class="active"><a id="signin-taba"
											href="#home" aria-controls="home" role="tab"
											data-toggle="tab">Sign In</a></li>
										<li role="presentation"><a id="signup-taba" href="#profile"
											aria-controls="profile" role="tab" data-toggle="tab">Sign Up</a></li>
										<li role="presentation"><a id="forgetpass-taba"
											href="#forget_password" aria-controls="forget_password"
											role="tab" data-toggle="tab">Forget Password</a></li>
									</ul>

									<!-- Tab panes -->
									<div class="tab-content">
										<div role="tabpanel" class="tab-pane active text-center"
											id="home">
											&nbsp;&nbsp; <span id="login_fail" class="response_error"
												style="display: none;">Loggin failed, please try again.</span>
											<div class="clearfix"></div>
											<form>
												<div class="form-group">
													<div class="input-group">
														<div class="input-group-addon">
															<i class="fa fa-user"></i>
														</div>
														<input type="text" class="form-control"
															id="login_username" placeholder="Username">
													</div>
													<span class="help-block has-error" id="email-error"></span>
												</div>
												<div class="form-group">
													<div class="input-group">
														<div class="input-group-addon">
															<i class="fa fa-lock"></i>
														</div>
														<input type="password" class="form-control" id="password"
															placeholder="Password">
													</div>
													<span class="help-block has-error" id="password-error"></span>
												</div>
												<button type="button" id="login_btn"
													class="btn btn-block bt-login"
													data-loading-text="Signing In....">Login</button>
												<div class="clearfix"></div>

											</form>
										</div>
										<div role="tabpanel" class="tab-pane" id="profile">
											&nbsp;&nbsp; <span id="registration_fail"
												class="response_error" style="display: none;">Registration
												failed, please try again.</span>
											<div class="clearfix"></div>
											<form>
												<div class="form-group">
													<div class="input-group">
														<div class="input-group-addon">
															<i class="fa fa-user"></i>
														</div>
														<input type="text" class="form-control" id="username"
															placeholder="Username">
													</div>
													<span class="help-block has-error" data-error='0'
														id="username-error"></span>
												</div>
												<div class="form-group">
													<div class="input-group">
														<div class="input-group-addon">
															<i class="fa fa-at"></i>
														</div>
														<input type="text" class="form-control" id="remail"
															placeholder="Email">
													</div>
													<span class="help-block has-error" data-error='0'
														id="remail-error"></span>
												</div>

												<button type="button" id="register_btn"
													class="btn btn-block bt-login"
													data-loading-text="Registering....">Register</button>
												<div class="clearfix"></div>

											</form>
										</div>
										<div role="tabpanel" class="tab-pane text-center"
											id="forget_password">
											&nbsp;&nbsp; <span id="reset_fail" class="response_error"
												style="display: none;"></span>
											<div class="clearfix"></div>
											<form>
												<div class="form-group">
													<div class="input-group">
														<div class="input-group-addon">
															<i class="fa fa-user"></i>
														</div>
														<input type="text" class="form-control" id="femail"
															placeholder="Email">
													</div>
													<span class="help-block has-error" data-error='0'
														id="femail-error"></span>
												</div>

												<button type="button" id="reset_btn"
													class="btn btn-block bt-login"
													data-loading-text="Please wait....">Forget Password</button>
												<div class="clearfix"></div>

											</form>
										</div>
									</div>
								</div>

							</div>
						</div>

					</div>
				</div>
			</div>
			<!-- - Login Model Ends Here -->


			<div class="nicdark_section nicdark_position_relative ">

				<div class="nicdark_section nicdark_bg_white">




					<!--start nicdark_container-->
					<div
						class="nicdark_container nicdark_clearfix nicdark_position_relative">

						<div class="grid grid_12 nicdark_display_none_all_responsive">

							<div class="nicdark_section nicdark_height_10"></div>

							<!--LOGO-->




							<a href="index.html"><img alt=""
								class="nicdark_position_absolute nicdark_left_15 "
								src="img/logos/goliveclasess-log2.jpg"></a>
							<div
								class="nicdark_navigation_3 nicdark_text_align_right nicdark_float_right nicdark_display_none_all_responsive">
								<ul>
									<li><a href="index.php">HOME</a></li>
									<li><a href="index.php?option=courses">COURSES</a></li>


									<li><a href="aboutus.html">ABOUT US</a></li>
									<li><a href="contactus.html">CONTACT US</a></li>
									<li><a href="checkout.html">CHECKOUT</a></li>

									<li><a href="searchcourses.html">SEARCH COURSES</a></li>
									<li><a href="instructors.html">INSTRUCTORS</a></li>

								</ul>

							</div>
							<div class="nicdark_section nicdark_height_40"></div>

						</div>




						<!--RESPONSIVE-->
						<div
							class="nicdark_width_50_percentage nicdark_text_align_center_all_iphone nicdark_width_100_percentage_all_iphone nicdark_float_left nicdark_display_none nicdark_display_block_responsive">
							<div class="nicdark_section nicdark_height_20"></div>
							<a href="index.html"><img alt="" class=""
								src="img/logos/goliveclasess-log2.jpg"></a>
						</div>
						<div
							class="nicdark_width_50_percentage nicdark_width_100_percentage_all_iphone nicdark_float_left nicdark_display_none nicdark_display_block_responsive">
							<div class="nicdark_section nicdark_height_20"></div>
							<div
								class="nicdark_float_right nicdark_width_100_percentage nicdark_text_align_right nicdark_text_align_center_all_iphone">


								<a class="nicdark_open_navigation_3_sidebar_content" href="#"> <img
									alt="" class="nicdark_margin_right_20" width="25"
									src="img/icons/icon-menu-grey.svg">
								</a> <img alt=""
									class="nicdark_margin_left_20 nicdark_navigation_3_open_search_content"
									width="25" src="img/icons/icon-search-grey.svg">

							</div>
							<div class="nicdark_section nicdark_height_20"></div>
						</div>
						<!--RESPONSIVE-->





					</div>
					<!--end container-->

				</div>

			</div>