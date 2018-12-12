<footer class="revealed">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <ul>
                    <?php foreach (menu(11) as $key => $menu): ?>
                        <li>
                            <a href="<?= site_url($menu['url']) ?>"><?= $menu['title'] ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="col-md-2">
                <ul>
                    <?php foreach (menu(12) as $key => $menu): ?>
                        <li>
                            <a href="<?= site_url('blog/kategori/'.$menu['url']) ?>"><?= $menu['title'] ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="col-md-2">
                <ul>
                    <?php foreach (menu(13) as $key => $menu): ?>
                        <li>
                            <a href="<?= site_url('blog/kategori/'.$menu['url']) ?>"><?= $menu['title'] ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="col-md-2">
                <ul>
                    <?php foreach (menu(14) as $key => $menu): ?>
                        <li>
                            <a href="<?= site_url('blog/kategori/'.$menu['url']) ?>"><?= $menu['title'] ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="col-md-3">
                <ul>
                    <?php foreach (menu(15) as $key => $menu): ?>
                        <li>
                            <a href="<?= site_url('blog/kategori/'.$menu['url']) ?>"><?= $menu['title'] ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div><!-- End row -->
        <div class="row">
            <div class="col-md-12">
                <div id="social_footer">
                    <ul>
                        <?php if(setting("facebook")){ ?>
                            <li><a href="<?php echo setting("facebook"); ?>"><i class="icon-facebook"></i></a></li>
                        <?php }  if(setting("twitter")){  ?>
                            <li><a href="<?php echo setting("twitter"); ?>"><i class="icon-twitter"></i></a></li>
                        <?php }  if(setting("instagram")){  ?>
                            <li><a href="<?php echo setting("instagram"); ?>"><i class="icon-instagram"></i></a></li>
                        <?php }  if(setting("pinterest")){  ?>
                            <li><a href="<?php echo setting("pinterest"); ?>"><i class="icon-pinterest"></i></a></li>
                        <?php }  if(setting("youtube")){  ?>
                            <li><a href="<?php echo setting("youtube"); ?>"><i class="icon-youtube-play"></i></a></li>
                        <?php } ?>
                    </ul>
                    <p>© 2018</p>
                </div>
            </div>
        </div><!-- End row -->
    </div><!-- End container -->
</footer><!-- End footer -->

<div id="toTop"></div><!-- Back to top button -->

<!-- Common scripts -->
<script src="<?php echo public_url('js/jquery-2.2.4.min.js');?>"></script>
<script src="<?php echo public_url('js/common_scripts_min.js');?>"></script>
<script src="<?php echo public_url('js/functions.js');?>"></script>