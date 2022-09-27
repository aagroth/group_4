<?php wp_footer(); ?>
<footer class="footer-container">
    <div class="footer-inner-container">
        <div class="footer-left-box">
            <h3>Navigation</h3>
            <div class="footer-left-inner-box">
                <?php wp_nav_menu(array('theme_location' => 'footer-menu-left')); ?>
            </div> 
        </div>
        <div class="footer-right-box">
            <h3>Information</h3>
            <div class="footer-right-inner-box">
                <?php wp_nav_menu(array('theme_location' => 'footer-menu-right')); ?>
            </div>
        </div>
    </div>
    <div class="style-header__title">
        <h2 ><?php echo get_bloginfo( 'name' ); ?></h2>
    </div>
</footer>

</body>
</html>