<?php
$args = array(
    'category' => array( 'skaljackor' ),
);

$products = wc_get_products( $args );
?>

<div class="category-wrapper">

    <div class="category-heading">
        <div>
            <h2>
                <?php the_field("title"); ?>
            </h2>
            <p>
                <?php the_field("description"); ?>
            </p>
        </div>
        <div>
            
        </div>
    </div>  

    <div class="category-container">  
            <?php
            foreach($products as $product){
                if("Uncategorized" !== $product->name){
                    $image = get_the_post_thumbnail( $product->id );
                    ?>
                    <div class="category-inner">
                        <div class="category-image">
                            <a href="<?php echo $product->id ?>">
                                <?php echo $image; ?>
                            </a>
                        </div>
                        <div class="category-text">
                            <h2 class="category-name"><?php echo $product->name?></h2>
                            <p class="category-description"><?php echo $product->short_description;?></p>
                            <p><?php echo $product->price;?> SEK</p>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
    </div>
</div>