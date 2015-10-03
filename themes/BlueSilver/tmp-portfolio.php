<?php
/*
Template Name: Portfolios Page
Page ID: 
*/
get_header();
?>
            <div id="rt-transition" class="rt-visible">
                <div id="rt-showcase">
                    <div class="rt-grid-12 rt-alpha rt-omega">
                        <div class="rt-block ">
                            <div class="module-surround">
                                <div class="module-content">
                                    <div class="custom">
                                        <div class="rt-center largemargintop largemarginbottom"><span class="promo2"><strong><font><font class="">Development</font></font></strong><font><font class=""> of mobile apps, websites. </font></font></span><br> <span class="promo3"><font><?php bloginfo('name');?> provides solutions for all types of businesses ranging from small start ups to Blue Chip Companies.</font></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>                                                                                                                                      
                <div id="rt-portfolios">
                    <div class="rt-grid-12">
<!--                        <div class="rt-block">-->
<?php
    echo '<article><ul class="rha-portfolio">';
    $mypost = array( 'post_type' => 'portfolios', 'order'=>"ASC");
    $loop = new WP_Query( $mypost );
     while ( $loop->have_posts() ) : $loop->the_post();
        ?>
        <li>
            <div class="et_port">
                <a href="<?php the_permalink();?>">
                    <?php the_post_thumbnail( 'gallery-thumb' );?>
                    
                </a>
                <div class="et_overlay">
                    <a href="<?php the_permalink();?>" class="sprocket-readmore"></a>
                </div>
            </div>
            <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
            <div class="project-store-links">
                <?php if (null!=get_post_meta( get_the_ID(), 'movie_2', true)) {?>
                <a href="<?php echo esc_html(get_post_meta( get_the_ID(), 'movie_2', true ));?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/app-store.png" width="90"></a>
                <?php 
                      }
                      if (null!=get_post_meta( get_the_ID(), 'movie_3', true )) {
                ?>
                <a href="<?php echo esc_html(get_post_meta( get_the_ID(), 'movie_3', true ));?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/google-play.png" width="90"></a>
                <?php }?>
            </div>                                                                                                                                                                                         
        </li>
        <?php
    endwhile; 
    echo "</ul></article>";
?>                        
<!--                        </div>-->
                    </div>
                </div>
                <div id="rt-main" class="mb12">
                    <div class="rt-grid-12">
                        <div class="rt-block component-block">
                            <div class="component-content">
                                <div class="item-page">
                                    <div class="rt-center largemargintop largemarginbottom">
                                        <span class="promo2"><font><font>Interested? </font></font></span><br> <span class="promo3"><font><font>Contact </font></font><strong><font><font>me.</font></font></strong></span>
                                    </div>
                                    <div class="clear"> </div>
                                    <div class="rt-center"><a class="readon medmargintop" href="<?php echo get_permalink( get_page_by_path( 'contact' ));?>" target="_self"><span><font><font>Contact</font></font></span></a></div>     
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
<?php
get_footer();
?>