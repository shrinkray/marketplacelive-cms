<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('templates/page', 'why-attend-header'); ?>
 <?php get_template_part('templates/content', 'why-attend-page'); ?>
<?php endwhile; ?>
