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
    <!-- end map-->
    <div id="position">
        <div class="container">
            <ul>
                <li><a href="<?=site_url()?>">Anasayfa</a>
                </li>
                <li><a href="<?=site_url('sayfa/'.$row['page_url'])?>"><?=$row["page_title"]?></a></li>
            </ul>
        </div>
    </div>
    <!-- End Position -->
    <div class="container margin_30">
        <div class="row">
            <div class="col-md-8">
                <div class="form_title">
                    <h3><strong><i class="icon-pencil"></i></strong><?=$row["page_title"]?></h3>
                </div>
                <br>
<?=htmlspecialchars_decode($row['page_content'])?>
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
<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
<script src="<?php echo public_url('rs-plugin/js/jquery.themepunch.tools.min.js');?>"></script>
<script src="<?php echo public_url('rs-plugin/js/jquery.themepunch.revolution.min.js');?>"></script>
<script src="<?php echo public_url('js/revolution_func.js');?>"></script>

<script src="<?php echo public_url('js/tabs.js');?>"></script>
<script>new CBPFWTabs( document.getElementById( 'tabs' ) );</script>
</body>

</html>
