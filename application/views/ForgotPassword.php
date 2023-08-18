<title>Lupa Password</title>
    <div class="main">
        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="assets/login/images/vaccine1.jpg" alt="sing up image"></figure>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Lupa Password</h2>
                        <?= $this->session->flashdata('message');?>

                        <form method="POST" class="register-form" id="login-form" action="<?php base_url()?>ForgotPassword/forgotPassword">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="your_name" id="your_name" placeholder="Masukan Email" required/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Reset Password" href="">
                            </div>
                            <div class="form-group">
                                Kembali ke halaman <a href="<?php echo base_url()?>Login" class="signup-image-link">Login</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>