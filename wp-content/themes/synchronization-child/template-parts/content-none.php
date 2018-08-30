<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Synchronization
 */

?>

<header class="page-header">
	<h1 class="page-title">
		<?php
		if ( is_404() ) { esc_html_e( 'Página no disponible', 'synchronization' );
		} else if ( is_search() ) {
			/* translators: %s = search query */
			printf( esc_html__( 'No se encontró nada para &ldquo;%s&rdquo;', 'synchronization'), get_search_query() );
		} else {
			esc_html_e( 'Nada encontrado', 'synchronization' );
		}
		?>
	</h1>
</header><!-- .page-header -->

<section id="primary" class="content-area <?php if ( is_404() ) { echo 'error-404'; } else { echo 'no-results'; } ?> not-found">
	<main id="main" class="site-main" role="main">

		<div class="page-content">
			<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
                                <?php /* translators: %1$ = new post */ ?>
				<p><?php printf( wp_kses( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'synchronization' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

			<?php elseif ( is_search() ) : ?>

				<p><?php esc_html_e( 'Lo sentimos, pero nada coincide con sus términos de búsqueda. Por favor, inténtelo de nuevo con algunas palabras clave diferentes.', 'synchronization' ); ?></p>
				<?php get_search_form(); ?>

			<?php elseif ( is_404() ) : ?>

				<p><?php esc_html_e( 'Pareces perdido. Para encontrar lo que está buscando, revise los artículos más recientes a continuación o intente una búsqueda:', 'synchronization' ); ?></p>
				<?php get_search_form(); ?>

			<?php else : ?>

				<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'synchronization' ); ?></p>
				<?php get_search_form(); ?>

			<?php endif; ?>
		</div><!-- .page-content -->

		<?php
		if ( is_404() || is_search() ) {
		?>
			<h2 class="page-title secondary-title"><?php esc_html_e( 'Post mas recientes:', 'synchronization' ); ?></h2>
			<?php
			// Get the 6 latest posts
			$args = array(
				'posts_per_page' => 6
			);
			$latest_posts_query = new WP_Query( $args );
			// The Loop
			if ( $latest_posts_query->have_posts() ) {
					while ( $latest_posts_query->have_posts() ) {
						$latest_posts_query->the_post();
						// Get the standard index page content
						get_template_part( 'template-parts/content', get_post_format() );
					}
			}
			/* Restore original Post Data */
			wp_reset_postdata();
		} // endif
		?>


	</main><!-- #main -->
</section><!-- #primary -->

<?php
get_sidebar();
get_footer();
