<div class="layout-header">
	<div class="navbar navbar-default">
		<div class="navbar-header" style="background: #d9230f;">
			<a class="navbar-brand navbar-brand-center">
				<img class="navbar-brand-logo" src="<?php echo base_url(); ?>/img/logo-white.png" alt="TrekVeda">
			</a>
			<button class="navbar-toggler visible-xs-block collapsed" type="button" data-toggle="collapse" data-target="#sidenav">
				<span class="sr-only">Toggle navigation</span>
				<span class="bars">
					<span class="bar-line bar-line-1 out"></span>
					<span class="bar-line bar-line-2 out"></span>
					<span class="bar-line bar-line-3 out"></span>
				</span>
				<span class="bars bars-x">
					<span class="bar-line bar-line-4"></span>
					<span class="bar-line bar-line-5"></span>
				</span>
			</button>
			<button class="navbar-toggler visible-xs-block collapsed" type="button" data-toggle="collapse" data-target="#navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="arrow-up"></span>
				<span class="ellipsis ellipsis-vertical">
					<img class="ellipsis-object" width="32" height="32" src="<?php echo base_url(); ?>/img/user_placeholder.jpeg" alt="Mohd Amir">
				</span>
			</button>
		</div>
		<div class="navbar-toggleable">
			<nav id="navbar" class="navbar-collapse collapse">
				<button class="sidenav-toggler hidden-xs" title="Collapse sidenav ( [ )" aria-expanded="true" type="button">
					<span class="sr-only">Toggle navigation</span>
					<span class="bars">
						<span class="bar-line bar-line-1 out"></span>
						<span class="bar-line bar-line-2 out"></span>
						<span class="bar-line bar-line-3 out"></span>
						<span class="bar-line bar-line-4 in"></span>
						<span class="bar-line bar-line-5 in"></span>
						<span class="bar-line bar-line-6 in"></span>
					</span>
				</button>
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown hidden-xs">
						<button class="navbar-account-btn" data-toggle="dropdown" aria-haspopup="true">
							<img class="rounded" width="36" height="36" src="<?php echo base_url(); ?>/img/user_placeholder.jpeg" alt="Mohd Amir"> Mohd Amir
							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu dropdown-menu-right">
							<li><a href="<?php echo base_url();?>profile">Profile</a></li>
							<li><a href="javascript:void(0)">Sign out</a></li>
						</ul>
					</li>
					<li class="visible-xs-block">
						<a>
							<span class="icon icon-user icon-lg icon-fw"></span>
							Profile
						</a>
					</li>
					<li class="visible-xs-block">
						<a href="javascript:void(0)">
							<span class="icon icon-power-off icon-lg icon-fw"></span>
							Sign out
						</a>
					</li>
				</ul>
			</nav>
		</div>
	</div>
</div>