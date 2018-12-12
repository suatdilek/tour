<?php
require view('static/head');
?>
</head>
<?php
require view('static/menu2');
?>
<main>
<?php
    require view('static/slide_map');
?>
    <!-- end map-->
    <div id="position">
        <div class="container">
            <ul>
                <li><a href="#">Home</a>
                </li>
                <li><a href="#">Category</a>
                </li>
                <li>Page active</li>
            </ul>
        </div>
    </div>
    <!-- End Position -->
    <div class="container margin_30">
        <div class="row">
            <div class="col-md-8">
                <div class="form_title">
                    <h3><strong><i class="icon-pencil"></i></strong>İletişim Bilgileri</h3>
                    <p>
                        Her türlü soru, öneri ya da memnuniyetinizi bize buradan iletebilirsiniz.
                    </p>
                </div>
                <div class="step">

 <!--
                             <?php if ($err = error()): ?>
                                <div class="alert alert-danger" style="display: none" id="contact-error-msg" role="alert">
                                    <?=$err?>
                                </div>
                            <?php endif; ?>
                            <?php if ($success = success()): ?>
                                <div class="alert alert-success" style="display: none" id="contact-success-msg" role="alert">
                                    <?=$success?>
                                </div>
                            <?php endif; ?>

 -->


                    <div id="message-contact"></div>
                    <form action="" id="contact-form" onsubmit="return false;">
                            <div class="alert alert-danger" style="display: none" id="contact-error-msg" role="alert"></div>
                            <div class="alert alert-success" style="display: none" id="contact-success-msg" role="alert"></div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Ad Soyad</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Ad Soyad">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" id="email" name="email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                        </div>
                        <!-- End row -->
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Mesaj Konusu</label>
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Mesaj Konusu">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Telefon</label>
                                    <input type="text" id="phone" name="phone" class="form-control" placeholder="Telefon">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Mesaj</label>
                                    <textarea rows="5" id="message" name="message" class="form-control" placeholder="Mesaj" style="height:200px;"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <label>Human verification</label>
                                <input type="text" id="verify_contact" class=" form-control add_bottom_30" placeholder="Are you human? 3 + 1 =">
                                <input type="submit" value="Gönder" class="btn_1" id="submit-contact" onclick="contact('#contact-form')">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- End col-md-8 -->

            <div class="col-md-4">
                <div class="box_style_1">
                    <span class="tape"></span>
                    <h4>Address <span><i class="icon-pin pull-right"></i></span></h4>
                    <p>
                        Place Charles de Gaulle, 75008 Paris
                    </p>
                    <hr>
                    <h4>Help center <span><i class="icon-help pull-right"></i></span></h4>
                    <p>
                        Lorem ipsum dolor sit amet, vim id accusata sensibus, id ridens quaeque qui. Ne qui vocent ornatus molestie.
                    </p>
                    <ul id="contact-info">
                        <li>+ 61 (2) 8093 3400 / + 61 (2) 8093 3402</li>
                        <li><a href="#">info@domain.com</a>
                        </li>
                    </ul>
                </div>
                <div class="box_style_4">
                        <i class="icon_set_1_icon-57"></i>
                        <h3> Bilgi Rezervasyon<br><span>0232 555 55 55</span></h3>
                        <a href="about.html" class="btn_1 outline">Tıklayın Arayalım</a>
                </div>
            </div>
            <!-- End col-md-4 -->
        </div>
        <!-- End row -->
    </div>
    <!-- End container -->
</main>
<!-- End main -->
<?php
require view('static/footer');
?>
<!-- Specific scripts -->
<script src="<?php echo public_url('assets/validate.js');?>"></script>
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script src="<?php echo public_url('js/map_contact.js');?>"></script>
<script src="<?php echo public_url('js/infobox.js');?>"></script>
<script>
    var api_url = '<?=site_url('api')?>';
    function contact(formId){
        var data = $(formId).serialize();
//        alert(data);
        $.post(api_url + '/contact', data, function (response) {
            if (response.error){
                $('#contact-success-msg').hide();
                $('#contact-error-msg').show().html(response.error);
            } else{
                $('#contact-error-msg').hide();
                $('#contact-success-msg').show().html(response.success);
                $(formId + ' input, ' + formId + ' textarea').val('');
            }
        }, 'json');
    }
</script>
</body>

</html>
