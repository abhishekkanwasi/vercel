<?php include 'header.php';?>
<div class="layout layout-header-fixed">
	<?php include 'navbar.php';?>
	<div class="layout-main">
		<?php include 'sidebar.php';?>
		<div class="layout-content trek_managment_wrap">
			<div class="">
				<div class="layout-content-body">
					<div class="title-bar clearfix">
						<div class="col-xs-6 col-md-6">
							<h1 class="title-bar-title">
								<span class="d-ib">Trek Managment </span>
							</h1>
							<p class="title-bar-description">
								<small>Displaying list of all trek in the system.</small>
							</p>
						</div>
						<div class="col-xs-6 col-md-6">
							<div class="pull-right">
								<div class="form-group text-right">
									<label for="">&nbsp;&nbsp;</label>
									<a href="<?php echo base_url();?>trek_managment/add_trek" class="btn btn-primary" type="button">Add trek</a>
								</div>
							</div>
						</div>
					</div>
					<div class="row gutter-xs">
						<div class="col-md-12">
							<div class="panel">
				                <ul class="nav nav-tabs">
				                  <li class="active"><a href="#active-51" data-toggle="tab">Active Trek</a></li>
				                  <li><a href="#inactive-51" data-toggle="tab">Inactive Trek</a></li>
				                  <li><a href="#draft-51" data-toggle="tab">Draft Trek</a></li>
				                </ul>
				                <div class="tab-content">
				                  <div class="tab-pane fade active in" id="active-51">
				                  	<div class="card-body trek_list_wrap" data-toggle="match-height">
										<!-- Trek List -->
									</div>  
				                  </div>
				                  <div class="tab-pane fade" id="inactive-51">
				                    <p> ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park</p>
				                  </div>
				                  <div class="tab-pane fade" id="draft-51">
				                    <p>ou probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
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