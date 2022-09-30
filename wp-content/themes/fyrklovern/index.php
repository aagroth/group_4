<?php $page_title = get_the_title(get_option('page_for_posts', true)); ?>
<?php $page_for_blog = get_option('page_for_posts'); ?>
<?php $field_value = get_field('text', $page_for_blog); ?> 
<?php $image = get_field('image', $page_for_blog); ?>

<?php get_header() ?>
<div class="fullwidth-image-block">
    <img src ="<?php echo $image ?>" />
</div>
<section class="news-background-section">
    <div class="news-title">
        <h2> <?php echo $page_title ?> </h2>
    </div>
    <div class="news-info-text">
        <p><?php echo $field_value; ?></p>
    </div>
    <div class="posts-grid">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
        ?>
            <div class="posts-wrapper">
                <div class="posts-wrapper__image">
                    <?php the_post_thumbnail('medium') ?>
                </div>
                    <div class="posts-wrapper__text">
                        <h3><?php the_title() ?></h3>
                        <p><?php the_excerpt() ?></p>
                        <a href="<?php the_permalink(); ?>">
                            READ MORE
                        </a>
                    </div>
                </div>
        <?php
            endwhile;
        endif;
        ?>
    </div>
</section>
<?php get_footer() ?>