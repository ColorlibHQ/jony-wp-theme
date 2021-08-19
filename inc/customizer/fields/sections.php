<?php 
/**
 * @Packge     : Jony
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 * Customizer panels and sections
 *
 */

/***********************************
 * Register customizer panels
 ***********************************/

$panels = array(
    /**
     * Theme Options Panel
     */
    array(
        'id'   => 'jony_theme_options_panel',
        'args' => array(
            'priority'       => 0,
            'capability'     => 'edit_theme_options',
            'theme_supports' => '',
            'title'          => esc_html__( 'Theme Options', 'jony' ),
        ),
    )
);


/***********************************
 * Register customizer sections
 ***********************************/


$sections = array(

    /**
     * General Section
     */
    array(
        'id'   => 'jony_general_section',
        'args' => array(
            'title'    => esc_html__( 'General', 'jony' ),
            'panel'    => 'jony_theme_options_panel',
            'priority' => 1,
        ),
    ),

    /**
     * Social Profiles Section
     */
    array(
        'id'   => 'jony_social_section',
        'args' => array(
            'title'    => esc_html__( 'Social Profiles', 'jony' ),
            'panel'    => 'jony_theme_options_panel',
            'priority' => 2,
        ),
    ),
    
    /**
     * Header Section
     */
    array(
        'id'   => 'jony_header_section',
        'args' => array(
            'title'    => esc_html__( 'Header', 'jony' ),
            'panel'    => 'jony_theme_options_panel',
            'priority' => 3,
        ),
    ),

    /**
     * Blog Section
     */
    array(
        'id'   => 'jony_blog_section',
        'args' => array(
            'title'    => esc_html__( 'Blog', 'jony' ),
            'panel'    => 'jony_theme_options_panel',
            'priority' => 4,
        ),
    ),

    /**
     * Reservation Section
     */
    array(
        'id'   => 'jony_reservation_section',
        'args' => array(
            'title'    => esc_html__( 'Reservation or Query Settings', 'jony' ),
            'panel'    => 'jony_theme_options_panel',
            'priority' => 5,
        ),
    ),

    /**
     * Instagram Section
     */
    array(
        'id'   => 'jony_instagram_section',
        'args' => array(
            'title'    => esc_html__( 'Instagram Settings', 'jony' ),
            'panel'    => 'jony_theme_options_panel',
            'priority' => 6,
        ),
    ),


    /**
     * 404 Page Section
     */
    array(
        'id'   => 'jony_fof_section',
        'args' => array(
            'title'    => esc_html__( '404 Page', 'jony' ),
            'panel'    => 'jony_theme_options_panel',
            'priority' => 7,
        ),
    ),

    /**
     * Footer Section
     */
    array(
        'id'   => 'jony_footer_section',
        'args' => array(
            'title'    => esc_html__( 'Footer Page', 'jony' ),
            'panel'    => 'jony_theme_options_panel',
            'priority' => 8,
        ),
    ),



);


/***********************************
 * Add customizer elements
 ***********************************/
$collection = array(
    'panel'   => $panels,
    'section' => $sections,
);

Epsilon_Customizer::add_multiple( $collection );

?>