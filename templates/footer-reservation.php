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

	$jony_reservation_title     = !empty( jony_opt( 'jony_reservation_title' ) ) ? jony_opt( 'jony_reservation_title' ) : '';
	$jony_reservation_sub_title = !empty( jony_opt( 'jony_reservation_sub_title' ) ) ? jony_opt( 'jony_reservation_sub_title' ) : '';
	$jony_reservation_btn_text  = !empty( jony_opt( 'jony_reservation_btn_text' ) ) ? jony_opt( 'jony_reservation_btn_text' ) : '';
	$jony_reservation_btn_url	  = !empty( jony_opt( 'jony_reservation_btn_url' ) ) ? jony_opt( 'jony_reservation_btn_url' ) : '';
	?>
	<div class="footer_header d-flex justify-content-between">
		<div class="footer_header_left">
			<h3><?php echo esc_html( $jony_reservation_title )?></h3>
			<p><?php echo esc_html( $jony_reservation_sub_title )?></p>
		</div>
		<div class="footer_btn">
			<a href="<?php echo esc_url( $jony_reservation_btn_url )?>" class="boxed-btn2"><?php echo esc_html( $jony_reservation_btn_text )?></a>
		</div>
	</div>