<?php
$args = array(
    "taxonomy" => "product_cat",
    "hide_empty" => false,
    "slug" => array("skaljackor", "understall"),
);

$categories = get_terms($args);
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
            foreach($categories as $category){
                if("Uncategorized" !== $category->name){
                    $term_link = get_term_link($category, "product_cat");
                    $term_id = $category->term_id;
                    $thumbnail_id = get_term_meta( $term_id, 'thumbnail_id', true );
                    $image = wp_get_attachment_url( $thumbnail_id );
                    ?>
                    <div class="category-inner">
                        <div class="category-image">
                            <a href="<?php echo $term_link?>">
                                <img src="<?php echo $image; ?>" alt="" width="528" height="425">
                            </a>
                        </div>
                        <div class="category-text">
                            <h2 class="category-name"><?php echo $category->name?></h2>
                            <p class="category-description"><?php echo $category->description;?></p>
                            <a class="category-link" href="<?php echo $term_link?>">Se collection</a>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
    </div>
</div>