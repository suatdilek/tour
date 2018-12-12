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
    <div id="position">
        <div class="container">
            <ul>
                <li><a href="<?=site_url()?>">Anasayfa</a>
                </li>
                <li><a href="<?=site_url('blog')?>">Blog</a>
                </li>
                <li><a href="<?=site_url('blog')?>" class="active"><?php echo $category2['category_name'];//$category_url]?></a></li>
            </ul>
        </div>
    </div>
    <!-- End Position -->
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
                        <?php foreach (Blog::Categories() as $category): ?>
                            <li>
                                <a href="<?=site_url('blog/kategori/' . $category['category_url'])?>"
                                    <?=$category['category_url']== route(2) ? ' id="active"' : null?>>
                                    <i class="icon_set_1_icon-51"></i>
                                    <?=$category['category_name'].' '.$category['total']?>
                                </a>
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
                    <a class="btn_map" style="color:#fff"><?php echo $category2['category_name'];//$category_url]?></a>
                </p>


<?php foreach ($query as $row): ?>
                <div class="strip_all_tour_list wow fadeIn" data-wow-delay="0.1s">
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <div class="ribbon_3 popular"><span>Popular</span>
                            </div>
                            <div class="img_list">
                                <a href="<?= site_url('blog/' . $row['post_url']) ?>"><img src="<?php echo public_url('haber/800x533/1.jpg');?>" alt="Image">
                                    <div class="badge_save">İNDİRİM<strong>20%</strong></div>
                                    <div class="short_info"><i class="icon_set_2_icon-105"></i>1 Alana 1 Hediye </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="tour_list_desc">
                                <h3><strong><?=$row['post_title']?></strong></h3>
                                <?php echo timeConvert($row['post_date']).' - '.$row['category_name']; ?>

                                <p><?=htmlspecialchars_decode($row['post_short_content'])?></p>
                                <ul class="add_info">
                                    <li>
                                        <div class="tooltip_styled tooltip-effect-4">
                                            <span class="tooltip-item"><i class="icon_set_1_icon-26"></i></span>
                                            <div class="tooltip-content">
                                                <h4>LÜKS OTOBÜSLERLE SEYAHAT</h4>
                                                Her hafta İzmir'den Cuma hareket
                                                <BR>6 Gece 7 Gün
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tooltip_styled tooltip-effect-4">
                                            <span class="tooltip-item"><i class="icon_set_2_icon-105"></i></span>
                                            <div class="tooltip-content">
                                                <h4>1 Alana 1 Hediye</h4>
                                                <br>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tooltip_styled tooltip-effect-4">
                                            <span class="tooltip-item"><i class="icon_set_1_icon-6"></i></span>
                                            <div class="tooltip-content">
                                                <h4>Otellerde Y.P Konaklama</h4> 3*, 4*, 5* Hotel Konaklamaları
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tooltip_styled tooltip-effect-4">
                                            <span class="tooltip-item"><i class="icon_set_1_icon-37"></i></span>
                                            <div class="tooltip-content">
                                                <h4>Çevre Gezileri</h4>
                                                <br>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tooltip_styled tooltip-effect-4">
                                            <span class="tooltip-item"><i class="icon_set_3_restaurant-8"></i></span>
                                            <div class="tooltip-content">
                                                <h4>Otobüs içi İkramları</h4>
                                                Deneyimli personelimizle otobüs içi Çay, Kahve, Su ikramları
                                                <br>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tooltip_styled tooltip-effect-4">
                                            <span class="tooltip-item"><i class="icon_set_1_icon-57"></i></span>
                                            <div class="tooltip-content">
                                                <h4>Rehberlik Hizmetleri</h4>
                                                <br>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2">
                            <div class="price_list">
                                <div><sup>₺</sup>2399*<span class="normal_price_list">$2999</span><small>*1 Kişi</small>
                                    <p><a href="<?= site_url('blog/' . $row['post_url']) ?>" class="btn_1">Detay</a>
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
<?php endforeach; ?>
                <!--End strip -->

                <!--End strip -->

                <!--End strip -->

                <!--End strip -->


                <!--End strip -->
                <hr>
                <?php
                if($query) {
                    if ($totalRecord > $pageLimit) { ?>
                        <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-center">
                                <li class="page-item">
                                    <a class="page-link"
                                       href="<?= site_url('blog/kategori/'. $category2['category_url'] . '?' . $pageParam . '=' . $db->prevPage()) ?>"
                                       aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>

                                <?= $db->showPagination(site_url('blog/kategori/'. $category2['category_url'] . '?' . $pageParam . '=[page]'), 'active', true) ?>
                                <li class="page-item">
                                    <a class="page-link"
                                       href="<?= site_url('blog/kategori/'. $category2['category_url'] . '?' . $pageParam . '=' . $db->nextPage()) ?>"
                                       aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <!-- end pagination-->
                  <?php  }
                } ?>
            </div>
            <!-- End col lg-9 -->
        </div>
        <!-- End row -->
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
