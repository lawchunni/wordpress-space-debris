<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name')?></title>
    
    <?php wp_head() ?>
</head>
<body <?php body_class(); ?>>
    <nav>
        <div class="wrapper">
            <div class="logo">
                <a href="/">
                    <img src="<?= get_template_directory_uri(); ?>/images/space_debris_logo.png" alt="space_debris_logo"/>
                </a>
            </div>
            <a class="hamburger_menu" href=":javascript;">
                <img src="<?= get_template_directory_uri()?>/images/menu-icon.png" alt="hamburger_menu" />
            </a>

            <a class="close_btn" href=":javascript;"></a>

            <?= wp_nav_menu(['menu' => 'main']); ?>
        </div>
    </nav>

    <div class="transparent_bg"></div>