<?php
/**
 * Single Post template
 */
get_header();
?>
<header>
    <div class="wrapper">
        <div class="banner">
            <img src="<?= get_template_directory_uri(); ?>/images/page_header.jpg" alt="banner"/>
        </div>
    </div>
</header>

<section class="subpage">
    <div class="wrapper">
        <div class="main col col-6">
            <h1>News</h1>
            
            <?php if(have_posts()) : ?>
                <?php while(have_posts()) : ?>
                    <?php the_post(); ?>

                    <h3><?php the_title();?></h3>

                    <small>Posted on <?php the_date(); ?>.</small>

                    <br /><br />

                    <?php the_content(); ?>
                <?php endwhile; ?>
            <?php endif; ?>
            <div class="btn btn_back"><a href="/news">Back to All News</a></div>
        </div>
        <?php get_sidebar(); ?>
    </div>
</section>
<?php get_footer(); ?>