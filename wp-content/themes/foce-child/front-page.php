<?php

get_header();
?>

<main id="primary" class="site-main">
    <section class="banner animate__animated animate__fadeIn">
        <div class="banner__background"></div>
        <video class="banner__video animate__animated animate__fadeInDown" autoplay muted loop>
            <source src="<?php echo get_stylesheet_directory_uri(); ?>/images_koukaki/Video.mp4" type="video/mp4">
        </video>
        <img class="floating_logo animate__animated animate__fadeInUp"
            src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> "
            alt="logo Fleurs d'oranger & chats errants">
    </section>
    <section id="#story" class="story animate__animated animate__ ">
        <h2 class="animate__animated animate__fadeh ">L'histoire</h2>
        <article id="" class="story__article slow on-scroll-fast">
            <p>
                <?php echo get_theme_mod('story'); ?>
            </p>
            <div>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_koukaki/sunflower_leaves.png"
                    class="after">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_koukaki/sunflower.png"
                    class="before slow on-scroll-fast">
            </div>
        </article>
        <?php
        $args = array(
            'post_type' => 'characters',
            'posts_per_page' => -1,
            'meta_key' => '_main_char_field',
            'orderby' => 'meta_value_num',
        );
        $characters_query = new WP_Query($args);
        ?>
        <article id="characters">
            <div class="main-character">
                <h3 class="animate__animated animate__fadeh">Les personnages</h3>
                <?php get_template_part('coverflow-slide'); ?>
            </div>
        </article>
        <article id="place" class=" animate__animated animate__">
            <div>
                <h3 class="animate__animated animate__fadeh">Le Lieu</h3>
                <p class="paragraph">
                    <?php echo get_theme_mod('place'); ?>
                </p>
            </div>
            <div class="clouds cloud-container">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_koukaki/big_cloud.png"
                    class="big-cloud move-left">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_koukaki/little_cloud.png"
                    class="little-cloud move-left">
            </div>
        </article>
    </section>
    <section id="studio" class="animate__animated animate__ last">
        <h2 class="animate__animated animate__fadeh animate__fadeIn">Studio Koukaki</h2>
        <div>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_koukaki/random_flower.png"
                class="before-1 slow on-scroll-fast ">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images_koukaki/flower.png"
                class="after-1 slow on-scroll-fast">
        </div>
        <div>
            <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue
                des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections
                en activité : le long métrage et le court métrage. Nous développons des films fantastiques,
                principalement autour de la culture de notre pays natal, le Japon.</p>
            <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et
                commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable
                dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise
                sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats
                errants”.</p>
        </div>
    </section>
</main><!-- #main -->
<?php
get_footer();