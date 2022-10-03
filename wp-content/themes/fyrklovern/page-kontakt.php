<?php $page_for_blog = get_option('page_for_posts'); ?>
<?php $image = get_field('image', $page_for_blog); ?>

<?php get_header() ?>
<div class="fullwidth-image-block">
    <img src ="<?php echo $image ?>" />
</div>
<div class="contact-title">
   <h1><?php the_title(); ?> </h1> 
</div>
<div class="contact-content-wrapper"> <?php the_content(); ?> </div>

<?php get_footer() ?>