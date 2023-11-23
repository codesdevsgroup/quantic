<?php

function custom_theme_assets() {
  $theme_version = wp_get_theme()->get('Version');

  wp_enqueue_style( 'style', get_stylesheet_uri(), array(), $theme_version );
  wp_enqueue_style( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css', array(), $theme_version );
  wp_enqueue_style( 'custom-css', get_template_directory_uri() . '/assets/css/style.css', array(), $theme_version );
  wp_enqueue_style( 'form-css', get_template_directory_uri() . '/assets/css/form.css', array(), $theme_version );
  wp_enqueue_style( 'animation-css', get_template_directory_uri() . '/assets/css/animation.css', array(), $theme_version );
  wp_enqueue_style( 'responsive-css', get_template_directory_uri() . '/assets/css/responsive.css', array(), $theme_version );
  wp_enqueue_style( 'Flynn', get_template_directory_uri() . '/assets/fonts/Flynn.ttf', array(), $theme_version );

  wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), $theme_version, true );
  wp_enqueue_script( 'effects-js', get_template_directory_uri() . '/assets/js/effects.js', array('jquery'), $theme_version, true );
  wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.6.4.min.js', array(), $theme_version, true );
  wp_enqueue_script( 'popper', 'https://cdn.jsdelivr.net/npm/popper.js@2.11.6/dist/umd/popper.min.js', array('jquery'), $theme_version, true );
  wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js', array('jquery', 'popper'), $theme_version, true );
}

add_action( 'wp_enqueue_scripts', 'custom_theme_assets' );


  // bootstrap 5 wp_nav_menu walker
class bootstrap_5_wp_nav_menu_walker extends Walker_Nav_menu
{
  private $current_item;
  private $dropdown_menu_alignment_values = [
    'dropdown-menu-start',
    'dropdown-menu-end',
    'dropdown-menu-sm-start',
    'dropdown-menu-sm-end',
    'dropdown-menu-md-start',
    'dropdown-menu-md-end',
    'dropdown-menu-lg-start',
    'dropdown-menu-lg-end',
    'dropdown-menu-xl-start',
    'dropdown-menu-xl-end',
    'dropdown-menu-xxl-start',
    'dropdown-menu-xxl-end'
  ];

  function start_lvl(&$output, $depth = 0, $args = null)
  {
    $dropdown_menu_class[] = '';
    foreach($this->current_item->classes as $class) {
      if(in_array($class, $this->dropdown_menu_alignment_values)) {
        $dropdown_menu_class[] = $class;
      }
    }
    $indent = str_repeat("\t", $depth);
    $submenu = ($depth > 0) ? ' sub-menu' : '';
    $output .= "\n$indent<ul class=\"dropdown-menu$submenu " . esc_attr(implode(" ",$dropdown_menu_class)) . " depth_$depth\">\n";
  }

  function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
  {
    $this->current_item = $item;

    $indent = ($depth) ? str_repeat("\t", $depth) : '';

    $li_attributes = '';
    $class_names = $value = '';

    $classes = empty($item->classes) ? array() : (array) $item->classes;

    $classes[] = ($args->walker->has_children) ? 'dropdown' : '';
    $classes[] = 'nav-item';
    $classes[] = 'nav-item-' . $item->ID;
    if ($depth && $args->walker->has_children) {
      $classes[] = 'dropdown-menu dropdown-menu-end';
    }

    $class_names =  join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
    $class_names = ' class="' . esc_attr($class_names) . '"';

    $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
    $id = strlen($id) ? ' id="' . esc_attr($id) . '"' : '';

    $output .= $indent . '<li ' . $id . $value . $class_names . $li_attributes . '>';

    $attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
    $attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
    $attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
    $attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';

    $active_class = ($item->current || $item->current_item_ancestor || in_array("current_page_parent", $item->classes, true) || in_array("current-post-ancestor", $item->classes, true)) ? 'active' : '';
    $nav_link_class = ( $depth > 0 ) ? 'dropdown-item ' : 'nav-link ';
    $attributes .= ( $args->walker->has_children ) ? ' class="'. $nav_link_class . $active_class . ' dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"' : ' class="'. $nav_link_class . $active_class . '"';

    $item_output = $args->before;
    $item_output .= '<a' . $attributes . '>';
    $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
    $item_output .= '</a>';
    $item_output .= $args->after;

    $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
  }
}
// register a new menu
register_nav_menu('main-menu', 'Main menu');



// Formulario
add_action('admin_post_custom_form_submission', 'process_custom_form_submission');
add_action('admin_post_nopriv_custom_form_submission', 'process_custom_form_submission');

function process_custom_form_submission() {
    // Obtenha os valores dos campos
    $name = sanitize_text_field($_POST['your-name']);
    $phone = sanitize_text_field($_POST['your-phone']);
    $email = sanitize_email($_POST['your-email']);
    $idea = sanitize_textarea_field($_POST['your-idea']);

    // Processar o upload da imagem
    $uploaded_image = $_FILES['your-image'];

    // Verificar se há uma imagem enviada
    if ($uploaded_image['error'] == 0) {
        // Diretório de upload
        $upload_dir = wp_upload_dir();
        $upload_path = $upload_dir['path'] . '/';

        // Nome do arquivo
        $file_name = sanitize_file_name($uploaded_image['name']);

        // Caminho completo para o arquivo
        $file_path = $upload_path . $file_name;

        // Mover o arquivo para o diretório de upload
        move_uploaded_file($uploaded_image['tmp_name'], $file_path);

        // Adicione o arquivo ao e-mail
        $attachments = array($file_path);
    } else {
        $attachments = array();
    }

    // Adicione os endereços de e-mail separados por vírgula
    $to = 'quanticsorocaba@gmail.com, bhlucascampos@gmail.com';

    $subject = 'Novo envio de formulário';
    $message = "Nome: $name\nTelefone: $phone\nEmail: $email\nIdeia: $idea";

    // Cabeçalhos para o e-mail
    $headers = array('Content-Type: text/html; charset=UTF-8');

    // Use a função wp_mail() para enviar o e-mail com anexo
    wp_mail($to, $subject, $message, $headers, $attachments);

    // Redirecione para a página de agradecimento ou outra página após o processamento
    wp_redirect(home_url('./index.php/agradecer/'));
    exit;
}


function custom_image_quality($quality) {
    return 100; // Define a qualidade da imagem para 100%
}
add_filter('jpeg_quality', 'custom_image_quality');
add_filter('wp_editor_set_quality', 'custom_image_quality');

function custom_png_compression() {
  return 9; // Define a compressão PNG para o valor desejado (geralmente entre 0 e 9)
}
add_filter('wp_editor_set_quality', 'custom_png_compression');