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
	$footer_text 	    = jony_opt( 'jony_footer_text' ) == '' ? 'Esteem spirit temper too say adieus who <br> direct esteem. It esteems luckily or <br> picture placing drawing.' : jony_opt( 'jony_footer_text' );
	$brochure_url 	    = jony_opt( 'jony_footer_brochure_url' ) == '' ? '#' : jony_opt( 'jony_footer_brochure_url' );
	?>	

    <div class="download_brochure">
        <div class="container">
            <div class="bordered_1px">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="footer_logo">
                            <?php echo jony_theme_footer_logo();?>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="download_btn">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>