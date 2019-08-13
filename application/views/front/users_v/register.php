<!DOCTYPE html>
<html lang="en">

<head>
<?php   $this->load->view("{$this->theme}/include/head"); ?>
<title>Kayıt Ol</title>

</head>
<body class="body">

<div class="sign section--bg" data-bg="<?php echo base_url("assets/{$this->theme}/");?>img/section/section.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="sign__content">
						<!-- registration form -->
						<form action="#" class="sign__form">
							<a href="index.html" class="sign__logo">
								<img src="<?php echo base_url("assets/{$this->theme}/");?>img/logo.svg" alt="">
							</a>

							<div class="sign__group">
								<input type="text" class="sign__input" placeholder="Name">
							</div>

							<div class="sign__group">
								<input type="text" class="sign__input" placeholder="Email">
							</div>

							<div class="sign__group">
								<input type="password" class="sign__input" placeholder="Password">
							</div>

							<div class="sign__group sign__group--checkbox">
								<input id="remember" name="remember" type="checkbox" checked="checked">
								<label for="remember">I agree to the <a href="#">Privacy Policy</a></label>
							</div>
							
							<button class="sign__btn" type="button">Sign up</button>

							<span class="sign__text">Already have an account? <a href="login">Sign in!</a></span>
						</form>
						<!-- registration form -->
					</div>
				</div>
			</div>
		</div>

<?php   $this->load->view("{$this->theme}/include/js"); ?>





</body>

</html>