<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<?php   $this->load->view("{$this->theme}/include/head"); ?>

</head>
<body>

<?php   $this->load->view("{$this->theme}/include/loader"); ?>

<?php   $this->load->view("{$this->theme}/include/login-register"); ?>

<?php   $this->load->view("{$this->theme}/include/menu"); ?>

<?php   $this->load->view("{$this->theme}/include/slider"); ?>



<div class="movie-items">
	<div class="container">
		<div class="row ipad-width">
			<div class="col-md-8">
				<div class="title-hd">
					<h2>in theater</h2>
					<a href="#" class="viewall">View all <i class="ion-ios-arrow-right"></i></a>
				</div>
				<div class="tabs">
					<ul class="tab-links">
						<li class="active"><a href="#tab1">#Popular</a></li>
						<li><a href="#tab2"> #Coming soon</a></li>
						<li><a href="#tab3">  #Top rated  </a></li>
						<li><a href="#tab4"> #Most reviewed</a></li>                        
					</ul>
				    <div class="tab-content">
				        <div id="tab1" class="tab active">
				            <div class="row">
				            	<div class="slick-multiItem">
				            		<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="<?php echo base_url("assets/{$this->theme}/");?>images\uploads\mv-item1.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">Interstellar</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
									<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="<?php echo base_url("assets/{$this->theme}/");?>images\uploads\mv-item2.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">The revenant</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
				            		<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="<?php echo base_url("assets/{$this->theme}/");?>images\uploads\mv-item3.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">Die hard</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
				            		<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="<?php echo base_url("assets/{$this->theme}/");?>images\uploads\mv-item4.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">The walk</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
				            		<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="<?php echo base_url("assets/{$this->theme}/");?>images\uploads\mv-item5.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">Interstellar</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
									<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="<?php echo base_url("assets/{$this->theme}/");?>images\uploads\mv-item6.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">The revenant</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
				            		<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="<?php echo base_url("assets/{$this->theme}/");?>images\uploads\mv-item7.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">Die hard</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
				            		<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="<?php echo base_url("assets/{$this->theme}/");?>images\uploads\mv-item8.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">The walk</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
				            		<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="<?php echo base_url("assets/{$this->theme}/");?>images\uploads\mv-item3.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">Die hard</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
				            	</div>
				            </div>
				        </div>
				        <div id="tab2" class="tab">
				           <div class="row">
				            	<div class="slick-multiItem">
				            		<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="<?php echo base_url("assets/{$this->theme}/");?>images\uploads\mv-item5.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">Interstellar</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
									<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="<?php echo base_url("assets/{$this->theme}/");?>images\uploads\mv-item6.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">The revenant</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
				            		<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="<?php echo base_url("assets/{$this->theme}/");?>images\uploads\mv-item7.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">Die hard</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
				            		<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="<?php echo base_url("assets/{$this->theme}/");?>images\uploads\mv-item8.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">The walk</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
				            		<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="<?php echo base_url("assets/{$this->theme}/");?>images\uploads\mv-item3.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">Die hard</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
				            	</div>
				            </div>
				        </div>
				        <div id="tab3" class="tab">
				        	<div class="row">
				            	<div class="slick-multiItem">
				            		<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="<?php echo base_url("assets/{$this->theme}/");?>images\uploads\mv-item1.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">Interstellar</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
									<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="<?php echo base_url("assets/{$this->theme}/");?>images\uploads\mv-item2.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">The revenant</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
				            		<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="<?php echo base_url("assets/{$this->theme}/");?>images\uploads\mv-item3.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">Die hard</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
				            		<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="<?php echo base_url("assets/{$this->theme}/");?>images\uploads\mv-item4.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">The walk</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
				            		<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="<?php echo base_url("assets/{$this->theme}/");?>images\uploads\mv-item3.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">Die hard</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
				            	</div>
				            </div>
			       	 	</div>
			       	 	<div id="tab4" class="tab">
				        	<div class="row">
				            	<div class="slick-multiItem">
				            		<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="<?php echo base_url("assets/{$this->theme}/");?>images\uploads\mv-item5.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">Interstellar</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
									<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="<?php echo base_url("assets/{$this->theme}/");?>images\uploads\mv-item6.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">The revenant</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
				            		<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="<?php echo base_url("assets/{$this->theme}/");?>images\uploads\mv-item7.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">Die hard</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
				            		<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="<?php echo base_url("assets/{$this->theme}/");?>images\uploads\mv-item8.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">The walk</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
				            		<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="<?php echo base_url("assets/{$this->theme}/");?>images\uploads\mv-item3.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">Die hard</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
				            	</div>
				            </div>
			       	 	</div>
				    </div>
				</div>
				<div class="title-hd">
					<h2>on tv</h2>
					<a href="#" class="viewall">View all <i class="ion-ios-arrow-right"></i></a>
				</div>
				<div class="tabs">
					<ul class="tab-links-2">
						<li><a href="#tab21">#Popular</a></li>
						<li class="active"><a href="#tab22"> #Coming soon</a></li>
						<li><a href="#tab23">  #Top rated  </a></li>
						<li><a href="#tab24"> #Most reviewed</a></li>                        
					</ul>
				    <div class="tab-content">
				        <div id="tab21" class="tab">
				            <div class="row">
				            	<div class="slick-multiItem">
				            		<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="<?php echo base_url("assets/{$this->theme}/");?>images\uploads\mv-item1.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">Interstellar</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
									<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="<?php echo base_url("assets/{$this->theme}/");?>images\uploads\mv-item2.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">The revenant</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
				            		<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="<?php echo base_url("assets/{$this->theme}/");?>images\uploads\mv-item3.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">Die hard</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
				            		<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="<?php echo base_url("assets/{$this->theme}/");?>images\uploads\mv-item4.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">The walk</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
				            		<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="<?php echo base_url("assets/{$this->theme}/");?>images\uploads\mv-item3.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">Die hard</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
				            	</div>
				            </div>
				        </div>
				        <div id="tab22" class="tab active">
				           <div class="row">
				            	<div class="slick-multiItem">
				            		<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="<?php echo base_url("assets/{$this->theme}/");?>images\uploads\mv-item5.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">Interstellar</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
									<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="<?php echo base_url("assets/{$this->theme}/");?>images\uploads\mv-item6.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">The revenant</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
				            		<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="<?php echo base_url("assets/{$this->theme}/");?>images\uploads\mv-item7.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">Die hard</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
				            		<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="<?php echo base_url("assets/{$this->theme}/");?>images\uploads\mv-item8.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">The walk</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
				            		<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="<?php echo base_url("assets/{$this->theme}/");?>images\uploads\mv-item1.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">Interstellar</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
									<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="<?php echo base_url("assets/{$this->theme}/");?>images\uploads\mv-item2.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">The revenant</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
				            		<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="<?php echo base_url("assets/{$this->theme}/");?>images\uploads\mv-item3.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">Die hard</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
				            		<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="<?php echo base_url("assets/{$this->theme}/");?>images\uploads\mv-item4.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">The walk</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
				            		<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="<?php echo base_url("assets/{$this->theme}/");?>images\uploads\mv-item5.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">Interstellar</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
									<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="<?php echo base_url("assets/{$this->theme}/");?>images\uploads\mv-item6.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">The revenant</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
				            	</div>
				            </div>
				        </div>
				        <div id="tab23" class="tab">
				        	<div class="row">
				            	<div class="slick-multiItem">
				            		<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="<?php echo base_url("assets/{$this->theme}/");?>images\uploads\mv-item1.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">Interstellar</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
									<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="<?php echo base_url("assets/{$this->theme}/");?>images\uploads\mv-item2.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">The revenant</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
				            		<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="<?php echo base_url("assets/{$this->theme}/");?>images\uploads\mv-item3.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">Die hard</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
				            		<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="<?php echo base_url("assets/{$this->theme}/");?>images\uploads\mv-item4.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">The walk</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
				            		<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="<?php echo base_url("assets/{$this->theme}/");?>images\uploads\mv-item3.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">Die hard</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
				            	</div>
				            </div>
			       	 	</div>
			       	 	 <div id="tab24" class="tab">
				        	<div class="row">
				            	<div class="slick-multiItem">
				            		<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="<?php echo base_url("assets/{$this->theme}/");?>images\uploads\mv-item5.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">Interstellar</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
									<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="<?php echo base_url("assets/{$this->theme}/");?>images\uploads\mv-item6.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">The revenant</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
				            		<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="<?php echo base_url("assets/{$this->theme}/");?>images\uploads\mv-item7.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">Die hard</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
				            		<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="<?php echo base_url("assets/{$this->theme}/");?>images\uploads\mv-item8.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">The walk</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
				            		<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="<?php echo base_url("assets/{$this->theme}/");?>images\uploads\mv-item3.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">Die hard</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
				            	</div>
				            </div>
			       	 	</div>
				    </div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="sidebar">
					<div class="ads">
						<img src="<?php echo base_url("assets/{$this->theme}/");?>images\uploads\ads1.png" alt="">
					</div>
					<div class="celebrities">
						<h4 class="sb-title">Spotlight Celebrities</h4>
						<div class="celeb-item">
							<a href="#"><img src="<?php echo base_url("assets/{$this->theme}/");?>images\uploads\ava1.jpg" alt=""></a>
							<div class="celeb-author">
								<h6><a href="#">Samuel N. Jack</a></h6>
								<span>Actor</span>
							</div>
						</div>
						<div class="celeb-item">
							<a href="#"><img src="<?php echo base_url("assets/{$this->theme}/");?>images\uploads\ava2.jpg" alt=""></a>
							<div class="celeb-author">
								<h6><a href="#">Benjamin Carroll</a></h6>
								<span>Actor</span>
							</div>
						</div>
						<div class="celeb-item">
							<a href="#"><img src="<?php echo base_url("assets/{$this->theme}/");?>images\uploads\ava3.jpg" alt=""></a>
							<div class="celeb-author">
								<h6><a href="#">Beverly Griffin</a></h6>
								<span>Actor</span>
							</div>
						</div>
						<div class="celeb-item">
							<a href="#"><img src="<?php echo base_url("assets/{$this->theme}/");?>images\uploads\ava4.jpg" alt=""></a>
							<div class="celeb-author">
								<h6><a href="#">Justin Weaver</a></h6>
								<span>Actor</span>
							</div>
						</div>
						<a href="#" class="btn">See all celebrities<i class="ion-ios-arrow-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="trailers">
	<div class="container">
		<div class="row ipad-width">
			<div class="col-md-12">
				<div class="title-hd">
					<h2>in theater</h2>
					<a href="#" class="viewall">View all <i class="ion-ios-arrow-right"></i></a>
				</div>
				<div class="videos">
				 	<div class="slider-for-2 video-ft">
				 		<div>
					    	<iframe class="item-video" src="https://www.youtube.com/embed/1Q8fG0TtVAY"></iframe>
					    </div>
					    <div>
					    	<iframe class="item-video" src="https://www.youtube.com/embed/w0qQkSuWOS8"></iframe>
					    </div>
					    <div>
					    	<iframe class="item-video" src="https://www.youtube.com/embed/44LdLqgOpjo"></iframe>
					    </div>
					    <div>
					    	<iframe class="item-video" src="https://www.youtube.com/embed/gbug3zTm3Ws"></iframe>
					    </div>
					    <div>
					    	<iframe class="item-video" src="https://www.youtube.com/embed/e3Nl_TCQXuw"></iframe>
					    </div>
					    <div>
					    	<iframe class="item-video" src="https://www.youtube.com/embed/NxhEZG0k9_w"></iframe>
					    </div>
						
						
					</div>
					<div class="slider-nav-2 thumb-ft">
						<div class="item">
							<div class="trailer-img">
								<img src="<?php echo base_url("assets/{$this->theme}/");?>images\uploads\trailer7.jpg" alt="photo by Barn Images">
							</div>
							<div class="trailer-infor">
	                        	<h4 class="desc">Wonder Woman</h4>
	                        	<p>2:30</p>
	                        </div>
						</div>
						<div class="item">
							<div class="trailer-img">
								<img src="<?php echo base_url("assets/{$this->theme}/");?>images\uploads\trailer2.jpg" alt="photo by Barn Images">
							</div>
							<div class="trailer-infor">
	                        	<h4 class="desc">Oblivion: Official Teaser Trailer</h4>
	                        	<p>2:37</p>
	                        </div>
						</div>
						<div class="item">
							<div class="trailer-img">
								<img src="<?php echo base_url("assets/{$this->theme}/");?>images\uploads\trailer6.jpg" alt="photo by Joshua Earle">
							</div>
							<div class="trailer-infor">
	                        	<h4 class="desc">Exclusive Interview:  Skull Island</h4>
	                        	<p>2:44</p>
	                        </div>
						</div>
						<div class="item">
							<div class="trailer-img">
								<img src="<?php echo base_url("assets/{$this->theme}/");?>images\uploads\trailer3.png" alt="photo by Alexander Dimitrov">
							</div>
							<div class="trailer-infor">
	                        	<h4 class="desc">Logan: Director James Mangold Interview</h4>	
	                        	<p>2:43</p>
	                        </div>
						</div>
						<div class="item">
							<div class="trailer-img">
								<img src="<?php echo base_url("assets/{$this->theme}/");?>images\uploads\trailer4.png" alt="photo by Wojciech Szaturski">
							</div>
							<div class="trailer-infor">
	                        	<h4 class="desc">Beauty and the Beast: Official Teaser Trailer 2</h4>	
	                        	<p>2: 32</p>
	                        </div>	
						</div>
						<div class="item">
							<div class="trailer-img">
								<img src="<?php echo base_url("assets/{$this->theme}/");?>images\uploads\trailer5.jpg" alt="photo by Wojciech Szaturski">
							</div>
							<div class="trailer-infor">
	                        	<h4 class="desc">Fast&Furious 8</h4>	
	                        	<p>3:11</p>
	                        </div>	
						</div>
					
					</div>
				</div>   
			</div>
		</div>
	</div>
