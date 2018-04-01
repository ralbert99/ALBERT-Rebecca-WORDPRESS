<!-- <?php echo basename(__FILE__); ?>-->

<link href="https://fonts.googleapis.com/css?family=Lato|PT+Sans+Narrow" rel="stylesheet">


<?php define( 'WP_USE_THEMES', false ); get_header(); ?>

  <body <?php body_class(); ?>>

    <header>
      <h1>SNL Best Moments</h1>
      <h2>In Brief</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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
