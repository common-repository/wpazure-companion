<?php
/**
 *  section
 */
if ( ! function_exists( 'cta_finaco_section' ) ) :
	function cta_finaco_section() {
		
		
		$HomeCtaEnabled = get_theme_mod('cta_section_enable',true);
		$HomeCtaImage = get_theme_mod('cta_bg_image',WPAZURE_COMPANION_PLUGIN_URL .'inc/finaco/images/cta.jpg');
		$HomeCtaOverlay = get_theme_mod('cta_overlay',true);
		$HomeCtaOverlayColor = get_theme_mod('cta_overlay_color','rgba(13, 15, 44, 0.9)');
		$HomeCtaTitle = get_theme_mod('cta_title','You Are Just A Click Away To Get A Unique User Experience');
		$HomeCtaDesc = get_theme_mod('cta_discription','Get Extra 60% Off When You Order Today Only');
		$HomeCtaButtonTxt = get_theme_mod('cta_btn_txt','Buy This Theme Now');
		$HomeCtaButtonLink = get_theme_mod('cta_btn_link','#');
		$HomeCtaButtonTarget = get_theme_mod('cta_btn_target',true);
		
		if($HomeCtaEnabled==true){?>
		
		
		
			<!-- Call to Action Section Start -->
        <section class="section-padding-70 bg-blue cta-section-1 with-bg">
		<?php  if($HomeCtaOverlay == true){?>
		<div class="cta-overlay" style="background: <?php echo $HomeCtaOverlayColor;?>"></div>
		<?php } ?>
            <div class="cta-image" style="background-image: url(<?php echo $HomeCtaImage;?>);"></div>
            
            <div class="container">
                <div class="row position-relative z-index-1">
                    <div class="col-xxl-8 offset-xxl-2 col-lg-10 offset-lg-1 col-12 text-center">
						<?php if(!empty($HomeCtaTitle)){?>
                        <h2 class="wow fadeInUp" data-wow-duration="0.4s"><?php echo esc_html($HomeCtaTitle);?></h2>
						<?php } ?>
                        <hr class="mt-4 mb-4">
						<?php if(!empty($HomeCtaDesc)){?>
                        <p class="wow fadeInUp" data-wow-duration="0.8s"><?php echo esc_html($HomeCtaDesc);?></p>
						<?php } ?>
						<?php if(!empty($HomeCtaButtonTxt)){?>
                        <a href="<?php echo esc_attr($HomeCtaButtonLink);?>" <?php if($HomeCtaButtonTarget == true){echo "target='_blank'";}?> class="default-button bg-pink animated-button button-lg mt-3"><?php echo esc_html($HomeCtaButtonTxt);?></a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- Call to Action Section End -->
		<?php 
		}	
		 ?>
		
	<?php }

endif;

if ( function_exists( 'cta_finaco_section' ) ) {
	
$homepage_section_priority = apply_filters( 'wpazure_companion_homepage_section_priority', 18, 'cta_finaco_section' );
add_action( 'finaco_homepage_sections', 'cta_finaco_section', absint( $homepage_section_priority ) );

}