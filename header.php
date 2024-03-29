<!DOCTYPE html>
<html <?php language_attributes(); ?>

<head profile="http://gmpg.org/xfn/11">

    <title><?php echo the_title();?></title>

    <?php wp_head(); ?>

    <?php $language = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2); ?>

    <link rel="icon" href="<?php echo get_site_url(); ?>/wp-content/themes/pretalivrer/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
    <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/pretalivrer/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

    <script src="<?php echo get_site_url(); ?>/wp-content/themes/pretalivrer/components/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo get_site_url(); ?>/wp-content/themes/pretalivrer/components/js/tether.min.js"></script>
    <script src="<?php echo get_site_url(); ?>/wp-content/themes/pretalivrer/components/js/bootstrap.min.js"></script>

    <?php wp_get_archives('type=monthly&format=link'); ?>

    <?php comments_popup_script(); ?>

    <script src='https://www.google.com/recaptcha/api.js'></script>

</head>

<body>

  <?php
    $pagename = $post->post_name;
  ?>

  <script>
      $(document).ready(function () {
        liIteration = 0;
        $("#button-main-menu li").each(function(){
            liIteration++;
        });
        $("#button-main-menu").css('max-height', liIteration*40+'px');
        $("#button-main").click(function () {
            if (($("#button-main-menu").css('max-height') !== liIteration*40+'px')) {
                $("#button-main-menu").css('max-height', liIteration*40+'px');
            } else {
                $("#button-main-menu").css('max-height', '0');
            }
            
        });
      });
  </script>

<div class="header-page">
    <div class="top-navbar">
        <div class="container">
        <div class="row navbar-bloc" style="align-items: center;">
            <!-- Site logo -->
            <div class="logo col-lg-3">
                <a href="#"><img src="https://devitems.com/preview/truemart/img/logo/logo2.png%22%3E"/></a>
            </div>

            <!-- Site Searchbox -->
            <div id="site-search-bar" class="col-lg-5 no-padding" style="height: 40px;">
                <div class="input-group" style="white-space: nowrap; flex-wrap: nowrap;">
                    <input type="text" placeholder="Rechercher un article sur le site .." class="site-search-box" value="" style="height: 40px;">
                    <div class="input-group-append">
                        <button disabled="" type="button" class="btn btn-site-search-box">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Site Cart -->
            <div id="site-cart" class="col-lg-1">
                <div style="position: relative; text-align: center; cursor: pointer; width: 55px; color: black; margin-top: 20px; margin-bottom: 10px;">
                    <i class="fas fa-shopping-cart" style="color: black; font-size: 26px; margin-right: 5px;"></i>
                    <div style="background: rgb(230, 46, 4); color: white; border-radius: 50px; position: absolute; top: -10px; right: 0px; font-size: 12px; min-width: 25px; text-align: center;">
                        0
                    </div>
                </div>
            </div>

            <!-- Site Cart -->
            <div id="site-user" class="col-lg-3">
                <div class="col-lg-12" style="cursor: pointer; color: black;">
                    <div class="row" style="align-items: center;">
                        <div class="col-lg-1" style="font-size: 13px;">
                            <i class="fas fa-user" style="color: black; font-size: 26px; margin-right: 5px;"></i>
                        </div>
                        <div class="col-lg-10" style="font-size: 12px;">
                            <a href="#"><strong>Inscrivez-vous</strong></a> ou<br>connectez-vous a votre compte
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>   
    </div>         

    <div class="bottom-navbar">
        <div class="container">
            <div class="row menu-bloc">
                <div class="col-lg-3 button-main-bloc no-padding">
                    <button id="button-main" class="col-lg-12 button-main no-padding">SHOP BY CATEGORIES</button>
                    <div id="button-main-menu" class="col-lg-12 button-main-menu no-padding">
                        <ul>
                            <?php displayCategoriesMenu() ?>
                        </ul>
                    </div>
                </div>
                <div class="button-secondary">
                    <button class="col-lg-12">Home</button>
                </div>
                <div class="button-secondary">
                    <button class="col-lg-12">Livraison</button>
                </div>
                <div class="button-secondary">
                    <button class="col-lg-12">Termes légaux</button>
                </div>
                <div class="button-secondary">
                    <button class="col-lg-12">Conditions et garanties</button>
                </div>
                <div class="button-secondary">
                    <button class="col-lg-12">Qui sommes-nous ?</button>
                </div>
            </div>
        </div>
    </div>
      
  </div>

