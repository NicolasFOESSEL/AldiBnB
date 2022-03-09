<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Aldibnb</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php wp_nav_menu([
                'theme_location' => 'header',
                'container' => false,
                'menu_class' => "navbar-nav me-auto mb-2 mb-lg-0"
            ]); ?>

            <div class="d-flex align-items-center">
                <?php if ( is_user_logged_in() ) { ?>
                <button type="button" class="btn btn-primary me-3" onclick="window.location.href = '<?php echo wp_logout_url(get_permalink()); ?>';">Déconnexion
                    <?php } else { ?>
                    <button type="button" class="btn btn-primary me-3" onclick="window.location.href = '<?php echo wp_login_url(get_permalink()); ?>';">Connexion
                        <?php } ?>
                    </button>
            </div>
            <?php get_search_form(); ?>
        </div>
    </div>
</nav>

<div class="container">
