<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("{$this->theme}/include/head"); ?>
    <title>Oturum Aç</title>

</head>
<body class="body">


<div class="sign section--bg" data-bg="<?php echo base_url("assets/{$this->theme}/"); ?>img/section/section.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="sign__content">
                    <!-- authorization form -->
                    <form action="<?php echo base_url('users/login'); ?>" method="POST" class="sign__form">
                    <?php echo validation_errors(); ?>
                    <?php if ($this->session->flashError) echo ' <div class="alert alert-danger">' . $this->session->flashError . '</div>'; ?>

                        <a href="<?php echo base_url(); ?>" class="sign__logo">
                            <img src="<?php echo base_url("assets/{$this->theme}/"); ?>img/logo.svg" alt="">
                        </a>

                        <div class="sign__group">
                            <input type="text" name="Username" class="sign__input" placeholder="Kullanıcı Adı" <?php if ($this->session->LoginPost) echo 'value="' . $this->session->LoginPost['Username'] . '"'; ?> >
                        </div>

                        <div class="sign__group">
                            <input type="password" name="Password" class="sign__input" placeholder="Şifre">
                        </div>
                        <?php /*
							<div class="sign__group sign__group--checkbox">
								<input id="remember" name="remember" type="checkbox" checked="checked">
								<label for="remember">Remember Me</label>
							</div>
                        */ ?>
                        <button class="sign__btn" type="submit" name="Sub">Oturum Aç</button>

                        <span class="sign__text">Hesabınız yok mu? <a href="register">Kayıt Olun!</a></span>

                        <span class="sign__text"><a href="#">Parolanızı mı unuttunuz?</a></span>
                    </form>
                    <!-- end authorization form -->
                </div>  
            </div>
        </div>
    </div>
</div>

<?php $this->load->view("{$this->theme}/include/js"); ?>
<?php if ($this->session->flashSucces) {
        echo "<script>Swal.fire('Başarılı','" . $this->session->flashSucces . "','success') </script>";
        header('Refresh:2; url= ' . base_url());
    } ?>

</body>

</html>