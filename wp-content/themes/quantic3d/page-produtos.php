<?php 
/* 
Template Name:produtos
*/
get_header(); ?>

<!-- <?php
while (have_posts()) : the_post();
// Exibir o conteúdo da página
the_content();
endwhile;
?> -->

<section id="list_product">
  <div class="container">
    <div style="padding-top:60px;">
      <h2>Nossa produção</h2>
    </div>

    <div class="row">
      <?php
        $args = array(
          'post_type'       => 'post', // Defina o tipo de postagem como 'post'
          'posts_per_page'  => 8, // -1 para obter todas as postagens, você pode definir um número específico se preferir
          'category_name'   => 'produtos', // Nome da categoria 'produtos'
          'paged'           => $paged,
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) {
          while ($query->have_posts()) {
            $query->the_post();
      ?>
            <div class="col-6 col-sm-3 text-center">
              <div class="product-card p-2">
                <?php
                  if (has_post_thumbnail()) {
                  the_post_thumbnail('custom-thumbnail-size', ['class' => 'custom-thumbnail-shadow wp-post-image product-image img-fluid']);
                  } else {
                  // Se não houver uma imagem em destaque, você pode exibir uma imagem padrão ou qualquer outra coisa
                  echo '<img src="' . esc_url(get_template_directory_uri() . '/path/to/default-image.jpg') . '" alt="Imagem Padrão" class="custom-thumbnail-shadow wp-post-image product-image">';
                  }
                ?>
                <h3><?php the_title(); ?></h3>
          </div>
        </div>
      <?php
        }
        wp_reset_postdata();
        } else {
          echo 'Nenhuma postagem encontrada.';
        }
      ?>

    </div>
  </div>
</section>

<!-- Div para exibir a imagem ampliada -->
<div class="overlay text-center" id="image-overlay">
  <img src="" alt="Imagem Ampliada" class="enlarged-image" id="enlarged-image">
  <p>Click na tela para fechar</p>
</div>

<div class="pagination">
  <?php
  echo paginate_links(array(
    'total'   => $query->max_num_pages,
    'current' => max(1, get_query_var('paged')),
  ));
  next_posts_link('Próxima Página', $query->max_num_pages);
  ?>
</div>


<script>
  jQuery(document).ready(function ($) {
  // Quando uma imagem da classe 'wp-post-image product-image' é clicada
  $('.wp-post-image.product-image').on('click', function () {
    // Obtém o caminho da imagem ampliada
    var enlargedImageUrl = $(this).attr('src');

    // Define a imagem ampliada no elemento com o ID 'enlarged-image'
    $('#enlarged-image').attr('src', enlargedImageUrl);

    // Exibe o overlay
    $('#image-overlay').fadeIn();
  });

  // Fecha o overlay quando clicado fora da imagem
  $('#image-overlay').on('click', function () {
    $(this).fadeOut();
  });

  var $enlargedImage = $('#enlarged-image');
  var $zoomFrame = $('<div id="zoom-frame"></div>').appendTo('#image-overlay');

  $('.row').on('click', '.wp-post-image.product-image', function () {
    var enlargedImageUrl = $(this).attr('src');
    $enlargedImage.attr('src', enlargedImageUrl);
    resetZoomFrame();
    $('#image-overlay').fadeIn();
  });

  $('#image-overlay').on('mousemove', function (e) {
    var originalImageWidth = $enlargedImage.width();
    var originalImageHeight = $enlargedImage.height();

    var offsetX = e.pageX - $enlargedImage.offset().left;
    var offsetY = e.pageY - $enlargedImage.offset().top;

    var zoomFrameSize = 300; // Ajuste o tamanho do quadro de zoom conforme necessário
    var zoomFactor = 4; // Fator de zoom

    // Normaliza as coordenadas em relação às dimensões da imagem original
    var normalizedOffsetX = offsetX / originalImageWidth;
    var normalizedOffsetY = offsetY / originalImageHeight;

    var offsetXAdjusted = normalizedOffsetX * originalImageWidth - zoomFrameSize / 300;
    var offsetYAdjusted = normalizedOffsetY * originalImageHeight - zoomFrameSize / 300;

    $zoomFrame.css({
      background: 'url(' + $enlargedImage.attr('src') + ')',
      'background-size': originalImageWidth * zoomFactor + 'px ' + originalImageHeight * zoomFactor + 'px',
      width: zoomFrameSize + 'px',
      height: zoomFrameSize + 'px',
      left: offsetXAdjusted + 'px',
      top: offsetYAdjusted + 'px',
      'background-position': -offsetXAdjusted * zoomFactor + 'px ' + -offsetYAdjusted * zoomFactor + 'px',
    });

    $zoomFrame.show();
  });

  $('#image-overlay').on('mouseleave', function () {
    $zoomFrame.hide();
  });

  function resetZoomFrame() {
    $zoomFrame.css({
      background: 'none',
      width: 0,
      height: 0,
    });
  }
});

</script>
<?php get_footer(); ?>