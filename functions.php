// ACF Gallery Shortcode
add_shortcode('display_acf_gallery', 'acf_gallery');

function acf_gallery( $atts ) {
    if ( empty( $atts['name'] ) ) return "";

    $images = get_field( $atts['name'] );

    if( $images ) {
        ob_start(); // Start output buffering
        ?>
        <div class="acf-gallery-container">
            <?php foreach( $images as $image ): ?>
                <div class="acf-thumbnail">
                    <a href="<?php echo esc_url( $image['url'] ); ?>">
                        <img src="<?php echo esc_url( $image['sizes']['large'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>">
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
        <?php
        return ob_get_clean(); // Return the buffered content
    }

    return "";
}
