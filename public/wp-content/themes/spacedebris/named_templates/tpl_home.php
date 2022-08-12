<?php
// Template Name: Home Page Template

get_header();

?>
<header>
    <div class="wrapper">
        <h1>Bringing Space Debris Home!</h1>
        <div class="slider">
            <?php echo do_shortcode('[metaslider id="81"]'); ?>
        </div>
    </div>
</header>

<section>
    <div class="wrapper">
        <?php foreach(sd_featured_pages() as $item) : ?>
            <div class="col col-3">
                <h2><?=get_the_title($item)?></h2>
                <div class="col_img">
                    <a href="<?=get_the_permalink($item)?>">
                        <?=get_the_post_thumbnail($item);?>
                    </a>
                </div>
                <div class="col_desc">
                    <p><?=get_the_excerpt($item);?></p>
                </div>
                <div class="btn btn_go"><a href="<?=get_the_permalink($item);?>">Read More</a></div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<?php get_footer(); ?>