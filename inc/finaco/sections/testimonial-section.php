<?php
/**
 * Testimonial section
 */
if ( ! function_exists( 'wpazure_companion_finaco_testimonial' ) ) :
	function wpazure_companion_finaco_testimonial() {
		
		// Get Service section data
		$HomeTestiEnable = get_theme_mod('testimonial_section_enable',true);
		$HomeTestiSectionTitle = get_theme_mod('testimonial_section_title','What');
		$HomeTestiSectionName = get_theme_mod('testimonial_section_name','THE TESTIMONIALS');
		$HomeTestiSectionSubTitle = get_theme_mod('testimonial_section_sub_title','People Say');
		$HomeTestiSectionDes = get_theme_mod('testimonial_section_description','Truested by more than 40,000+ customers for our services in more than 8+ countries.');
		// Get tesimonial one data
		$TestiOneImage = get_theme_mod('testimonial_image_one',WPAZURE_COMPANION_PLUGIN_URL .'inc/finaco/images/testimonial/test1.jpg');
		$TestiOneName = get_theme_mod('testimonial_name_one','Petrik Johnson');
		$TestiOneDesi = get_theme_mod('testimonial_desi_one','CEO John Softwares');
		$TestiOneDes = get_theme_mod('testimonial_des_one','It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.');
		// Get tesimonial Two data
		$TestiTwoImage = get_theme_mod('testimonial_image_two',WPAZURE_COMPANION_PLUGIN_URL .'inc/finaco/images/testimonial/test2.jpg');
		$TestiTwoName = get_theme_mod('testimonial_name_two','Petrik Johnson');
		$TestiTwoDesi = get_theme_mod('testimonial_desi_two','CEO John Softwares');
		$TestiTwoDes = get_theme_mod('testimonial_des_two','It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.');
	
		$TestiThreeImage = get_theme_mod('testimonial_image_three',WPAZURE_COMPANION_PLUGIN_URL .'inc/finaco/images/testimonial/test3.jpg');
		$TestiThreeName = get_theme_mod('testimonial_name_three','Petrik Johnson');
		$TestiThreeDesi = get_theme_mod('testimonial_desi_three','CEO John Softwares');
		$TestiThreeDes = get_theme_mod('testimonial_des_three','It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.');
	
	
		if($HomeTestiEnable == true){?>
		<!-- TESTIMONIAL SECTION START -->
			 <!-- Testimonials Section Start -->
        <section class="testimonials-section section-padding-100 bg-white">
            <div class="container">
               

                <div class="row position-relative testimonials-2">
                    <div class="col-12">
                        <div class="section-title text-center">  
								<?php if(!empty($HomeTestiSectionName)){?>
                            <h4 class="wow fadeInUp" data-wow-duration="0.6s"><?php echo $HomeTestiSectionName;?></h4>
								<?php } ?>
							<?php if(!empty($HomeTestiSectionTitle)){?>	
                            <h2 class="text-slider wow fadeInUp" data-wow-duration="0.8s"> 
                                <span><?php echo $HomeTestiSectionTitle;?></span>
                                <div>
                                    <ul class="flip4">
                                        <li><?php echo $HomeTestiSectionSubTitle;?></li>
                                        <li><?php echo $HomeTestiSectionSubTitle;?></li>
                                        <li><?php echo $HomeTestiSectionSubTitle;?></li>
                                        <li><?php echo $HomeTestiSectionSubTitle;?></li>
                                    </ul>
                                </div>
                            </h2>
							<?php }?>
							<?php if(!empty($HomeTestiSectionDes)){?>	
                            <p>
                                <?php echo $HomeTestiSectionDes;?>
                            </p>
							<?php }?>
                        </div>
                    </div>

                    <div class="col-12 mt-5">
                    	<div class="row">
                    		<div class="col-md-4 col-12">
                    			<div class="testi-block">
								  <?php if(!empty($TestiOneImage)){?>
                                    <div class="user-thumb"> 
										<img src="<?php echo esc_url($TestiOneImage);?>">
										 </div>
									<?php }?>
                                    <div class="top-quote-icon">
                                        <i class="fa fa-quote-right" aria-hidden="true"></i>
                                    </div>
									<?php if(!empty($TestiOneDes)){?>
                                    <p class="user-content">
                                        <?php echo $TestiOneDes;?>
                                    </p>
									<?php }?>
                                    <hr>
                                    <div class="user-info">
									<?php if(!empty($TestiOneName)){?>
                                        <h5 class="user-name"><?php echo $TestiOneName;?></h5>
									<?php } 
									if(!empty($TestiOneDesi)){?>
                                        <p class="designation">[<?php echo $TestiOneDesi;?>]</p>
									<?php }?>
                                    </div>
                                </div>
                    		</div>
                    		<div class="col-md-4 col-12 mt-md-0 mt-5">
                    			<div class="testi-block">
								  <?php if(!empty($TestiTwoImage)){?>
                                    <div class="user-thumb"> 
										<img src="<?php echo esc_url($TestiTwoImage);?>">
										 </div>
									<?php }?>
                                    <div class="top-quote-icon">
                                        <i class="fa fa-quote-right" aria-hidden="true"></i>
                                    </div>
									<?php if(!empty($TestiTwoDes)){?>
                                    <p class="user-content">
                                        <?php echo $TestiTwoDes;?>
                                    </p>
									<?php }?>
                                    <hr>
                                    <div class="user-info">
									<?php if(!empty($TestiTwoName)){?>
                                        <h5 class="user-name"><?php echo $TestiTwoName;?></h5>
									<?php } 
									if(!empty($TestiTwoDesi)){?>
                                        <p class="designation">[<?php echo $TestiTwoDesi;?>]</p>
									<?php }?>
                                    </div>
                                </div>
                    		</div>
							<div class="col-md-4 col-12 mt-md-0 mt-5">
                    			<div class="testi-block">
								  <?php if(!empty($TestiThreeImage)){?>
                                    <div class="user-thumb"> 
										<img src="<?php echo esc_url($TestiThreeImage);?>">
										 </div>
									<?php }?>
                                    <div class="top-quote-icon">
                                        <i class="fa fa-quote-right" aria-hidden="true"></i>
                                    </div>
									<?php if(!empty($TestiThreeDes)){?>
                                    <p class="user-content">
                                        <?php echo $TestiThreeDes;?>
                                    </p>
									<?php }?>
                                    <hr>
                                    <div class="user-info">
									<?php if(!empty($TestiThreeName)){?>
                                        <h5 class="user-name"><?php echo $TestiThreeName;?></h5>
									<?php } 
									if(!empty($TestiThreeDesi)){?>
                                        <p class="designation">[<?php echo $TestiThreeDesi;?>]</p>
									<?php }?>
                                    </div>
                                </div>
                    		</div>
                    	</div>
                        <!-- <div class="owl-carousel owl-theme default-nav o-hidden">
                            <div class="item">
                                
                            </div>
                           <div class="item">
                                
                            </div>
                           
                        </div> -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonials Section End -->
		
			<!-- TESTIMONIAL SECTION END --><?php 
		} 
	}

endif;

if ( function_exists( 'wpazure_companion_finaco_testimonial' ) ) {
$homepage_section_priority = apply_filters( 'wpazure_companion_homepage_section_priority', 16, 'wpazure_companion_finaco_testimonial' );
add_action( 'finaco_homepage_sections', 'wpazure_companion_finaco_testimonial', absint( $homepage_section_priority ) );

}