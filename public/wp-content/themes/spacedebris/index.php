<?php
/*
Posts Index template
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

                    <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>

                    <small>Posted on <?php the_date(); ?>.</small>

                    <?php the_excerpt(); ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <?php get_sidebar(); ?>
    </div>
</section>
<?php get_footer(); ?>