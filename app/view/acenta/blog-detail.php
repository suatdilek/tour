<?php
require view('static/head');
?>
</head>
<?php
require view('static/menu2');
?>
<section class="parallax-window" data-parallax="scroll" data-image-src="<?=public_url('haber/1400x470/1.jpg')?>" data-natural-width="1400" data-natural-height="470">
    <div class="parallax-content-2">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
<!--                    <span class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class=" icon-star-empty"></i></span> -->
                    <h1><?=$row['post_title']?></h1>
                    <!--                    <span>Champ de Mars, 5 Avenue Anatole, 75007 Paris.</span> -->
                                    </div>
                                    <div class="col-md-4">
                                        <div id="price_single_main" class="hotel">
                                            from/per night <span><sup>$</sup>95</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <main>
                        <div id="position">
                            <div class="container">
                                <ul>
                                    <li><a href="<?site_url()?>">Anasayfa</a> </li>
                                    <li>
                                    <?php
                                    $category_url = explode(',', $row['category_url']);
                                    foreach (explode(',', $row['category_name']) as $index => $category_name):
                                        ?>
                                        <a href="<?=site_url('blog/kategori/' . trim($category_url[$index]))?>"><?=$category_name?></a> /
                                    <?php endforeach; ?></li>
                                    <li><a href="<?=site_url('blog/' . $row['post_url'])?>"><?=$row['post_title']?></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Position -->



    <div class="container margin_30">
        <div class="row">
            <div class="col-lg-8" id="single_tour_desc">




                <div id="Img_carousel" class="slider-pro">
                    <div class="sp-slides">

                        <div class="sp-slide">
                            <img alt="Image" class="sp-image" src="<?php echo public_url('css/images/blank.gif')?>" data-src="<?php echo public_url('haber/1000x667/1.jpg')?>" data-small="<?php echo public_url('haber/1000x667/1.jpg')?>" data-medium="<?php echo public_url('haber/1000x667/1.jpg')?>" data-large="<?php echo public_url('haber/1000x667/1.jpg')?>" data-retina="<?php echo public_url('haber/1000x667/1.jpg')?>">
                        </div>
                        <div class="sp-slide">
                            <img alt="Image" class="sp-image" src="<?php echo public_url('css/images/blank.gif')?>" data-src="<?php echo public_url('haber/1000x667/2.jpg')?>" data-small="<?php echo public_url('haber/1000x667/2.jpg')?>" data-medium="<?php echo public_url('haber/1000x667/2.jpg')?>" data-large="<?php echo public_url('haber/1000x667/2.jpg')?>" data-retina="<?php echo public_url('haber/1000x667/2.jpg')?>">
                        </div>

                        <div class="sp-slide">
                            <img alt="Image" class="sp-image" src="<?php echo public_url('css/images/blank.gif')?>" data-src="<?php echo public_url('haber/1000x667/3.jpg')?>" data-small="<?php echo public_url('haber/1000x667/3.jpg')?>" data-medium="<?php echo public_url('haber/1000x667/3.jpg')?>" data-large="<?php echo public_url('haber/1000x667/3.jpg')?>" data-retina="<?php echo public_url('haber/1000x667/3.jpg')?>">
                        </div>

                        <div class="sp-slide">
                            <img alt="Image" class="sp-image" src="<?php echo public_url('css/images/blank.gif')?>" data-src="<?php echo public_url('haber/1000x667/4.jpg')?>" data-small="<?php echo public_url('haber/1000x667/4.jpg')?>" data-medium="<?php echo public_url('haber/1000x667/4.jpg')?>" data-large="<?php echo public_url('haber/1000x667/4.jpg')?>" data-retina="<?php echo public_url('haber/1000x667/4.jpg')?>">
                        </div>

                        <div class="sp-slide">
                            <img alt="Image" class="sp-image" src="<?php echo public_url('css/images/blank.gif')?>" data-src="<?php echo public_url('haber/1000x667/5.jpg')?>" data-small="<?php echo public_url('haber/1000x667/5.jpg')?>" data-medium="<?php echo public_url('haber/1000x667/5.jpg')?>" data-large="<?php echo public_url('haber/1000x667/5.jpg')?>" data-retina="<?php echo public_url('haber/1000x667/5.jpg')?>">
                        </div>

                        <div class="sp-slide">
                            <img alt="Image" class="sp-image" src="<?php echo public_url('css/images/blank.gif')?>" data-src="<?php echo public_url('haber/1000x667/6.jpg')?>" data-small="<?php echo public_url('haber/1000x667/6.jpg')?>" data-medium="<?php echo public_url('haber/1000x667/6.jpg')?>" data-large="<?php echo public_url('haber/1000x667/6.jpg')?>" data-retina="<?php echo public_url('haber/1000x667/6.jpg')?>">
                        </div>
                    </div>
                    <div class="sp-thumbnails">
                        <img alt="Image" class="sp-thumbnail" src="<?php echo public_url('haber/1000x667/1.jpg')?>">
                        <img alt="Image" class="sp-thumbnail" src="<?php echo public_url('haber/1000x667/2.jpg')?>">
                        <img alt="Image" class="sp-thumbnail" src="<?php echo public_url('haber/1000x667/3.jpg')?>">
                        <img alt="Image" class="sp-thumbnail" src="<?php echo public_url('haber/1000x667/4.jpg')?>">
                        <img alt="Image" class="sp-thumbnail" src="<?php echo public_url('haber/1000x667/5.jpg')?>">
                        <img alt="Image" class="sp-thumbnail" src="<?php echo public_url('haber/1000x667/6.jpg')?>">
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col-lg-3">
                        <h3>Açıklama</h3>
                    </div>
                    <div class="col-lg-9">
                        <?=htmlspecialchars_decode($row['post_content'])?>

                    </div>
                </div>
                <hr>

                <div class="row">
                    <div class="col-lg-3">
                        <h3>Yorumlar</h3>
                        <a href="#" class="btn_1 add_bottom_30" data-toggle="modal" data-target="#myReview">Yorum Yaz</a>
                    </div>
                    <div class="col-lg-9">

                        <!-- End general_rating -->
                        <div class="row" id="rating_summary">
                            <div id="single_tour_feat" style="width: 100%">
                                <ul>
                                    <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?=site_url('blog/'.$row['post_url'])?>" target="_blank"><i class="icon-facebook"></i></a>Facebook a Gönder</li>
                                    <li><a href="https://twitter.com/home?status=<?=$row['post_title']?> - <?=site_url('blog/'.$row['post_url'])?>" target="_blank"><i class="icon-twitter"></i></a>Twitter a Gönder</li>
                                    <li><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?=site_url('blog/'.$row['post_url'])?>&title=<?=$row['post_title']?>&summary=<?=cut_text($row['post_short_content'], 100)?>&source=" target="_blank"><i class="icon-linkedin"></i></a>Linkedin e Gönder</li>
                                    <li><a href="https://api.whatsapp.com/send?phone=&text=<?=$row['post_title']?> - <?=site_url('blog/' . $row['post_url'])?>&source=&data=" target="_blank"><i class="icon-wikipedia"></i></a>Whatsapp a Gönder</li>
                                </ul>
                            </div>
                            <div class="col-md-12" style="margin-top: 10px">
                                <div class="row" style="margin:0">
                                    <div class="col-md-3" style="margin-top: 10px">
                                        Bağlantı Linki :
                                    </div>
                                    <div class="col-md-9" >
                                        <input teyp="text" value="<?=site_url('blog/'.$row['post_url'])?>" class="form-control">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- End row -->
                        <hr>
                        <?php if ($comments): ?>
                        <div id="comments">
                            <?php foreach ($comments as $comment) require view('static/comment'); ?>
                        </div>
                        <?php else: ?>
                        <div id="no-comment">
                        <div class="review_strip_single last">
                            <h4>İlk yorumu siz yazın!</h4>
                            <p>
                                Bu konu için hiç yorum yazılmamış, ilk yorumu siz yazarak destek verin!
                            </p>
                        </div>
                        </div>
                            <div id="comments"></div>
                        <!-- End review strip -->
                        <?php endif; ?>
                    </div>
                </div>

            </div>
            <!--End  single_tour_desc-->

            <aside class="col-lg-4" id="sidebar">

                <div class="theiaStickySidebar">
                    <div class="box_style_1 expose" id="booking_box">
                        <h3 class="inner">Rezervasyon Detayları</h3>


                        <table class="table table_summary">
                            <tbody>
                            <tr><td><?=$row['category_name']?></td></tr>
                            <tr><td>EYLÜL-EKİM Her Hafta Cuma</td></tr>
                            <tr>
                                <td>
                                    6 GECE 7 GÜN
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    1 ALANA 1 HEDİYE
                                </td>
                            </tr>
                            <tr class="total">
                                <td class="text-right">
                                    2.399 ₺
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--/box_style_1 -->
                    <div class="box_style_4">
                        <i class="icon_set_1_icon-90"></i>
                        <h4><span>Rezervasyon</span> Telefonu</h4>
                        <a href="tel://004542344599" class="phone">+90 232 555 55 55</a>
                        <small>9.00am - 19.30pm</small>
                    </div>
                    <td><?=timeConvert($row['post_date'])?>
                </div>
                <!--/sticky -->

            </aside>
        </div>
        <!--End row -->
    </div>
    <!--End container -->

    <div id="overlay"></div>
    <!-- Mask on input focus -->

