<?php
global $post;
if ($post->post_type != 'portfolios') {
    wp_redirect(get_home_url());
    exit;
}

get_header();
?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/jquery-anyslider.css">
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.anyslider.js"></script>
<script>
$(function () {
    $('#slider').anyslider({
        animation: 'fade',
        interval: 3000,
        reverse: false,
        showControls: true,
        startSlide: 1
    });
});
</script>
<style>
.sidebar-right .rt-block{padding-left:0}
.sidebar-left p, .sidebar-left .et_pb_text  {color:#3f3f3f;font-size:16px;}
.sidebar-left h2 {color:#333;font-size:22px;font-weight: 500;}
.sidebar-right .triangle.white li:after {top:5px;left:0;border-width:5px;border-color: transparent transparent transparent #333;}
.triangle li {padding-left:15px;}
.sidebar-right h1{font-size:28px; font-weight:500;color:#333;}
.sidebar-right li {color:#3f3f3f; font-size: 16px;}
#rt-sidebar-a {margin-bottom:30px;}
.et_pb_text {margin-bottom:35px;}
/*.sidebar-left .rt-block{margin-right:0;}*/
#slider *{
    height:100%;
}
.slide-item{
    background-color:rgb(255, 255, 255);
    background-position: center;
    background-repeat: no-repeat;
    -webkit-background-size: 100%;
    -moz-background-size: 100%;
    background-size: 100%;
    -moz-background-size: cover;
    -webkit-background-size: cover;
    background-size: cover;
}
</style>
<div id="rt-transition" class="rt-visible">                                                                                                                                                                 
    <div id="rt-main" class="mb8-sa4">
        <div class="sidebar-left rt-grid-9">
            <div class="rt-block">
                <div class="rt-block">
                    <?php the_post_thumbnail( 'featured-thumb' );?>
                    <div class="rt-block"></div>
                    <?php 
                    global $post;
                    
                    while ( have_posts() ) : the_post();
                        the_content();
                    endwhile;
                    ?>
                    <div id="slider" class="slider" style="height:385px;">
<?php 
    if (MultiPostThumbnails::has_post_thumbnail(get_post_type(), 'slide1-image')) {
        $custom = MultiPostThumbnails::get_post_thumbnail_id(get_post_type(), 'slide1-image', get_the_ID()); 
        $custom=wp_get_attachment_image_src($custom,'slide-thumb'); echo "<div class='slide-item' style='background-image:url(".$custom[0].")'></div>";
    } //MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'slide1-image', NULL,  'slide-thumb');
    if (MultiPostThumbnails::has_post_thumbnail(get_post_type(), 'slide2-image')) {
        $custom = MultiPostThumbnails::get_post_thumbnail_id(get_post_type(), 'slide2-image', get_the_ID()); 
        $custom=wp_get_attachment_image_src($custom,'slide-thumb'); echo "<div class='slide-item' style='background-image:url(".$custom[0].")'></div>";
    } //MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'slide2-image', NULL,  'slide-thumb');
    if (MultiPostThumbnails::has_post_thumbnail(get_post_type(), 'slide3-image')) {
        $custom = MultiPostThumbnails::get_post_thumbnail_id(get_post_type(), 'slide3-image', get_the_ID()); 
        $custom=wp_get_attachment_image_src($custom,'slide-thumb'); echo "<div class='slide-item' style='background-image:url(".$custom[0].")'></div>";
    } //MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'slide3-image', NULL,  'slide-thumb');
?>                        
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>    
        <div class="sidebar-right rt-grid-3">
            <div class="rt-block">
                <div class="rt-block">
                    <div id="rt-sidebar-a">
                        <?php MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'icon-image', NULL,  'icon-thumb');?>
                    </div>
                    <div class="et_pb_text">
                        <h1>Application Info</h1>
                        <ul class="triangle white nomarginbottom">
                            <li><font><font class="">Category: <?php if (null!=get_post_meta( get_the_ID(), 'movie_4', true )) echo get_post_meta( get_the_ID(), 'movie_4', true );?></font></font></li>
                            <li><font><font>Keywords: <?php if (null!=get_post_meta( get_the_ID(), 'movie_1', true )) echo get_post_meta( get_the_ID(), 'movie_1', true );?></font></font></li>
                            <li><font><font>Updated: <?php if (null!=get_post_meta( get_the_ID(), 'movie_5', true )) echo get_post_meta( get_the_ID(), 'movie_5', true );?></font></font></li>
                            <li><font><font>Version: <?php if (null!=get_post_meta( get_the_ID(), 'movie_6', true )) echo get_post_meta( get_the_ID(), 'movie_6', true );?></font></font></li>
                            <li><font><font>Size: 15.2 MB</font></font></li>
                        </ul>
                    </div>
                    <?php if (null!=get_post_meta( get_the_ID(), 'movie_2', true)) {?>
                    <a href="<?php echo esc_html(get_post_meta( get_the_ID(), 'movie_2', true ));?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/itunes.png" style="margin-bottom:18px;"></a>
                    <?php 
                          }
                          if (null!=get_post_meta( get_the_ID(), 'movie_3', true )) {
                    ?>
                    <a href="<?php echo esc_html(get_post_meta( get_the_ID(), 'movie_3', true ));?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/gplay.png" style="margin-bottom:18px;"></a>
                    <?php }
                          if (null!=get_post_meta( get_the_ID(), 'movie_7', true )) {
                    ?>
                    <a href="<?php echo esc_html(get_post_meta( get_the_ID(), 'movie_7', true ));?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/web.png" style="margin-bottom:18px;"></a>
                    <?php }?>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<?php
get_footer();
?>