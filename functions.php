<?php
/**
 * Genesis Sample.
 *
 * This file adds functions to the Genesis Sample Theme.
 *
 * @package Genesis Sample
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://www.studiopress.com/
 */

// Starts the engine.
require_once get_template_directory() . '/lib/init.php';

// Defines the child theme (do not remove).
define( 'CHILD_THEME_NAME', 'Genesis Sample' );
define( 'CHILD_THEME_URL', 'https://www.studiopress.com/' );
define( 'CHILD_THEME_VERSION', '2.8.0' );

// Sets up the Theme.
require_once get_stylesheet_directory() . '/lib/theme-defaults.php';

add_action( 'after_setup_theme', 'genesis_sample_localization_setup' );
/**
 * Sets localization (do not remove).
 *
 * @since 1.0.0
 */
function genesis_sample_localization_setup() {

	load_child_theme_textdomain( 'genesis-sample', get_stylesheet_directory() . '/languages' );

}

// Adds helper functions.
require_once get_stylesheet_directory() . '/lib/helper-functions.php';

// Adds image upload and color select to Customizer.
require_once get_stylesheet_directory() . '/lib/customize.php';

// Includes Customizer CSS.
require_once get_stylesheet_directory() . '/lib/output.php';

// Adds WooCommerce support.
require_once get_stylesheet_directory() . '/lib/woocommerce/woocommerce-setup.php';

// Adds the required WooCommerce styles and Customizer CSS.
require_once get_stylesheet_directory() . '/lib/woocommerce/woocommerce-output.php';

// Adds the Genesis Connect WooCommerce notice.
require_once get_stylesheet_directory() . '/lib/woocommerce/woocommerce-notice.php';

/**
 * TGM Activation
 */
require_once get_stylesheet_directory() . '/inc/tgm/tgm-init.php';

/**
 * Theme Option.
 */
require_once get_stylesheet_directory() . '/inc/options-init_php.php';

add_action( 'after_setup_theme', 'genesis_child_gutenberg_support' );
/**
 * Adds Gutenberg opt-in features and styling.
 *
 * @since 2.7.0
 */
function genesis_child_gutenberg_support() { // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedFunctionFound -- using same in all child themes to allow action to be unhooked.
	require_once get_stylesheet_directory() . '/lib/gutenberg/init.php';
}

add_action( 'wp_enqueue_scripts', 'genesis_sample_enqueue_scripts_styles' );
/**
 * Enqueues scripts and styles.
 *
 * @since 1.0.0
 */