</main>
<!-- End main -->
<?php
require view('static/footer');
?>


<!-- Modal Review -->
<div class="modal fade" id="myReview" tabindex="-1" role="dialog" aria-labelledby="myReviewLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myReviewLabel">Yorum Yaz</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div id="message-review">
                </div>
                <div id="comment-msg" style="display: none"></div>
                <form onsubmit="return false;" id="comment-form" data-id="<?= $row['post_id'] ?>">
                    <?php if (!session('user_id')): ?>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input name="name" id="name" type="text" placeholder="Ad" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input name="email" id="email" type="email" placeholder="Email" class="form-control">
                            </div>
                        </div>
                    </div>
                    <!-- End row -->
                    <?php else: ?>
                        <div class="alert alert-warning">
                            <strong><?= session('user_name') ?></strong> kullanıcı adıyla yorum yapıyorsunuz. [<a
                                    href="<?= site_url('cikis') ?>">Çıkış yap</a>]
                        </div>
                    <?php endif; ?>
                    <hr>
                    <div class="form-group">
                        <textarea name="comment" class="form-control" style="height:100px" placeholder="Yorumunuzu yazınız."></textarea>
                    </div>
                    <input type="submit" onclick="add_comment('#comment-form')" class="btn_1" id="submit-review">
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End modal review -->