</div>
<!-- latest new v1 section-->
<div class="latestnew">
	<div class="container">
		<div class="row ipad-width">
			<div class="col-md-8">
				<div class="ads">
					<img src="<?php echo base_url("assets/{$this->theme}/");?>images\uploads\ads2.png" alt="">
				</div>
				<div class="title-hd">
					<h2>Latest news</h2>
				</div>
				<div class="tabs">
					<ul class="tab-links-3">
						<li class="active"><a href="#tab31">#Movies </a></li>
						<li><a href="#tab32"> #TV Shows </a></li>              
						<li><a href="#tab33">  # Celebs</a></li>                       
					</ul>
				    <div class="tab-content">
				        <div id="tab31" class="tab active">
				            <div class="row">
				            	<div class="blog-item-style-1">
				            		<img src="<?php echo base_url("assets/{$this->theme}/");?>images\uploads\blog-it1.jpg" alt="">
				            		<div class="blog-it-infor">
				            			<h3><a href="#">Brie Larson to play first female white house candidate Victoria Woodull in Amazon film</a></h3>
				            			<span class="time">13 hours ago</span>
				            			<p>Exclusive: <span>Amazon Studios </span>has acquired Victoria Woodhull, with Oscar winning Room star <span>Brie Larson</span> polsed to produce, and play the first female candidate for the presidency of the United States. Amazon bought it in a pitch package deal. <span> Ben Kopit</span>, who wrote the Warner Bros film <span>Libertine</span> that has...</p>
				            		</div>
				            	</div>
				            </div>
				        </div>
				        <div id="tab32" class="tab">
				           <div class="row">
				            	<div class="blog-item-style-1">
				            		<img src="<?php echo base_url("assets/{$this->theme}/");?>images\uploads\blog-it2.jpg" alt="">
				            		<div class="blog-it-infor">
				            			<h3><a href="#">Tab 2</a></h3>
				            			<span class="time">13 hours ago</span>
				            			<p>Exclusive: <span>Amazon Studios </span>has acquired Victoria Woodhull, with Oscar winning Room star <span>Brie Larson</span> polsed to produce, and play the first female candidate for the presidency of the United States. Amazon bought it in a pitch package deal. <span> Ben Kopit</span>, who wrote the Warner Bros film <span>Libertine</span> that has...</p>
				            		</div>
				            	</div>
				            </div>
				        </div>
				        <div id="tab33" class="tab">
				        	<div class="row">
				            	<div class="blog-item-style-1">
				            		<img src="<?php echo base_url("assets/{$this->theme}/");?>images\uploads\blog-it1.jpg" alt="">
				            		<div class="blog-it-infor">
				            			<h3><a href="#">Tab 3</a></h3>
				            			<span class="time">13 hours ago</span>
				            			<p>Exclusive: <span>Amazon Studios </span>has acquired Victoria Woodhull, with Oscar winning Room star <span>Brie Larson</span> polsed to produce, and play the first female candidate for the presidency of the United States. Amazon bought it in a pitch package deal. <span> Ben Kopit</span>, who wrote the Warner Bros film <span>Libertine</span> that has...</p>
				            		</div>
				            	</div>
				            </div>
			       	 	</div>
				    </div>
				</div>
				<div class="morenew">
					<div class="title-hd">
						<h3>More news on Blockbuster</h3>
						<a href="#" class="viewall">See all Movies news<i class="ion-ios-arrow-right"></i></a>
					</div>
					<div class="more-items">
						<div class="left">
							<div class="more-it">
								<h6><a href="#">Michael Shannon Frontrunner to play Cable in “Deadpool 2”</a></h6>
								<span class="time">13 hours ago</span>
							</div>
							<div class="more-it">
								<h6><a href="#">French cannibal horror “Raw” inspires L.A. theater to hand out “Barf Bags”</a></h6>
								
								<span class="time">13 hours ago</span>
							</div>
						</div>
						<div class="right">
							<div class="more-it">
								<h6><a href="#">Laura Dern in talks to join Justin Kelly’s biopic “JT Leroy”</a></h6>
								<span class="time">13 hours ago</span>
							</div>
							<div class="more-it">
								<h6><a href="#">China punishes more than 300 cinemas for box office cheating</a></h6>
								<span class="time">13 hours ago</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="sidebar">
					<div class="sb-facebook sb-it">
						<h4 class="sb-title">Find us on Facebook</h4>
						<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fhaintheme%2F%3Ffref%3Dts&tabs=timeline&width=300&height=315px&small_header=true&adapt_container_width=false&hide_cover=false&show_facepile=true&appId" width="300" height="315" style="border:none;overflow:hidden"></iframe>
					</div>
					<div class="sb-twitter sb-it">
						<h4 class="sb-title">Tweet to us</h4>
						<div class="slick-tw">
							<div class="tweet item" id="599202861751410688">
							</div>
							<div class="tweet item" id="297462728598122498">
							</div>
						</div>					
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--end of latest new v1 section-->
<!-- footer section-->
<footer class="ht-footer">
	<div class="container">
		<div class="flex-parent-ft">
			<div class="flex-child-ft item1">
				 <a href="index.html"><img class="logo" src="<?php echo base_url("assets/{$this->theme}/");?>images\logo1.png" alt=""></a>
				 <p>5th Avenue st, manhattan<br>
				New York, NY 10001</p>
				<p>Call us: <a href="#">(+01) 202 342 6789</a></p>
			</div>
			<div class="flex-child-ft item2">
				<h4>Resources</h4>
				<ul>
					<li><a href="#">About</a></li> 
					<li><a href="#">Blockbuster</a></li>
					<li><a href="#">Contact Us</a></li>
					<li><a href="#">Forums</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">Help Center</a></li>
				</ul>
			</div>
			<div class="flex-child-ft item3">
				<h4>Legal</h4>
				<ul>
					<li><a href="#">Terms of Use</a></li> 
					<li><a href="#">Privacy Policy</a></li>	
					<li><a href="#">Security</a></li>
				</ul>
			</div>
			<div class="flex-child-ft item4">
				<h4>Account</h4>
				<ul>
					<li><a href="#">My Account</a></li> 
					<li><a href="#">Watchlist</a></li>	
					<li><a href="#">Collections</a></li>
					<li><a href="#">User Guide</a></li>
				</ul>
			</div>
			<div class="flex-child-ft item5">
				<h4>Newsletter</h4>
				<p>Subscribe to our newsletter system now <br> to get latest news from us.</p>
				<form action="#">
					<input type="text" placeholder="Enter your email...">
				</form>
				<a href="#" class="btn">Subscribe now <i class="ion-ios-arrow-forward"></i></a>
			</div>
		</div>
	</div>
	<div class="ft-copyright">
		<div class="ft-left">
			<p>© 2017 Blockbuster. All Rights Reserved. Designed by leehari.</p>
		</div>
		<div class="backtotop">
			<p><a href="#" id="back-to-top">Back to top  <i class="ion-ios-arrow-thin-up"></i></a></p>
		</div>
	</div>
</footer>
<!-- end of footer section-->

<script src="<?php echo base_url("assets/{$this->theme}/");?>js\jquery.js"></script>
<script src="<?php echo base_url("assets/{$this->theme}/");?>js\plugins.js"></script>
<script src="<?php echo base_url("assets/{$this->theme}/");?>js\plugins2.js"></script>
<script src="<?php echo base_url("assets/{$this->theme}/");?>js\custom.js"></script>
</body>
</html>