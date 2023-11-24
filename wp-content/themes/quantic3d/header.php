<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  
  <title><?php wp_title('«', true, 'right'); ?> <?php bloginfo('name'); ?></title>
  <meta name="author" content="Quantic 3D">
  <meta name="description" content="Quantic 3D é uma empresa especializada em impressões 3D e prototipagem de produtos industriais. Oferecemos soluções de fabricação personalizadas e action figures sob demanda. Transformamos suas ideias em realidade tridimensional.">

  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
  
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>+
  <script src="https://unpkg.com/scrollreveal"></script>
  

  <?php wp_head(); ?>
  
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-KV8JVDH7');</script>
</head>
<body <?php body_class(); ?>>

<!-- Inicio do segundo codigo do google -->

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KV8JVDH7"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<!-- Fim do segundo codigo do google -->

<div id="top-menu">
  <nav class="navbar navbar-expand-md navbar-light fixed-top">
    <div class="container-fluid container-sm">
      <a class="navbar-brand animate__bounce" href="<?php echo esc_url(home_url('/')); ?>" rel="home">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/logo.png" alt="Quantic 3D" width="230" height="auto">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>    
      <div class="collapse navbar-collapse" id="main-menu">
        <?php
          wp_nav_menu(array(
          'theme_location' => 'main-menu',
          'container' => false,
          'menu_class' => '',
          'fallback_cb' => '__return_false',
          'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto %2$s">%3$s</ul>',
          'depth' => 2,
          'walker' => new bootstrap_5_wp_nav_menu_walker()
          ));
          if (is_user_logged_in()) {
            echo '<ul class="navbar-nav">';
            echo '<li class="nav-item"><a class="nav-link text-primary" href="' . home_url('./index.php/produtosadmin/') . '">ADMPro</a></li>';
            echo '</ul>';
          }
        ?>
      </div>
    </div>
  </nav>
</div>


