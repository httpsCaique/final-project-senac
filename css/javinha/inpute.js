function calcsalario() {
  let salario = Number(document.getElementById("salario").value);

  var n50 = salario * 0.5;
  var n30 = salario * 0.3;
  var n20 = salario * 0.2;

  document.getElementById("n50").textContent = n50;
  document.getElementById("n30").textContent = n30;
  document.getElementById("n20").textContent = n20;
}



function limparCampos() {
  document.getElementById("salario").value = "";
  document.getElementById("n50").textContent = "";
  document.getElementById("n30").textContent = "";
  document.getElementById("n20").textContent = "";
}



function calcsalario() {
  let salario = Number(document.getElementById("salario").value);

  var n50 = salario * 0.5;
  var n30 = salario * 0.3;
  var n20 = salario * 0.2;

  document.getElementById("n50").textContent = n50;
  document.getElementById("n30").textContent = n30;
  document.getElementById("n20").textContent = n20;

  // Criar o gráfico
  var ctx = document.getElementById("grafico").getContext("2d");
  var myChart = new Chart(ctx, {
    type: "bar",
    data: {
      labels: ["50%", "30%", "20%"],
      datasets: [
        {
          label: "Valores",
          data: [n50, n30, n20],
          backgroundColor: ["rgba(255, 99, 132, 0.2)", "rgba(54, 162, 235, 0.2)", "rgba(75, 192, 192, 0.2)"],
          borderColor: ["rgba(0, 0, 0)", "rgba(0, 0, 0)", "rgba(0, 0, 0)"],
          borderWidth: 5,
        },
      ],
    },
    options: {
      scales: {
        y: {
          beginAtZero: true,
        },
      },
    },
  });
}

