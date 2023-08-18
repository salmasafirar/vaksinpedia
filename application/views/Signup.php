<title>Sign Up</title>
    <div class="main">
        <!-- Sign up form -->
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Daftar Akun</h2>
                        <form method="POST" class="register-form" id="register-form" action="<?= base_url()?>Signup/daftar">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Nama Lengkap" required/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Email" required/>
                            </div>
                            <div class="form-group">
                                <label for="number"><i class="zmdi zmdi-phone"></i></label>
                                <input type="number" name="number" id="number" placeholder="Nomor Handphone" required/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password" onChange="onChange()" required/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Konfirmasi Password" onChange="onChange()" required/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" required/>
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>Saya menerima segala isi  <a href="<?php echo base_url()?>Syarat" class="term-service">Syarat Penggunaan</a> dan <a href="<?php echo base_url()?>Kebijakan" class="term-service">Kebijakan Privasi</a></label>
                            </div>
                            <div class="form-group form-button center">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Daftar" href="">
                            </div>
                            <div class="form-group">
                                Sudah punya akun? <a href="<?php echo base_url()?>Login" class="signup-image-link">Masuk</a>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="assets/login/images/vaccine2.jpg" alt="sing up image"></figure>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script>
        function onChange() {
            const password = document.querySelector('input[name=pass]');
            const confirm = document.querySelector('input[name=re_pass]');
            if (confirm.value === password.value) {
                confirm.setCustomValidity('');
            } else {
                confirm.setCustomValidity('Passwords do not match');
            }
        }
    </script>