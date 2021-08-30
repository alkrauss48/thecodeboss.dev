<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package the_societea
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<!DOCTYPE html>
  <!--[if IE 8]>         <html lang="en" class="no-js ie8 lte-ie9"> <![endif]-->
  <!--[if lte IE 9]>     <html lang="en" class="no-js lte-ie9"> <![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <meta name="description" content="<?php the_post();echo get_the_excerpt(); ?>">
    <meta property="og:description" content="<?php echo get_the_excerpt(); ?>">
    <?php $og_image = CFS()->get('og_image') ? CFS()->get('og_image') : "https://thesocietea.org/dist/images/ak-ogimage.png"; ?>
    <meta property="og:image" content="<?php echo $og_image; ?>">
    <meta property="og:title" content="<?php wp_title( '|', true, 'right' ); ?>">
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php the_permalink(); ?> " />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@thecodeboss" />
    <meta name="twitter:creator" content="@thecodeboss" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimal-ui">

    <link rel="shortcut icon" href="/dist/images/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="57x57" href="/dist/images/favicon/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/dist/images/favicon/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/dist/images/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/dist/images/favicon/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/dist/images/favicon/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/dist/images/favicon/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/dist/images/favicon/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/dist/images/favicon/apple-touch-icon-152x152.png">
    <link rel="icon" type="image/png" href="/dist/images/favicon/favicon-196x196.png" sizes="196x196">
    <link rel="icon" type="image/png" href="/dist/images/favicon/favicon-160x160.png" sizes="160x160">
    <link rel="icon" type="image/png" href="/dist/images/favicon/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="/dist/images/favicon/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="/dist/images/favicon/favicon-32x32.png" sizes="32x32">
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="msapplication-TileImage" content="/dist/images/favicon/mstile-144x144.png">
    <meta name="msapplication-config" content="/dist/images/favicon/browserconfig.xml">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,800,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/dist/app.css">

    <script src="/dist/modernizr-2.7.1.min.js" type="text/javascript" charset="utf-8"></script>

    <?php if (is_singular('post')): ?>
      <!-- AdSense Config -->
      <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
      <script>
        (adsbygoogle = window.adsbygoogle || []).push({
          google_ad_client: "ca-pub-7795354071174101",
          enable_page_level_ads: true
        });
      </script>
    <?php endif; ?>
  </head>
  <body <?php body_class('m-scene'); ?>>
    <!--[if lt IE 8]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <div class="skipmenu" aria-hidden="true">
      <a href="#content" class="skipmenu__item">Skip to Main Content</a>
    </div>
    <header class="spanner sticky mini affixed">
      <div class="container-padding">
        <div class="container">
          <a href="/">
            <img src="/dist/images/ak_logo_trimmed.png" alt="The Code Boss - Home" />
          </a>
          <div class="nav-wrapper" id="navigation">
            <nav class="nav">
              <?php wp_nav_menu(array(
                'menu' => 'Main Menu',
                ));
              ?>
            </nav>
          </div>
          <div class="nav-wrapper" id="mobile-navigation">
            <nav class="nav">
              <ul>
                <li>
                  <button id="responsive-menu-icon" class="hamburger hamburger--elastic" type="button">
                    <span class="hamburger-box">
                      <span class="hamburger-inner"></span>
                    </span>
                  </button>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <aside id="content" tabindex="-1"></aside>
