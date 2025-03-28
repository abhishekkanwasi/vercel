<?php include 'header.php';?>

<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootstrap.min.css"> -->
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<div class="layout layout-header-fixed editTrekPage" data-trekId="<?php echo $id;?>">
	<?php include 'navbar.php';?>
	<div class="layout-main">
		<?php include 'sidebar.php';?>
		<div class="layout-content">
			<div class="layout-content-body">
				<div class="title-bar">
					<h1 class="title-bar-title">
						<span class="d-ib">Edit Trek</span>
					</h1>
				</div>
				<div class="row gutter-xs">
					<div class="col-md-12">
						<div class="card">
							<div class="card-body" data-toggle="match-height">
								<div class="add_trek_tab add_trek_tab_1 active">
									<div class="row">
										<div class="col-md-4">
											<div class="show-image-upload-wrap">
												<input type="file" name="" id="upload" />
												<i class="fa fa-camera"></i>
											</div>
											<div class="upload-trek-featured-image-wrap">
												<div class="upload-btn-option-wrap">
													<button class="btn btn-info upload-feautred-back">Back</button>
													<button class="btn btn-info upload-feautred-result">Set</button>
												</div>
												<div id="upload-trek-featured-image" class="upload-trek-featured-image"></div>
											</div>
											<div class="upload-trek-featured-image-show">
											</div>
										</div>
										<div class="col-md-8">
											<form data-toggle="validator" onsubmit="return false">
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<input type="text" name="trek_name" class="form-control trek_name" placeholder="Enter Trek Name" autocomplete="off" data-msg-required="This field is required." required/>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<input type="text" name="trek_location" class="form-control trek_location" placeholder="Enter Trek Location" autocomplete="off" data-msg-required="This field is required." required/>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<input type="number" min="0" max="1000000" step="any" name="trek_price" class="form-control trek_price" placeholder="Enter Price" autocomplete="off" data-msg-required="This field is required." required/>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<input type="number" min="0" max="1000000" step="any" name="trek_height" class="form-control trek_height" placeholder="Enter Height(KM)" autocomplete="off" data-msg-required="This field is required." required/>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<input type="number" min="0" max="100000" step="any" name="trek_duration" class="form-control trek_duration" placeholder="Enter Duration(Days)" autocomplete="off" data-msg-required="This field is required." required/>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<input type="text" class="form-control trek_difficulty" name="trek_difficulty" placeholder="Enter Difficulty" autocomplete="off" data-msg-required="This field is required." required/>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<input type="text" class="form-control trek_slug" placeholder="Enter Slug" name="trek_slug" autocomplete="off" data-msg-required="This field is required." required/>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<input type="text" class="form-control trek_distance" placeholder="Enter Trek Distance" name="trek_distance" autocomplete="off" data-msg-required="This field is required." required/>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<textarea class="form-control trek_meta_description" name="trek_meta_description" placeholder="Enter Meta Description" autocomplete="off" data-msg-required="This field is required." required></textarea>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<textarea class="form-control trek_meta_keyword" name="trek_meta_keyword" placeholder="Enter Meta Keyword" autocomplete="off" data-msg-required="This field is required." required></textarea>
														</div>
													</div>
												</div>
												<div class="row editor">
													<div class="col-md-12">
														<label>Enter Discription</label>
														<textarea class="add-trek-description" ></textarea>
														<input name="image" type="file" id="uploadTrekDetails" class="hidden" onchange="">
													</div>
												</div>
												<div style="margin-top: 15px;">
													<button class="btn btn-success save_trek pull-right" disabled>Save</button>
												</div>
											</form>
										</div>
									</div>
								</div>
								<div class="add_trek_tab add_trek_tab_2">
									<div class="row">
										<form>
											<div class="col-md-6">
												<label>Trek Essential</label>
												<textarea class="why-trek-description"></textarea>
												<input name="image" type="file" id="uploadWhyTrekDetails" class="hidden" onchange="">
											</div>
											<div class="col-md-6">
												<label>Safty & security</label>
												<textarea class="ssecurity-trek-description"></textarea>
												<input name="image" type="file" id="uploadSecurityTrekDetails" class="hidden" onchange="">
											</div>
											<div class="col-md-6">
												<label>Map & Route</label>
												<textarea class="mroute-trek-description"></textarea>
												<input name="image" type="file" id="uploadRouteTrekDetails" class="hidden" onchange="">
											</div>
											<div class="col-md-6">
												<label>Fitness Tips</label>
												<textarea class="fitness-trek-description"></textarea>
												<input name="image" type="file" id="uploadFitnessTrekDetails" class="hidden" onchange="">
											</div>
											<div class="col-md-6">
												<label>Fee Policy</label>
												<textarea class="policy-trek-description"></textarea>
												<input name="image" type="file" id="uploadFitnessTrekDetails" class="hidden" onchange="">
											</div>
											<div class="col-md-6">
												<label>Trek Highlight</label>
												<textarea class="trek-highlight-description"></textarea>
												<input name="image" type="file" id="uploadFitnessTrekDetails" class="hidden" onchange="">
											</div>
											<div class="col-md-6">
												<label>Trek Inclusion</label>
												<textarea class="trek-inclusion-description"></textarea>
												<input name="image" type="file" id="uploadFitnessTrekDetails" class="hidden" onchange="">
											</div>
											<div class="col-md-6">
												<label>Trek Exclusion</label>
												<textarea class="trek-exclusion-description"></textarea>
												<input name="image" type="file" id="uploadFitnessTrekDetails" class="hidden" onchange="">
											</div>
										</form>
									</div>
									<div style="margin-top: 15px;">
										<button class="btn btn-success save_why_trek pull-right">Save</button>
										<button class="btn btn-primary back_why_trek pull-right">Back</button>
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
<?php include 'footer.php';?>

