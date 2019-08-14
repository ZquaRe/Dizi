<!DOCTYPE html>
<html lang="en">

<head>
<?php   $this->load->view("{$this->theme}/include/head"); ?>
<title>Profil</title>

</head>
<body class="body">

<?php   $this->load->view("{$this->theme}/include/menu"); ?>

<!-- page title -->
	<section class="section section--first section--bg" data-bg="<?php echo base_url("assets/{$this->theme}/");?>img/section/section.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section__wrap">
						<!-- section title -->
						<h2 class="section__title">My FlixGo</h2>
						<!-- end section title -->

						<!-- breadcrumb -->
						<ul class="breadcrumb">
							<li class="breadcrumb__item"><a href="#">Home</a></li>
							<li class="breadcrumb__item breadcrumb__item--active">Profile</li>
						</ul>
						<!-- end breadcrumb -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end page title -->

	<!-- content -->
	<div class="content">
		<!-- profile -->
		<div class="profile">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="profile__content">
							<div class="profile__user">
								<div class="profile__avatar">
									<img src="<?php echo base_url("assets/{$this->theme}/");?>img/user.png" alt="">
								</div>
								<div class="profile__meta">
									<h3>Username</h3>
									<span>FlixGo ID: 23562</span>
								</div>
							</div>

							<!-- content tabs nav -->
							<ul class="nav nav-tabs content__tabs content__tabs--profile" id="content__tabs" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">Profile</a>
								</li>

								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">Subscription</a>
								</li>
							</ul>
							<!-- end content tabs nav -->

							<!-- content mobile tabs nav -->
							<div class="content__mobile-tabs content__mobile-tabs--profile" id="content__mobile-tabs">
								<div class="content__mobile-tabs-btn dropdown-toggle" role="navigation" id="mobile-tabs" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<input type="button" value="Profile">
									<span></span>
								</div>

								<div class="content__mobile-tabs-menu dropdown-menu" aria-labelledby="mobile-tabs">
									<ul class="nav nav-tabs" role="tablist">
										<li class="nav-item"><a class="nav-link active" id="1-tab" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">Profile</a></li>

										<li class="nav-item"><a class="nav-link" id="2-tab" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">Subscription</a></li>
									</ul>
								</div>
							</div>
							<!-- end content mobile tabs nav -->

							<button class="profile__logout" type="button">
								<i class="icon ion-ios-log-out"></i>
								<span>Logout</span>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end profile -->

	<div class="container">
			<!-- content tabs -->
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="1-tab">
					<div class="row">
						<!-- details form -->
						<div class="col-12 col-lg-6">
							<form action="#" class="profile__form">
								<div class="row">
									<div class="col-12">
										<h4 class="profile__title">Profile details</h4>
									</div>

									<div class="col-12 col-md-6 col-lg-12 col-xl-6">
										<div class="profile__group">
											<label class="profile__label" for="username">Username</label>
											<input id="username" type="text" name="username" class="profile__input" placeholder="User 123">
										</div>
									</div>

									<div class="col-12 col-md-6 col-lg-12 col-xl-6">
										<div class="profile__group">
											<label class="profile__label" for="email">Email</label>
											<input id="email" type="text" name="email" class="profile__input" placeholder="email@email.com">
										</div>
									</div>

									<div class="col-12 col-md-6 col-lg-12 col-xl-6">
										<div class="profile__group">
											<label class="profile__label" for="firstname">First Name</label>
											<input id="firstname" type="text" name="firstname" class="profile__input" placeholder="John">
										</div>
									</div>

									<div class="col-12 col-md-6 col-lg-12 col-xl-6">
										<div class="profile__group">
											<label class="profile__label" for="lastname">Last Name</label>
											<input id="lastname" type="text" name="lastname" class="profile__input" placeholder="Doe">
										</div>
									</div>

									<div class="col-12">
										<button class="profile__btn" type="button">Save</button>
									</div>
								</div>
							</form>
						</div>
						<!-- end details form -->

						<!-- password form -->
						<div class="col-12 col-lg-6">
							<form action="#" class="profile__form">
								<div class="row">
									<div class="col-12">
										<h4 class="profile__title">Change password</h4>
									</div>

									<div class="col-12 col-md-6 col-lg-12 col-xl-6">
										<div class="profile__group">
											<label class="profile__label" for="oldpass">Old Password</label>
											<input id="oldpass" type="password" name="oldpass" class="profile__input">
										</div>
									</div>

									<div class="col-12 col-md-6 col-lg-12 col-xl-6">
										<div class="profile__group">
											<label class="profile__label" for="newpass">New Password</label>
											<input id="newpass" type="password" name="newpass" class="profile__input">
										</div>
									</div>

									<div class="col-12 col-md-6 col-lg-12 col-xl-6">
										<div class="profile__group">
											<label class="profile__label" for="confirmpass">Confirm New Password</label>
											<input id="confirmpass" type="password" name="confirmpass" class="profile__input">
										</div>
									</div>

									<div class="col-12">
										<button class="profile__btn" type="button">Change</button>
									</div>
								</div>
							</form>
						</div>
						<!-- end password form -->
					</div>
				</div>

				<div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="2-tab">
					<div class="row">
						<!-- price -->
						<div class="col-12 col-md-6 col-lg-4">
							<div class="price price--profile">
								<div class="price__item price__item--first"><span>Basic</span> <span>Free</span></div>
								<div class="price__item"><span>7 days</span></div>
								<div class="price__item"><span>720p Resolution</span></div>
								<div class="price__item"><span>Limited Availability</span></div>
								<div class="price__item"><span>Desktop Only</span></div>
								<div class="price__item"><span>Limited Support</span></div>
								<a href="#" class="price__btn">Choose Plan</a>
							</div>
						</div>
						<!-- end price -->

						<!-- price -->
						<div class="col-12 col-md-6 col-lg-4">
							<div class="price price--profile price--premium">
								<div class="price__item price__item--first"><span>Premium</span> <span>$19.99</span></div>
								<div class="price__item"><span>1 Month</span></div>
								<div class="price__item"><span>Full HD</span></div>
								<div class="price__item"><span>Lifetime Availability</span></div>
								<div class="price__item"><span>TV & Desktop</span></div>
								<div class="price__item"><span>24/7 Support</span></div>
								<a href="#" class="price__btn">Choose Plan</a>
							</div>
						</div>
						<!-- end price -->

						<!-- price -->
						<div class="col-12 col-md-6 col-lg-4">
							<div class="price price--profile">
								<div class="price__item price__item--first"><span>Cinematic</span> <span>$39.99</span></div>
								<div class="price__item"><span>2 Months</span></div>
								<div class="price__item"><span>Ultra HD</span></div>
								<div class="price__item"><span>Lifetime Availability</span></div>
								<div class="price__item"><span>Any Device</span></div>
								<div class="price__item"><span>24/7 Support</span></div>
								<a href="#" class="price__btn">Choose Plan</a>
							</div>
						</div>
						<!-- end price -->
					</div>
				</div>
			</div>
			<!-- end content tabs -->
		</div>
	</div>
	<!-- end content -->


<?php   $this->load->view("{$this->theme}/include/footer"); ?>

<?php   $this->load->view("{$this->theme}/include/js"); ?>





</body>

</html>