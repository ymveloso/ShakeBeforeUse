
<?php include 'header.php';?>


<?php /* Start the Loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<a href="<?php the_permalink(); ?>"><div class="thumbnail"><?php echo get_the_post_thumbnail( $post->ID, 'full' ); ?></div>
 </a>


        <h2><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Click see to see %s', 'shape' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
</article>


<?php endwhile; ?>

<!-- class="wow bounceInUp" data-wow-offset="10" -->

<!-- #content .site-content -->

<?php include 'footer.php';?>

