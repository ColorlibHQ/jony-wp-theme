<?php 
// Block direct access
if( !defined( 'ABSPATH' ) ){
	exit( 'Direct script access denied.' );
}
/**
 * @Packge     : Jony
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */



?>
<div class="col-sm-12">
	<div id="page_<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php 

		/**
		 * page content 
		 * Comments Template
		 * @Hook  jony_page_content
		 *
		 * @Hooked jony_page_content_cb
		 * 
		 *
		 */
		do_action( 'jony_page_content' );

		?>
	</div>
</div>