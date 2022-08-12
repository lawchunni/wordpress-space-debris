<div class="aside col col-3">
    <?php foreach(sd_featured_pages() as $item) : ?>
        <div class="content">
            <h2><?=get_the_title($item)?></h2>
            <div class="col_img">
                <a href="<?=get_the_permalink($item);?>"><span><?=get_the_title($item)?></span></a>
                <?=get_the_post_thumbnail($item);?>
            </div>
        </div>
    <?php endforeach; ?>
</div>
