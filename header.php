<!--
Shake Well Before Use
Wordpress theme by Yara Veloso
-->
<!doctype html>
<html>
<head>

<title><?php bloginfo( 'name' ); ?></title>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

<!-- Meta -->
<meta name="description" content="$description$"/>
<meta name="google" content="nositelinkssearchbox" />
<meta name="google-site-verification" content="pS7wsZeFC5LnvlwjMHsf806sQPDLD1o8y8U91xOnVLE" />


<!-- Bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<!-- JQuery & popper.js + Bootstrap JS  + Masonry-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js"></script>

<!-- CSS -->
<link href="<?php echo get_bloginfo('template_directory'); ?>/base.css" rel="stylesheet"></head>
<link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet"></head>



<?php wp_head();?>
</head>

<body>

	<div class="container">

		<div class="row">

			<div class="col">
  			<h1 class="display-1">  <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a> </h1>
		</div>
		<!-- <div class="col">
<ul>
	<li>Search</li>
	<li>Something</li>
	<li>I don't know</li>
</ul>
</div> -->

	</div>

	<div class="row">

		<div class="col">

<ul id="categories">
	<li> Choose</li>
			<?php
    $args = array(
      'orderby' => 'name',
      'hierarchical' => 1,
      'taxonomy' => 'category',
      'hide_empty' => 1,
      'parent' => 0,
    );
    $categories = get_categories($args);

    foreach($categories as $category) {

      echo '<li><a href="' . get_category_link($category->cat_ID) . '" title="' . $category->name . '">' . $category->name . ' ( ' . $category->count . ' )</a></li>&nbsp; &nbsp;';

      }
  ?>
</ul>


</div>
</div>
