<?php 
// Block direct access
if( !defined( 'ABSPATH' ) ){
	exit( 'Direct script access denied.' );
}
/**
 * @Packge 	   : Jony
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
	$footer_big_text = 'Do you have any Project? <a href="#">Let’s Talk</a>';
	$footer_text = 'Sed eleifend sed nibh nec fringilla. Donec eu cursus sem, vitae tristique ante. Cras pretium rutrum egestas. Integer ultrices libero sed justo vehicula, eget tincidunt tortor tempus.';
	$footer_big_text = jony_opt( 'footer_big_text' ) == '' ? $footer_big_text : jony_opt( 'footer_big_text' );
	$footer_text = jony_opt( 'jony_footer_text' ) == '' ? $footer_text : jony_opt( 'jony_footer_text' );
	
	?>
	<div class="footer_top">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="lets_talk">
						<?php
							if ( $footer_big_text ) {
								echo '<h3>'.wp_kses_post(nl2br( $footer_big_text )).'</h3>';
							}
							if ( $footer_text ) {
								echo '<p>'.wp_kses_post(nl2br( $footer_text )).'</p>';
							}
						?>
					</div>
				</div>
			</div>
			<div class="row">
				<?php
					// Social profiles
					$social_opt = jony_opt('jony_social_profile_toggle');
					if ( $social_opt == true ) {
						$social_items = jony_opt('jony_social_profiles');
						if( is_array( $social_items ) && count( $social_items ) > 0 ){
							foreach ($social_items as $value) {
								echo '
								<div class="col-md-3">
									<div class="single_links d-flex justify-content-between align-items-center">
										<span>Behance</span>';
										echo '<a href="'. esc_url($value['social_url']) .'"> <i class="'. esc_attr($value['social_icon']) .'"></i> </a>';
								echo '</div></div>';
							}
						}          
					}  
				?>
			</div>
		</div>
	</div>