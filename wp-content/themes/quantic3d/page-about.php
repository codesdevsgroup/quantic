<?php 
/* 
Template Name:about 
*/
get_header(); ?>

<section id="about" class="container">
	<div class="row">

		<div id="about_img" class="text-center col-12 col-sm-6 m-auto p-auto">
			<img class="img-fluid" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/about.webp" alt="Ilustrção da Historia da Empresa">
		</div>
			
		<div class="col-12 col-sm-6 text-center m-auto">
			<div  id="about_text">
				<h2>História da Quantic:</h2>
				<h4 class="h5">A Quantic tem o prazer de compartilhar sua jornada conosco.</h4>

				<p>
					Somos uma equipe apaixonada que nasceu da Quantic Assistência Técnica e Tecnologia, com um objetivo claro: tornar o impossível, possível.
				</p>
			
				<p>
					Inicialmente, nosso foco era resolver problemas técnicos e criar soluções para consertar impressoras convencionais. Quando peças quebravam e não estavam disponíveis no mercado, nós as fabricávamos com nossa expertise.
				</p>
			
				<p>
					Com o advento da impressão 3D, descobrimos um novo universo de possibilidades. Começamos a imprimir peças sob medida, mas rapidamente percebemos que isso era apenas o começo. A impressão 3D se tornou nossa paixão e uma oportunidade incrível para atender às demandas do mercado.
				</p>
				
				<p>
					Hoje, oferecemos prototipagem para a indústria, produzimos action figures incríveis e até oferecemos pinturas à mão personalizadas. A Quantic 3D não conhece limites, pois transformamos ideias em realidade física. Se você pode sonhar, nós podemos criar.
				</p>

				<p>
				Estamos empolgados para compartilhar nossa jornada com você. Junte-se a nós nessa aventura 3D, e juntos, vamos criar o inimaginável.
				</p>
			</div>
			
		</div>

	</div>

</section>

<section id="contact" class="container">

    <div class="contact row">
        
        <div class="col-12 col-sm-6 contact-a">
				<img class="img-fluid" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/contact.png" alt="Ilustrção da Historia da Empresa">
        </div>

        <div class="col-12 col-sm-6 m-auto"> 
            <div class="p-3 contact_text">
                <h2>Gostaria de entrar em contato conosco?</h2>
                <p>Entre em contato! Estamos sempre à disposição para ajudá-lo da melhor maneira possível.</p>
                
                <p><img src="<?php echo get_template_directory_uri() . '/assets/img/icon/localizacao.svg'; ?>" alt="Lightbulb Icon"><a href="http://">Rua António José Rogick, 257 - Vila Trujillo, Sorocaba - SP</a></p>
                <p><img src="<?php echo get_template_directory_uri() . '/assets/img/icon/telefone.svg'; ?>" alt="Lightbulb Icon"> +55 (15) 98167-9823</p>
                <p><img src="<?php echo get_template_directory_uri() . '/assets/img/icon/email.svg'; ?>" alt="Lightbulb Icon"> quanticsorocaba@gmail.com</p>
                <p><img src="<?php echo get_template_directory_uri() . '/assets/img/icon/instagram.svg'; ?>" alt="Lightbulb Icon"> <a href="http://">@quantic.sorocaba</a></p>
                <button>
								<img class="custom-shadow mt-1 pb-1" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon/wp.svg" alt="Icone WhatsApp" width ="28" height="auto">
                    <a href="aidjioa">WhastApp</a>
                </button>
            </div>
        </div>

    </div>

</section>


<!-- <?php
while (have_posts()) : the_post();
	// Exibir o conteúdo da página
	the_content();
endwhile;
?> -->

<?php get_footer(); ?>