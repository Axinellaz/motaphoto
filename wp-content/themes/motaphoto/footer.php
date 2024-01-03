
    <footer class="site__footer">
        <?php wp_footer(); ?>
        
        <?php wp_nav_menu([ 
                'theme_location' => 'footer-menu',
                'container'      => false 
                ]);
         ?>
    </footer>
</body>
</html>