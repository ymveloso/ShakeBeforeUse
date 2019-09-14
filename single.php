<?php include 'header.php';?>

<?php /* Start the Loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>

  <div class="row">

<div class="col" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <h2 class="mb-2 mt-2"><?php the_title(); ?></h2>

        <?php the_content(); ?>

</div>

</div>

<div class="row">
  <div class="col">
    <center> <?php edit_post_link('&#9998;', '<p style="font-size: 34px;"> ', '</p> '); ?> </center>

<div class="back"><a href="../">&#8592 Back to Index</a></div>




<?php endwhile; ?>
<!-- #content .site-content -->

  </div>
</div>




<?php include 'footer.php';?>
