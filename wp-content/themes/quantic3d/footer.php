<footer class="site-footer">
  <div class="container">
    <div class="row align-items-center scr_bottom_effects">
      
      <div class=" map col-12 col-sm-6 text-center">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.0381473169023!2d-47.47083072411216!3d-23.49513155916341!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c58ab7d11dc4fb%3A0x6df023873873716c!2sRua%20Ant%C3%B3nio%20Jos%C3%A9%20Rogick%2C%20257%20-%20Vila%20Trujillo%2C%20Sorocaba%20-%20SP%2C%2018060-290!5e0!3m2!1spt-BR!2sbr!4v1698463598521!5m2!1spt-BR!2sbr" width="460" height="320" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>

      <div class="redes_sociais col-12 col-sm-6 ">  
        <p>
          <img src="<?php echo get_template_directory_uri() . '/assets/img/icon/localizacao.svg'; ?>" alt="Icone Localização">
          <a 
            href="https://www.google.com.br/maps/place/Rua+Ant%C3%B3nio+Jos%C3%A9+Rogick,+257+-+Vila+Trujillo,+Sorocaba+-+SP,+18060-290/@-23.4951316,-47.4708307,17z/data=!3m1!4b1!4m6!3m5!1s0x94c58ab7d11dc4fb:0x6df023873873716c!8m2!3d-23.4951365!4d-47.4682558!16s%2Fg%2F11c4rsty7w?entry=ttu" 
            target="_blank">
            Rua António José Rogick, 257 - Vila Trujillo, Sorocaba - SP
          </a>
        </p>

        <p>
          <img src="<?php echo get_template_directory_uri() . '/assets/img/icon/telefone.svg'; ?>" alt="Icone Telefone">
          +55 (15) 98167-9823
        </p>
        
        <p>
          <img src="<?php echo get_template_directory_uri() . '/assets/img/icon/email.svg'; ?>" alt="Icone Email">
          projetoquantic3d@gmail.com
        </p>

        <p>
          <img src="<?php echo get_template_directory_uri() . '/assets/img/icon/instagram.svg'; ?>" alt="Icone Instagram">
          <a href="https://www.instagram.com/quanticimpressao3d" target="_blank">
            @quantic.sorocaba
          </a>
        </p>

        <p>
          <img src="<?php echo get_template_directory_uri() . '/assets/img/icon/facebook.svg'; ?>" width="24" height="auto" alt="Icone Facebook">
          <a href="https://www.facebook.com/profile.php?id=61552490294376&mibextid=LQQJ4d" target="_blank">
            www.facebook.com/quanticsorocaba
          </a>
        </p>

        <p>
          <img src="<?php echo get_template_directory_uri() . '/assets/img/icon/tiktok.svg'; ?>" width="36" height="auto" alt="Icone TikTok">
          <a href="https://www.tiktok.com/@quantic.sorocaba" target="_blank">
            tiktok.com/@quantic.sorocaba
          </a>
        </p>
        
      </div>
    </div>

    <div class=" logo_footer text-center ">
      <img src="<?php echo get_template_directory_uri() . '/assets/img/logo.png'; ?>" width="300px" alt="Logo Quantic">
    </div>     

    <nav class="navbar_footer navbar navbar-expand-md navbar-light ">
    <?php
          wp_nav_menu(array(
          'theme_location' => 'main-menu',
          'container' => false,
          'menu_class' => '',
          'fallback_cb' => '__return_false',
          'items_wrap' => '<ul id="%1$s" class="navbar-nav m-sm-auto mb-2 mb-md-0  %2$s">%3$s</ul>',
          'depth' => 2
          ));
        ?>
    </nav>
  </div>
</footer>
  
<!-- Botão zap zap -->
  <div id="whatsapp-button" class="whatsapp-button">
    <a
      href="https://api.whatsapp.com/send/?phone=5515981679823&text=Contato+site+Quantic3D&type=phone_number&app_absent=0"
      target="_blank">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/btnwp.png" alt="WhatsApp" />
    </a>
  </div>

  <script>
    document.onreadystatechange = function () {
        var preloader = document.getElementById('preloader');
        if (document.readyState === 'complete') {
            preloader.style.opacity = 0; // Define a opacidade para 0 ao finalizar o carregamento
            setTimeout(function () {
                preloader.style.display = 'none';
            }, 2000); // Aguarda 2000 milissegundos (2 segundos) antes de esconder o preloader
        }
    };
  </script>
  <?php wp_footer(); ?>
  <div id="preloader"></div>
</body>
</html>