<!-- Date and time pickers -->
<script src="<?php echo public_url('js/jquery.sliderPro.min.js')?>"></script>
<script type="text/javascript">
    $(document).ready(function ($) {
        $('#Img_carousel').sliderPro({
            width: 960,
            height: 500,
            fade: true,
            arrows: true,
            buttons: false,
            fullScreen: false,
            smallSize: 500,
            startSlide: 0,
            mediumSize: 1000,
            largeSize: 3000,
            thumbnailArrows: true,
            autoplay: false
        });
    });
</script>

<!-- Date and time pickers -->
<script>
    var api_url = '<?=site_url('api')?>';
    function add_comment(formId){
        var postID = $(formId).data('id'),
            data = $(formId).serialize() + '&post_id=' + postID;
        $.post(api_url + '/add-comment', data, function (response) {
            if (response.error){
                $('#comment-msg').removeClass().addClass('alert alert-danger').html(response.error).show();
            } else if (response.success) {
                $('#comment-msg').removeClass().addClass('alert alert-success').html(response.success).show();
                $(formId + ' input, ' + formId + ' textarea').val('');
            } else {
                $('#no-comment').remove();
                $('#comment-msg').hide().removeClass().html('');
                $('#comments').append(response.comment);
            }
        }, 'json');
    }
</script>



</body>

</html>