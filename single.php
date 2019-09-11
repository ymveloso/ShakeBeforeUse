
<?php include 'header.php';?>

<br> <br>
<?php /* Start the Loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <h2 ><?php the_title(); ?></h2>

        <?php the_content(); ?>

</article>

<br> <br>

         <center> <?php edit_post_link('&#9998;', '<p style="font-size: 34px;"> ', '</p> '); ?> </center>

<div class="back"><a href="../">&#8592 Back to Index</a></div>




<?php endwhile; ?>
<!-- #content .site-content -->


<?php include 'footer.php';?>
