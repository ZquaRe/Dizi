<!DOCTYPE html>
<html lang="en">

<head>
<?php   $this->load->view("{$this->theme}/include/head"); ?>
<title>FlixGo – Online Movies, TV Shows & Cinema HTML Template</title>

</head>
<body class="body">





<?php   $this->load->view("{$this->theme}/include/menu"); ?>

	<!-- details -->
	<section class="section details">
		<!-- details background -->
		<div class="details__bg" data-bg="<?php echo base_url("assets/{$this->theme}/");?>img/home/home__bg.jpg"></div>
		<!-- end details background -->

		<!-- details content -->
		<div class="container">
			<div class="row">
				<!-- title -->
				<div class="col-12">
					<h1 class="details__title">I Dream in Another Language
						<span style="float: right;font-size:20px; font-weight: 500;"><img src="<?php echo base_url("assets/{$this->theme}/");?>icon/imd.svg"> <span>8.9</span></span>
					</h1>
					<button class="pure-button button-sdark btn-size-sm margin20 margint15 btn-radius50" >Dizi</button>
					<button class="pure-button button-sdark btn-size-sm margin20 margint15 btn-radius50" >Kanun</button>
					<button class="pure-button button-sdark btn-size-sm margin20 margint15 btn-radius50" >Polisiye</button>
					<button class="pure-button button-sdark btn-size-sm margin20 margint15 btn-radius50" >Aksiyon</button>


				</div>
				<!-- end title -->

				<!-- content -->
				<div class="col-12 col-xl-6">
					<div class="card card--details">
						<div class="row">
							<!-- card cover -->
							<div class="col-12 col-sm-4 col-md-4 col-lg-3 col-xl-5">
								<div class="card__cover">
									<img src="<?php echo base_url("assets/{$this->theme}/");?>img/covers/cover.jpg" alt="">
								</div>
									<a href="" style="position: relative; top: 0; margin-top:10px; font-family: 'Oswald', sans-serif;
									" class="film__watch">İzlemeye Başla
									<svg xmlns="http://www.w3.org/2000/svg" width="14" height="16" viewBox="0 0 14 16"><path d="M395.335,1116a1.674,1.674,0,0,1-.668-0.16,1.26,1.26,0,0,1-.668-1.15v-13.38a1.358,1.358,0,0,1,.668-1.14,1.307,1.307,0,0,1,1.337.03l11.359,6.69A1.266,1.266,0,0,1,408,1108a1.282,1.282,0,0,1-.635,1.12L396,1115.8A1.238,1.238,0,0,1,395.335,1116Zm1.337-12.36v8.75l7.417-4.39Z" transform="translate(-394 -1100)"></path></svg>
									</a>
							</div>
							<!-- end card cover -->

							<!-- card content -->
							<div class="col-12 col-sm-8 col-md-8 col-lg-9 col-xl-7">
								<div class="card__content">
									<div class="card__wrap">

										<?php //<span class="card__rate"><i class="icon ion-ios-star"></i>8.4</span> ?>
										<span class="card__rate"><img src="<?php echo base_url("assets/{$this->theme}/");?>icon/imd.svg" style="width:44px; height:25px; margin-right:4px;">
										<span style="margin-right:-2px;"> sa </span>
									</span>
											


										<ul class="card__list">
											<li>HD</li>
											<li>16+</li>
											<li><span class="fas fa-eye" style="color:#97999E;"></span> 200</li>
											<li><span class="fas fa-comments" style="color:#97999E;"></span> 200</li>
										</ul>
									</div>

									<ul class="card__meta">
										<li><span>Genre:</span> <a href="#">Action</a>
										<a href="#">Triler</a></li>
										<li><span>Release year:</span> 2017</li>
										<li><span>Running time:</span> 120 min</li>
										<li><span>Country:</span> <a href="#">USA</a> </li>
									</ul>

									<div class="card__description card__description--details">
										It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.
									</div>
								</div>
							</div>
							<!-- end card content -->
						</div>
					</div>
				</div>
				<!-- end content -->

				<!-- player -->
				<div class="col-12 col-xl-6">
					<video controls crossorigin playsinline poster="http://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.jpg" id="player">
						<!-- Video files -->
						<source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4" type="video/mp4" size="576">
						<source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-720p.mp4" type="video/mp4" size="720">
						<source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-1080p.mp4" type="video/mp4" size="1080">
						<source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-1440p.mp4" type="video/mp4" size="1440">

						<!-- Caption files -->
						<track kind="captions" label="English" srclang="en" src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.en.vtt"
						    default>
						<track kind="captions" label="Français" srclang="fr" src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.fr.vtt">

						<!-- Fallback for browsers that don't support the <video> element -->
						<a href="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4" download>Download</a>
					</video>
				</div>
				<!-- end player -->

				<div class="col-12">
					<div class="details__wrap">
						<!-- availables -->
						<div class="details__devices">
							<span class="details__devices-title">Available on devices:</span>
							<ul class="details__devices-list">
								<li><i class="icon ion-logo-apple"></i><span>IOS</span></li>
								<li><i class="icon ion-logo-android"></i><span>Android</span></li>
								<li><i class="icon ion-logo-windows"></i><span>Windows</span></li>
								<li><i class="icon ion-md-tv"></i><span>Smart TV</span></li>
							</ul>
						</div>
						<!-- end availables -->

						<!-- share -->
						<div class="details__share">
							<span class="details__share-title">Share with friends:</span>

							<ul class="details__share-list">
								<li class="facebook"><a href="#"><i class="icon ion-logo-facebook"></i></a></li>
								<li class="instagram"><a href="#"><i class="icon ion-logo-instagram"></i></a></li>
								<li class="twitter"><a href="#"><i class="icon ion-logo-twitter"></i></a></li>
								<li class="vk"><a href="#"><i class="icon ion-logo-vk"></i></a></li>
							</ul>
						</div>
						<!-- end share -->
					</div>
				</div>
			</div>
		</div>
		<!-- end details content -->
	</section>
	<!-- end details -->

	<!-- content -->
	<section class="content">
		<div class="content__head">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<!-- content title -->
						<h2 class="content__title">Discover</h2>
						<!-- end content title -->

						<!-- content tabs nav -->
						<ul class="nav nav-tabs content__tabs" id="content__tabs" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">Comments</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">Reviews</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">Photos</a>
							</li>
						</ul>
						<!-- end content tabs nav -->

						<!-- content mobile tabs nav -->
						<div class="content__mobile-tabs" id="content__mobile-tabs">
							<div class="content__mobile-tabs-btn dropdown-toggle" role="navigation" id="mobile-tabs" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<input type="button" value="Comments">
								<span></span>
							</div>

							<div class="content__mobile-tabs-menu dropdown-menu" aria-labelledby="mobile-tabs">
								<ul class="nav nav-tabs" role="tablist">
									<li class="nav-item"><a class="nav-link active" id="1-tab" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">Comments</a></li>

									<li class="nav-item"><a class="nav-link" id="2-tab" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">Reviews</a></li>

									<li class="nav-item"><a class="nav-link" id="3-tab" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">Photos</a></li>
								</ul>
							</div>
						</div>
						<!-- end content mobile tabs nav -->
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-8 col-xl-8">
					<!-- content tabs -->
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="1-tab">
							<div class="row">
								<!-- comments -->
								<div class="col-12">
									<div class="comments">
									<div class="alert fsize alert-gradient">
