<?php
require view('static/head');
?>

</head>
<?php
require view('static/menu2');
?>

<main>
    <section id="hero" class="login" style='background: url("<?php echo public_url('haber/bg_login.jpg')?>") center center no-repeat; background-size: cover'>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-5 col-md-6 col-sm-8">
                    <div id="login">
                        <div class="text-center"><h3>Giriş Formu</h3></div>
                        <hr>
                        <form action="" method="post">
                            <?php if ($err = error()): ?>
                                <div class="alert alert-danger" role="alert">
                                    <?=$err?>
                                </div>
                            <?php endif; ?>
                            <?php if ($success = success()): ?>
                                <div class="alert alert-success" role="alert">
                                    <?=$success?>
                                </div>
                            <?php endif; ?>
                            <div class="form-group">
                                <label>Kullanıcı Adı</label>
                                <input type="text" name="username" class=" form-control"  placeholder="Kullanıcı Adı">
                            </div>
                            <div class="form-group">
                                <label>Şifre</label>
                                <input type="password" name="password" class=" form-control" id="password1" placeholder="Şifre">
                            </div>
                            <div id="pass-info" class="clearfix"></div>
                            <input type="hidden" name="submit" value="1">
                            <button type="submit" class="btn_full">Giriş</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main><!-- End main -->

<?php
require view('static/footer');
?>

<!-- Specific scripts -->
<script src="<?php echo public_url('js/pw_strenght.js');?>"></script>


</body>
</html>