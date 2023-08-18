<title>Masuk</title>
<div class="main">
    <!-- Sing in  Form -->
    <section class="sign-in">
        <div class="container">
            <div class="signin-content">
                <div class="signin-image">
                    <figure><img src="assets/login/images/vaccine1.jpg" alt="sing up image"></figure>
                </div>

                <div class="signin-form">
                    <h2 class="form-title">Masuk</h2>
                    <?= $this->session->flashdata('info'); ?>
                    <form method="POST" class="register-form" id="login-form" action="<?php base_url() ?>Login/proses_login">
                        <div class="form-group">
                            <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="your_name" id="your_name" placeholder="Email/Nomor Handphone" required />
                        </div>
                        <div class="form-group">
                            <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="your_pass" id="your_pass" placeholder="Password" required />
                        </div>
                        <div class="form-group">
                            <a href="<?php echo base_url() ?>ForgotPassword" class="signup-image-link">Lupa Password?</a>
                        </div>
                        <div class="form-group form-button">
                            <input type="submit" name="signin" id="signin" class="form-submit" value="Masuk" href="">
                        </div>
                        <div class="form-group">
                            Belum punya akun? <a href="<?php echo base_url() ?>Signup" class="signup-image-link">Daftar Disini</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>