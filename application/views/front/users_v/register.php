<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("{$this->theme}/include/head"); ?>
    <title>Kayıt Ol</title>
    <?php //if($this->session->flashSucces) echo "<script>Swal.fire('Başarılı','$this->session->flashError','success') </script>"; ?>

</head>
<body class="body">

<div class="sign section--bg" data-bg="<?php echo base_url("assets/{$this->theme}/"); ?>img/section/section.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="sign__content">
                    <!-- registration form -->
                    <form action="<?php echo base_url('users/register/'); ?>" method="POST" class="sign__form">
                        <?php echo validation_errors(); ?>

                        <?php if ($this->session->flashError) echo ' <div class="alert alert-danger">' . $this->session->flashError . '</div>'; ?>

                        <?php /*
                        <div class="alert alert-danger">
                            Yorum yapabilmeniz için giriş yapmanız gerekiyor.
                        </div>
 */ ?>

                        <a href="index.html" class="sign__logo">
                            <img src="<?php echo base_url("assets/{$this->theme}/"); ?>img/logo.svg" alt="">
                        </a>
                        <div class="sign__group">
                            <input type="text" class="sign__input" name="Username"
                                   placeholder="Kullanıcı Adı" <?php if ($this->session->RegisterPost) echo 'value="' . $this->session->RegisterPost['Username'] . '"'; ?>>
                        </div>
                        <div class="sign__group">
                            <input type="text" class="sign__input" name="EMail"
                                   placeholder="E-Posta" <?php if ($this->session->RegisterPost) echo 'value="' . $this->session->RegisterPost['EMail'] . '"'; ?>>
                        </div>
                        <div class="sign__group">
                            <input type="text" class="sign__input" name="Name"
                                   placeholder="Ad" <?php if ($this->session->RegisterPost) echo 'value="' . $this->session->RegisterPost['Name'] . '"'; ?>>
                        </div>
                        <div class="sign__group">
                            <input type="text" class="sign__input" name="Surname"
                                   placeholder="Soyad" <?php if ($this->session->RegisterPost) echo 'value="' . $this->session->RegisterPost['Surname'] . '"'; ?>>
                        </div>
                        <div class="sign__group">
                            <input type="password" class="sign__input" name="Password" placeholder="Şifre">
                        </div>
                        <div class="sign__group">
                            <div class="g-recaptcha"
                                 data-sitekey="<?php echo $this->config->item('google_key') ?>"></div>
                        </div>
                        <?php /*
                        <div class="sign__group">
                            <input type="password" class="sign__input" name="PasswordValid"
                                   placeholder="Şifre Tekrar">
                        </div>
                           */ ?>
                        <?php /*
        <div class="sign__group sign__group--checkbox">
            <input id="remember" name="remember" type="checkbox" checked="checked">
            <label for="remember">I agree to the <a href="#">Privacy Policy</a></label>
        </div>
    */ ?>
                        <button class="sign__btn" type="submit">Kayıt Ol</button>

                        <span class="sign__text">Hesabınız var mı? <a href="login">Oturum Açın!</a></span>
                    </form>
                    <!-- registration form -->
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