function genesis_sample_enqueue_scripts_styles() {

	wp_enqueue_style(
		'genesis-sample-fonts',
		'//fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,700',
		array(),
		CHILD_THEME_VERSION
	);

	wp_enqueue_style(
		'bootstrap',
		 get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css',
		 array(),
		CHILD_THEME_VERSION
	);

	wp_enqueue_style(
		'font-awesome', get_stylesheet_directory_uri() . '/assets/css/font-awesome.min.css',
		array(),
		CHILD_THEME_VERSION
	);

	wp_enqueue_style(
		'animate', get_stylesheet_directory_uri() . '/assets/css/animate.min.css',
		array(),
		CHILD_THEME_VERSION
	);

	wp_enqueue_style(
		'owl-carousel', get_stylesheet_directory_uri() . '/assets/css/owl.carousel.css',
		array(),
		CHILD_THEME_VERSION
	);

	wp_enqueue_style(
		'magnific-popup', get_stylesheet_directory_uri() . '/assets/css/magnific-popup.css',
		array(),
		CHILD_THEME_VERSION
	);

	wp_enqueue_style(
		'slicknav', get_stylesheet_directory_uri() . '/assets/css/slicknav.min.css',
		array(),
		CHILD_THEME_VERSION
	);

	wp_enqueue_style(
		'fs-lola-fonts', get_stylesheet_directory_uri() . '/assets/fonts/fs-styles.css',
		array(),
		CHILD_THEME_VERSION
	);

	wp_enqueue_style(
		'sfc-regular-fonts', get_stylesheet_directory_uri() . '/assets/fonts/sfc-regular-stylesheet.css',
		array(),
		CHILD_THEME_VERSION
	);
	wp_enqueue_style(
		'sfc-regular-fonts-bold', get_stylesheet_directory_uri() . '/assets/fonts/sfc-bold.css',
		array(),
		CHILD_THEME_VERSION
	);

	wp_enqueue_style(
		'sfc-regular-fonts-medium', get_stylesheet_directory_uri() . '/assets/fonts/sfc-medium.css',
		array(),
		CHILD_THEME_VERSION
	);

	wp_enqueue_style(
			'lola-regular-fonts', get_stylesheet_directory_uri() . '/assets/fonts/lola-regular.css',
			array(),
			CHILD_THEME_VERSION
	);
	wp_enqueue_style(
		'owl-theme', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css',
		array(),
		CHILD_THEME_VERSION
	);
		

	
	

	wp_enqueue_style( 'dashicons' );

	/* theme js */

	$suffix = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';
	wp_enqueue_script(
		'genesis-sample-responsive-menu',
		get_stylesheet_directory_uri() . "/js/responsive-menus{$suffix}.js",
		array( 'jquery' ),
		CHILD_THEME_VERSION,
		true
	);
	wp_localize_script(
		'genesis-sample-responsive-menu',
		'genesis_responsive_menu',
		genesis_sample_responsive_menu_settings()
	);
	wp_enqueue_script(
		'genesis-sample',
		get_stylesheet_directory_uri() . '/js/genesis-sample.js',
		array( 'jquery' ),
		CHILD_THEME_VERSION,
		true
	);
	wp_enqueue_script(
		'bootstrap', get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js',
		array( 'jquery' ),
		CHILD_THEME_VERSION,
		true
	);
	wp_enqueue_script(
		'magnific-popup', get_stylesheet_directory_uri() . '/assets/js/jquery.magnific-popup.min.js',
		array( 'jquery' ),
		CHILD_THEME_VERSION, 
		true
	);
	wp_enqueue_script(
		'owl-carousel', get_stylesheet_directory_uri() . '/assets/js/owl.carousel.min.js',
		array( 'jquery' ),
		CHILD_THEME_VERSION, 
		true
	);
	wp_enqueue_script(
		'slicknav', get_stylesheet_directory_uri() . '/assets/js/jquery.slicknav.min.js',
		array( 'jquery' ),
		CHILD_THEME_VERSION, 
		true
	);

	wp_enqueue_script(
		'theme-js', get_stylesheet_directory_uri() . '/assets/js/active.js',
		array( 'jquery' ),
		CHILD_THEME_VERSION, 
		true
	);

	
}

/**
 * Defines responsive menu settings.
 *
 * @since 2.3.0
 */
function genesis_sample_responsive_menu_settings() {

	$settings = array(
		'mainMenu'         => __( 'Menu', 'genesis-sample' ),
		'menuIconClass'    => 'dashicons-before dashicons-menu',
		'subMenu'          => __( 'Submenu', 'genesis-sample' ),
		'subMenuIconClass' => 'dashicons-before dashicons-arrow-down-alt2',
		'menuClasses'      => array(
			'combine' => array(
				'.nav-primary',
			),
			'others'  => array(),
		),
	);

	return $settings;

}

// Adds support for HTML5 markup structure.
add_theme_support( 'html5', genesis_get_config( 'html5' ) );

// Adds support for accessibility.
add_theme_support( 'genesis-accessibility', genesis_get_config( 'accessibility' ) );

// Adds viewport meta tag for mobile browsers.
add_theme_support( 'genesis-responsive-viewport' );

// Adds custom logo in Customizer > Site Identity.
add_theme_support( 'custom-logo', genesis_get_config( 'custom-logo' ) );

// Renames primary and secondary navigation menus.
add_theme_support( 'genesis-menus', genesis_get_config( 'menus' ) );

// Adds image sizes.
add_image_size( 'sidebar-featured', 75, 75, true );

// Adds support for after entry widget.
add_theme_support( 'genesis-after-entry-widget-area' );

