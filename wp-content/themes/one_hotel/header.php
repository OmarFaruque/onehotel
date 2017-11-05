<?php
/*
* One Hotel Header
*/
?>
<!DOCTYPE HTML>
<!--[if IE 6]>
<html id="ie6" lang="en-US">
  <![endif]-->
  <!--[if IE 7]>
  <html id="ie7" lang="en-US">
    <![endif]-->
    <!--[if IE 8]>
    <html id="ie8" lang="en-US">
      <![endif]-->
      <!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
      <html <?php language_attributes(); ?>>
        <!--<![endif]-->
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
        <head>
          <meta charset="<?php bloginfo( 'charset' ); ?>" />
          <title><?php
          /*
          * Print the <title> tag based on what is being viewed.
          */
          global $page, $paged;
          wp_title( '|', true, 'right' );
          // Add the blog name.
          bloginfo( 'name' );
          // Add the blog description for the home/front page.
          $site_description = get_bloginfo( 'description' );
          if ( $site_description && ( is_home() || is_front_page() ) )
          echo " | $site_description";
          // Add a page number if necessary:
          
          if ( $paged >= 2 || $page >= 2 )
          echo ' | ' . sprintf( __( 'Page %s', 'shape' ), max( $paged, $page ) );
          ?></title>
          <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
          <link rel="shortcut icon" href="favicon.ico">
          <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
          <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
          <![endif]-->
          <?php if(!empty(ch_get_option('google_analytics'))): ?>
          <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','www.google-analytics.com/analytics.html','ga');
          ga('create', '<?= ch_get_option('google_analytics'); ?>', 'slashdown.nl');
          ga('send', 'pageview');
          </script>
          <?php endif; ?>
          <?php wp_head(); ?>
        </head>
        <body <?php body_class(); ?>>
          <!-- Top header -->
          <div id="top-header">
            <div class="container">
              <div class="row">
                <div class="col-xs-6">
                  <div class="th-text pull-left">
                    <?php if(!empty(ch_get_option('email'))): ?>
                    <div class="th-item"> <a href="#"><i class="fa fa-phone"></i><?= ch_get_option('contact_number'); ?></a> </div>
                    <?php endif; ?>
                    <?php if(!empty(ch_get_option('email'))): ?>
                    <div class="th-item"> <a href="#"><i class="fa fa-envelope"></i><?= ch_get_option('email'); ?></a></div>
                    <?php endif; ?>
                  </div>
                </div>
                <div class="col-xs-6">
                  <div class="th-text pull-right">
                    <div class="th-item">
                      <div class="btn-group">
                        <button class="btn btn-default btn-xs dropdown-toggle js-activated txt-white" type="button" data-toggle="dropdown"> English <span class="caret"></span> </button>
                        <ul class="dropdown-menu txt-white">
                          <li> <a href="#">English</a> </li>
                          <li> <a href="#">Dutch</a> </li>
                        </ul>
                      </div>
                    </div>
                    <div class="th-item">
                      <div class="social-icons">
                        <?php if(!empty(ch_get_option('facebook_link'))): ?>
                        <a target="_blank" href="https://www.facebook.com/omar"><i class="fa fa-facebook"></i></a>
                        <?php endif; if(!empty(ch_get_option('google_plus'))): ?>
                        <a target="_blank" href="gplus.html"><i class="fa fa-google-plus"></i></a>
                        <?php endif; if(!empty(ch_get_option('twitter_link'))): ?>
                        <a target="_blank" href="www.twitter.html"><i class="fa fa-twitter"></i></a>
                        <?php endif; if(!empty(ch_get_option('youtube_link'))): ?>
                        <a target="_blank" href="www.youtube.html"><i class="fa fa-youtube-play"></i></a>
                        <?php endif; if(!empty(ch_get_option('instagram_link'))): ?>
                        <a target="_blank" href="www.instagram.html"><i class="fa fa-instagram"></i></a>
                        <?php endif; ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Header -->
          <header>
            <!-- Navigation -->
            <div class="navbar yamm navbar-default" id="sticky">
              <div class="container">
                <div class="navbar-header">
                  <button type="button" data-toggle="collapse" data-target="#navbar-collapse-grid" class="navbar-toggle"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                  <a href="index.html" class="navbar-brand">
                    <!-- Logo -->
                    <div id="logo">
                      <?php if(get_option('theme_logo')):  ?>
                      <img id="default-logo" src="<?= ch_get_option('logo'); ?>" alt="One Hotel" style="height:44px;">
                      <img id="retina-logo" src="<?= ch_get_option('logo'); ?>" alt="One Hotel" style="height:44px;">
                      <?php else: ?>
                      <img id="default-logo" src="<?= ch_get_option('logo'); ?>" alt="One Hotel" style="height:44px;">
                      <img id="retina-logo" src="<?= ch_get_option('logo'); ?>" alt="One Hotel" style="height:44px;">
                      <?php endif; ?>
                    </div>
                  </a> </div>
                  
                 <?php if(has_nav_menu( 'primary' )){
                     /**
                    * Displays a navigation menu
                    * @param array $args Arguments
                    */
                    $args = array(
                      'theme_location' => 'primary',
                      'menu' => '',
                      'container' => 'div',
                      'container_class' => 'navbar-collapse collapse',
                      'container_id' => 'navbar-collapse-grid',
                      'menu_class' => 'menu',
                      'menu_id' => '',
                      'echo' => true,
                      'fallback_cb' => 'wp_page_menu',
                      'before' => '',
                      'after' => '',
                      'link_before' => '',
                      'link_after' => '',
                      'items_wrap' => '<ul id = "%1$s" class = "%2$s nav navbar-nav">%3$s</ul>',
                      'depth' => 0,
                      'walker' => ''
                    );
                  
                    wp_nav_menu( $args );
                } 
              ?>
            </div>
          </div>
        </header>
        
        <!-- Revolution Slider -->
        <section class="revolution-slider">
          <?= do_shortcode('[ch_fade_slider]'); ?>
        </section>
        <!-- Reservation form -->
        <section id="reservation-form">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <?= do_shortcode( '[ch-sort-booking]' ); ?>
              </div>
            </div>
          </div>
        </section>
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              
              <div class="breadcrumb-trail breadcrumbs" itemprop="breadcrumb">
                <span class="trail-browse">Browse:</span> <span class="trail-end">Home</span>
              </div>        </div>
            </div>
        </div>