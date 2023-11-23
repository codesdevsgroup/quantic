<?php 
/* 
Template Name:contact 
*/
get_header(); ?>

<h2> contatos </h2>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis accusantium possimus excepturi recusandae accusamus perferendis cum odit suscipit odio. Aut sequi asperiores rerum nemo magni iste maiores labore eum ipsa?</p>

<?php
while (have_posts()) : the_post();
    // Exibir o conteúdo da página
    the_content();
endwhile;
?>
<?php get_footer(); ?>