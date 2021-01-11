<?php
      /*  
      Template name: Home Page Theme
     */
?>
<?php get_header(); ?>
<?php
   echo get_field('text');

$args = array("post_type"=>'post');

  $the_query = new WP_Query( $args );
 
// The Loop
if ( $the_query->have_posts() ) {
    echo '<ul>';
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
        echo '<li>' . get_the_title() . '</li>';
        echo '<li>' . get_the_content() . '</li>';
    }
    echo '</ul>';
} else {
    // no posts found
}
// Restore original Post Data /
wp_reset_postdata();

?>
<?php get_footer(); ?>
