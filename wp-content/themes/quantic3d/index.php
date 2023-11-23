<?php get_header(); ?>

<section id="home">
  <div class="wp-block-cover">

    <video 
      class="wp-block-cover__video-background intrinsic-ignore" 
      loop="" 
      playsinline="" 
      style="object-position:50% 50%; display: none;" 
      data-object-fit="cover"
      data-object-position="50% 50%"
      autoplay="true" 
      id="bgVideoMobile"
    >
      <source src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/video/homemobile.webm" type="video/webm">
      Seu navegador não suporta a tag de vídeo.
    </video>

    <video 
      class="wp-block-cover__video-background intrinsic-ignore" 
      loop="" 
      playsinline="" 
      style="object-position:50% 50%"
      data-object-fit="cover"
      data-object-position="50% 50%"
      autoplay="true" 
      id="bgVideo"
    >
      <source src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/video/home.webm" type="video/webm">
      Seu navegador não suporta a tag de vídeo.
    </video>
    
    <div id="grid_text_home" class="text-center scr_top">
      
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/logo.png" alt="Quantic 3D" width="340" height="64">
      <div >
        <div id="container">
          <div id="textoDigitado"></div>
          <div id="cursor">|</div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="presset" class="container-fluid">
  <div class="row text-center scr_top_nr">
    <div class="col-12 col-sm-3 p-1 p-sm-4">
      <a class="nav-link scr_left" href="#presset"><h3>Impressão 3D</h3></a>
    </div>
    <div class="col-12 col-sm-3 p-1 p-sm-4">
      <a class="nav-link scr_left_slow_1" href="#prototipag"><h3>Prototipagem Industrial</h3></a>
    </div>
    <div class="col-12 col-sm-3 p-1 p-sm-4 scr_left_slow_2">
      <a class="nav-link" href="./index.php/product/"><h3>Action Figures</h3></a>
    </div>
    <div class="col-12 col-sm-3 p-1 p-sm-4 scr_left_slow_3">
      <a class="nav-link" href="http://"><h3>Outros Serviços</h3></a>
    </div>
  </div>
</section>

<section id="print_3d" class="container">
  <div class="row">
    <div class="col-sm-6 wow bounceInUp scr_top_nr">
      <img class="img_print_3d" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/print3d.webp" alt="">
    </div>
    <div class="col-sm-6  d-flex align-items-center">
      <div class="text_print_3d scr_top">
        <h3>Nossa impressão 3D</h3>
        <p>
          Nossa tecnologia de impressão 3D de última geração permite que você crie protótipos, peças personalizadas e produtos exclusivos de forma rápida e acessível. Seja você um designer, engenheiro ou entusiasta criativo, nossa impressão 3D é a resposta para dar vida às suas ideias.
        </p>

        <h4>Impressão Personalizada</h4>
        <p>
          Seja qual for o seu projeto, desde prototipagem rápida até peças sob medida, estamos prontos para atender às suas necessidades. Nossa tecnologia de impressão 3D de precisão é capaz de produzir objetos complexos e detalhados que atendem às suas especificações.
        </p>
        
        <h4>Prototipagem Rápida</h4>
        <p>
          A impressão 3D é a maneira ideal de transformar conceitos em protótipos funcionais. Nossa equipe experiente e equipamentos avançados garantem que você tenha seus protótipos em mãos em tempo recorde.
        </p>

        <h4>Produção em série</h4>
        <p>
          Não apenas oferecemos prototipagem, mas também produção em série. Se você precisa de várias cópias de um componente, podemos entregar com eficiência e qualidade, garantindo que seu projeto seja bem-sucedido.
        </p>

        <h4>Materiais de Qualidade</h4>
        <p>
          Trabalhamos com uma variedade de materiais, desde plásticos resistentes até meterias de alto desempenho. Nossa seleção de materiais de qualidade garante que seu projeto seja adequado para a aplicação desejada.
        </p>
      </div>
    </div>
    
  </div>

</section>

