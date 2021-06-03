<footer>
<div class="container">

    <div class="row">

        <div class="col res-footer">

            <?php wp_nav_menu( array( 'theme_location' => 'footer-menu','menu_class' =>'footer-navigation',) ); 
						?>

            <?php wp_nav_menu( array( 'theme_location' => 'social','menu_class' =>'footer-social',) ); 
						?>
        </div>

    </div>

    <div class="site-info text-center pb-2">
			<?php esc_html_e( 'Created by ', 'theme' ); ?><a href="<?php echo esc_url( __( 'https://ayawata.com', 'theme' ) ); ?>"><?php esc_html_e( 'Aya Wata', 'theme' ); ?></a>
	</div>

</div>
</footer> 

<?php wp_footer();?>

</body>
</html>