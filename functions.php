<?php
/**
 * Asabis Consulting Services Theme Functions
 *
 * @package Asabis
 * @version 2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'ASABIS_VERSION', '2.0.0' );
define( 'ASABIS_DIR', get_template_directory() );
define( 'ASABIS_URI', get_template_directory_uri() );

/**
 * Theme setup
 */
function asabis_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo', array(
        'height'      => 80,
        'width'       => 250,
        'flex-height' => true,
        'flex-width'  => true,
    ) );
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );
    add_theme_support( 'customize-selective-refresh-widgets' );
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'responsive-embeds' );

    register_nav_menus( array(
        'primary'   => __( 'Primary Menu', 'asabis' ),
        'footer'    => __( 'Footer Menu', 'asabis' ),
    ) );
}
add_action( 'after_setup_theme', 'asabis_setup' );

/**
 * Enqueue scripts and styles
 */
function asabis_scripts() {
    // Google Fonts
    wp_enqueue_style(
        'asabis-google-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Playfair+Display:wght@400;500;600;700&display=swap',
        array(),
        null
    );

    // Font Awesome
    wp_enqueue_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css',
        array(),
        '6.5.1'
    );

    // Main stylesheet
    wp_enqueue_style(
        'asabis-main',
        ASABIS_URI . '/assets/css/main.css',
        array(),
        ASABIS_VERSION
    );

    // Theme stylesheet (required by WP)
    wp_enqueue_style(
        'asabis-style',
        get_stylesheet_uri(),
        array( 'asabis-main' ),
        ASABIS_VERSION
    );

    // Main JS
    wp_enqueue_script(
        'asabis-main',
        ASABIS_URI . '/assets/js/main.js',
        array(),
        ASABIS_VERSION,
        true
    );
}
add_action( 'wp_enqueue_scripts', 'asabis_scripts' );

/**
 * Register widget areas
 */
function asabis_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Footer Column 1', 'asabis' ),
        'id'            => 'footer-1',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Column 2', 'asabis' ),
        'id'            => 'footer-2',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Sidebar', 'asabis' ),
        'id'            => 'sidebar-1',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'asabis_widgets_init' );

/**
 * Custom walker for primary navigation
 */
class Asabis_Nav_Walker extends Walker_Nav_Menu {
    public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $classes[] = 'nav-item';
        if ( in_array( 'current-menu-item', $classes ) ) {
            $classes[] = 'active';
        }
        $class_names = join( ' ', array_filter( $classes ) );
        $output .= '<li class="' . esc_attr( $class_names ) . '">';
        $attributes = ! empty( $item->url ) ? ' href="' . esc_attr( $item->url ) . '"' : '';
        $attributes .= ' class="nav-link"';
        $output .= '<a' . $attributes . '>' . esc_html( $item->title ) . '</a>';
    }
}

/**
 * Customizer settings
 */
function asabis_customize_register( $wp_customize ) {
    // Hero Section
    $wp_customize->add_section( 'asabis_hero', array(
        'title'    => __( 'Hero Section', 'asabis' ),
        'priority' => 30,
    ) );

    $wp_customize->add_setting( 'hero_heading', array(
        'default'           => 'Your Trusted Partner in Accounting & Financial Excellence',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'hero_heading', array(
        'label'   => __( 'Hero Heading', 'asabis' ),
        'section' => 'asabis_hero',
        'type'    => 'text',
    ) );

    $wp_customize->add_setting( 'hero_text', array(
        'default'           => 'At Asabis, we pride ourselves in providing hands-on training to individuals seeking to enhance their skills and competence, thus improving their employability and to business owners who wish to take control of their day to day operations with quality.',
        'sanitize_callback' => 'wp_kses_post',
    ) );
    $wp_customize->add_control( 'hero_text', array(
        'label'   => __( 'Hero Text', 'asabis' ),
        'section' => 'asabis_hero',
        'type'    => 'textarea',
    ) );

    // Contact Info
    $wp_customize->add_section( 'asabis_contact', array(
        'title'    => __( 'Contact Information', 'asabis' ),
        'priority' => 35,
    ) );

    $wp_customize->add_setting( 'contact_phone', array(
        'default'           => '+1 587-879-5183',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'contact_phone', array(
        'label'   => __( 'Phone Number', 'asabis' ),
        'section' => 'asabis_contact',
        'type'    => 'text',
    ) );

    $wp_customize->add_setting( 'contact_email', array(
        'default'           => 'info@asabis.ca',
        'sanitize_callback' => 'sanitize_email',
    ) );
    $wp_customize->add_control( 'contact_email', array(
        'label'   => __( 'Email Address', 'asabis' ),
        'section' => 'asabis_contact',
        'type'    => 'email',
    ) );

    $wp_customize->add_setting( 'contact_address', array(
        'default'           => 'Edmonton, Alberta, Canada',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'contact_address', array(
        'label'   => __( 'Address', 'asabis' ),
        'section' => 'asabis_contact',
        'type'    => 'text',
    ) );

    $wp_customize->add_setting( 'contact_hours', array(
        'default'           => 'Monday – Friday 8:30 AM – 5:00 PM',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'contact_hours', array(
        'label'   => __( 'Business Hours', 'asabis' ),
        'section' => 'asabis_contact',
        'type'    => 'text',
    ) );

    $wp_customize->add_setting( 'talent_email', array(
        'default'           => 'talent@asabis.ca',
        'sanitize_callback' => 'sanitize_email',
    ) );
    $wp_customize->add_control( 'talent_email', array(
        'label'   => __( 'Talent/Careers Email', 'asabis' ),
        'section' => 'asabis_contact',
        'type'    => 'email',
    ) );
}
add_action( 'customize_register', 'asabis_customize_register' );

/**
 * Helper to get customizer value with default
 */
function asabis_get_option( $key, $default = '' ) {
    return get_theme_mod( $key, $default );
}
