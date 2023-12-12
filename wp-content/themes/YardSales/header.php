<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo("charset")?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&family=Roboto:wght@500&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/style.css">
    <title>Yards Sales</title>
    <?php wp_head();?>
</head>

<body>
    <?php wp_body_open(); ?>
    <header class="encabezado">
        <div class="container-fluid gx-5 py-3">
            <div class="row">
                <div class="encabezado__hamburguesa col-2">
                    <a href="<?php echo home_url();?>">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/icon-menu.svg" alt="menu icon">
                    </a>
                </div>
                <div class="encabezado__logo col-5 col-md-2 px-2 px-md-4">
                    <a href="/">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/logo.svg" width="100%" alt="Yard Sales">
                    </a>
                </div>
                <div class="encabezado__menu col-6 col-md-5">
                <?php wp_nav_menu(
                    array(
                        "menu" => 'menu-principal'
                    )
                );?>
                </div>
                <div class="encabezado__cart col-5 col-md-1">
                    <a href="sign_in.html" class="encabezado_sign-in">
                        Sign in
                    </a>
                    <a href="#" class="encabezado__link active">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/header-empty-card.svg" alt="cart">
                    </a>
                </div>
            </div>
            <div class="encabezado__menu-responsive">
            <?php wp_nav_menu(
                    array(
                        "menu" => 'menu-responsive'
                    )
                );?>
            </div>
        </div>
    </header>