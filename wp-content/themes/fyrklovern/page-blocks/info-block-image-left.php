<div class="block-wrapper-left">
    <div class="block-left-img">
        <?php 
            $image = get_field('image');
            $size = 'full'; 
        if( $image ) {
            echo wp_get_attachment_image( $image, $size );
        } 
        ?>
    </div>
    <div class="block-right-text">
        <div class="block-text-inner">
            <h2><?php the_field('heading'); ?></h2>
            <p><?php the_field('description'); ?></p>
            <button>Läs mer</button>
        </div>
    </div>
</div>