// Adds support for 3-column footer widgets.
add_theme_support( 'genesis-footer-widgets', 3 );

// Removes header right widget area.
unregister_sidebar( 'header-right' );

// Removes secondary sidebar.
unregister_sidebar( 'sidebar-alt' );

// Removes site layouts.
genesis_unregister_layout( 'content-sidebar-sidebar' );
genesis_unregister_layout( 'sidebar-content-sidebar' );
genesis_unregister_layout( 'sidebar-sidebar-content' );

// Removes output of primary navigation right extras.
remove_filter( 'genesis_nav_items', 'genesis_nav_right', 10, 2 );
remove_filter( 'wp_nav_menu_items', 'genesis_nav_right', 10, 2 );

add_action( 'genesis_theme_settings_metaboxes', 'genesis_sample_remove_metaboxes' );
/**
 * Removes output of unused admin settings metaboxes.
 *
 * @since 2.6.0
 *
 * @param string $_genesis_admin_settings The admin screen to remove meta boxes from.
 */
function genesis_sample_remove_metaboxes( $_genesis_admin_settings ) {

	remove_meta_box( 'genesis-theme-settings-header', $_genesis_admin_settings, 'main' );
	remove_meta_box( 'genesis-theme-settings-nav', $_genesis_admin_settings, 'main' );

}

add_filter( 'genesis_customizer_theme_settings_config', 'genesis_sample_remove_customizer_settings' );
/**
 * Removes output of header and front page breadcrumb settings in the Customizer.
 *
 * @since 2.6.0
 *
 * @param array $config Original Customizer items.
 * @return array Filtered Customizer items.
 */
function genesis_sample_remove_customizer_settings( $config ) {

	unset( $config['genesis']['sections']['genesis_header'] );
	unset( $config['genesis']['sections']['genesis_breadcrumbs']['controls']['breadcrumb_front_page'] );
	return $config;

}

// Displays custom logo.
add_action( 'genesis_site_title', 'the_custom_logo', 0 );

// Repositions primary navigation menu.
remove_action( 'genesis_after_header', 'genesis_do_nav' );
add_action( 'genesis_header', 'genesis_do_nav', 12 );

// Repositions the secondary navigation menu.
remove_action( 'genesis_after_header', 'genesis_do_subnav' );
add_action( 'genesis_footer', 'genesis_do_subnav', 10 );

add_filter( 'wp_nav_menu_args', 'genesis_sample_secondary_menu_args' );
/**
 * Reduces secondary navigation menu to one level depth.
 *
 * @since 2.2.3
 *
 * @param array $args Original menu options.
 * @return array Menu options with depth set to 1.
 */
function genesis_sample_secondary_menu_args( $args ) {

	if ( 'secondary' !== $args['theme_location'] ) {
		return $args;
	}

	$args['depth'] = 1;
	return $args;

}

add_filter( 'genesis_author_box_gravatar_size', 'genesis_sample_author_box_gravatar' );
/**
 * Modifies size of the Gravatar in the author box.
 *
 * @since 2.2.3
 *
 * @param int $size Original icon size.
 * @return int Modified icon size.
 */
function genesis_sample_author_box_gravatar( $size ) {

	return 90;

}

add_filter( 'genesis_comment_list_args', 'genesis_sample_comments_gravatar' );
/**
 * Modifies size of the Gravatar in the entry comments.
 *
 * @since 2.2.3
 *
 * @param array $args Gravatar settings.
 * @return array Gravatar settings with modified size.
 */
function genesis_sample_comments_gravatar( $args ) {

	$args['avatar_size'] = 60;
	return $args;

}

function header_top_area(){
    ob_start();
    ?>
	
	<div class="header-top-area">
		<div class="container">
			<div class="row">
				<?php wp_nav_menu( array( 'theme_location' => 'header-secondary' ) ); ?>
			</div>
		</div>
	</div>
	
    <?php
    echo ob_get_clean();
}
add_action('header_top','header_top_area');


