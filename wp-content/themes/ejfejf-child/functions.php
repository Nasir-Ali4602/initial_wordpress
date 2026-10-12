<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array(  ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

// END ENQUEUE PARENT ACTION





// USA Map Shortcode with Pins
function cst_usa_map_shortcode() {
   
      // Path to your SVG file in child theme root
    $svg_file = get_stylesheet_directory() . '/gray-map-2.svg';
    $usa_map_svg = '';

    // Check if the SVG file exists
    if ( file_exists($svg_file) ) {
        $usa_map_svg = file_get_contents($svg_file);
    } else {
        return '<p>USA Map SVG file not found in child theme root.</p>';
    }

    // Start output buffering
    ob_start(); ?>

    <div class="cst_usa_map_wrapper">
        <?php echo $usa_map_svg; // Embed SVG ?>

        <?php if( have_rows('usa_pins', 'option') ): ?>
            <div class="cst_pins_wrapper">
				
                <?php while( have_rows('usa_pins', 'option') ) : the_row(); 
                    $pin_data = get_sub_field('pin_data');
                    $pin_state = get_sub_field('pin_state');
                    $pin_image = get_sub_field('pin_image');
                ?>
                    <div class="cst_pin cst_properties" data-name="<?php echo esc_attr($pin_state); ?>">
                        <div class="cst_pin_icon" data-name="<?php echo esc_attr($pin_state); ?>"></div>
                        <div class="modal-card-popup">
                            <div class="modal-card">
                                <div class="action-panel">
                                    <div class="popup-cross-btn">
                                        <span class="hidden">Close</span>
                                    </div>
                                </div>
                                <div class="cst_property_img">
                                    <img src="<?php echo $pin_image; ?>" />
                                </div>
                                <div class="info">
                                    <div class="title"><?php echo ($pin_data); ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>

            </div>
        <?php endif; ?>

    </div>

    <?php
    // Return the buffered content
    return ob_get_clean();
}
add_shortcode('cst_usa_map', 'cst_usa_map_shortcode');