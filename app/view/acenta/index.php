<?php
require view('static/head');
?>
<!-- REVOLUTION SLIDER CSS -->
<link href="<?php echo public_url('rs-plugin/css/settings.css');?>" rel="stylesheet">
<link href="<?php echo public_url('css/extralayers.css');?>" rel="stylesheet">
</head>
<?php
require view('static/menu2');
?>
<main>
    <?php
    require view('static/slide');
?>

    <div class="container margin_30" style="margin-bottom: -30px">
        <div class="row">



            <div class="col-lg-12">
            <div class="banner colored">
                <h4 style="font-family: Arial;font-weight: bold">KARS DOĞU EXPRESİ <span>1348₺</span> den İTİBAREN</h4>
                <p>
                    4 Gece 5 Gün
                </p>
                <a href="single_tour.html" class="btn_1 white">İncele</a>
            </div>
        </div>
    </div>
    </div>
    <div class="container">
        <div class="row">

            <aside class="col-lg-3">
                <p>
                    <a class="btn_map" style="color:#fff">Popüler Gezilerimiz</a>
                </p>

                <div class="box_style_cat">
                    <ul id="cat_nav">
                        <?php foreach (menu(10) as $key => $menu): ?>
                            <li>
                            <a href="<?= site_url('blog/kategori/'.$menu['url']) ?>"><i class="icon_set_1_icon-44"></i><?= $menu['title'] ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>


                <!--End filters col
                <div class="box_style_2">
                    <i class="icon_set_1_icon-57"></i>
                    <h4>Need <span>Help?</span></h4>
                    <a href="tel://004542344599" class="phone">+45 423 445 99</a>
                    <small>Monday to Friday 9.00am - 7.30pm</small>
                </div>-->
            </aside>
            <!--End aside -->

            <div class="col-lg-9">

                <p>
                    <a class="btn_map" style="color:#fff">İZMİR ÇIKIŞLI TURLARIMIZ</a>
                    </p>

                <div class="row">
