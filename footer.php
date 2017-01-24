   

    
        <footer>
            <?php 
                wp_nav_menu( array(
                    'theme_location' => 'zwj_footer',
                    'menu_class'     => 'pull-left',
                    'menu_id'        => 'zwj-menu',
                    'container'      => 'div',
                    'container_class'=> 'menu',
                    'container_id'   => 'menu',
                    'echo'           => true,
                ) );
             ?>
            <div class="pull-right">
                &copy;Wenjun Zhou.All Rights Reserved.
            </div>
        </footer>

        
    </div>
    <?php 
        wp_footer();
     ?>
    <script src="https://www.welinkcredit.com/wp-includes/js/jquery/jquery.js?ver=1.12.4"></script>
</body>