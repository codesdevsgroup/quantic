jQuery(document).ready(function($) {
  $(document).on('click', function(e) {
    // Verifica se o clique não é dentro do menu e se o menu está aberto
  	if (!$(e.target).closest('#main-menu').length && $('#main-menu').hasClass('show')) {
    $('#main-menu').removeClass('show'); // Fecha o menu
    }
  });
});

/* Animação digitação da home */
const topics = [
  "Impressão 3D",
  "Prototipagem",
  "Action Figures",
  "Design 3D",
  "Assitencia Técnica",
  "Manutenção em Impressoras 3D"
];

const textoDigitado = document.getElementById("textoDigitado");
const cursor = document.getElementById("cursor");

function typeText(index, charIndex) {
  if (charIndex < topics[index].length) {
      const topic = topics[index];
      const char = topic.charAt(charIndex);
      textoDigitado.textContent += char;
      setTimeout(function () {
          typeText(index, charIndex + 1);
      }, 100); // Intervalo de 100ms entre cada caractere
  } else {
      setTimeout(function () {
          eraseText(index, topics[index].length - 1);
      }, 1000); // 1000ms de pausa após digitar o texto
  }
}

function eraseText(index, charIndex) {
  if (charIndex >= 0) {
      const topic = topics[index];
      textoDigitado.textContent = topic.substring(0, charIndex);
      setTimeout(function () {
          eraseText(index, charIndex - 1);
      }, 20); // Intervalo de 20ms entre apagar cada caractere (mais rápido)
  } else {
      setTimeout(function () {
          const nextIndex = (index + 1) % topics.length;
          typeText(nextIndex, 0);
      }, 1000); // 1000ms de pausa após apagar o texto
  }
}

typeText(0, 0);

function checkWindowWidth() {
  var windowWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

  // Decide qual vídeo carregar com base na largura da janela
  if (windowWidth < 600) {
      document.getElementById('bgVideo').style.display = 'none';
      document.getElementById('bgVideoMobile').style.display = 'block';
  } else {
      document.getElementById('bgVideo').style.display = 'block';
      document.getElementById('bgVideoMobile').style.display = 'none';
  }
}


// Aguarde até que a página esteja totalmente carregada
document.addEventListener('DOMContentLoaded', function() {
  // Selecione o modal pelo ID e exiba-o
  var myModal = new bootstrap.Modal(document.getElementById('blackFridayModal'));
  myModal.show();
});
