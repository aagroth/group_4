<?php $page_for_blog = get_option('page_for_posts'); ?>
<?php $image = get_field('image', $page_for_blog); ?>

<?php get_header() ?> 
<div class="fullwidth-image-block">
    <img src ="<?php echo $image ?>" />
</div>
<section class="page-single-section">
<div class="page-single">
    <div class="page-single__date">
        <p><?php the_time(get_option('date_format')); ?></p>
    </div>
    <div class="page-single__title">
        <h1><?php the_title(); ?></h1> 
    </div> 
    <div class="page-single__image">
         <?php the_post_thumbnail('medium') ?> 
    </div>
    <div class="page-single__content">
        <p><?php the_content(); ?></p>
    </div>
</div> 
</section>

<?php get_footer() ?>