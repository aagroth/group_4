<?php get_header() ?>
<section class="page-store-section">
    <div class="title-content">
        <?php the_content() ?> 
    </div>
    <?php
    $stores = new WP_Query(array(
        'posts_per_page' => 9,
        'post_type' => 'wpll_store'
    ));
    ?> <div class="store-grid"> 

<?php if ( $stores->have_posts() ) : while ( $stores->have_posts() ) : $stores->the_post(); ?>
            <div class="store-grid__child">
                <h2><?php the_title() ?></h2>
                <p><?php the_field('phone'); ?></p>
                <p><?php the_field('street'); ?></p>
                <p class="post-zipcode"><?php the_field('zipcode'); ?></p>
                <p class="post-hours"><?php the_field('hours'); ?></p>
                <p><?php the_field('weekdays'); ?></p>
                <p><?php the_field('friday'); ?></p>
                <p><?php the_field('saturday'); ?></p>
                <p><?php the_field('sunday'); ?></p>
            </div>
        <?php
        endwhile;
    endif;

        wp_reset_postdata();
        ?>
    </div>
</section>

<?php get_footer() ?>