

<?php 
if ( function_exists( 'add_theme_support' ) ) { 
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 150, 150, true ); // default Post Thumbnail dimensions (cropped)
    add_image_size( 'another-size', 600, 400 ); // Not Cropped (additional sizes) size doesn't matter because we're adding "full"
 }

function ms_image_editor_default_to_gd( $editors ) {
$gd_editor = 'WP_Image_Editor_GD';
$editors = array_diff( $editors, array( $gd_editor ) );
array_unshift( $editors, $gd_editor );
return $editors;
}
add_filter( 'wp_image_editors', 'ms_image_editor_default_to_gd' );

?>


<?php

if ( function_exists('register_sidebar') ) {

   register_sidebar(array(
   'name'          => 'collumn 1',
   'before_widget' => '',
   'after_widget' => '',
   'before_title' => '<h2>',
   'after_title' => '</h2>'

   ));

     register_sidebar(array(
   'name'          => 'collumn 2',
   'before_widget' => '',
   'after_widget' => '',
   'before_title' => '<h2>',
   'after_title' => '</h2>'
   ));

       register_sidebar(array(
   'name'          => 'collumn 3',
   'before_widget' => '',
   'after_widget' => '',
   'before_title' => '<h2>',
   'after_title' => '</h2>'
   ));

}?>