<?php
/*
 * Template Name: Lista de Posts do Tipo Blog
 * Template Post Type: page
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main container">

        <?php
        if (have_posts()) :
            while (have_posts()) :
                the_post();
                get_template_part('template-parts/content', 'page');
            endwhile;
        else :
            get_template_part('template-parts/content', 'none');
        endif;
        ?>

        <!-- Novo loop para listar os posts do tipo "blog" -->
        <div class="post-cards">
            <?php
            $args = array(
                'post_type'      => 'post',   // Tipo de postagem
                'category_name'  => 'blog',   // Nome da categoria
                'posts_per_page' => -1,
            );

            $query = new WP_Query($args);

            while ($query->have_posts()) :
                $query->the_post();
                ?>
                <div class="post-card custom-shadow">
    <?php if (has_post_thumbnail()) : ?>
        <div class="post-thumbnail text-center">
            <a href="#" class="post-modal-link" data-post-id="<?php the_ID(); ?>">
                <?php the_post_thumbnail('thumbnail'); ?>
            </a>
        </div>
    <?php endif; ?>
    <div class="post-content">
        <h3><a href="#" class="post-modal-link" data-post-id="<?php the_ID(); ?>"><?php the_title(); ?></a></h3>
        <p><?php echo wp_trim_words(get_the_content(), 30, '...'); ?></p>
    </div>
</div>

                <?php
            endwhile;
            wp_reset_postdata();
            ?>
        </div>

    </main><!-- #main -->
</div><!-- #primary -->

<div class="modal fade" id="post-modal" tabindex="-1" aria-labelledby="post-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="post-modal-content"></div>
        </div>
    </div>
</div>

<script>
    jQuery(document).ready(function ($) {
        $('.post-modal-link').on('click', function (e) {
            e.preventDefault();
            var postId = $(this).data('post-id');
            var postTitle = $(this).data('post-title');

            // Atualiza o título do modal
            $('#modal-header').text(postTitle);

            // Carrega o conteúdo do post no modal
            $.ajax({
                url: '<?php echo admin_url('admin-ajax.php'); ?>',
                type: 'post',
                data: {
                    action: 'load_post_content',
                    post_id: postId
                },
                success: function (response) {
                    $('#post-modal-content').html(response);
                    $('#post-modal').modal('show');
                },
                error: function (xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });
    });
</script>




<?php get_footer(); ?>