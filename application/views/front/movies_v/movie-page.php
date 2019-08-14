<!DOCTYPE html>
<html lang="en">

<head>
<?php $this->load->view("{$this->theme}/include/head"); ?>
<title>FlixGo – Online Movies, TV Shows & Cinema HTML Template</title>

</head>
<body class="body">

<?php $this->load->view("{$this->theme}/include/menu"); ?>

	<!-- details -->
	<section class="section details">
		<!-- details background -->
		<div class="details__bg" data-bg="<?php echo base_url("assets/{$this->theme}/"); ?>img/home/home__bg.jpg"></div>
		<!-- end details background -->

		<!-- details content -->
		<div class="container">
			<div class="row">
				<!-- title -->
				<div class="col-12">


					<h1 class="details__title">I Dream in Another Language</h1>
					<select class="js-example-basic-single margin5" style="padding-right:10px;" name="state">
  <option selected>Open this select menu</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
					<button class="pure-button button-dark btn-size-sm margin5" >Sinema Modu</button>
					<button class="pure-button button-dark btn-size-sm margin5" >Sinema Modu</button>
					<button class="pure-button button-dark btn-size-sm margin5" >Sinema Modu</button>
					<button class="pure-button button-dark btn-size-sm margin5" >Sinema Modu</button>
					<button class="pure-button button-dark btn-size-sm margin5 float-right"><i class="fas fa-compress"></i> &nbsp;Sinema Modu</button>

				</div>
				<!-- end title -->


				<!-- player -->
				<div class="col-12 col-xl-12 col-md-12 col-sm-12">

				
					<video 
					controls
                        crossorigin
                        playsinline
                        poster="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.jpg"
                        id="player"
					>
						<!-- Video files -->
						<source src="https://oload.download/stream/YZ6DFHMhrsg~1565868656~78.182.0.0~v_PG3Dge?mime=true" type="video/mp4" size="576">
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

				<!-- accordion -->
				<div class="col-12 col-xl-12 col-md-12 col-sm-12">
					<div class="accordion" id="accordion">
						<div class="accordion__card">
							<div class="card-header" id="headingOne">
								<button type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									<span>Season: 1</span>
									<span>22 Episodes from Nov, 2004 until May, 2005</span>
								</button>
							</div>

							<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
								<div class="card-body">
									<table class="accordion__list">
										<thead>
											<tr>
												<th>#</th>
												<th>Title</th>
												<th>Air Date</th>
											</tr>
										</thead>

										<tbody>
											<tr>
												<th>1</th>
												<td>Pilot</td>
												<td>Tuesday, November 16th, 2004</td>
											</tr>
											<tr>
												<th>2</th>
												<td>Paternity</td>
												<td>Tuesday, November 23rd, 2004</td>
											</tr>
											<tr>
												<th>3</th>
												<td>Occam's Razor</td>
												<td>Tuesday, November 30th, 2004</td>
											</tr>
											<tr>
												<th>4</th>
												<td>Maternity</td>
												<td>Tuesday, December 7th, 2004</td>
											</tr>
											<tr>
												<th>5</th>
												<td>Damned If You Do</td>
												<td>Tuesday, December 14th, 2004</td>
											</tr>
											<tr>
												<th>6</th>
												<td>The Socratic Method</td>
												<td>Tuesday, December 21st, 2004</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>

						<div class="accordion__card">
							<div class="card-header" id="headingTwo">
								<button class="collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									<span>Season: 2</span>
									<span>24 Episodes from Sep, 2005 until May, 2006</span>
								</button>
							</div>

							<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
								<div class="card-body">
									<table class="accordion__list">
										<thead>
											<tr>
												<th>#</th>
												<th>Title</th>
												<th>Air Date</th>
											</tr>
										</thead>

										<tbody>
											<tr>
												<th>1</th>
												<td>Pilot</td>
												<td>Tuesday, November 16th, 2004</td>
											</tr>
											<tr>
												<th>2</th>
												<td>Paternity</td>
												<td>Tuesday, November 23rd, 2004</td>
											</tr>
											<tr>
												<th>3</th>
												<td>Occam's Razor</td>
												<td>Tuesday, November 30th, 2004</td>
											</tr>
											<tr>
												<th>4</th>
												<td>Maternity</td>
												<td>Tuesday, December 7th, 2004</td>
											</tr>
											<tr>
												<th>5</th>
												<td>Damned If You Do</td>
												<td>Tuesday, December 14th, 2004</td>
											</tr>
											<tr>
												<th>6</th>
												<td>The Socratic Method</td>
												<td>Tuesday, December 21st, 2004</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>

						<div class="accordion__card">
							<div class="card-header" id="headingThree">
								<button class="collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									<span>Season: 3</span>
									<span>24 Episodes from Sep, 2006 until May, 2007</span>
								</button>
							</div>

							<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
								<div class="card-body">
									<table class="accordion__list">
										<thead>
											<tr>
												<th>#</th>
												<th>Title</th>
												<th>Air Date</th>
											</tr>
										</thead>

										<tbody>
											<tr>
												<th>1</th>
												<td>Pilot</td>
												<td>Tuesday, November 16th, 2004</td>
											</tr>
											<tr>
												<th>2</th>
												<td>Paternity</td>
												<td>Tuesday, November 23rd, 2004</td>
											</tr>
											<tr>
												<th>3</th>
												<td>Occam's Razor</td>
												<td>Tuesday, November 30th, 2004</td>
											</tr>
											<tr>
												<th>4</th>
												<td>Maternity</td>
												<td>Tuesday, December 7th, 2004</td>
											</tr>
											<tr>
												<th>5</th>
												<td>Damned If You Do</td>
												<td>Tuesday, December 14th, 2004</td>
											</tr>
											<tr>
												<th>6</th>
												<td>The Socratic Method</td>
												<td>Tuesday, December 21st, 2004</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>

						<div class="accordion__card">
							<div class="card-header" id="headingFour">
								<button class="collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
									<span>Season: 4</span>
									<span>16 Episodes from Sep, 2007 until May, 2008</span>
								</button>
							</div>

							<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
								<div class="card-body">
									<table class="accordion__list">
										<thead>
											<tr>
												<th>#</th>
												<th>Title</th>
												<th>Air Date</th>
											</tr>
										</thead>

										<tbody>
											<tr>
												<th>1</th>
												<td>Pilot</td>
												<td>Tuesday, November 16th, 2004</td>
											</tr>
											<tr>
												<th>2</th>
												<td>Paternity</td>
												<td>Tuesday, November 23rd, 2004</td>
											</tr>
											<tr>
												<th>3</th>
												<td>Occam's Razor</td>
												<td>Tuesday, November 30th, 2004</td>
											</tr>
											<tr>
												<th>4</th>
												<td>Maternity</td>
												<td>Tuesday, December 7th, 2004</td>
											</tr>
											<tr>
												<th>5</th>
												<td>Damned If You Do</td>
												<td>Tuesday, December 14th, 2004</td>
											</tr>
											<tr>
												<th>6</th>
												<td>The Socratic Method</td>
												<td>Tuesday, December 21st, 2004</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- end accordion -->
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
						</ul>
						<!-- end content tabs nav -->

						<!-- content mobile tabs nav -->
						<div class="content__mobile-tabs" id="content__mobile-tabs">
							<div class="content__mobile-tabs-btn dropdown-toggle" role="navigation" id="mobile-tabs" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<input type="button" value="Comments">
								<span></span>
							</div>

						
						</div>
						<!-- end content mobile tabs nav -->
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-12 col-xl-12">
					<!-- content tabs -->
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active">
							<div class="row">
								<!-- comments -->
								<div class="col-12">
									<div class="comments">

									<div class="alert fsize alert-warning">
