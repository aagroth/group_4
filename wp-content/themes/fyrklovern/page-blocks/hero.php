<!-- A hero block to display full width img -->
<div class="hero-block">
    <?php 
        $image = get_field('image');
        $size = 'large';
    if( $image ) {
        echo wp_get_attachment_image( $image, $size );
    } 
    ?>
</div>