<?php
/**
 * Project section
 */
if ( ! function_exists( 'wpazure_companion_finaco_project' ) ) :
	function wpazure_companion_finaco_project() {
	//Get section data	
	$HomeProjectEnabled = get_theme_mod('project_section_enable',true);
	$HomeProjectSectionName = get_theme_mod('project_section_name','OUR PORTFOLIO');
	$HomeProjectSectionTitle = get_theme_mod('project_section_title','Latest');
	$HomeProjectSectionSubTitle = get_theme_mod('project_section_sub_title','Case Studies');
	$HomeProjectSectionDesc = get_theme_mod('project_section_description','Incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nos-trud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.');
	// Get project data
	$HomeProjectOneImage = get_theme_mod('project_image_one',WPAZURE_COMPANION_PLUGIN_URL .'inc/finaco/images/project/project1.jpg');
	$HomeProjectOneTitle = get_theme_mod('project_title_one','Creative Image');
	$HomeProjectOneDesc = get_theme_mod('project_desc_one','<ul><li><a href="#">Finance</a></li><li><a href="#">Corporate</a></li></ul>');
	
	$HomeProjectTwoImage = get_theme_mod('project_image_two',WPAZURE_COMPANION_PLUGIN_URL .'inc/finaco/images/project/project2.jpg');
	$HomeProjectTwoTitle = get_theme_mod('project_title_two','Awesome Illustration');
	$HomeProjectTwoDesc = get_theme_mod('project_desc_two','<ul><li><a href="#">Finance</a></li><li><a href="#">Corporate</a></li></ul>');
	
	$HomeProjectThreeImage = get_theme_mod('project_image_three',WPAZURE_COMPANION_PLUGIN_URL .'inc/finaco/images/project/project3.jpg');
	$HomeProjectThreeTitle = get_theme_mod('project_title_three','3D Model');
	$HomeProjectThreeDesc = get_theme_mod('project_desc_three','<ul><li><a href="#">Finance</a></li><li><a href="#">Corporate</a></li></ul>');
	
		if($HomeProjectEnabled == true){ ?>
		<!-- PORTFOLIO SECTION START -->
			<!-- Portfolio Section Start -->
        <section class="section-padding-70 bg-white portfolio-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-12">
                        <div class="section-title text-center">
						<?php if(!empty($HomeProjectSectionName)){?>
                            <h4 class="wow fadeInUp" data-wow-duration="0.6s"><?php echo $HomeProjectSectionName;?></h4>
						<?php }?>
						<?php if(!empty($HomeProjectSectionTitle)){?>
                            <h2 class="text-slider wow fadeInUp" data-wow-duration="0.8s">
                                <span><?php echo $HomeProjectSectionTitle;?></span>
                                <div>
                                    <ul class="flip4">
                                        <li><?php echo $HomeProjectSectionSubTitle;?></li>
                                        <li><?php echo $HomeProjectSectionSubTitle;?></li>
                                        <li><?php echo $HomeProjectSectionSubTitle;?></li>
                                        <li><?php echo $HomeProjectSectionSubTitle;?></li>
                                    </ul>
                                </div>
                            </h2>
						<?php } ?>
							<?php if(!empty($HomeProjectSectionDesc)){?>
                            <p>
                                 <?php echo $HomeProjectSectionDesc;?>
                            </p>
							<?php } ?>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Filter Gallery Start -->
                <div class="row">
                    <div class="col-12">
                        <div class="row portfolio-list popup-gallery">
                            <div class="col-lg-6 col-md-6 mix portfolio-item web p-1">
                                <div class="p-item">
								<?php if(!empty($HomeProjectOneImage)){?>
												<img src="<?php echo esc_url($HomeProjectOneImage); ?>" >
												<?php } ?>
                                  
                                    <div class="modal-icon">
                                        <a href="<?php echo esc_url($HomeProjectOneImage); ?>">
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <div class="p-content">
                                       <?php if(!empty($HomeProjectOneTitle)){?>
									   <?php echo $HomeProjectOneDesc;?>
                                        <h4>
                                            <a href="#"><?php echo $HomeProjectOneTitle;?></a>
                                        </h4>
									   <?php }?>
                                    </div>
                                </div>
                            </div>
                          <div class="col-lg-3 col-md-6 mix portfolio-item design p-1">
                                <div class="p-item">
								<?php if(!empty($HomeProjectTwoImage)){?>
												<img src="<?php echo esc_url($HomeProjectTwoImage); ?>" >
												<?php } ?>
                                  
                                    <div class="modal-icon">
                                        <a href="<?php echo esc_url($HomeProjectTwoImage); ?>">
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <div class="p-content">
                                       <?php if(!empty($HomeProjectTwoTitle)){?>
									   <?php echo $HomeProjectTwoDesc;?>
                                        <h4>
                                            <a href="#"><?php echo $HomeProjectTwoTitle;?></a>
                                        </h4>
									   <?php }?>
                                    </div>
                                </div>
                            </div>
                           <div class="col-lg-3 col-md-6 mix portfolio-item design p-1">
                                <div class="p-item">
								<?php if(!empty($HomeProjectThreeImage)){?>
												<img src="<?php echo esc_url($HomeProjectThreeImage); ?>" >
												<?php } ?>
                                  
                                    <div class="modal-icon">
                                        <a href="<?php echo esc_url($HomeProjectThreeImage); ?>">
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <div class="p-content">
                                       <?php if(!empty($HomeProjectThreeTitle)){?>
									   <?php echo $HomeProjectThreeDesc;?>
                                        <h4>
                                            <a href="#"><?php echo $HomeProjectThreeTitle;?></a>
                                        </h4>
									   <?php }?>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
                <!-- Portfolio Filter Gallery End -->
            </div>
        </section>
        <!-- Portfolio Section End -->
		<?php 
		}
	}

endif;

if ( function_exists( 'wpazure_companion_finaco_project' ) ) {
$homepage_section_priority = apply_filters( 'wpazure_companion_homepage_section_priority', 14, 'wpazure_companion_finaco_project' );
add_action( 'finaco_homepage_sections', 'wpazure_companion_finaco_project', absint( $homepage_section_priority ) );

}