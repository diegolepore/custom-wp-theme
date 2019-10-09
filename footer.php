<footer>
    <?php 

        wp_nav_menu(
            array(
                'theme_location' => 'footer-menu',
                'menu_class' => 'FooterMenu'
                // 'menu' => 'Top Menu',
            )
        );

    ?>
</footer>

<?php wp_footer(); ?>

</body>
</html>