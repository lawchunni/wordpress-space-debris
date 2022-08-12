<?php
/**
 * Page Template 
 */
get_header();
?>
<header>
    <div class="wrapper">
        <div class="banner">
            <img src="<?= get_template_directory_uri(); ?>/images/page_header.jpg" alt="banner" />
        </div>
    </div>
</header>

<section class="subpage">
    <div class="wrapper">
        <div class="main col col-6">
            <?php if(have_posts()) : ?>
                <?php while(have_posts()) : ?>
                    <?php the_post(); ?>
                    <h1><?php the_title(); ?></h1>
                    <div class="col_desc">
                        <?php the_content(); ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>

        <?php get_sidebar(); ?>
    </div>
</section>
<?php get_footer(); ?>