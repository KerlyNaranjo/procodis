<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Synchronization
 */

?>

	</div><!-- #content -->

	<?php get_sidebar( 'footer' ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-footer__wrap">
            <div class="site-info">
                <div class="row text-center">
                    <div class="col">
                        <a href="https://www.facebook.com/Fundaci%C3%B3n-Procodis-172154102913261/">
                            <img class="logo-redes" src="http://procodis.loc/wp-content/uploads/2018/08/facebook.png" /></a>
                    </div>
                    <div class="col">
                        <a href="https://twitter.com/procodisradiotv">
                            <img class="logo-redes" src="http://procodis.loc/wp-content/uploads/2018/08/twitter.png" /></a>
                    </div>
                    <div class="col">
                        <a href="https://youtu.be/pNjwwg5RZiI">
                            <img class="logo-redes" src="http://procodis.loc/wp-content/uploads/2018/08/youtube-1.png" /></a>
                    </div>
                </div>
                <p>© Copyright 2018. Todos los derechos reservados</p>
<!--                --><?php // /* translators: %s: WordPress */ ?>
<!--				<div><a href="--><?php //echo esc_url( __( 'https://wordpress.org/', 'synchronization' ) ); ?><!--">--><?php //printf( esc_html__( 'Proudly powered by %s', 'synchronization' ), 'WordPress' ); ?><!--</a></div>-->
<!--				--><?php // /* translators: 1: theme name, 2: author  */ ?>
<!--                <div>--><?php //printf( esc_html__( 'Theme: %1$s by %2$s', 'synchronization' ), 'synchronization', '<a href="http://jenrohrig.com" rel="designer">Jen Rohrig</a>' ); ?><!--</div>-->
			</div><!-- .site-info -->
		</div><!-- .site-footer__wrap -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
