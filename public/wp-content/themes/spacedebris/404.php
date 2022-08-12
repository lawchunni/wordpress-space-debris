<?php
/**
 * 404 template
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
            <h1>Oppps... page does not exsist. :(</h1>
            
            <p>Maybe use the navigation menu at the top to try again???</p>
            <p>Or go back <a href="/">Home</a>.</p>
        </div>
        <?php get_sidebar(); ?>
    </div>
</section>
<?php get_footer(); ?>