<?php for($a=0; $a<3; $a++){ ?>
    <div class="col-lg-4 col-md-6">
        <div class="hotel_container">
            <div class="ribbon_3"><span>KAMPANYA</span></div>
            <div class="img_container">
                <a href="<?=site_url('blog/seo-url2')?>">
                    <img src="<?php echo public_url('haber/800x533/1.jpg');?>" width="800" height="533" class="img-fluid" alt="Image">
                    <div class="badge_save">İNDİRİM<strong>30%</strong></div>
                    <div class="score"><span>8.5</span></div>
                    <div class="short_info hotel">
                        1 Alana 1 Bedava<span class="price">318<sup>₺</sup></span>
                    </div>
                </a>
            </div>
            <div class="hotel_title">
                <h3><strong>Starlight Resort Hotel</strong></h3>
                <div class="rating">
                    <small>Ultra Herşey Dahil<br>
                        Türkiye / Antalya / Side / Kızılağaç </small>
                </div>
                <!-- end rating -->

            </div>
        </div>
        <!-- End box -->
    </div>
<?php } ?>
                </div>
                <!-- End row -->
                <div class="row">
                    <?php for($a=0; $a<3; $a++){ ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="hotel_container">
                                <div class="ribbon_3 popular"><span>KAMPANYA</span></div>
                                <div class="img_container">
                                    <a href="<?=site_url('blog/seo-url2')?>">
                                        <img src="<?php echo public_url('haber/800x533/1.jpg');?>" width="800" height="533" class="img-fluid" alt="Image">
                                        <div class="badge_save">İNDİRİM<strong>30%</strong></div>
                                        <div class="score"><span>8.5</span></div>
                                        <div class="short_info hotel">
                                            1 Alana 1 Bedava<span class="price">318<sup>₺</sup></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="hotel_title">
                                    <h3><strong>Starlight Resort Hotel</strong></h3>
                                    <div class="rating">
                                        <small>Ultra Herşey Dahil<br>
                                            Türkiye / Antalya / Side / Kızılağaç </small>
                                    </div>
                                    <!-- end rating -->

                                </div>
                            </div>
                            <!-- End box -->
                        </div>
                    <?php } ?>

                </div>
                <!-- End row ///////////////////////////////////-->

            </div>
            <!-- End col lg 9 -->

        </div>
        <!-- End row -->
    </div>
    <!-- End container -->

        <div class="container margin_10">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">

                    <p>
                        <a href="#"><img src="<?php echo public_url('haber/800x450/1.jpg')?>" alt="Pic" class="img-fluid"></a>
                    </p>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <p>
                        <a href="#"><img src="<?php echo public_url('haber/800x450/2.jpg')?>" alt="Pic" class="img-fluid"></a>
                    </p>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <p>
                        <a href="#"><img src="<?php echo public_url('haber/800x450/3.jpg')?>" alt="Pic" class="img-fluid"></a>
                    </p>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <p>
                        <a href="#"><img src="<?php echo public_url('haber/800x450/4.jpg')?>" alt="Pic" class="img-fluid"></a>
                    </p>
                </div>
            </div>
            <!-- End row -->
            <div class="row">

                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.2s">
                    <div class="feature_home">
                        <i class="icon_set_1_icon-57"></i>
                        <h3> Bilgi Rezervasyon<br><span>0232 555 55 55</span></h3>
                        <a href="about.html" class="btn_1 outline">Tıklayın Arayalım</a>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.4s">
                    <div class="feature_home">
                        <i class="icon_set_2_icon-102"></i>
                        <h3> Anında Uçak Bileti<br><span>0232 555 55 55</span></h3>
                        <a href="about.html" class="btn_1 outline">Tıklayınız</a>
                    </div>
                </div>

                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                    <div class="feature_home">
                        <i class="icon_set_1_icon-17"></i>
                        <h3>Müşterilerimizin<br><span>Görüşleri</span> </h3>
                        <a href="about.html" class="btn_1 outline">Tıklayınız</a>
                    </div>
                </div>


            </div>
            <!--End row -->


                <p>
                    <a class="btn_map" style="color:#fff">POPÜLER TURLARIMIZ</a>
                </p>

                <div class="row">
                    <?php for($a=0; $a<4; $a++){ ?>
                        <div class="col-lg-3 col-md-6">
                            <div class="hotel_container">
                                <div class="ribbon_3"><span>KAMPANYA</span></div>
                                <div class="img_container">
                                    <a href="<?=site_url('blog/seo-url2')?>">
                                        <img src="<?php echo public_url('haber/800x533/2.jpg');?>" width="800" height="533" class="img-fluid" alt="Image">
                                        <div class="badge_save">İNDİRİM<strong>30%</strong></div>
                                        <div class="score"><span>8.5</span></div>
                                        <div class="short_info hotel">
                                            1 Alana 1 Bedava<span class="price">318<sup>₺</sup></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="hotel_title">
                                    <h3><strong>Starlight Resort Hotel</strong></h3>
                                    <div class="rating">
                                        <small>Ultra Herşey Dahil<br>
                                            Türkiye / Antalya / Side / Kızılağaç </small>
                                    </div>
                                    <!-- end rating -->

                                </div>
                            </div>
                            <!-- End box -->
                        </div>
                    <?php } ?>

                </div>
                <!-- End row -->
                <div class="row">
                    <?php for($a=0; $a<4; $a++){ ?>
                        <div class="col-lg-3 col-md-6">
                            <div class="hotel_container">
                                <div class="ribbon_3 popular"><span>KAMPANYA</span></div>
                                <div class="img_container">
                                    <a href="<?=site_url('blog/seo-url2')?>">
                                        <img src="<?php echo public_url('haber/800x533/2.jpg');?>" width="800" height="533" class="img-fluid" alt="Image">
                                        <div class="badge_save">İNDİRİM<strong>30%</strong></div>
                                        <div class="score"><span>8.5</span></div>
                                        <div class="short_info hotel">
                                            1 Alana 1 Bedava<span class="price">318<sup>₺</sup></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="hotel_title">
                                    <h3><strong>Starlight Resort Hotel</strong></h3>
                                    <div class="rating">
                                        <small>Ultra Herşey Dahil<br>
                                            Türkiye / Antalya / Side / Kızılağaç </small>
                                    </div>
                                    <!-- end rating -->

                                </div>
                            </div>
                            <!-- End box -->
                        </div>
                    <?php } ?>

                </div>
                <!-- End row ///////////////////////////////////-->
            <p>
                <a class="btn_map" style="color:#fff">YURTDIŞI TURLARIMIZ</a>
            </p>

            <div class="row">
                <?php for($a=0; $a<4; $a++){ ?>
                    <div class="col-lg-3 col-md-6">
                        <div class="hotel_container">
                            <div class="ribbon_3"><span>KAMPANYA</span></div>
                            <div class="img_container">
                                <a href="<?=site_url('blog/seo-url2')?>">
                                    <img src="<?php echo public_url('haber/800x533/3.jpg');?>" width="800" height="533" class="img-fluid" alt="Image">
                                    <div class="badge_save">İNDİRİM<strong>30%</strong></div>
                                    <div class="score"><span>8.5</span></div>
                                    <div class="short_info hotel">
                                        1 Alana 1 Bedava<span class="price">318<sup>₺</sup></span>
                                    </div>
                                </a>
                            </div>
                            <div class="hotel_title">
                                <h3><strong>Starlight Resort Hotel</strong></h3>
                                <div class="rating">
                                    <small>Ultra Herşey Dahil<br>
                                        Türkiye / Antalya / Side / Kızılağaç </small>
                                </div>
                                <!-- end rating -->

                            </div>
                        </div>
                        <!-- End box -->
                    </div>
                <?php } ?>

            </div>
            <!-- End row -->
            <div class="row">
                <?php for($a=0; $a<4; $a++){ ?>
                    <div class="col-lg-3 col-md-6">
                        <div class="hotel_container">
                            <div class="ribbon_3 popular"><span>KAMPANYA</span></div>
                            <div class="img_container">
                                <a href="<?=site_url('blog/seo-url2')?>">
                                    <img src="<?php echo public_url('haber/800x533/3.jpg');?>" width="800" height="533" class="img-fluid" alt="Image">
                                    <div class="badge_save">İNDİRİM<strong>30%</strong></div>
                                    <div class="score"><span>8.5</span></div>
                                    <div class="short_info hotel">
                                        1 Alana 1 Bedava<span class="price">318<sup>₺</sup></span>
                                    </div>
                                </a>
                            </div>
                            <div class="hotel_title">
                                <h3><strong>Starlight Resort Hotel</strong></h3>
                                <div class="rating">
                                    <small>Ultra Herşey Dahil<br>
                                        Türkiye / Antalya / Side / Kızılağaç </small>
                                </div>
                                <!-- end rating -->

                            </div>
                        </div>
                        <!-- End box -->
                    </div>
                <?php } ?>
            </div>
            <!-- End row ///////////////////////////////////-->
            <p>
                <a class="btn_map" style="color:#fff">2018 OTELLERİMİZ</a>
            </p>

            <div class="row">
                <?php for($a=0; $a<4; $a++){ ?>
                    <div class="col-lg-3 col-md-6">
                        <div class="hotel_container">
                            <div class="ribbon_3"><span>KAMPANYA</span></div>
                            <div class="img_container">
                                <a href="<?=site_url('blog/seo-url2')?>">
                                    <img src="<?php echo public_url('haber/800x533/4.jpg');?>" width="800" height="533" class="img-fluid" alt="Image">
                                    <div class="badge_save">İNDİRİM<strong>30%</strong></div>
                                    <div class="score"><span>8.5</span></div>
                                    <div class="short_info hotel">
                                        1 Alana 1 Bedava<span class="price">318<sup>₺</sup></span>
                                    </div>
                                </a>
                            </div>
                            <div class="hotel_title">
                                <h3><strong>Starlight Resort Hotel</strong></h3>
                                <div class="rating">
                                    <small>Ultra Herşey Dahil<br>
                                        Türkiye / Antalya / Side / Kızılağaç </small>
                                </div>
                                <!-- end rating -->

                            </div>
                        </div>
                        <!-- End box -->
                    </div>
                <?php } ?>
            </div>
            <!-- End row ///////////////////////////////////-->


        </div>
        <!-- End container -->

</main>
<!-- End main -->
<?php
require view('static/footer');
?>
<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
<script src="<?php echo public_url('rs-plugin/js/jquery.themepunch.tools.min.js');?>"></script>
<script src="<?php echo public_url('rs-plugin/js/jquery.themepunch.revolution.min.js');?>"></script>
<script src="<?php echo public_url('js/revolution_func.js');?>"></script>

<script src="<?php echo public_url('js/tabs.js');?>"></script>
<script>new CBPFWTabs( document.getElementById( 'tabs' ) );</script>
</body>

</html>
