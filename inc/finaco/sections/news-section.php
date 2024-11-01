<?php
/**
 * Testimonial section
 */
if ( ! function_exists( 'news_finaco_section' ) ) :
	function news_finaco_section() {
		
		// Get Service section data
		$HomeNewsEnable = get_theme_mod('home_new_section_enable',true);
		$HomeNewsSectionName = get_theme_mod('home_news_section_name','OUR TRENDING BLOGS');
		$HomeNewsSectiontitle = get_theme_mod('home_news_section_title','Latest');
		$HomeNewsSectionSubTitle = get_theme_mod('home_news_section_sub_title','News');
		$HomeNewsSectionDes = get_theme_mod('home_news_section_discription','Incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nos-trud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.');
		
	
		if($HomeNewsEnable == true){?>
		
		
		
		
		
		<!-- Latest News Section Start -->
        <section class="section-padding-70 bg-offwhite">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-12">
                        <div class="section-title text-center">
                            <?php if(!empty($HomeNewsSectionName)){?><h4 class="wow fadeInUp" data-wow-duration="0.6s"><?php echo $HomeNewsSectionName;?></h4>
                            
							<?php }?>
							<?php if(!empty($HomeNewsSectionTitle)){?><h2 class="text-slider wow fadeInUp" data-wow-duration="0.8s">
                                <span><?php echo $HomeNewsSectionTitle;?></span>
                                <div>
                                    <ul class="flip4">
                                        <li><?php echo $HomeNewsSectionSubTitle;?></li>
                                        <li><?php echo $HomeNewsSectionSubTitle;?></li>
                                        <li><?php echo $HomeNewsSectionSubTitle;?></li>
                                        <li><?php echo $HomeNewsSectionSubTitle;?></li>
                                    </ul>
                                </div>
                            </h2>
							<?php }?>
							<?php if(!empty($HomeNewsSectionDes)){?>
                            <p>
                                <?php echo $HomeNewsSectionDes;?>
                            </p>
							<?php }?>
                        </div>
                    </div>


                 
						<?php
                            $args = array( 'post_type' => 'post','posts_per_page' => 3,'post__not_in'=>get_option("sticky_posts")) ; 	
						query_posts( $args );
						if(query_posts( $args ))
					{	
						while(have_posts()):the_post();
					{?>
                           
                              <div class=" col-md-4 col-12">
                                <div class="post-wrapper">
                                   
									<?php echo finaco_post_thumbnail();?>
                                       
                                    <div class="post-content">
                                        <div class="post-meta">
										<?php
										echo finaco_posted_by();
										echo finaco_posted_on();
										 ?>
										 
                                        </div>
										
                                        <h2 class="post-title">
                                            <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
                                        </h2>
                                        <div class="entry-content">   
                                           	
												<p><?php echo wp_trim_words( get_the_title(), 15 ); ?></p>
                                        </div>
                                        <a href="<?php the_permalink(); ?>" class="read-more default-color-1"><?php _e('Read more','finaco');?></a>
                                    </div>
                                </div>
							</div>
                            <?php }
					endwhile;
					}
					?>   
                        
                    
                </div>
            </div>
        </section>
        <!-- Latest News Section End -->
		
		<!-- BLOG SECTION END -->
		<?php 
		} 
	}

endif;

if ( function_exists( 'news_finaco_section' ) ) {
$homepage_section_priority = apply_filters( 'wpazure_companion_homepage_section_priority', 20, 'news_finaco_section' );
add_action( 'finaco_homepage_sections', 'news_finaco_section', absint( $homepage_section_priority ) );

}