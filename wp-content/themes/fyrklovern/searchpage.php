<?php 
/**
 * Template Name: Search Page
 */

?>
<?php get_header(); ?>
<!-- TODO: WONT WORK -->
<div class="wrap">
    <h1>Sök</h1>
    <div>
        <p>Vad letar du efter?</p>
        <?php get_search_form(); ?>
    </div>
    <?php if (is_search()) {
        echo "<div>True</div>";
    } else {
        echo "<div>No results to show..</div>";
    }   
    ?>
</div>

<?php get_footer(); 