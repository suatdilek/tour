<div class="review_strip_single">
    <img src="<?=get_gravatar($comment['comment_email'])?>" alt="Image" class="rounded-circle">
    <small> -  <?=timeConvert($comment['comment_date'])?> -</small>
    <h4><?=$comment['comment_name']?></h4>
    <p>
        <?=$comment['comment_content']?>
    </p>

</div>