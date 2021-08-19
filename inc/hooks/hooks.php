<?php 
/**
 * @Packge 	   : Colorlib
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
	// Block direct access
	if( !defined( 'ABSPATH' ) ){
		exit( 'Direct script access denied.' );
	}

	/**
	 *
	 * Before Wrapper
	 *
	 * @Preloader
	 *
	 */
	add_action( 'jony_preloader', 'jony_site_preloader', 10 );

	/**
	 * Header
	 *
	 * @Header Menu
	 * @Header Bottom
	 * 
	 */

	add_action( 'jony_header', 'jony_header_cb', 10 );

	/**
	 * Hook for footer
	 *
	 */
	add_action( 'jony_footer', 'jony_footer_area', 10 );

	/**
	 * Hook for Blog, single, page, search, archive pages wrapper.
	 */
	add_action( 'jony_wrp_start', 'jony_wrp_start_cb', 10 );
	add_action( 'jony_wrp_end', 'jony_wrp_end_cb', 10 );
	
	/**
	 * Hook for Blog, single, search, archive pages column.
	 */
	add_action( 'jony_blog_col_start', 'jony_blog_col_start_cb', 10 );
	add_action( 'jony_blog_col_end', 'jony_blog_col_end_cb', 10 );
	
	/**
	 * Hook for blog posts thumbnail.
	 */
	add_action( 'jony_blog_posts_thumb', 'jony_blog_posts_thumb_cb', 10 );

	/**
	 * Hook for blog details wrapper.
	 */
	add_action( 'jony_blog_details_wrap_start', 'jony_blog_details_wrap_start_cb', 10 );
	add_action( 'jony_blog_details_wrap_end', 'jony_blog_details_wrap_end_cb', 10 );

	/**
	 * Hook for blog posts title.
	 */
	add_action( 'jony_blog_posts_title', 'jony_blog_posts_title_cb', 10 );

	/**
	 * Hook for blog posts meta.
	 */
	add_action( 'jony_blog_posts_meta', 'jony_blog_posts_meta_cb', 10 );

	/**
	 * Hook for blog posts excerpt.
	 */
	add_action( 'jony_blog_posts_excerpt', 'jony_blog_posts_excerpt_cb', 10 );
	// add_action( 'jony_blog_posts_excerpt', 'jony_blog_read_more_cb', 10 );

	/**
	 * Hook for blog posts info links.
	 */
	add_action( 'jony_blog_posts_info_link', 'jony_blog_posts_info_link_cb', 10 );

	/**
	 * Hook for blog posts content.
	 */
	add_action( 'jony_blog_posts_content', 'jony_blog_posts_content_cb', 10 );
	
	/**
	 * Hook for blog single post social share option.
	 */
	add_action( 'jony_blog_posts_share', 'jony_blog_posts_share_cb', 10 );

	/**
	 * Hook for blog sidebar.
	 */
	add_action( 'jony_blog_sidebar', 'jony_blog_sidebar_cb', 10 );
	
	/**
	 * Hook for blog single post meta category, tag, next - previous link and comments form.
	 */
	add_action( 'jony_blog_single_meta', 'jony_blog_single_meta_cb', 10 );
	
	/**
	 * Hook for page content.
	 */
	add_action( 'jony_page_content', 'jony_page_content_cb', 10 );
	
	
	/**
	 * Hook for 404 page.
	 */
	add_action( 'jony_fof', 'jony_fof_cb', 10 );

	

?>