function footer_top_menu(){
    ob_start();
    ?>
	
<div class="row">
	<div class="col-lg-2 col-md-12">
		<div class="site-logo">
			<?php the_custom_logo(); ?>
		</div>
	</div>
	<div class="col-lg-10 col-md-12">
		<div class="main-menu">
			<?php wp_nav_menu( array( 'theme_location' => 'secondary-footer-menu' ) ); ?>
		</div>
	</div>
</div>
	
    <?php
    echo ob_get_clean();

}
add_action('footer_top','footer_top_menu');





function hero_area( $meta_boxes ) {
	$prefix = 'hero';

	$meta_boxes[] = array(
		'id' => 'untitled',
		'title' => esc_html__( 'Hero Area', 'genesis-sample' ),
		'post_types' => array('page' ),
		'context' => 'after_editor',
		'priority' => 'default',
		'autosave' => 'true',
		'fields' => array(
			array(
				'id' => 'hero_text',
				'name' => esc_html__( 'Hero area text', 'genesis-sample' ),
				'type' => 'wysiwyg',
				'desc' => esc_html__( 'Hero area text', 'genesis-sample' ),
			),
			array(
				'id' => 'hero_btn_link',
				'type' => 'text',
				'name' => esc_html__( 'Hero btn link', 'genesis-sample' ),
			),
			array(
			    'name'             => 'Hero Image',
			    'id'               => 'hero_image',
			    'type'             => 'image',
			    'force_delete'     => false,
			),

		),
	);

	return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'hero_area' );

function services_area( $meta_boxes ) {
	$prefix = 'serviesareahh';

	$meta_boxes[] = array(
		'id' => 'serviesarea',
		'title' => esc_html__( 'Services Area', 'genesis-sample' ),
		'post_types' => array('page' ),
		'context' => 'after_editor',
		'priority' => 'default',
		'autosave' => 'true',
		'fields' => array(
			array(
				'id' => 'services-heading',
				'name' => esc_html__( 'Services area heading', 'genesis-sample' ),
				'type' => 'wysiwyg',
				'desc' => esc_html__( 'Services area heading', 'genesis-sample' ),
			),

		),
	);

	return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'services_area' );



