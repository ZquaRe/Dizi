<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("{$this->theme}/include/head"); ?>
    <title>
        <?php echo $this->uri->segment(2); ?> Profili</title>

</head>
<body class="body">

<?php $this->load->view("{$this->theme}/include/menu"); ?>

<!-- page title -->
<section class="section section--first section--bg"
         data-bg="<?php echo base_url("assets/{$this->theme}/"); ?>img/section/section.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section__wrap">
                    <!-- section title -->
                    <?php /*<h2 class="section__title">@<?php echo $this->uri->segment(2); ?></h2> */ ?>
                    <!-- end section title -->

                    <!-- breadcrumb -->
                    <ul class="breadcrumb">
                        <li class="breadcrumb__item"><a href="#">Anasayfa</a></li>
                        <li class="breadcrumb__item breadcrumb__item--active">
                            @<?php echo $this->uri->segment(2); ?></li>
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
                                <img src="<?php echo base_url("assets/{$this->theme}/"); ?>img/user.png" alt="">
                            </div>
                            <div class="profile__meta">
                                <h3><?php //echo $UserInformation->Name . ' ' . $UserInformation->Surname; ?><?php echo $this->uri->segment(2); ?></h3>
                                <span>Katılma Tarihi: <br><?php echo $UserInformation->RegisterDate; ?></span>
                            </div>
                        </div>

                        <!-- content tabs nav -->
                        <ul class="nav nav-tabs content__tabs content__tabs--profile" id="content__tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tab-1" role="tab"
                                   aria-controls="tab-1" aria-selected="true">Favoriler</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2"
                                   aria-selected="false">Ayarlar</a>
                            </li>
                        </ul>
                        <!-- end content tabs nav -->

                        <!-- content mobile tabs nav -->
                        <div class="content__mobile-tabs content__mobile-tabs--profile" id="content__mobile-tabs">
                            <div class="content__mobile-tabs-btn dropdown-toggle" role="navigation" id="mobile-tabs"
                                 data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <input type="button" value="Profil">
                                <span></span>
                            </div>

                            <div class="content__mobile-tabs-menu dropdown-menu" aria-labelledby="mobile-tabs">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item"><a class="nav-link active" id="1-tab" data-toggle="tab"
                                                            href="#tab-1" role="tab" aria-controls="tab-1"
                                                            aria-selected="true">Favoriler</a></li>

                                    <li class="nav-item"><a class="nav-link" id="2-tab" data-toggle="tab" href="#tab-2"
                                                            role="tab" aria-controls="tab-2" aria-selected="false">Ayarlar</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- end content mobile tabs nav -->

                        <button class="profile__logout" type="button">
                            <i class="icon ion-ios-log-out"></i>
                            <span>Çıkış</span>
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
                <div class="catalog">
                    <div class="container">
                        <div class="row">
                            <!-- card -->
                            <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                                <div class="card">
                                    <div class="card__cover">
                                        <img src="<?php echo base_url("assets/{$this->theme}/"); ?>img/covers/cover.jpg"
                                             alt="">
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
                            <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                                <div class="card">
                                    <div class="card__cover">
                                        <img src="<?php echo base_url("assets/{$this->theme}/"); ?>img/covers/cover2.jpg"
                                             alt="">
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
                            <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                                <div class="card">
                                    <div class="card__cover">
                                        <img src="<?php echo base_url("assets/{$this->theme}/"); ?>img/covers/cover3.jpg"
                                             alt="">
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
                            <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                                <div class="card">
                                    <div class="card__cover">
                                        <img src="<?php echo base_url("assets/{$this->theme}/"); ?>img/covers/cover4.jpg"
                                             alt="">
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
                            <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                                <div class="card">
                                    <div class="card__cover">
                                        <img src="<?php echo base_url("assets/{$this->theme}/"); ?>img/covers/cover5.jpg"
                                             alt="">
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
                            <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                                <div class="card">
                                    <div class="card__cover">
                                        <img src="<?php echo base_url("assets/{$this->theme}/"); ?>img/covers/cover6.jpg"
                                             alt="">
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
                            <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                                <div class="card">
                                    <div class="card__cover">
                                        <img src="<?php echo base_url("assets/{$this->theme}/"); ?>img/covers/cover6.jpg"
                                             alt="">
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
                            <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                                <div class="card">
                                    <div class="card__cover">
                                        <img src="<?php echo base_url("assets/{$this->theme}/"); ?>img/covers/cover5.jpg"
                                             alt="">
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
                            <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                                <div class="card">
                                    <div class="card__cover">
                                        <img src="<?php echo base_url("assets/{$this->theme}/"); ?>img/covers/cover4.jpg"
                                             alt="">
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
                            <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                                <div class="card">
                                    <div class="card__cover">
                                        <img src="<?php echo base_url("assets/{$this->theme}/"); ?>img/covers/cover3.jpg"
                                             alt="">
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
                            <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                                <div class="card">
                                    <div class="card__cover">
                                        <img src="<?php echo base_url("assets/{$this->theme}/"); ?>img/covers/cover2.jpg"
                                             alt="">
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
                            <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                                <div class="card">
                                    <div class="card__cover">
                                        <img src="<?php echo base_url("assets/{$this->theme}/"); ?>img/covers/cover.jpg"
                                             alt="">
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

                            <!-- paginator -->
                            <div class="col-12">
                                <ul class="paginator">
                                    <li class="paginator__item paginator__item--prev">
                                        <a href="#"><i class="icon ion-ios-arrow-back"></i></a>
                                    </li>
                                    <li class="paginator__item"><a href="#">1</a></li>
                                    <li class="paginator__item paginator__item--active"><a href="#">2</a></li>
                                    <li class="paginator__item"><a href="#">3</a></li>
                                    <li class="paginator__item"><a href="#">4</a></li>
                                    <li class="paginator__item paginator__item--next">
                                        <a href="#"><i class="icon ion-ios-arrow-forward"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- end paginator -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="2-tab">
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
                                        <input id="username" type="text" name="username" class="profile__input"
                                               placeholder="User 123">
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                    <div class="profile__group">
                                        <label class="profile__label" for="email">Email</label>
                                        <input id="email" type="text" name="email" class="profile__input"
                                               placeholder="email@email.com">
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                    <div class="profile__group">
                                        <label class="profile__label" for="firstname">First Name</label>
                                        <input id="firstname" type="text" name="firstname" class="profile__input"
                                               placeholder="John">
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                    <div class="profile__group">
                                        <label class="profile__label" for="lastname">Last Name</label>
                                        <input id="lastname" type="text" name="lastname" class="profile__input"
                                               placeholder="Doe">
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
                                        <input id="confirmpass" type="password" name="confirmpass"
                                               class="profile__input">
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
        </div>
        <!-- end content tabs -->
    </div>
</div>
<!-- end content -->


<?php $this->load->view("{$this->theme}/include/footer"); ?>

<?php $this->load->view("{$this->theme}/include/js"); ?>


</body>

</html>