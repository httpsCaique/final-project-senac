function calcempresa() {
  var lucroBruto = Number(document.getElementById("emp1").value);
  var gastoFuncionarios = Number(document.getElementById("emp2").value);
  var materiaPrima = Number(document.getElementById("emp3").value);
  var gastosOperacionais = Number(document.getElementById("emp4").value);
  var gastoImposto = Number(document.getElementById("emp5").value);

  var gastoTotal = gastoFuncionarios + materiaPrima + gastosOperacionais + gastoImposto;
  var subtracaoTotal = lucroBruto - gastoTotal;

  document.getElementById("gasto").textContent = gastoTotal;
  document.getElementById("lucro").textContent = subtracaoTotal;

  var ctx = document.getElementById('myChart').getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Gasto Total', 'Lucro Líquido'],
      datasets: [{
        label: 'Valores',
        data: [gastoTotal, subtracaoTotal],
        backgroundColor: ['rgba(255, 99, 132, 0.6)', 'rgba(54, 162, 235, 0.6)'],
        borderColor: ['rgba(0,0,0)', 'rgba(0,0,0)'],
        borderWidth: 5 
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });

}








  
  
  
  
  function limpartudo() {
    document.getElementById("emp1").value = "";
    document.getElementById("emp2").value = "";
    document.getElementById("emp3").value = "";
    document.getElementById("emp4").value = "";
    document.getElementById("emp5").value = "";
    document.getElementById("gasto").textContent = "";
    document.getElementById("lucro").textContent = "";
  }



  
 

  
  
  
  