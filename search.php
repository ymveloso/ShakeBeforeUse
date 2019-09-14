<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Shape
 * @since Shape 1.0
 */

get_header(); ?>
<div class="row">
	<div class="col">
	<h3><?php printf( __( 'Showing search Results for: %s', 'shape' ), '<span>"' . get_search_query() . '"</span>' ); ?></h3>
</div>
</div>

<?php if ( have_posts() ) : ?>

							<div class="row">
								<div class="col-lg" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

									<a href="<?php the_permalink(); ?>"><div class="thumbnail"><?php echo get_the_post_thumbnail( $post->ID, 'full' ); ?></div></a>
									<h2><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Click see to see %s', 'shape' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
								</div>
							</div>

							<div class="row">
								Break
							</div>


            <?php else : ?>

                <?php get_template_part( 'no-results', 'search' ); ?>

            <?php endif; ?>

            </div><!-- #content .site-content -->
        </section><!-- #primary .content-area -->

<?php get_footer(); ?>
