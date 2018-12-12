<body>



<div class="layer"></div>
<!-- Mobile menu overlay mask -->

<!-- Header================================================== -->
<header id="plain">
    <div id="top_line">
        <div class="container">
            <div class="row">
                <div class="col-6"><i class="icon-phone"></i><strong>0045 043204434</strong></div>
                <div class="col-6">
                    <ul id="top_links">
                        <?php if (session('user_id')): ?>
                        <li><a href="<?php echo site_url('profil');?>" >Profil</a></li>
                        <li><a href="<?php echo site_url('cikis');?>" >Çıkış</a></li>
                        <?php else: ?>
                        <li><a href="<?php echo site_url('register');?>" >Kayıt</a></li>
                        <li><a href="<?php echo site_url('giris');?>" >Giriş</a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div><!-- End row -->
        </div><!-- End container-->
    </div><!-- End top line-->

    <div class="container">
        <div class="row">
            <div class="col-3">
                <div id="logo_home">
                    <h1><a href="<?php echo site_url(); ?>" title="City tours travel template">City Tours travel template</a></h1>
                </div>
            </div>
            <nav class="col-9">
                <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
                <div class="main-menu">
                    <div id="header_menu">
                        <img src="<?php echo public_url('img/logo_sticky.png');?>" width="160" height="34" alt="City tours" data-retina="true">
                    </div>
                    <a href="#" class="open_close" id="close_in"><i class="icon_set_1_icon-77"></i></a>
                    <ul>
                        <?php foreach (menu(9) as $key => $menu): ?>
                            <li class="submenu">
                                <?php if (isset($menu['submenu'])){ ?>
                                    <a href="javascript:void(0);" class="show-submenu"><?= $menu['title'] ?> <i class="icon-down-open-mini"></i></a>
                                <ul>
                                    <?php foreach ($menu['submenu'] as $k => $submenu): ?>
                                        <li><a href="<?=site_url('blog/kategori/'.$submenu['url'])?>"><?=$submenu['title']?></a></li>
                                    <?php endforeach; ?>
                                </ul>

                                <?php } else { ?>
                                    <a href="<?= site_url($menu['url']) ?>" class="show-submenu"><?= $menu['title'] ?> </a>
                                <?php } ?>
                            </li>
                        <?php endforeach; ?>

                    </ul>
                </div><!-- End main-menu -->

            </nav>
        </div>
    </div><!-- container -->
</header><!-- End Header -->