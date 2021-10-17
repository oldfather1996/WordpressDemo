<?php
function landingpagebuilder_enqueue_styles() {
    $parent_style = 'parent-style'; 
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'landingpagebuilder-child-style',
    	get_stylesheet_directory_uri() . '/style.css',
    	array( $parent_style ),
    	wp_get_theme()->get('Version')
    	);
}
add_action( 'wp_enqueue_scripts', 'landingpagebuilder_enqueue_styles' );

require_once( get_stylesheet_directory() . '/inc/custom-header.php' );

/*******************************
Logo size - Change the numbers to set the prefered size
 *******************************/
function landingpagebuilder_custom_logo_setup() {
	$defaults = array(
		'height'      => 100,
		'width'       => 400,
		'flex-height' => true,
		'flex-width'  => true,
		'header-text' => array( 'site-title', 'site-description' ),
		);
	add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'landingpagebuilder_custom_logo_setup' );

add_theme_support( 'custom-logo' );


/*******************************
 Remove what we AppPage features we don't use anymore 
 *******************************/
 function landingpagebuilder_general_hideaway() {
 	unregister_sidebar( 'header_widget_right' );
 	remove_action('admin_menu', 'apppage_register_backend');
 }
 add_action('wp_loaded', 'landingpagebuilder_general_hideaway', 9);


 function landingpagebuilder_customizer_hideaway($wp_customize) {
 	$wp_customize->remove_control('header_widget_titles');
 	$wp_customize->remove_control('header_widget_text');
 	$wp_customize->remove_section('apppage_button');
 	$wp_customize->remove_control('header_widget_link');
 }
 add_action( 'customize_register', 'landingpagebuilder_customizer_hideaway', 9999 );



/*******************************************
 Theme information Page & Customizer button 
 *******************************************/

 require_once( trailingslashit( get_stylesheet_directory() ) . 'customizer-button/button/class-customize.php' );


 function landingpagebuilder_load_custom_wp_admin_style( $hook ) {
 	if ( 'appearance_page_about-landingpagebuilder' !== $hook ) {
 		return;
 	}
 	wp_enqueue_style( 'landingpagebuilder-custom-admin-css', get_template_directory_uri() . '/css/admin.css');
 }
 add_action( 'admin_enqueue_scripts', 'landingpagebuilder_load_custom_wp_admin_style' );


 add_action( 'admin_menu', 'landingpagebuilder_register_backend' );
 function landingpagebuilder_register_backend() {
 	add_theme_page( __('About LandingPageBuilder', 'landingpagebuilder'), __('LandingPageBuilder', 'landingpagebuilder'), 'edit_theme_options', 'about-landingpagebuilder.php', 'landingpagebuilder_backend');
 }

 function landingpagebuilder_backend(){ ?>
 <div class="themepage-wrapper">
 	<div class="headings-wrapper">
 		<h2><?php echo __( 'LandingPageBuilder Informaton And Support', 'landingpagebuilder')?></h2>
 		<h3><?php echo __( 'If you cant find a solution, feel free to email me at Email@vilhodesign.com', 'landingpagebuilder')?></h3>
 	</div>
 	<div class="themepage-left">
 		<div class="help-box-wrapper">
 			<a href="https://wordpress.org/support/" class="help-box" target="_blank">
 				<?php echo __( 'General WordPress Support', 'landingpagebuilder')?> 
 			</a>
 		</div>
 		<div class="help-box-wrapper">
 			<a href="http://vilhodesign.com/contact/" class="help-box" target="_blank">
 				<?php echo __( 'LandingPageBuilder Theme Support', 'landingpagebuilder')?> 
 				<span><?php echo __( 'Email@vilhodesign.com', 'landingpagebuilder')?></span>
 			</a>
 		</div>
 		<div class="help-box-wrapper">
 			<a href="http://vilhodesign.com/themes/landingpagebuilder/" class="help-box" target="_blank">
 				<?php echo __( 'LandingPageBuilder Theme Demo', 'landingpagebuilder')?>  
 			</a>
 		</div>
 		<div class="help-box-wrapper">
 			<a href="http://vilhodesign.com/themes/landingpagebuilder/" class="help-box" target="_blank">
 				<?php echo __( 'LandingPageBuilder Premium', 'landingpagebuilder')?> 
 			</a>
 		</div>
 	</div>
 </div>
 <?php }


