<?php
/*
Template Name: customeditpost
*/

// Inclua o arquivo necessário do WordPress para a função wp_handle_upload()
require_once ABSPATH . 'wp-admin/includes/file.php';

get_header();

// Verifique se a pessoa logada é administrador ou editor
if (current_user_can('edit_others_posts')) {
    // Verifique se há uma postagem sendo editada
    if (isset($_GET['post'])) {
        $post_id = $_GET['post'];
        $post = get_post($post_id);

        // Carregue os scripts da biblioteca de mídia
        wp_enqueue_media();

        // Desative o redimensionamento automático de imagens
        add_filter('wp_handle_upload_prefilter', 'custom_disable_image_resize');

        // Exiba o formulário de edição
        ?>
        <div id="custom-edit-post" class="container">
            <div class="row">
                <div class="col-12">
                    <div id="prod_edit" class="p-1">
                        <h2>Editar Produto</h2>

                        <!-- Exiba a imagem em destaque atual -->
                        <?php
                        if (has_post_thumbnail($post_id)) {
                            echo '<p>Imagem Atual:</p>';
                            echo '<div style="width: 400px;">';
                            echo get_the_post_thumbnail($post_id, 'medium');
                        }
                        ?>

                        <form method="post" enctype="multipart/form-data">
                            <!-- Campo para o título do post -->
                            <label for="post_title">Título:</label>
                            <input type="text" name="post_title" value="<?php echo esc_attr($post->post_title); ?>" required>
                            <br>
                            <!-- Botão para abrir a biblioteca de mídia -->
                            <input type="button" value="Escolher Imagem" class="button select-media-button">
                            <br>
                            <!-- Campo oculto para armazenar a ID da imagem -->
                            <input type="hidden" name="post_thumbnail_id" id="post_thumbnail_id" value="<?php echo get_post_thumbnail_id($post_id); ?>">
                            <!-- Botão de envio -->
                            <input type="submit" name="submit_update_product" value="Atualizar Produto">
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script>
            jQuery(document).ready(function($){
                // Abre a biblioteca de mídia quando o botão é clicado
                $('.select-media-button').click(function(e) {
                    e.preventDefault();
                    var custom_uploader = wp.media({
                        title: 'Escolher Imagem',
                        button: {
                            text: 'Selecionar'
                        },
                        multiple: false
                    });

                    custom_uploader.on('select', function() {
                        var attachment = custom_uploader.state().get('selection').first().toJSON();
                        // Atualiza o campo oculto com a ID da imagem selecionada
                        $('#post_thumbnail_id').val(attachment.id);
                        // Exibe a miniatura da imagem selecionada
                        // Adapte isso conforme necessário para a exibição de imagens
                        console.log(attachment);
                    });

                    custom_uploader.open();
                });
            });
        </script>

        <?php

        // Processar o formulário quando enviado
        if (isset($_POST['submit_update_product'])) {
            // Verifique se o título foi fornecido
            if (isset($_POST['post_title'])) {
                $new_title = sanitize_text_field($_POST['post_title']);

                // Atualize o título
                $update_post = array(
                    'ID'         => $post_id,
                    'post_title' => $new_title,
                );
                wp_update_post($update_post);

                // Atualize a imagem em destaque, se fornecida
                if (!empty($_POST['post_thumbnail_id'])) {
                    set_post_thumbnail($post_id, $_POST['post_thumbnail_id']);
                }

                echo 'Produto atualizado com sucesso!';
            } else {
                echo 'Título não fornecido.';
            }
        }
    } else {
        // Se o ID do post não estiver disponível
        echo 'ID do post não fornecido.';
    }
} else {
    // Se a pessoa não tiver permissão adequada
    echo 'Você não tem permissão para acessar esta página.';
}

get_footer();

// Função para desativar o redimensionamento automático de imagens
function custom_disable_image_resize($file) {
    $file['test_form'] = false;
    return $file;
}
?>