add_filter( 'rwmb_meta_boxes', 'meta_box_tabs_demo_register' );
function meta_box_tabs_demo_register( $meta_boxes ) {
    // 1st Meta Box
    $meta_boxes[] = array(
        'title' => 'services items',
		'id' => 'services-items',
		'post_types' => array('page'),
		'context' => 'after_editor',
		'priority' => 'high',
		'tab_style' => 'default',
		'tab_wrapper' => true,

        // List of tabs, in one of the following formats:
        // 1) key => label
        // 2) key => array( 'label' => Tab label, 'icon' => Tab icon )
        'tabs'      => array(
            'servicesone' => array(
                'label' => 'Services Box One',
                'icon'  => 'dashicons-admin-generic', // Dashicon
            ),
            'servicestwo'  => array(
                'label' => 'Services Box Two',
                'icon'  => 'dashicons-admin-generic', // Dashicon
            ),
            'servicesthree'    => array(
                'label' => 'Services Box Three',
                'icon'  => 'dashicons-admin-generic', // Custom icon, using image
            ),
        ),

        // Tab style: 'default', 'box' or 'left'. Optional
        'tab_style' => 'default',

        // Show meta box wrapper around tabs? true (default) or false. Optional
        'tab_wrapper' => true,

        'fields'    => array(

            array(
                'name' => 'Service One Image',
                'id'   => 'serviceoneimage',
                'type'             => 'image',
			    'force_delete'     => false,

                // Which tab this field belongs to? Put tab key here
                'tab'  => 'servicesone',
            ),
            array(
                'name' => 'Service One Heading',
                'id'   => 'serviceoneheading',
                'type' => 'text',

                // Which tab this field belongs to? Put tab key here
                'tab'  => 'servicesone',
            ),
            array(
                'name' => 'Service One Texts',
                'id'   => 'serviceonetexts',
                'type' => 'textarea',

                // Which tab this field belongs to? Put tab key here
                'tab'  => 'servicesone',
            ),
            array(
                'name' => 'Service One Button',
                'id'   => 'serviceonebutton',
                'type' => 'text',

                // Which tab this field belongs to? Put tab key here
                'tab'  => 'servicesone',
            ),

            // services two

            array(
                'name' => 'Service Two Image',
                'id'   => 'servicetwoeimage',
                'type' => 'image',

                // Which tab this field belongs to? Put tab key here
                'tab'  => 'servicestwo',
            ),
            array(
                'name' => 'Service Two Heading',
                'id'   => 'servicetwoheading',
                'type' => 'text',

                // Which tab this field belongs to? Put tab key here
                'tab'  => 'servicestwo',
            ),
            array(
                'name' => 'Service Two Texts',
                'id'   => 'servicetwotexts',
                'type' => 'textarea',

                // Which tab this field belongs to? Put tab key here
                'tab'  => 'servicestwo',
            ),
            array(
                'name' => 'Service Two Button',
                'id'   => 'servicetwobutton',
                'type' => 'text',

                // Which tab this field belongs to? Put tab key here
                'tab'  => 'servicestwo',
            ),
            

            // services three
            array(
                'name' => 'Service Three Image',
                'id'   => 'servicethreeeimage',
                'type' => 'image',

                // Which tab this field belongs to? Put tab key here
                'tab'  => 'servicesthree',
            ),
            array(
                'name' => 'Service Three Heading',
                'id'   => 'servicethreeheading',
                'type' => 'text',

                // Which tab this field belongs to? Put tab key here
                'tab'  => 'servicesthree',
            ),
            array(
                'name' => 'Service Three Texts',
                'id'   => 'servicethreetexts',
                'type' => 'textarea',

                // Which tab this field belongs to? Put tab key here
                'tab'  => 'servicesthree',
            ),
            array(
                'name' => 'Service Three Button',
                'id'   => 'servicethreebutton',
                'type' => 'text',

                // Which tab this field belongs to? Put tab key here
                'tab'  => 'servicesthree',
            ),
        ),
    );
    return $meta_boxes;
}


function marketing_area( $meta_boxes ) {
	$prefix = 'servicesheadings';

	$meta_boxes[] = array(
		'id' => 'servicesh',
		'title' => esc_html__( 'Marketing Text', 'genesis-sample' ),
		'post_types' => array('page' ),
		'context' => 'after_editor',
		'priority' => 'default',
		'autosave' => 'false',
		'fields' => array(
			array(
			    'name'    => 'Marketing Texts',
			    'id'      => 'marketingtexts',
			    'type'    => 'wysiwyg',
			),
			array(
                'name' => 'Marketing Button Link',
                'id'   => 'marketingbtnlink',
                'type' => 'text',
            ),
		),
	);

	return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'marketing_area' );


function website_build_area( $meta_boxes ) {
	$prefix = 'websitebuild';

	$meta_boxes[] = array(
		'id' => 'website',
		'title' => esc_html__( 'Website Build Area', 'genesis-sample' ),
		'post_types' => array('page' ),
		'context' => 'after_editor',
		'priority' => 'default',
		'autosave' => 'false',
		'fields' => array(
			array(
			    'name'    => 'Website Texts',
			    'id'      => 'website_build_text',
			    'type'    => 'wysiwyg',
			),
			array(
                'name' => 'Website Button Link',
                'id'   => 'website_btn_link',
                'type' => 'text',
            ),
			array(
                'name' => 'Website Image',
                'id'   => 'imagewebsite',
                'type' => 'image',
                'image_size'       => 'full',

            )

		),
	);

	return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'website_build_area' );



function goolge_area( $meta_boxes ) {
	$prefix = 'googlearea';

	$meta_boxes[] = array(
		'id' => 'googlearea',
		'title' => esc_html__( 'Google Area', 'genesis-sample' ),
		'post_types' => array('page' ),
		'context' => 'after_editor',
		'priority' => 'default',
		'autosave' => 'false',
		'fields' => array(
			array(
			    'name'    => 'Goolge Texts',
			    'id'      => 'goolge_text',
			    'type'    => 'wysiwyg',
			),
			array(
                'name' => 'Google Button Link',
                'id'   => 'google_btn_link',
                'type' => 'text',
            ),
			array(
                'name' => 'Google Image',
                'id'   => 'googleimage',
                'type' => 'image',
                'image_size'       => 'full',

            )

		),
	);

	return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'goolge_area' );