Yorum yapabilmeniz için giriş yapmanız gerekiyor.
</div>
													<form action="#" class="form" style="margin-bottom:30px;">
											<textarea id="text" name="text" class="form__textarea" placeholder="Add comment"></textarea>
											<button type="button" class="form__btn">Send</button>
										</form>
										<ul class="comments__list">
											<li class="comments__item">
												<div class="comments__autor">
													<img class="comments__avatar" src="<?php echo base_url("assets/{$this->theme}/");?>img/user.png" alt="">
													<span class="comments__name">John Doe</span>
													<span class="comments__time">30.08.2018, 17:53</span>
												</div>
												<p class="comments__text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
												<div class="comments__actions">
													<div class="comments__rate">
														<button type="button"><i class="icon ion-md-thumbs-up"></i>12</button>

														<button type="button">7<i class="icon ion-md-thumbs-down"></i></button>
													</div>

													<button type="button"><i class="icon ion-ios-share-alt"></i>Reply</button>
													<button type="button"><i class="icon ion-ios-quote"></i>Quote</button>
												</div>
											</li>

											<li class="comments__item comments__item--answer">
												<div class="comments__autor">
													<img class="comments__avatar" src="<?php echo base_url("assets/{$this->theme}/");?>img/user.png" alt="">
													<span class="comments__name">John Doe</span>
													<span class="comments__time">24.08.2018, 16:41</span>
												</div>
												<p class="comments__text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
												<div class="comments__actions">
													<div class="comments__rate">
														<button type="button"><i class="icon ion-md-thumbs-up"></i>8</button>

														<button type="button">3<i class="icon ion-md-thumbs-down"></i></button>
													</div>

													<button type="button"><i class="icon ion-ios-share-alt"></i>Reply</button>
													<button type="button"><i class="icon ion-ios-quote"></i>Quote</button>
												</div>
											</li>

											<li class="comments__item comments__item--quote">
												<div class="comments__autor">
													<img class="comments__avatar" src="<?php echo base_url("assets/{$this->theme}/");?>img/user.png" alt="">
													<span class="comments__name">John Doe</span>
													<span class="comments__time">11.08.2018, 11:11</span>
												</div>
												<p class="comments__text"><span>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</span>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
												<div class="comments__actions">
													<div class="comments__rate">
														<button type="button"><i class="icon ion-md-thumbs-up"></i>11</button>

														<button type="button">1<i class="icon ion-md-thumbs-down"></i></button>
													</div>

													<button type="button"><i class="icon ion-ios-share-alt"></i>Reply</button>
													<button type="button"><i class="icon ion-ios-quote"></i>Quote</button>
												</div>
											</li>

											<li class="comments__item">
												<div class="comments__autor">
													<img class="comments__avatar" src="<?php echo base_url("assets/{$this->theme}/");?>img/user.png" alt="">
													<span class="comments__name">John Doe</span>
													<span class="comments__time">07.08.2018, 14:33</span>
												</div>
												<p class="comments__text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
												<div class="comments__actions">
													<div class="comments__rate">
														<button type="button"><i class="icon ion-md-thumbs-up"></i>99</button>

														<button type="button">35<i class="icon ion-md-thumbs-down"></i></button>
													</div>

													<button type="button"><i class="icon ion-ios-share-alt"></i>Reply</button>
													<button type="button"><i class="icon ion-ios-quote"></i>Quote</button>
												</div>
											</li>

											<li class="comments__item">
												<div class="comments__autor">
													<img class="comments__avatar" src="<?php echo base_url("assets/{$this->theme}/");?>img/user.png" alt="">
													<span class="comments__name">John Doe</span>
													<span class="comments__time">02.08.2018, 15:24</span>
												</div>
												<p class="comments__text">Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
												<div class="comments__actions">
													<div class="comments__rate">
														<button type="button"><i class="icon ion-md-thumbs-up"></i>74</button>

														<button type="button">13<i class="icon ion-md-thumbs-down"></i></button>
													</div>
													
													<button type="button"><i class="icon ion-ios-share-alt"></i>Reply</button>
													<button type="button"><i class="icon ion-ios-quote"></i>Quote</button>
												</div>
											</li>
										</ul>
									</div>
								</div>
								<!-- end comments -->
							</div>
						</div>

						<div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="2-tab">
							<div class="row">
								<!-- reviews -->
								<div class="col-12">
									<div class="reviews">
										<ul class="reviews__list">
											<li class="reviews__item">
												<div class="reviews__autor">
													<img class="reviews__avatar" src="<?php echo base_url("assets/{$this->theme}/");?>img/user.png" alt="">
													<span class="reviews__name">Best Marvel movie in my opinion</span>
													<span class="reviews__time">24.08.2018, 17:53 by John Doe</span>

													<span class="reviews__rating"><i class="icon ion-ios-star"></i>8.4</span>
												</div>
												<p class="reviews__text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
											</li>

											<li class="reviews__item">
												<div class="reviews__autor">
													<img class="reviews__avatar" src="<?php echo base_url("assets/{$this->theme}/");?>img/user.png" alt="">
													<span class="reviews__name">Best Marvel movie in my opinion</span>
													<span class="reviews__time">24.08.2018, 17:53 by John Doe</span>

													<span class="reviews__rating"><i class="icon ion-ios-star"></i>9.0</span>
												</div>
												<p class="reviews__text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
											</li>

											<li class="reviews__item">
												<div class="reviews__autor">
													<img class="reviews__avatar" src="<?php echo base_url("assets/{$this->theme}/");?>img/user.png" alt="">
													<span class="reviews__name">Best Marvel movie in my opinion</span>
													<span class="reviews__time">24.08.2018, 17:53 by John Doe</span>

													<span class="reviews__rating"><i class="icon ion-ios-star"></i>7.5</span>
												</div>
												<p class="reviews__text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
											</li>
										</ul>

										<form action="#" class="form">
											<input type="text" class="form__input" placeholder="Title">
											<textarea class="form__textarea" placeholder="Review"></textarea>
											<div class="form__slider">
												<div class="form__slider-rating" id="slider__rating"></div>
												<div class="form__slider-value" id="form__slider-value"></div>
											</div>
											<button type="button" class="form__btn">Send</button>
										</form>
									</div>
								</div>
								<!-- end reviews -->
							</div>
						</div>

						<div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="3-tab">
							<!-- project gallery -->
							<div class="gallery" itemscope>
								<div class="row">
									<!-- gallery item -->
									<figure class="col-12 col-sm-6 col-xl-4" itemprop="associatedMedia" itemscope>
										<a href="<?php echo base_url("assets/{$this->theme}/");?>img/gallery/project-1.jpg" itemprop="contentUrl" data-size="1920x1280">
											<img src="<?php echo base_url("assets/{$this->theme}/");?>img/gallery/project-1.jpg" itemprop="thumbnail" alt="Image description" />
										</a>
										<figcaption itemprop="caption description">Some image caption 1</figcaption>
									</figure>
									<!-- end gallery item -->

									<!-- gallery item -->
									<figure class="col-12 col-sm-6 col-xl-4" itemprop="associatedMedia" itemscope>
										<a href="<?php echo base_url("assets/{$this->theme}/");?>img/gallery/project-2.jpg" itemprop="contentUrl" data-size="1920x1280">
											<img src="<?php echo base_url("assets/{$this->theme}/");?>img/gallery/project-2.jpg" itemprop="thumbnail" alt="Image description" />
										</a>
										<figcaption itemprop="caption description">Some image caption 2</figcaption>
									</figure>
									<!-- end gallery item -->

									<!-- gallery item -->
									<figure class="col-12 col-sm-6 col-xl-4" itemprop="associatedMedia" itemscope>
										<a href="<?php echo base_url("assets/{$this->theme}/");?>img/gallery/project-3.jpg" itemprop="contentUrl" data-size="1920x1280">
											<img src="<?php echo base_url("assets/{$this->theme}/");?>img/gallery/project-3.jpg" itemprop="thumbnail" alt="Image description" />
										</a>
										<figcaption itemprop="caption description">Some image caption 3</figcaption>
									</figure>
									<!-- end gallery item -->

									<!-- gallery item -->
									<figure class="col-12 col-sm-6 col-xl-4" itemprop="associatedMedia" itemscope>
										<a href="<?php echo base_url("assets/{$this->theme}/");?>img/gallery/project-4.jpg" itemprop="contentUrl" data-size="1920x1280">
											<img src="<?php echo base_url("assets/{$this->theme}/");?>img/gallery/project-4.jpg" itemprop="thumbnail" alt="Image description" />
										</a>
										<figcaption itemprop="caption description">Some image caption 4</figcaption>
									</figure>
									<!-- end gallery item -->

									<!-- gallery item -->
									<figure class="col-12 col-sm-6 col-xl-4" itemprop="associatedMedia" itemscope>
										<a href="<?php echo base_url("assets/{$this->theme}/");?>img/gallery/project-5.jpg" itemprop="contentUrl" data-size="1920x1280">
											<img src="<?php echo base_url("assets/{$this->theme}/");?>img/gallery/project-5.jpg" itemprop="thumbnail" alt="Image description" />
										</a>
										<figcaption itemprop="caption description">Some image caption 5</figcaption>
									</figure>
									<!-- end gallery item -->

									<!-- gallery item -->
									<figure class="col-12 col-sm-6 col-xl-4" itemprop="associatedMedia" itemscope>
										<a href="<?php echo base_url("assets/{$this->theme}/");?>img/gallery/project-6.jpg" itemprop="contentUrl" data-size="1920x1280">
											<img src="<?php echo base_url("assets/{$this->theme}/");?>img/gallery/project-6.jpg" itemprop="thumbnail" alt="Image description" />
										</a>
										<figcaption itemprop="caption description">Some image caption 6</figcaption>
									</figure>
									<!-- end gallery item -->
								</div>
							</div>
							<!-- end project gallery -->
						</div>
					</div>
					<!-- end content tabs -->
				</div>

				<!-- sidebar -->
				<div class="col-12 col-lg-4 col-xl-4">
					<div class="row">
						<!-- section title -->
						<div class="col-12">
							<h2 class="section__title section__title--sidebar">You may also like...</h2>
						</div>
						<!-- end section title -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-lg-6">
							<div class="card">
								<div class="card__cover">
									<img src="<?php echo base_url("assets/{$this->theme}/");?>img/covers/cover.jpg" alt="">
									<a href="#" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#">I Dream in Another Language</a></h3>
									<span class="card__category">
										<a href="#">Action</a>
										<a href="#">Triler</a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i>8.4</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-lg-6">
							<div class="card">
								<div class="card__cover">
									<img src="<?php echo base_url("assets/{$this->theme}/");?>img/covers/cover2.jpg" alt="">
									<a href="#" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#">Benched</a></h3>
									<span class="card__category">
										<a href="#">Comedy</a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i>7.1</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-lg-6">
							<div class="card">
								<div class="card__cover">
									<img src="<?php echo base_url("assets/{$this->theme}/");?>img/covers/cover3.jpg" alt="">
									<a href="#" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#">Whitney</a></h3>
									<span class="card__category">
										<a href="#">Romance</a>
										<a href="#">Drama</a>
										<a href="#">Music</a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i>6.3</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-lg-6">
							<div class="card">
								<div class="card__cover">
									<img src="<?php echo base_url("assets/{$this->theme}/");?>img/covers/cover4.jpg" alt="">
									<a href="#" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#">Blindspotting</a></h3>
									<span class="card__category">
										<a href="#">Comedy</a>
										<a href="#">Drama</a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i>7.9</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-lg-6">
							<div class="card">
								<div class="card__cover">
									<img src="<?php echo base_url("assets/{$this->theme}/");?>img/covers/cover5.jpg" alt="">
									<a href="#" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#">I Dream in Another Language</a></h3>
									<span class="card__category">
										<a href="#">Action</a>
										<a href="#">Triler</a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i>8.4</span>
								</div>
							</div>
						</div>
						<!-- end card -->

						<!-- card -->
						<div class="col-6 col-sm-4 col-lg-6">
							<div class="card">
								<div class="card__cover">
									<img src="<?php echo base_url("assets/{$this->theme}/");?>img/covers/cover6.jpg" alt="">
									<a href="#" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="#">Benched</a></h3>
									<span class="card__category">
										<a href="#">Comedy</a>
									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i>7.1</span>
								</div>
							</div>
						</div>
						<!-- end card -->
					</div>
				</div>
				<!-- end sidebar -->
			</div>
		</div>
	</section>
	<!-- end content -->


