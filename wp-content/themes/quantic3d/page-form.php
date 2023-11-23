<?php
/*
Template Name: Página Personalizada com Formulário
*/
get_header();

// Processar o formulário quando enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
}

?>

<div id="primary" class="content-area container">
  <main id="main" class="site-main">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <header class="entry-header">
        <h1 class="entry-title"><?php the_title(); ?></h1>
      </header>

      <div class="entry-content">
				<form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post" enctype="multipart/form-data" novalidate id="custom-form">
					<label for="your-name">Nome:</label>
					<input type="text" name="your-name" id="your-name" required placeholder="Nome">

					<label for="your-phone">Telefone:</label>
					<input type="tel" name="your-phone" id="your-phone" required placeholder="Telefone">

					<label for="your-email">Email:</label>
					<input type="email" name="your-email" id="your-email" required placeholder="Email">

					<label for="your-idea">Descreva sua ideia:</label>
					<textarea name="your-idea" id="your-idea" required placeholder="Descreva sua ideia"></textarea>

					<label for="your-image">Anexar imagem exemplo da sua ideia (até 10MB):</label>
					<input type="file" name="your-image" id="your-image" accept="image/jpeg, image/png, image/gif" maxsize="10000000">

					<div class="d-flex justify-content-between">
						<input type="hidden" name="action" value="custom_form_submission">
						<input class="post_form" type="submit" value="Enviar">

						<div id="wp_form">
							<a class="d-flex align-items-center link" href="https://api.whatsapp.com/send?phone=5515981679823&text=Estou%20entrando%20em%20contato%20para%20aproveitar%20a%20promo%C3%A7%C3%A3o%20da%20Black%20Friday.">
								<h6>Se preferir faça seu pedido por whatsapp</h6>
								<img src="<?php echo get_template_directory_uri() . '/assets/img/icon/wp.svg'; ?>" alt=""   width="70px">
							</a>
						</div>
					</div>
				</form>
                
			</div>
		</article>
	</main>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    var form = document.getElementById('custom-form');
    var phoneField = document.getElementById('your-phone');

    phoneField.addEventListener('input', function (event) {
        formatarTelefone(this);
    });

    form.addEventListener('submit', function (event) {
        // Validação do campo Nome
        var nameField = document.getElementById('your-name');
        if (nameField.value.trim() === '') {
            alert('Por favor, preencha o campo Nome.');
            event.preventDefault();
            return false;
        }

        // Validação do campo Telefone
        if (phoneField.value.trim() === '') {
            alert('Por favor, preencha o campo Telefone.');
            event.preventDefault();
            return false;
        } else if (!validar_telefone(phoneField.value.trim())) {
            alert('Por favor, insira um número de telefone válido. Ex: (99)988887777');
            event.preventDefault();
            return false;
        }

        // Validação do campo Email
        var emailField = document.getElementById('your-email');
        if (emailField.value.trim() === '') {
            alert('Por favor, preencha o campo Email.');
            event.preventDefault();
            return false;
        } else if (!validar_email(emailField.value.trim())) {
            alert('Por favor, insira um endereço de e-mail válido.');
            event.preventDefault();
            return false;
        }

        // Validação do campo Descreva sua ideia
        var ideaField = document.getElementById('your-idea');
        if (ideaField.value.trim() === '') {
            alert('Por favor, preencha o campo Descreva sua ideia.');
            event.preventDefault();
            return false;
        }

        // Adicione mais validações conforme necessário

        return true; // Submeter o formulário se todas as validações passarem
    });
});

function validar_telefone(telefone) {
    // Expressão regular para validar um número de telefone com DDD
    var padraoTelefone = /^\([1-9]{2}\)\d{8,9}$/;
    return padraoTelefone.test(telefone);
}

function validar_email(email) {
    // Expressão regular para validar um endereço de e-mail
    var padraoEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return padraoEmail.test(email);
}

function formatarTelefone(input) {
    var numeroTelefone = input.value.replace(/\D/g, '');
    
    if (numeroTelefone.length >= 2) {
        input.value = '(' + numeroTelefone.substring(0, 2) + ')' + numeroTelefone.substring(2);
    } else {
        input.value = numeroTelefone;
    }
}

</script>

<?php
get_footer();
?>