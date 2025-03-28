<?php include 'header.php';?>
<div class="layout layout-header-fixed">
	<?php include 'navbar.php';?>
	<div class="layout-main">
		<?php include 'sidebar.php';?>
		<div class="dashboardPage">
			<div class="layout-content">
				<div class="layout-content-body">
					<div class="title-bar">
						<h1 class="title-bar-title">
							<span class="d-ib">Dashboard</span>
						</h1>
						<p class="title-bar-description">
							<small>You can personalize your dashboard</small>
						</p>
					</div>
					<div class="row gutter-xs">
						<div class="col-xs-6 col-md-3">
							<div class="card card-wrap card-visitors">
								<div class="row">
									<div class="col-md-6">
										<div class="card-values">
											<div class="p-x">
												<small>Total Registration</small>
												<h3 class="card-title fw-l">20</h3>
											</div>
										</div>
										<div class="card-chart"></div>
									</div>
									<div class="col-md-6">
										<div class="card-values">
											<div class="p-x">
												<small>Today Registration</small>
												<h3 class="card-title fw-l">10</h3>
											</div>
										</div>
										<div class="card-chart"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-6 col-md-3">
							<div class="card card-wrap card-new-visitors">
								<div class="row">
									<div class="col-md-6">
										<div class="card-values">
											<div class="p-x">
												<small>Total Create Order</small>
												<h3 class="card-title fw-l">100</h3>
											</div>
										</div>
										<div class="card-chart"></div>
									</div>
									<div class="col-md-6">
										<div class="card-values">
											<div class="p-x">
												<small>Today Create Order</small>
												<h3 class="card-title fw-l">20</h3>
											</div>
										</div>
										<div class="card-chart"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-6 col-md-3">
							<div class="card card-wrap card-pageview">
								<div class="row">
									<div class="col-md-6">
										<div class="card-values">
											<div class="p-x">
												<small>Total Create Offer</small>
												<h3 class="card-title fw-l">234</h3>
											</div>
										</div>
										<div class="card-chart"></div>
									</div>
									<div class="col-md-6">
										<div class="card-values">
											<div class="p-x">
												<small>Today Create Offer</small>
												<h3 class="card-title fw-l">111</h3>
											</div>
										</div>
										<div class="card-chart"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-6 col-md-3">
							<div class="card card-wrap card-duration">
								<div class="row">
									<div class="col-md-6">
										<div class="card-values">
											<div class="p-x">
												<small>Total Cost Revenue</small>
												<h3 class="card-title fw-l">388983</h3>
											</div>
										</div>
										<div class="card-chart"></div>
									</div>
									<div class="col-md-6">
										<div class="card-values">
											<div class="p-x">
												<h1>INR</h1>
											</div>
										</div>
										<div class="card-chart"></div>
									</div>
								</div>
							</div>
						</div>
					 </div>
					 <div class="row gutter-xs">
						<div class="col-xs-12 col-md-6">
							<div class="card">
								<div class="card-body">
									<h4 class="card-title">Audience Overview</h4>
								</div>
								<div class="card-body">
									<div class="card-chart">
										<canvas></canvas>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-md-6">
							<div class="card">
								<div class="card-body">
									<h4 class="card-title">100 Signups</h4>
								</div>
								<div class="card-body">
									<div class="card-chart">
										<canvas></canvas>
									</div>
								</div>
							</div>
						</div>
				 	</div>
					<div class="row gutter-xs">
						<div class="col-md-4">
							<div class="card">
								<div class="card-body">
									<div class="media">
										<div class="media-middle media-left">
											<span class="bg-gray sq-64 circle">
												<span class="icon icon-flag"></span>
											</span>
										</div>
										<div class="media-middle media-body">
											<h3 class="media-heading">
												<span class="fw-l">10 Reports</span>
											</h3>
											<small>Assigned</small>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<div class="card-body">
									<div class="media">
										<div class="media-middle media-left">
											<span class="bg-gray sq-64 circle">
												<span class="icon icon-flag"></span>
											</span>
										</div>
										<div class="media-middle media-body">
											<h2 class="media-heading">
												<span class="fw-l">2</span>
												<small>Resolved</small>
											</h2>
											<small>More than 2% resolved issues</small>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<div class="card-body">
									<div class="media">
										<div class="media-middle media-left">
											<span class="bg-gray sq-64 circle">
												<span class="icon icon-flag"></span>
											</span>
										</div>
										<div class="media-middle media-body">
											<h2 class="media-heading">
												<span class="fw-l">3</span>
												<small>Unresolved</small>
											</h2>
											<small>Less than 17% unresolved issues</small>
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
<?php include 'footer.php';?>