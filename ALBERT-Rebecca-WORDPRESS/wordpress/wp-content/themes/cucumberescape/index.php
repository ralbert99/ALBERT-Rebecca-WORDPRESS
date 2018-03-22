<!-- <?php echo basename(__FILE__); ?>-->

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<link href="https://fonts.googleapis.com/css?family=Lato|PT+Sans+Narrow" rel="stylesheet">


<?php define( 'WP_USE_THEMES', false ); get_header(); ?>

  <body <?php body_class(); ?>>

    <header>
      <?php get_template_part('main'); ?>
    </header>

    <section>
      <!--<?php get_template_part('columnlayout'); ?> -->
      <?php get_template_part('loop'); ?>
    </section>

    <footer>
      <?php get_footer(); ?>
    </footer>

  </body>


<!-- <?php echo "END OF " . basename(__FILE__); ?>-->
