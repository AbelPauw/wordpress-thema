<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- De onderstaande regel code gebruikt de WordPress-functies bloginfo() welke de naam en de omschrijving van de applicatie ophaalt -->
    <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>

    <!-- De onderstaande regel code gebruikt de WordPress-functie get_stylesheet_uri() om de URL van het huidige thema's style.css-bestand op te halen en dit te koppelen aan het stijlblad van je website. -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

</head>

<body>
    <header>

        <nav>
            <div class="title">
                <figure class="wp-block-image size-full is-resized"><img src="http://localhost/wordpress-theme/wordpress-6.2-nl_NL/wordpress/wp-content/uploads/2023/06/transp-thyla.png" alt="" class="wp-image-18" width="126" height="106" /></figure>
                <h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                <?php
                wp_nav_menu(array('theme_location' => 'primary', 'container' => 'nav', 'container_class' => 'site-navigation'));
                ?>
            </div>
        </nav>
        <div class="attention">
            <h2>Lees onze meest recente posts</h2>
            <a href="../wordpress/2023/06/16/de-voordelen-van-regelmatige-lichaamsbeweging/">lees meer</a>
        </div>
    </header>

    <main>
        <!-- De onderstaande regels code kijkt of en hoeveel posts er zijn en plaatst deze op de pagina.  -->
        <?php
        if (have_posts()) :
            while (have_posts()) :
                the_post();
        ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>
                </article>
            <?php
            endwhile;
        else :
            ?>
            <p>Geen berichten gevonden.</p>
        <?php endif; ?>
    </main>

    <footer>
        <!-- Voeg hier je footerinhoud toe -->
        <div class="navigation">
            <h5>navigation:</h5>
            <?php
            wp_nav_menu(array('theme_location' => 'primary', 'container' => 'nav', 'container_class' => 'site-navigation'));
            ?>
        </div>
        <div class="coppyright">
            <h5>coppyright:</h5>
            <p>© 2023 - Abel Pauw</p>
        </div>
    </footer>
</body>

</html>