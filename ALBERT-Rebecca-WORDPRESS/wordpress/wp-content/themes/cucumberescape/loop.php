
<?php
echo "<div>";
  if ( have_posts() ) : while ( have_posts() ) : the_post();
    the_title('<h2>' , '</h2>');
    echo get_permalink();
    echo "<p>" . the_content() . "</p>";
  endwhile; else :
    esc_html_e( '<p>Sorry, no posts matched your criteria.</p>' );
    endif;
echo "</div>";
?>