<?php // Galeri ?>
	<!-- Root element of PhotoSwipe. Must have class pswp. -->
	<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

		<!-- Background of PhotoSwipe. 
		It's a separate element, as animating opacity is faster than rgba(). -->
		<div class="pswp__bg"></div>

		<!-- Slides wrapper with overflow:hidden. -->
		<div class="pswp__scroll-wrap">

			<!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
			<!-- don't modify these 3 pswp__item elements, data is added later on. -->
			<div class="pswp__container">
				<div class="pswp__item"></div>
				<div class="pswp__item"></div>
				<div class="pswp__item"></div>
			</div>

			<!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
			<div class="pswp__ui pswp__ui--hidden">

				<div class="pswp__top-bar">

					<!--  Controls are self-explanatory. Order can be changed. -->

					<div class="pswp__counter"></div>

					<button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

					<button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

					<!-- Preloader -->
					<div class="pswp__preloader">
						<div class="pswp__preloader__icn">
							<div class="pswp__preloader__cut">
								<div class="pswp__preloader__donut"></div>
							</div>
						</div>
					</div>
				</div>

				<button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>

				<button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>

				<div class="pswp__caption">
					<div class="pswp__caption__center"></div>
				</div>
			</div>
		</div>
	</div>


<?php   $this->load->view("{$this->theme}/include/footer"); ?>

<?php   $this->load->view("{$this->theme}/include/js"); ?>





</body>

</html>