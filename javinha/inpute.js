document.getElementById('button01').addEventListener('click', function () {
    var salario = parseFloat(document.getElementById('salario').value);

    if (!isNaN(salario)) {
      var gastosEssenciais = salario * 0.5;
      var gastosVariaveis = salario * 0.3;
      var poupanca = salario * 0.2;

      document.getElementById('n50').value = gastosEssenciais.toFixed(2);
      document.getElementById('n30').value = gastosVariaveis.toFixed(2);
      document.getElementById('n20').value = poupanca.toFixed(2);
    } else {
      alert('Por favor, insira um valor válido para o salário.');
    }
  });

