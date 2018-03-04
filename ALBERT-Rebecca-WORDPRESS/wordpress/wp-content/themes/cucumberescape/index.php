<!-- <?php echo basename(__FILE__); ?>-->

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<link href="https://fonts.googleapis.com/css?family=Lato|PT+Sans+Narrow" rel="stylesheet">

<?php
get_header();
get_template_part('main');
get_template_part('columnlayout');
get_footer();?>

<!-- <?php echo "END OF " . basename(__FILE__); ?>-->
