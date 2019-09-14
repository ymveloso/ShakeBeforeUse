<?php include 'header.php';?>


<?php /* Start the Loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>

<div class="row" id="posts">
	<div class="col-lg mt-4" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<a href="<?php the_permalink(); ?>"><div class="thumbnail"><?php echo get_the_post_thumbnail( $post->ID, 'full' ); ?></div></a>
		<h2 class="mb-2 mt-2"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Click see to see %s', 'shape' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
	</div>
</div>



<?php endwhile; ?>


<?php include 'footer.php';?>
