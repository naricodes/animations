<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary">
            <?php esc_html_e('Skip to content', 'foce'); ?>
        </a>

        <header class="header-home site-header">
            <div class="container-1">
                <a class="floating" href="<?php echo esc_url(home_url('/')); ?>" rel="home" id="home-logo"><?php bloginfo('name'); ?></a>
                <div id="hamburger">
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                </div>
                <menu class="navbar">

                    <ul class="animate__animated animate__fadeInUp ">
                        <li class="a"><a href="#story">Histoire</a></li>
                        <li><a href="#characters">Personnages</a></li>
                        <li><a href="#place">Lieu</a></li>
                        <li><a href="#studio">Studio Koukaki</a></li>
                    </ul>
                    <div class="footer-logo-img">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_koukaki/studio-koukaki.png"
                            alt="studio koukaki">
                    </div>
                    <div class="images-menu">
                        <img src="http://localhost/koukaki/wp-content/uploads/2023/04/Image-logo-en-paralax.png"
                            alt="Fleur orange" class="logo_burger">
                        <img src="http://localhost/koukaki/wp-content/uploads/2023/04/orange-cat.png" alt="Chat orange"
                            class="chat orange">
                        <img src="http://localhost/koukaki/wp-content/uploads/2023/04/black-cat.png" alt="Chat noir"
                            class="chat noir">
                        <img src="http://localhost/koukaki/wp-content/uploads/2023/04/blue-cat.png" alt="Chat bleu"
                            class="chat bleu">
                        <img src="http://localhost/koukaki/wp-content/uploads/2023/04/random_flower.png"
                            alt="Fleur mauve" class="fleur rose">
                        <img src="http://localhost/koukaki/wp-content/uploads/2023/04/orchid-1.png" alt="Fleur mauve"
                            class="violette">
                        <img src="http://localhost/koukaki/wp-content/uploads/2023/04/Hibiscus-footer.png"
                            alt="Hibiscus" class="fleur hibiscus">
                        <img src="http://localhost/koukaki/wp-content/uploads/2023/04/Sunflower.png" alt="Tournesol"
                            class="fleur tournesol">
                        <img src="http://localhost/koukaki/wp-content/uploads/2023/04/fleur-orange.png"
                            alt="Fleur orange" class="fleur jaune">
                    </div>
            </div>
    </div>

    </menu>
    <script>

    </script>

    </header><!-- #masthead -->