<div class="fullwidth-image-block">
    <?php 
        $image = get_field('image');
        $size = 'large'; 
    if( $image ) {
        echo wp_get_attachment_image( $image, $size );
    } 
    ?>
    <h2><?php the_field('title'); ?></h2>
    <p><?php the_field('description'); ?></p>
</div>