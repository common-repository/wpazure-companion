<?php
/**
 * Slider section
 */
if ( ! function_exists( 'wpazure_companion_finaco_slider' ) ) :
	function wpazure_companion_finaco_slider() {
		
		
		
		
		$HomeSliderEnabled = get_theme_mod('slider_section_enable',true);
		$HomeSliderImage = get_theme_mod('slider_image',WPAZURE_COMPANION_PLUGIN_URL .'inc/finaco/images/slider/slide-1.jpg');
		$HomeSlideTitle = get_theme_mod('slider_title','Do You Need');
		$HomeSlideSubTitle = get_theme_mod('slider_sub_title','A Better Plan To Start Your Business?');
		$HomeSliderDesc = get_theme_mod('slider_discription','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. ');
		$HomeSliderButtonTxt = get_theme_mod('slider_btn_txt','Discover More');
		$HomeSliderButtonLink = get_theme_mod('slider_btn_link','#');
		$HomeSliderButtonTxt2 = get_theme_mod('slider_btn_txt2','Contact Us');
		$HomeSliderButtonLink2 = get_theme_mod('slider_btn_link2','#');
		
		$HomeSliderImage2 = get_theme_mod('slider_image2',WPAZURE_COMPANION_PLUGIN_URL .'inc/finaco/images/slider/slide-2.jpg');
		$HomeSlideTitle2 = get_theme_mod('slider_title2','Do You Need');
		$HomeSlideSubTitle2 = get_theme_mod('slider_sub_title2','A Better Plan To Start Your Business?');
		$HomeSliderDesc2 = get_theme_mod('slider_discription2','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. ');
		$HomeSliderButtonTxt2 = get_theme_mod('slider_btn_txt2','Discover More');
		$HomeSliderButtonLink2 = get_theme_mod('slider_btn_link2','#');
		$HomeSliderButtonTxt22 = get_theme_mod('slider_btn_txt22','Contact Us');
		$HomeSliderButtonLink22 = get_theme_mod('slider_btn_link22','#');
		
		
		?>
	
		<!-- MAIN SLIDER SECTION START -->
		<?php	if($HomeSliderEnabled==true){
					if(!empty($HomeSliderImage)){ ?>
					 <section class="slider-section">
      
               <div class="owl-carousel">

            <div class="owl-slide d-flex align-items-center cover">
				<div class="banner-overlay" style="background: rgba(0, 0, 0, 0.4) url(<?php echo FINACO_THEME_URI; ?>/images/slide-dot.png);"></div>
                    <div class="slider-image" style="background-image: url(<?php echo esc_url($HomeSliderImage); ?>);"></div>
                    <div class="container">
                        <div class="row d-flex align-items-center z-index-1 position-relative">
                            <div class="col-12 text-center">
                                <div class="slider-text">
									<?php if(!empty($HomeSlideTitle)){?>
										<h4 class="animated">
											<?php echo esc_html($HomeSlideTitle);?>
										</h4>
                                    <?php } ?>
									
									<?php if(!empty($HomeSlideSubTitle)){?>
											<h2 class="animated">
												<?php echo esc_html($HomeSlideSubTitle);?>
											</h2>
                                    <?php } ?>
                                  <?php if(!empty($HomeSliderDesc)){?>
                                    <p class="animated">
                                        <?php echo $HomeSliderDesc;?>
                                    </p>
								  <?php } ?>
								  <?php if(!empty($HomeSliderButtonTxt)){?>
                                    <a class="btn1 default-button animated-button button-lg bg-pink animated me-sm-3 me-2" href="<?php echo $HomeSliderButtonLink;?>" target="_blank"><?php echo $HomeSliderButtonTxt;?></a>
								  <?php }?>
								  <?php if($HomeSliderButtonTxt2){?>
                                    <a class="btn2 default-button animated-button button-lg bg-blue animated" href="<?php echo $HomeSliderButtonLink2;?>" target="_blank"><?php echo $HomeSliderButtonTxt2;?></a>
								  <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				
				
				
				
				  <div class="owl-slide d-flex align-items-center cover">
                    <div class="banner-overlay" style="background: rgba(0, 0, 0, 0.4) url(<?php echo FINACO_THEME_URI; ?>/images/slide-dot.png););"></div>
                    <div class="slider-image" style="background-image: url(<?php echo esc_url($HomeSliderImage2); ?>);"></div>
                    <div class="container">
                        <div class="row d-flex align-items-center z-index-1 position-relative">
                            <div class="col-12 text-end">
                                <div class="slider-text">
                                    <?php if(!empty($HomeSlideTitle2)){?>
										<h4 class="animated">
											<?php echo esc_html($HomeSlideTitle2);?>
										</h4>
                                    <?php } ?>
                                  <?php if(!empty($HomeSlideSubTitle2)){?>
											<h2 class="animated">
												<?php echo esc_html($HomeSlideSubTitle2);?>
											</h2>
                                    <?php } ?>
                                   <?php if(!empty($HomeSliderDesc2)){?>
                                    <p class="animated">
                                        <?php echo $HomeSliderDesc2;?>
                                    </p>
								  <?php } ?>
                                     <?php if(!empty($HomeSliderButtonTxt2)){?>
                                    <a class="btn1 default-button animated-button button-lg bg-pink animated me-sm-3 me-2" href="<?php echo $HomeSliderButtonLink2;?>" target="_blank"><?php echo $HomeSliderButtonTxt;?></a>
								  <?php }?>
								  <?php if($HomeSliderButtonTxt22){?>
                                    <a class="btn2 default-button animated-button button-lg bg-blue animated" href="<?php echo $HomeSliderButtonLink22;?>" target="_blank"><?php echo $HomeSliderButtonTxt2;?></a>
								  <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

         </div>

           
        </section>
        <!-- Slider Section End -->
				 <?php 
					}
				} ?>
		<!-- MAIN SLIDER SECTION END -->
		
		
	<?php }

endif;

if ( function_exists( 'wpazure_companion_finaco_slider' ) ) {
	
$homepage_section_priority = apply_filters( 'wpazur_companion_homepage_section_priority', 10, 'wpazure_companion_finaco_slider' );
add_action( 'finaco_homepage_sections', 'wpazure_companion_finaco_slider', absint( $homepage_section_priority ) );

}