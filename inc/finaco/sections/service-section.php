<?php
/**
 * Service section
 */
if ( ! function_exists( 'wpazure_companion_finaco_service' ) ) :
	function wpazure_companion_finaco_service() {
		// Get Service section data
		$HomeServiceEnabled = get_theme_mod('service_section_enable',true);
		$HomeServiceSectionName = get_theme_mod('service_section_name','OUR SERVICES');
		$HomeServiceSectionTitle = get_theme_mod('service_section_title','Services');
		$HomeServiceSectionSubTitle = get_theme_mod('service_section_sub_title','We Offer');
		$HomeServiceSectionDesc = get_theme_mod('service_section_discription','It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.');
		
		// Get Service one data
		$HomeServiceOneIcon = get_theme_mod('service_one_icon','fa-pie-chart');
		$HomeServiceOneTitle = get_theme_mod('service_one_title','Market Analysis');
		$HomeServiceOneDesc = get_theme_mod('service_one_desc','laoreet Pellentesque molestie laoreet laoreet.');
		$HomeServiceOneButtonText = get_theme_mod('service_one_btn_text','Read more');
		$HomeServiceOneButtonLink = get_theme_mod('service_one_btn_link','#');
		$HomeServiceOneButtonTarget = get_theme_mod('service_one_btn_tab',false);
		
		// Get Service Two data
		$HomeServiceTwoIcon = get_theme_mod('service_two_icon','fa-line-chart');
		$HomeServiceTwoTitle = get_theme_mod('service_two_title','Growth strategies');
		//$HomeServiceTwoTitle = get_theme_mod('service_two_title','service_section_sub_title');
		$HomeServiceTwoDesc = get_theme_mod('service_two_desc','laoreet Pellentesque molestie laoreet laoreet.');
		$HomeServiceTwoButtonText = get_theme_mod('service_two_btn_text','Read more');
		$HomeServiceTwoButtonLink = get_theme_mod('service_two_btn_link','#');
		$HomeServiceTwoButtonTarget = get_theme_mod('service_two_btn_tab',false);
		
		// Get Service Three data
		$HomeServiceThreeIcon = get_theme_mod('service_three_icon','fa-users');
		$HomeServiceThreeTitle = get_theme_mod('service_three_title','Employee Benefits');
		$HomeServiceThreeDesc = get_theme_mod('service_three_desc','laoreet Pellentesque molestie laoreet laoreet.');
		$HomeServiceThreeButtonText = get_theme_mod('service_three_btn_text','Read more');
		$HomeServiceThreeButtonLink = get_theme_mod('service_three_btn_link','#');
		$HomeServiceThreeButtonTarget = get_theme_mod('service_three_btn_tab',false);
		
	?>
	
	<!-- SERVICES SECTION START --><?php
	if($HomeServiceEnabled==true){ ?>
		
		<!-- Services Section Start -->
        <section class="service-section section-padding-70 bg-offwhite ">
            <div class="container">
                <div class="row">
					<?php if(!empty($HomeServiceSectionTitle) || !empty($HomeServiceSectionDesc)){?>
                    <div class="col-lg-8 offset-lg-2 col-12">
                        <div class="section-title text-center">
						<?php if(!empty($HomeServiceSectionName)){?>
                            <h4 class="wow fadeInUp" data-wow-duration="0.6s"><?php echo $HomeServiceSectionName;?> </h4>
						<?php }?>
						
                            <h2 class="text-slider wow fadeInUp" data-wow-duration="0.8s">
                                <span><?php echo $HomeServiceSectionTitle;?></span>
                                <div>
                                    <ul class="flip4">
                                        <li><?php echo $HomeServiceSectionSubTitle;?></li>
                                        <li><?php echo $HomeServiceSectionSubTitle;?></li>
                                        <li><?php echo $HomeServiceSectionSubTitle;?></li>
                                        <li><?php echo $HomeServiceSectionSubTitle;?></li>
                                    </ul>
                                </div>
                            </h2>
							<?php if(!empty($HomeServiceSectionDesc)){?>
                            <p>
                                <?php echo $HomeServiceSectionDesc;?> 
                            </p>
							<?php }?>
                        </div>
                    </div>
					<?php } ?>
                    <div class="service-one col-md-4 col-12">
                        <div class="service-1 wow fadeInRight" data-wow-duration="0.4s">
						<?php if(!empty($HomeServiceOneIcon)){?>
                            <div class="s-icon">
                                <i class="fa <?php echo esc_attr($HomeServiceOneIcon);?>" aria-hidden="true"></i>
                            </div>
						<?php } if(!empty($HomeServiceOneTitle)){?>
                            <h4><?php echo $HomeServiceOneTitle;?></h4>
						<?php } if(!empty($HomeServiceOneDesc)){?>
                            <p>
                               <?php echo esc_html($HomeServiceOneDesc);?>
                            </p>
						<?php } if(!empty($HomeServiceOneButtonText)){?>
						
							<a href="<?php echo esc_attr($HomeServiceOneButtonLink); ?>" <?php  if($HomeServiceOneButtonTarget == true){echo "target='_blank'";}?> class="read-more default-color-1"><?php echo esc_html($HomeServiceOneButtonText);?> </a>
						<?php }?>
                           
                        </div>
                    </div>
                   <div class="service-two col-md-4 col-12">
                        <div class="service-1 wow fadeInRight" data-wow-duration="0.4s">
						<?php if(!empty($HomeServiceTwoIcon)){?>
                            <div class="s-icon">
                                <i class="fa <?php echo esc_attr($HomeServiceTwoIcon);?>" aria-hidden="true"></i>
                            </div>
						<?php } if(!empty($HomeServiceTwoTitle)){?>
                            <h4><?php echo $HomeServiceTwoTitle;?></h4>
						<?php } if(!empty($HomeServiceTwoDesc)){?>
                            <p>
                               <?php echo esc_html($HomeServiceTwoDesc);?>
                            </p>
						<?php } if(!empty($HomeServiceTwoButtonText)){?>
						
							<a href="<?php echo esc_attr($HomeServiceTwoButtonLink); ?>" <?php  if($HomeServiceTwoButtonTarget == true){echo "target='_blank'";}?> class="read-more default-color-1"><?php echo esc_html($HomeServiceTwoButtonText);?> </a>
						<?php }?>
                           
                        </div>
                    </div>
                     <div class="service-three col-md-4 col-12">
                        <div class="service-1 wow fadeInRight" data-wow-duration="0.4s">
						<?php if(!empty($HomeServiceThreeIcon)){?>
                            <div class="s-icon">
                                <i class="fa <?php echo esc_attr($HomeServiceThreeIcon);?>" aria-hidden="true"></i>
                            </div>
						<?php } if(!empty($HomeServiceThreeTitle)){?>
                            <h4><?php echo $HomeServiceThreeTitle;?></h4>
						<?php } if(!empty($HomeServiceThreeDesc)){?>
                            <p>
                               <?php echo esc_html($HomeServiceThreeDesc);?>
                            </p>
						<?php } if(!empty($HomeServiceThreeButtonText)){?>
						
							<a href="<?php echo esc_attr($HomeServiceThreeButtonLink); ?>" <?php  if($HomeServiceThreeButtonTarget == true){echo "target='_blank'";}?> class="read-more default-color-1"><?php echo esc_html($HomeServiceThreeButtonText);?> </a>
						<?php }?>
                           
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- Services Section End -->
	<?php 
	}
		?>
		<!-- SERVICES SECTION END -->
		
		
	<?php }

endif;

if ( function_exists( 'wpazure_companion_finaco_service' ) ) {
$homepage_section_priority = apply_filters( 'wpazure_companion_homepage_section_priority', 12, 'wpazure_companion_finaco_service' );
add_action( 'finaco_homepage_sections', 'wpazure_companion_finaco_service', absint( $homepage_section_priority ) );

}