<?php 
/* 
Template Name:politic 
*/
get_header(); ?>

<div class="container">
  <?php
  while (have_posts()) : the_post();
      // Exibir o conteúdo da página
      the_content();
  endwhile;
  ?>
</div>

<?php get_footer(); ?>