function addtional_area( $meta_boxes ) {
	$prefix = 'addition';

	$meta_boxes[] = array(
		'id' => 'additionarea',
		'title' => esc_html__( 'Additional Area', 'genesis-sample' ),
		'post_types' => array('page' ),
		'context' => 'after_editor',
		'priority' => 'default',
		'autosave' => 'false',
		'fields' => array(
			array(
			    'name'    => 'Additional Heading',
			    'id'      => 'addotonalheading',
			    'type'    => 'wysiwyg',
			    'raw'     => false,
			    'options' => array(
			        'textarea_rows' => 4,
			        'teeny'         => true,
			    ),
			),
			array(
			    'name'    => 'Addition Texts',
			    'id'      => 'addition_text',
			    'type'    => 'wysiwyg',
			),
			array(
                'name' => 'Addition Button Link',
                'id'   => 'addition_btn_link',
                'type' => 'text',
            ),
			array(
                'name' => 'Addition Image',
                'id'   => 'additionimage',
                'type' => 'image',
                'image_size'       => 'full',

            )

		),
	);

	return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'addtional_area' );


function social_heading( $meta_boxes ) {
	$prefix = 'socialara';

	$meta_boxes[] = array(
		'id' => 'socialh',
		'title' => esc_html__( 'Social Area', 'genesis-sample' ),
		'post_types' => array('page' ),
		'context' => 'after_editor',
		'priority' => 'default',
		'autosave' => 'false',
		'fields' => array(
			array(
			    'name'    => 'Social Heading',
			    'id'      => 'socialheading',
			    'type'    => 'wysiwyg',
			    'raw'     => false,
			    'options' => array(
			        'textarea_rows' => 4,
			        'teeny'         => true,
			    ),
			),
			array(
                'name' => 'Social Image',
                'id'   => 'socialimage',
                'type' => 'image',
                'image_size'       => 'full',

            ),
            array(
                'name' => 'Social Right Text',
                'id'   => 'socialrighttext',
                'type' => 'wysiwyg',
                'options' => array(
			        'textarea_rows' => 4,
			        'teeny'         => true,
			    ),
            ),
            array(
                'name' => 'Seo Text',
                'id'   => 'seotext',
                'type' => 'wysiwyg',
                'options' => array(
			        'textarea_rows' => 4,
			        'teeny'         => true,
			    ),
            ),

            array(
                'name' => 'Social Text',
                'id'   => 'socialtext',
                'type' => 'wysiwyg',
                'options' => array(
			        'textarea_rows' => 4,
			        'teeny'         => true,
			    ),
            ),
            array(
                'name' => 'Social Button Link',
                'id'   => 'socialbtnlink',
                'type' => 'text',

            ),
            
		),
	);

	return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'social_heading' );





function review_area( $meta_boxes ) {
	$prefix = 'reviewarea';

	$meta_boxes[] = array(
		'id' => 'review',
		'title' => esc_html__( 'Services Heading', 'genesis-sample' ),
		'post_types' => array('page' ),
		'context' => 'after_editor',
		'priority' => 'default',
		'autosave' => 'false',
		'fields' => array(
			array(
			    'name'    => 'Review Heading',
			    'id'      => 'revoewheading',
			    'type'    => 'wysiwyg',
			    'raw'     => false,
			    'options' => array(
			        'textarea_rows' => 4,
			        'teeny'         => true,
			    ),
			),
			array(
                'name' => 'Review Image One',
                'id'   => 'socialreviewimageone',
                'type' => 'image',
                'image_size'       => 'full',

            ),
            array(
                'name' => 'Review Image Two',
                'id'   => 'socialreviewimagetwo',
                'type' => 'image',
                'image_size'       => 'full',

            ),

		),
	);

	return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'review_area' );


