<?php
/*
Template Name:produtosadmin
*/

get_header();

if (current_user_can('edit_posts')) {
  // Se o usuário tem permissão para editar posts
?>

  <div id="edit_posts" class="container">
    <div class="row">
      <div class="col-12">
        <div class="p-1">
          <h2>Cadastrar Novo Produto</h2>
          <form method="post" enctype="multipart/form-data">
            <!-- Campo para o título do post -->
            <label for="post_title">Título:</label>
            <input type="text" name="post_title" required>
            <br>
            <!-- Campo para a imagem em destaque -->
            <label for="post_thumbnail">Imagem em Destaque:</label>
            <input type="file" name="post_thumbnail" accept="image/*" required>
            <br>
            <!-- Botão de envio -->
            <input type="submit" name="submit_product" value="Cadastrar Produto">
          </form>
        </div>
      </div>
    </div>
    <div class="edit_post">
      <?php
      // Processar o formulário quando enviado
      if (isset($_POST['submit_product'])) {
        // Verificar se os campos obrigatórios estão preenchidos
        if (isset($_POST['post_title']) && !empty($_POST['post_title']) && isset($_FILES['post_thumbnail']) && !empty($_FILES['post_thumbnail']['name'])) {
          $post_title = sanitize_text_field($_POST['post_title']);

          // Configurar os dados da nova postagem
          $new_post = array(
            'post_title' => $post_title,
            'post_content' => '', // Pode ser vazio
            'post_status' => 'publish',
            'post_type' => 'post',
            'post_category' => array(get_cat_ID('produtos')), // Categoria 'produtos'
          );

          // Inserir a nova postagem
          $new_post_id = wp_insert_post($new_post);

          // Configurar a imagem em destaque
          if ($new_post_id && isset($_FILES['post_thumbnail'])) {
            require_once ABSPATH . 'wp-admin/includes/image.php';
            require_once ABSPATH . 'wp-admin/includes/file.php';
            require_once ABSPATH . 'wp-admin/includes/media.php';

            $attachment_id = media_handle_upload('post_thumbnail', $new_post_id);

            if (is_wp_error($attachment_id)) {
              // Erro ao carregar a imagem
              echo 'Erro ao carregar a imagem: ' . $attachment_id->get_error_message();
            } else {
              // Definir a imagem em destaque
              set_post_thumbnail($new_post_id, $attachment_id);
              echo 'Produto cadastrado com sucesso!';
            }
          } else {
            echo 'Erro ao cadastrar o produto.';
          }
          } else {
            echo 'Por favor, preencha todos os campos obrigatórios.';
          }
        }
        } else {
          // Se o usuário não tem permissão para editar posts
          echo 'Você não tem permissão para acessar esta página.';
        }

        if (current_user_can('edit_posts')) {
          // ... (seção anterior)

          // Listagem de produtos existentes
          $args_existing_products = array(
            'post_type' => 'post',
            'posts_per_page' => -1,
            'category_name' => 'produtos',
          );

          $query_existing_products = new WP_Query($args_existing_products);

          if ($query_existing_products->have_posts()) {
            echo '<h2>Produtos Existentes</h2>';
            echo '<ul>';

            while ($query_existing_products->have_posts()) {
              $query_existing_products->the_post();
          
              echo '<li>';
              echo get_the_title();
              // Adiciona um link personalizado para a sua página de edição personalizada
              $post_id = get_the_ID();
              $custom_edit_link = home_url('/index.php/customeditpost/') . '?post=' . $post_id;
              echo ' <a href="' . esc_url($custom_edit_link) . '">Editar</a>';
          
              // Adiciona um formulário para exclusão na própria página
              echo '<form method="post">';
              echo '<input type="hidden" name="post_id" value="' . $post_id . '">';
              echo '<input type="submit" value="Excluir" name="delete_post">';
              echo '</form>';


              echo '</li>';
          }
            // Processa a exclusão se o formulário for enviado
            if (isset($_POST['delete_post'])) {
              $post_id_to_delete = $_POST['post_id'];
              wp_delete_post($post_id_to_delete, true); // O segundo parâmetro true exclui permanentemente o post
          }

            echo '</ul>';
            wp_reset_postdata();
          } else {
            echo 'Nenhum produto existente.';
          }
        } else {
          echo 'não tem produtos cadastrados';
        }
        ?>
    </div>
  </div>

<?php get_footer(); ?>