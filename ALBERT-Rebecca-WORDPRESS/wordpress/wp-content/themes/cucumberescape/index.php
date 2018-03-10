<!-- <?php echo basename(__FILE__); ?>-->

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<link href="https://fonts.googleapis.com/css?family=Lato|PT+Sans+Narrow" rel="stylesheet">

<?php
define( 'WP_USE_THEMES', false ); get_header();
  get_template_part('main');
  get_template_part('columnlayout');
  if ( have_posts() ) : while ( have_posts() ) : the_post();

    the_title('<h2>' , '</h2>');
    echo "<div class=''>";
    echo "<p>" . the_content() . "</p>";
    echo "<div>";

  endwhile; else :
  	esc_html_e( '<p>Sorry, no posts matched your criteria.</p>' );
    endif;
  get_footer();?>

<!-- <?php echo "END OF " . basename(__FILE__); ?>-->
