<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Synchronization
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'synchronization' ),
				'after'  => '</div>',
			) );
		?>

<!--        <div class="card-deck">-->
<!--            <div class="card">-->
<!--                <img class="card-img-top" src="http://procodis.loc/wp-content/uploads/2018/08/anuncio.png" alt="Card image cap">-->
<!--                <div class="card-body">-->
<!--                    <h5 class="card-title">PUBLICIDAD</h5>-->
<!--                    <ul>-->
<!--                        <li>Institucionales</li>-->
<!--                        <li>Documentales  y relatos</li>-->
<!--                        <li>Promos y caracterizaciones</li>-->
<!--                        <li>Cuñas</li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="card">-->
<!--                <img class="card-img-top" src="http://procodis.loc/wp-content/uploads/2018/08/radio.png" alt="Card image cap">-->
<!--                <div class="card-body">-->
<!--                    <h5 class="card-title">PRODUCCIONES RADIALES</h5>-->
<!--                    <ul>-->
<!--                        <li>Producción  de  leyendas</li>-->
<!--                        <li>Producción  de programas sociales sobre discapacidad Visual</li>-->
<!--                        <li>Producción de  contenidos sobre discapacidad Visual</li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="card">-->
<!--                <img class="card-img-top" src="http://procodis.loc/wp-content/uploads/2018/08/tv.png" alt="Card image cap">-->
<!--                <div class="card-body">-->
<!--                    <h5 class="card-title">PRODUCCIONES TELEVISIVAS</h5>-->
<!--                    <ul>-->
<!--                        <li>Spot acsesibles</li>-->
<!--                        <li>Producción de programas Sociales</li>-->
<!--                        <li>Documentales</li>-->
<!--                        <li>Cortometrajes</li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <br/>-->
<!--        <div class="card-deck">-->
<!--            <div class="card">-->
<!--                <img class="card-img-top" src="http://procodis.loc/wp-content/uploads/2018/08/video.png" alt="Card image cap">-->
<!--                <div class="card-body">-->
<!--                    <h5 class="card-title">PRODUCCIÓN VIDEOGRÁFICA</h5>-->
<!--                    <ul>-->
<!--                        <li>Ilustraciones</li>-->
<!--                        <li>Creación de personajes</li>-->
<!--                        <li>Modelado 3D</li>-->
<!--                        <li>Tipografía Creativa</li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="card">-->
<!--                <img class="card-img-top" src="http://procodis.loc/wp-content/uploads/2018/08/ol-line.png" alt="Card image cap">-->
<!--                <div class="card-body">-->
<!--                    <h5 class="card-title">SERVICIOS ON-LINE</h5>-->
<!--                    <ul>-->
<!--                        <li>Soporte web</li>-->
<!--                        <li>Social media</li>-->
<!--                        <li>Mercadotécnia visual</li>-->
<!--                        <li>E-mail marketing</li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="card">-->
<!--                <img class="card-img-top" src="http://procodis.loc/wp-content/uploads/2018/08/soporte.png" alt="Card image cap">-->
<!--                <div class="card-body">-->
<!--                    <h5 class="card-title">SOPORTE TÉCNICO</h5>-->
<!--                    <ul>-->
<!--                        <li>Reseteo de computadores</li>-->
<!--                        <li>Instalación de programas</li>-->
<!--                        <li>Mantenimiento de impresoras</li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <br/>-->
<!--        <div>-->
<!--            Permítanos conocerle y que nos conozca.<br/>-->
<!--            SOMOS PROCODIS<br/>-->
<!--            La Diversidad Funcional en acción…!-->
<!--        </div>-->
<!--        <br/>-->
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						esc_html__( 'Edit %s', 'synchronization' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-## -->
