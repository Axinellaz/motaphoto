
    <footer class="site__footer">

        <?php wp_footer(); ?>
        <?php get_template_part( 'templates_part/modale_contact' ); ?>
        <?php wp_nav_menu([ 
                'theme_location' => 'footer-menu',
                'container'      => false 
                ]);
         ?>
    </footer>
</body>
</html>