<section id="process">
  <div class="container">

    <h2>Processo de impressão</h2>

    <div id="cards-process" class="row align-items-center">

      <div class="col-12 col-sm">
        <div class="custom-shadow card_process p-2 m-3 scr_left_slow">
          <img class="p-1" src="<?php echo get_template_directory_uri() . '/assets/img/icon/lightbulbon.svg'; ?>" alt="Lightbulb Icon" width="70px" height="auto">
          <h3>Coleta da Ideia:</h3>
          <p>
            Começa com a sua visão. Nossa equipe ouve suas ideias e requisitos para transformá-las em realidade, seja para projetos inovadores ou peças específicas.
          </p>
        </div>
      </div>
            
      <div class="col-12 col-sm">
        <div class="custom-shadow card_process p-2 m-3 scr_left_slow_1">
          <img class="p-1" src="<?php echo get_template_directory_uri() . '/assets/img/icon/tresd.svg'; ?>" alt="Lightbulb Icon" width="65px" height="auto">
          <h3>Criação do Arquivo 3D:</h3>
          <p>
            Nossos especialistas criam um modelo 3D digital preciso a partir de sua ideia usando software avançado e experiência.
          </p>
        </div>
      </div>

      <div class="col-12 col-sm">
        <div class="custom-shadow card_process p-2 m-3 scr_left_slow_1">
          <img class="p-1" src="<?php echo get_template_directory_uri() . '/assets/img/icon/check.svg'; ?>" alt="Lightbulb Icon" width="78px" height="auto">
          <h3>Aprovação da Produção:</h3>
          <p>
            Você revisa o modelo 3D, fazendo ajustes conforme necessário. Após aprovação, avançamos para a etapa de produção.
          </p>
        </div>
      </div>

      <div class="col-12 col-sm">
        <div class="custom-shadow card_process p-2 m-3 scr_left_slow_2">  
          <img class="p-1" src="<?php echo get_template_directory_uri() . '/assets/img/icon/producao.svg'; ?>" alt="Lightbulb Icon" width="74px" height="auto">
          <h3>Produção:</h3>
          <p>
            Com sua aprovação, iniciamos o processo de impressão 3D. Nossa tecnologia de ponta e seleção de materiais de qualidade garantem que cada peça seja produzida com precisão e durabilidade.
          </p>
        </div>
      </div>

      <div class="col-12 col-sm">
        <div class="custom-shadow card_process p-2 m-3 scr_bottom">
          <img class="p-1" src="<?php echo get_template_directory_uri() . '/assets/img/icon/entrega.svg'; ?>" alt="Lightbulb Icon" width="69px" height="auto">
          <h3>Entrega ou Retirada:</h3>
          <p>
            Quando o projeto está concluído, você pode escolher entre a retirada das peças em nossa instalação ou a entrega das peças em sua localização, conforme sua preferência.
          </p>
        </div>
      </div>

      <div class="text-center h5 scr_right">
        <p>
          Esse processo de 5 etapas permite que você acompanhe todo o ciclo, desde a concepção até a entrega das peças impressas em 3D.
        </p>
      </div>
    </div>
  </div>
</section>

<section id="text_print_3d">
  <div class="container">
    <div class="row text_print_3d align-items-center p-0 p-sm-3">
      <div class="col-3 d-none d-sm-block">
        <img class="img-fluid scr_top" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/compromisso01.webp" alt="">
      </div>

      <div class="col-12 col-sm-6 text-center">
        <p class="p-1 p-sm-4 scr_bottom">
          Estamos ansiosos para ser seu parceiro de confiança em todas as suas necessidades de impressão. Entre em contato conosco hoje mesmo para discutir seu projeto e receber um orçamento personalizado. Na Quantic, a qualidade é nossa prioridade e seu sucesso é o nosso compromisso.
        </p>

        <button type="button" class="custom-shadow scr_bottom">
          <a href="https://api.whatsapp.com/send/?phone=5515981679823&text=Contato+site+Quantic3D&type=phone_number&app_absent=0">Entre em contato</a>
        </button>
      </div>

      <div class="col-3 d-none d-sm-block">
        <img class="img-fluid  scr_top" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/compromisso02.webp" alt="">
      </div>
    </div>
  </div>
</section>

<section id="prototipag" class="container">
  <div class="row align-items-center">
    <div class="col-12 col-sm-6 mb-sm-5">
      <img class="img_print_3d scr_bottom" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/prototipagem01.webp" alt="">
    </div>

    <div class="col-12 col-sm-6 prototipag-text scr_top">
      <h3>Conheça nossa prototipagem 3D industrial</h3>
      <p>
        Na vanguarda da inovação tecnológica, a Quantic3D orgulha-se de oferecer serviços de prototipagem 3D industrial de ponta, projetados para impulsionar o sucesso de sua empresa. A prototipagem 3D industrial é a chave para o desenvolvimento eficiente de produtos, economizando tempo e recursos valiosos.
      </p>
    </div>

    <div class="col-12 col-sm-6 d-none d-sm-block scr_top">
      <h3>Por que Escolher a Prototipagem 3D Industrial da Quantic3D?</h3>
  
      <p>
        Precisão Inigualável: Nossa tecnologia de impressão 3D industrial oferece um nível incomparável de precisão, garantindo que seus protótipos sejam fiéis às suas especificações.
      </p>
  
      <p>
        Rapidez e Eficiência: A prototipagem 3D industrial acelera o processo de desenvolvimento de produtos. Não mais esperas intermináveis; seus protótipos podem ser produzidos rapidamente, permitindo que você teste e aprimore suas ideias em um piscar de olhos.
      </p>
      <p>
        Redução de Custos: Economize em custos de produção e material, eliminando a necessidade de fabricar protótipos físicos tradicionais. Isso não apenas economiza dinheiro, mas também contribui para a redução de desperdício.
      </p>
      <p>
        Personalização e Flexibilidade: Cada projeto é único, e nossa prototipagem 3D industrial oferece a flexibilidade necessária para atender a uma variedade de requisitos de design. Seja qual for o seu setor, adaptamos nossos serviços às suas necessidades específicas.
      </p>
    </div>

    <div class="d-block d-sm-none">
      <button 
        type="button" 
        class="btn btn-primary" 
        data-bs-toggle="modal" 
        data-bs-target="#exampleModal"
      >
        Saiba mais
      </button>
    </div>

    <div class="col-12 col-sm-6 d-none d-sm-block">
      <img class="img_print_3d scr_bottom" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/prototipagem02.webp" alt="">
    </div>

  </div>
</section>

<div class="container">
  <?php
    if (have_posts()){
      while (have_posts()) {
        the_post();
        the_content();
      }
    }
  ?>
</div>

<?php get_template_part('modal'); ?>
<?php get_footer(); ?>