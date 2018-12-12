<?php
require view('static/head');
?>
</head>
<?php
require view('static/menu');
?>

	<main>
		<div id="position">
			<div class="container">
				<ul>
					<li><a href="<?=site_url()?>">Anasayfa</a>
					</li>
				</ul>
			</div>
		</div>
		<!-- End position -->

		<div class="container margin_30">
			<div class="row">
				<aside class="col-lg-3 add_bottom_30">

					<div class="widget">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Ara...">
							<span class="input-group-btn">
						<button class="btn btn-default" type="button" style="margin-left:0;"><i class="icon-search"></i></button>
						</span>
						</div>
						<!-- /input-group -->
					</div>
					<!-- End Search -->

					<hr>

					<div class="widget" id="cat_blog">
						<h4>KATEGORİLER</h4>
						<ul>
                            <?php foreach (Blog::Categories() as $category): ?>
                                <li>
                                    <a href="<?=site_url('blog/kategori/' . $category['category_url'])?>">
                                        <i class="icon_set_1_icon-51"></i>
                                        <?=$category['category_name'].' ('.$category['total'].')'?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
						</ul>
					</div>
					<!-- End widget -->

					<hr>

					<div class="widget">
						<h4>Recent post</h4>
						<ul class="recent_post">
							<li>
								<i class="icon-calendar-empty"></i> 16th July, 2020
								<div><a href="#">It is a long established fact that a reader will be distracted </a>
								</div>
							</li>
							<li>
								<i class="icon-calendar-empty"></i> 16th July, 2020
								<div><a href="#">It is a long established fact that a reader will be distracted </a>
								</div>
							</li>
							<li>
								<i class="icon-calendar-empty"></i> 16th July, 2020
								<div><a href="#">It is a long established fact that a reader will be distracted </a>
								</div>
							</li>
						</ul>
					</div>
					<!-- End widget -->
					<hr>
					<div class="widget tags">
						<h4>ETİKETLER</h4>
                        <?php foreach ($query2 as $row2): ?>
                            <a href="<?= $row2['tag_id'] ?>"><?= $row2['tag_name'] ?></a>
                        <?php endforeach; ?>

					</div>
					<!-- End widget -->

				</aside>
				<!-- End aside -->

				<div class="col-lg-9">
					<div class="box_style_1">
                        <?php foreach ($query as $row): ?>
						<div class="post">
							<a href="<?= site_url('blog/' . $row['post_url']) ?>" title="blog_post.html"><img src="<?php echo public_url('img/blog-3.jpg');?>" alt="Image" class="img-fluid">
							</a>
							<div class="post_info clearfix">
								<div class="post-left">
									<ul>
										<li><i class="icon-calendar-empty"></i> <span><?php echo timeConvert($row['post_date']); ?></span>
										</li>
										<li><i class="icon-inbox-alt"></i> <a href="#"><?php echo $row['category_name']; ?></a>
										</li>
										<li><i class="icon-tags"></i> Tags <a href="#">Works</a>, <a href="#">Personal</a>
										</li>
									</ul>
								</div>
								<div class="post-right"><i class="icon-comment"></i><a href="#">25 </a>
								</div>
							</div>
							<h2><?=$row['post_title']?></h2>
							<p><?=htmlspecialchars_decode($row['post_short_content'])?></p>

							<a href="blog_post.html" class="btn_1" title="<?= site_url('blog/' . $row['post_url']) ?>">Detay</a>
						</div>
						<!-- end post -->

						<hr>
                        <?php endforeach; ?>

					</div>
					<!-- end box style -->
					<hr>

                    <?php
                    if($query) {
                        if ($totalRecord > $pageLimit) { ?>
                            <nav aria-label="Page navigation">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item">
                                        <a class="page-link"
                                           href="<?= site_url('?' . $pageParam . '=' . $db->prevPage()) ?>"
                                           aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    </li>

                                    <?= $db->showPagination(site_url('?' . $pageParam . '=[page]'), 'active', true) ?>
                                    <li class="page-item">
                                        <a class="page-link"
                                           href="<?= site_url('?' . $pageParam . '=' . $db->nextPage()) ?>"
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
				<!-- End col-md-9-->
			</div>
			<!-- End row-->
		</div>
		<!-- End container -->
	</main>
	<!-- End main -->



    <?php
    require view('static/footer');
    ?>
	

</body>

</html>