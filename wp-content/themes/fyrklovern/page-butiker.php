<?php get_header() ?>
<section class="page-store-section">
<div class="title-content">
    <h2 class="title-content__h2"> <?php the_content() ?> </h2>
</div>
<?php 
	$stores = new WP_Query(array(
		'posts_per_page' => 9,
		'post_type' => 'wpll_store'
	)); 
   ?> <div class="store-grid"> <?php
	while($stores -> have_posts()) {
		$stores->the_post(); ?>	
            <div class="store-grid__child">
			    <h2><?php the_title() ?></h2> 
			    <p><?php the_content() ?></p>	
            </div>	
			<?php
	}
    ?> </div> 
 </section>
<?php
?>
<?php get_footer() ?>