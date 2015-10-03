<!doctype html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
      <title><?php $title = wp_title('', false); echo (empty($title) ? '' : "{$title} | "); bloginfo( 'name' ); ?></title>
      <?php //wp_head(); ?>
      <!--reset styles-->
      <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/main.css" type="text/css">
      <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/inline1.css" type="text/css">
      <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/inline2.css" type="text/css">
      <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/slideshow.css" type="text/css">   
      <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/mosaic.css" type="text/css">   
      <script src="<?php bloginfo('template_directory'); ?>/js/jquery.min.js"></script> 
      <script src="<?php bloginfo('template_directory'); ?>/js/home-slider.js"></script>
      <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/icon.png">
   </head>
   <body class="main-body-light main-mask-horizontal font-family-fracture font-size-is-default logo-type-custom menu-type-fusionmenu layout-mode-responsive typography-style-light col12 option-com-content menu-links ">
      <div id="rt-page-surround">
         <div class="rt-container">
            <div id="rt-drawer">
               <div class="clear"></div>
            </div>
            <div id="rt-navigation">
               <div class="rt-headerborder"></div>
               <div class="rt-grid-3 rt-alpha">
                  <div class="rt-block2 logo-block2">
                     <a href="/" id="rt-logo2">
                        <h1><?php bloginfo( 'name' );?></h1>
                     </a>
                  </div>
               </div>
               <div class="rt-grid-9 rt-omega">
                  <div class="rt-block menu-block">
                     <div class="rt-menubar fusionmenu">
                        <ul class="menutop level1 ">
                           <li class="item101 root <?php if (is_page('home')) echo "active";?>">
                              <a class="menutab1 orphan item bullet" href="<?php echo get_permalink( get_page_by_path( 'home' ));?>" id="a-1436755117286651">
                              <span class="menu-shadow"></span>
                              <span class="menu-overlay"><span></span></span>
                              <span class="menu-text">
                              Home                                        
                              </span>
                              </a>
                           </li>
                           <?php 
                                global $post;
                                $pid = get_page_by_path( 'services' )->ID;
                                $is_true = false;
                                if(is_page()&&$post->post_parent==$pid) $is_true=true;
                           ?>
                           <li class="item108 parent root f-main-parent f-mainparent-item <?php if (is_page('services') || $is_true) echo "active";?>">
                              <a class="menutab2 daddy item bullet" href="<?php echo get_permalink( get_page_by_path( 'services' ));?>" id="a-1436755117288935">
                              <span class="menu-shadow"></span>
                              <span class="menu-overlay"><span></span></span>
                              <span class="menu-text">
                              Services                                                            <span class="daddyicon"></span>
                              </span>
                              </a>
                              <ul class="level2" style="width:140px;">
                                  <li class="item110 f-submenu-item">
                                    <a class="menutab2 orphan item bullet" href="<?php echo get_permalink( get_page_by_path( 'services/app' ));?>" style="width:116px;">
                                        <span class="menu-shadow"></span>
                                        <span class="menu-overlay"><span></span></span>
                                        <span class="menu-text">App</span>
                                    </a>
                                  </li>
                                  <li class="item113 f-submenu-item">
                                    <a class="menutab2 orphan item bullet" href="<?php echo get_permalink( get_page_by_path( 'services/web' ));?>" style="width:116px;">
                                        <span class="menu-shadow"></span>
                                        <span class="menu-overlay"><span></span></span>
                                        <span class="menu-text">Web</span>
                                    </a>
                                  </li>
<!--                                  <li class="item112 f-submenu-item">
                                    <a class="menutab2 orphan item bullet" href="<?php echo get_permalink( get_page_by_path( 'services/seo' ));?>" style="width:116px;">
                                        <span class="menu-shadow"></span>
                                        <span class="menu-overlay"><span></span></span>
                                        <span class="menu-text">SEO/SEM</span>
                                    </a>
                                  </li>-->
                              </ul>
                              <div class="clear"></div>
                           </li>
                           <?php 
                                $pid = get_page_by_path( 'portfolio' )->ID;
                                $is_true = false;
                                if(is_page()&&$post->post_parent==$pid) $is_true=true;
                           ?>
                           <li class="item114 parent root f-main-parent f-mainparent-item <?php if (is_page('portfolio') || $is_true) echo "active";?>">
                              <a class="menutab3 daddy item bullet" href="<?php echo get_permalink( get_page_by_path( 'portfolio' ));?>" id="a-1436755117291509">
                              <span class="menu-shadow"></span>
                              <span class="menu-overlay"><span></span></span>
                              <span class="menu-text">
                              Portfolios                                                            <span class="daddyicon"></span>
                              </span>
                              </a>
                              <ul class="level2" style="width:140px;">
                                  <li class="item110 f-submenu-item">
                                    <a class="menutab0 orphan item bullet" href="<?php echo get_permalink( get_page_by_path( 'portfolio/apps' ));?>" style="width:139px;">
                                        <span class="menu-shadow"></span>
                                        <span class="menu-overlay"><span></span></span>
                                        <span class="menu-text">Apps</span>
                                    </a>
                                  </li>
                                  <li class="item113 f-submenu-item">
                                    <a class="menutab0 orphan item bullet" href="<?php echo get_permalink( get_page_by_path( 'portfolio/websites' ));?>" style="width:139px;">
                                        <span class="menu-shadow"></span>
                                        <span class="menu-overlay"><span></span></span>
                                        <span class="menu-text">Websites</span>
                                    </a>
                                  </li>
<!--                                  <li class="item112 f-submenu-item">
                                    <a class="menutab0 orphan item bullet" href="<?php echo get_permalink( get_page_by_path( 'portfolio/games' ));?>" style="width:139px;">
                                        <span class="menu-shadow"></span>
                                        <span class="menu-overlay"><span></span></span>
                                        <span class="menu-text">Games</span>
                                    </a>
                                  </li>-->
                              </ul>
                              <div class="clear"></div>
                           </li>
                           <li class="item118 root <?php if (is_page('vita')) echo "active";?>">
                              <a class="menutab4 orphan item bullet" href="<?php echo get_permalink( get_page_by_path( 'vita' ));?>" id="a-1436755117293631">
                              <span class="menu-shadow"></span>
                              <span class="menu-overlay"><span></span></span>
                              <span class="menu-text">
                              About                                        
                              </span>
                              </a>
                           </li>
                           <li class="item147 <?php if (is_page('contact')) echo "active";?> root">
                              <a class="menutab5 orphan item bullet" href="<?php echo get_permalink( get_page_by_path( 'contact' ));?>" id="a-1436755117293221">
                              <span class="menu-shadow"></span>
                              <span class="menu-overlay"><span></span></span>
                              <span class="menu-text">
                              Contact
                              </span>
                              </a>
                           </li>
                        </ul>
                        <div class="fusion-pill-l" style="display: block; left: 479px; width: 80px; top: 0px;">
                           <div class="fusion-pill-r"></div>
                        </div>
                     </div>
                     <div class="clear"></div>
                  </div>
               </div>
               <div class="clear"></div>
            </div>