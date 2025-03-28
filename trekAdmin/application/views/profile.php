<?php include 'header.php';?>
<!-- For Change Password -->
<div id="changePasswordPopup" tabindex="-1" role="dialog" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header bg-primary">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">×</span>
					<span class="sr-only">Close</span>
				</button>
				<h4 class="modal-title">Change Password</h4>
			</div>
			<div class="modal-body">
				<div class="card-body">
					<div class="row">
						<div class="col-sm-12 col-md-12">
							<div class="demo-form-wrapper">
								<form class="form form-horizontal">
									<!-- <div class="form-group success-container">
										<div class="alert alert-success alert-dismissable fade in">							
											<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>							
											<strong>Success! </strong><span class="errorContainer">{{success_msg_text}}</span>						
										</div>
									</div> -->
									<div class="form-group">
										<label for="" class=" control-label">Old Password</label>
										<input id="" class="form-control" type="password">
										<!-- <span class="error" ng-show="old_password_error">*{{old_password_msg}}</span> -->
									</div>
									<div class="form-group">
										<label for="" class="control-label">New Password</label>
										<input id="" class="form-control" type="password">
										<!-- <span class="error" ng-show="new_password_error">*{{new_password_msg}}</span> -->
									</div>
									<div class="form-group">
										<label for="" class="control-label">Confirm Password</label>
										<input id="" class="form-control" type="password">
										<!-- <span class="error" ng-show="confirm_password_error">*{{confirm_password_msg}}</span> -->
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-4  col-md-4">
												<button class="btn btn-primary btn-block" type="submit">Submit</button>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<!-- <button class="btn btn-primary" data-dismiss="modal" type="button">Continue</button>
				<button class="btn btn-default" data-dismiss="modal" type="button">Cancel</button> -->
			</div>
		</div>
	</div>
</div>

<!-- For Edit Profile -->
<div id="editProfilePopup" tabindex="-1" role="dialog" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header bg-primary">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">×</span>
					<span class="sr-only">Close</span>
				</button>
				<h4 class="modal-title">Edit Profile</h4>
			</div>
			<div class="modal-body">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-sm-12 col-md-12">
								<div class="demo-form-wrapper">
									<form class="form form-horizontal">
										<!-- <div class="form-group success-container" ng-show="update_success_msg">
											<div class="alert alert-success alert-dismissable fade in">							
												<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>							
												<strong>Success! </strong><span class="errorContainer">{{update_success_msg_text}}</span>						
											</div>
										</div> -->
										<div class="form-group">
											<label class="control-label">Name</label>
											<input class="form-control" type="text">
											<!-- <span class="error" ng-show="edit_name_error">*{{edit_name_msg}}</span> -->
										</div>
										<div class="form-group">
											<label class="control-label">Email</label>
											<input class="form-control" type="text">
											<!-- <span class="error" ng-show="edit_email_error">*{{edit_email_msg}}</span> -->
										</div>
										<div class="form-group">
											<label class="control-label">Phone</label>
											<input class="form-control" type="text">
											<!-- <span class="error" ng-show="edit_phone_number_error">*{{edit_phone_number_msg}}</span> -->
										</div>
										<div class="form-group">
											<label class=" control-label">Address</label>
											<textarea id="" class="form-control" rows="5"></textarea>
											<!-- <span class="error" ng-show="edit_address_error">*{{edit_address_msg}}</span> -->
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button class="btn btn-primary" type="button">Submit</button>
				<button class="btn btn-default" data-dismiss="modal" type="button">Cancel</button>
			</div>
		</div>
	</div>
</div>

<div class="layout layout-header-fixed profilePage">
	<?php include 'navbar.php';?>
	<div class="layout-main">
			<?php include 'sidebar.php';?>
			<div class="layout-content">
				<div class="profile">
					<div class="profile-header">
						<div class="profile-cover">
							<div class="profile-container">
								<div class="profile-card">
									<div class="profile-avetar">
										<img class="profile-avetar-img" width="128" height="128" src="<?php echo base_url(); ?>/img/user_placeholder.jpeg" alt="Teddy Wilson">
									</div>
									<div class="profile-overview">
										<h1 class="profile-name">TeddyWilson</h1>
									</div>
								</div>
								<div class="profile-tabs">
									<ul class="profile-nav">
										<li class="active">
											<a href="javascript:void();">Details</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="profile-body">
						<div class="col-md-6">
							<div class="card">
								<div class="card-body">
									<div class="card-search">
										<div class="card-search-results">
											<div class="timeline">
										    	<div class="timeline-item">
													<div class="timeline-segment">
														<div class="timeline-divider"></div>
													</div>
													<div class="timeline-content"></div>
												</div>
												<div class="timeline-item">
													<div class="timeline-segment">
														<div class="timeline-media bg-primary circle sq-24">
															<div class="icon icon-check"></div>
														</div>
													</div>
													<div class="timeline-content">
														<div class="timeline-row">
															<div class="media">
																<div class="media-body">
																	<h5 class="m-y-0">Email</h5>
																	<p>
																	<small class="profile-email">replied@gmail.com</small>
																	</p>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="timeline-item">
													<div class="timeline-segment">
														<div class="timeline-media bg-primary circle sq-24">
															<div class="icon icon-check"></div>
														</div>
													</div>
													<div class="timeline-content">
														<div class="timeline-row">
															<div class="media">
																<div class="media-body">
																	<h5 class="m-y-0">Phone</h5>
																	<p>
																	<small class="profile-phone">+91365463777</small>
																	</p>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="card">
								<div class="card-body">
									<div class="card-search">
										<div class="card-search-results">
											<div class="timeline">
												<div class="timeline-item">
													<div class="timeline-segment">
														<div class="timeline-divider"></div>
													</div>
													<div class="timeline-content"></div>
												</div>
												<div class="timeline-item">
													<div class="timeline-segment">
														<div class="timeline-media bg-primary circle sq-24">
															<div class="icon icon-check"></div>
														</div>
													</div>
													<div class="timeline-content">
														<div class="timeline-row">
															<div class="media">
																<div class="media-body">
																	<h5 class="m-y-0">Address</h5>
																	<p>
																	<small class="profile-address">replied@gmail.com</small>
																	</p>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="col-md-12">
							<button class="btn btn-primary btn-sm pull-right" type="button"  data-toggle="modal" data-target="#editProfilePopup">Edit profile</button> 
							<button class="btn btn-primary btn-sm pull-right margin-right-5" type="button"  data-toggle="modal" data-target="#changePasswordPopup">Change Password</button> 
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include 'footer.php';?>