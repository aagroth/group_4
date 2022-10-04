<div class="product-block">
    <div class="product-block__image">
        <div class="product-block__container">
         <?php $image = get_field('image');
            $size = 'medium'; 
        if( $image ) {
            echo wp_get_attachment_image( $image, $size );
        } ?>
        </div>
            
    </div>
    <div class="product-block__info">
        <div>
        <a> collection 1 </a>
        <h1> <?php the_field('title') ?> </h1>
        <p> <?php the_field('price') ?> </p>
        <p> <?php the_field('description')?> </p>
        <button>READ MORE</button>
        </div>
    </div>
</div> 
