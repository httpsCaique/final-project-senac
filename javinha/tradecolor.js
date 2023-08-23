  // Obtém o botão e o elemento nav
  const botaoMudar = document.getElementById('botao-mudar');
  const nav = document.querySelector('nav');
  
  // Define uma variável para controlar o estado da cor
  let corMudada = false;
  
  // Adiciona um evento de clique ao botão
  botaoMudar.addEventListener('click', () => {
    if (corMudada) {
      // Se a cor já foi mudada, retorna à cor original
      nav.style.backgroundColor = '#3498DB';
    } else {
      // Caso contrário, muda para a cor vermelha
      nav.style.backgroundColor = '#FF5733';
    }
    
    // Inverte o estado da cor
    corMudada = !corMudada;
  });