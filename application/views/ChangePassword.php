<title>Change Password</title>
    <div class="main">
        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                    <div class="signin-form">
                        <h2 class="form-title">Ganti Password</h2>
                        <?= $this->session->flashdata('message2');?>
                        <p class="login-box-msg">Email : <?= $this->session->userdata('reset_email'); ?></p>

                        <form method="POST" class="register-form" id="login-form" action="<?php base_url()?>changePassword">
                            Password :
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="your_pass" id="your_pass" placeholder="Password Baru" required/>
                            </div>
                            Konfirmasi Password :
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Konfirmasi Password" onChange="onChange()" required/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Reset Password">
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

    <script>
        function onChange() {
            const password = document.querySelector('input[name=your_pass]');
            const confirm = document.querySelector('input[name=re_pass]');
            if (confirm.value === password.value) {
                confirm.setCustomValidity('');
            } else {
                confirm.setCustomValidity('Passwords do not match');
            }
        }
    </script>