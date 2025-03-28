<?php include 'header.php';?>
<div class="login">
	<div class="login-body">
		<a class="login-brand">
			<img class="img-responsive" src="<?php echo base_url(); ?>/img/logo.png" alt="TrekVeda">
		</a>
		<div class="login-form">
			<form data-toggle="validator" onsubmit="return false">
				<div class="errorContainerWrap"></div>
				<div class="form-group">
					<label for="email">Email</label>
					<input id="email" class="form-control loginEmailField" type="email" name="email" spellcheck="false" autocomplete="off" data-msg-required="Please enter your email address." required>
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input id="password" class="form-control loginPasswordField" type="password" name="password" minlength="6" data-msg-minlength="Password must be 6 characters or more." data-msg-required="Please enter your password." required>
				</div>
				<div class="form-group">
					<label class="custom-control custom-control-primary custom-checkbox">
						<input class="custom-control-input" type="checkbox" checked="checked">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-label">Keep me signed in</span>
					</label>
					<span aria-hidden="true"> · </span>
					<a href="forgotPassword.php">Forgot password?</a>
				</div>
				<button class="btn btn-primary btn-block loginBtn" type="submit">Sign in</button>
			</form>
		</div>
	</div>
</div>
<?php include 'footer.php';?>