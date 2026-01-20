<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package SKT Photo Session
 */
?>


  </div><!-- wrapper -->	
	<footer id="colophon" class="site-footer" role="contentinfo">
    	<div class="foot_col_container">
            <div class="footer-menu"><h2><?php esc_html_e('Main Menu','skt-photo-session');?></h2>
            <?php wp_nav_menu( array('theme_location' => 'main') ); ?>
            </div><!-- footer-menu -->
            <div class="footer-menu"><h2><?php esc_html_e('Useful Links','skt-photo-session');?></h2>
                	<?php wp_nav_menu( array('theme_location' => 'useful') ); ?>
            </div><!-- footer-menu -->
            <div class="social"><h2><?php esc_html_e('Get In Touch','skt-photo-session');?></h2>
                <div class="container">
                    <?php if ( of_get_option('facebook', true) != "") { ?>
                     <a target="_blank" href="<?php echo esc_url(of_get_option('facebook', true)); ?>" title="<?php esc_attr_e('Facebook','skt-photo-session');?>" ><div class="fb"><?php esc_html_e('Facebook','skt-photo-session');?></div></a>
                     <?php } ?>
                    <?php if ( of_get_option('twitter', true) != "") { ?>
                     <a target="_blank" href="<?php echo esc_url("https://twitter.com/". esc_attr(of_get_option('twitter', true)) ); ?>" title="<?php esc_attr_e('Twitter','skt-photo-session');?>" ><div class="twitt"><?php esc_html_e('Twitter','skt-photo-session');?></div></a>
                     <?php } ?>
                     <?php if ( of_get_option('google', true) != "") { ?>
                     <a target="_blank" href="<?php echo esc_url(of_get_option('google', true)); ?>" title="<?php esc_attr_e('Google +','skt-photo-session');?>" > <div class="gplus"><?php esc_html_e('Google +','skt-photo-session');?></div></a>
                     <?php } ?>
                     <?php if ( of_get_option('linkedin', true) != "") { ?>
                     <a target="_blank" href="<?php echo esc_url(of_get_option('linkedin', true)); ?>" title="<?php esc_attr_e('Linkedin','skt-photo-session');?>" ><div class="linkedin"><?php esc_html_e('Linkedin','skt-photo-session');?></div></a>
                     <?php } ?>
                    
                </div>
            </div><!-- social -->
            <div class="contact"><h2>Contact Info</h2>
                 <h3 class="company-title"><?php echo esc_html( of_get_option('contact1', true) ); ?></h3>
                 <p><?php echo esc_html( of_get_option('contact2', true) ); ?></p>
                 <p><?php echo esc_html( of_get_option('contact3', true) ); ?></p>
                 <p><strong><?php esc_html_e('Phone :','skt-photo-session');?></strong> <?php echo esc_html( of_get_option('contact4', true) ); ?></p>
                 <p><strong><?php esc_html_e('Email :','skt-photo-session');?></strong> <?php echo sanitize_email( of_get_option('contact5', true) ); ?></p>
            </div><!-- contact -->
            <div class="clear"></div>
        </div>
	</footer><!-- #colophon -->
  <div class="footer-bottom">
	  <div class="foot_col_container">
        <div class="bottom-left">
        	<?php
			if ( (function_exists( 'of_get_option' ) && (of_get_option('footertext2', true) != 1) ) ) {
			 	echo esc_html( of_get_option('footertext2', true) ); 
			} ?>
        </div><!-- bottom-left -->    
        <div class="bottom-right">
			<?php do_action( 'skt_photo_session_credits' ); ?>
			<?php bloginfo('name'); ?> <?php esc_html_e('Theme By ','skt-photo-session');?><a href="<?php echo esc_url('https://www.sktthemes.org/product-category/photography-wordpress-themes/');?>" target="_blank">
        <?php esc_html_e('SKT Photography Themes','skt-photo-session'); ?>
        </a>
		</div><!-- bottom-right --><div class="clear"></div>
        </div><!-- footer-bottom -->
	</div>
</div><!-- #page -->



<?php wp_footer(); ?>
</body>
</html>