Yorum yapabilmeniz için giriş yapmanız gerekiyor.
</div>

									<div class="alert fsize alert-danger">
Yorum yapabilmeniz için giriş yapmanız gerekiyor.
</div>

									<div class="alert fsize alert-success">
Yorum yapabilmeniz için giriş yapmanız gerekiyor.
</div>
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
													<img class="comments__avatar" src="<?php echo base_url("assets/{$this->theme}/"); ?>img/user.png" alt="">
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
													<img class="comments__avatar" src="<?php echo base_url("assets/{$this->theme}/"); ?>img/user.png" alt="">
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
													<img class="comments__avatar" src="<?php echo base_url("assets/{$this->theme}/"); ?>img/user.png" alt="">
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
													<img class="comments__avatar" src="<?php echo base_url("assets/{$this->theme}/"); ?>img/user.png" alt="">
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
													<img class="comments__avatar" src="<?php echo base_url("assets/{$this->theme}/"); ?>img/user.png" alt="">
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

					</div>
					<!-- end content tabs -->
				</div>

	
			</div>
		</div>
	</section>
	<!-- end content -->


<?php // Galeri
 ?>
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


<?php $this->load->view("{$this->theme}/include/footer"); ?>

<?php $this->load->view("{$this->theme}/include/js"); ?>





</body>

</html>