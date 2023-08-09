function calcempresa() {
    var val1 = Number(document.getElementById("emp1").value);
    var val2 = Number(document.getElementById("emp2").value);
    var val3 = Number(document.getElementById("emp3").value);
    var val4 = Number(document.getElementById("emp4").value);
    var val5 = Number(document.getElementById("emp5").value);
    var val6 = Number(document.getElementById("emp6").value);
    var val7 = Number(document.getElementById("emp7").value);
    var val8 = Number(document.getElementById("emp8").value);
  

    var gasto =  val2 + val3 + val4 + val5 + val6 + val7 + val8 ;
    var gastoTotal =  gasto * -1 ;
    var subtracaoTotal = val1 - gasto;
  
    document.getElementById("gasto").textContent = gastoTotal.toFixed(2);
    document.getElementById("lucro").textContent = subtracaoTotal.toFixed(2);



    var ctx = document.getElementById('myChart').getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Gasto Total', 'Lucro Líquido'],
      datasets: [{
        label: 'Valores',
        data: [gasto, subtracaoTotal],
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
    document.getElementById("emp6").value = "";
    document.getElementById("emp7").value = "";
    document.getElementById("emp8").value = "";
    document.getElementById("gasto").textContent = "";
    document.getElementById("lucro").textContent = "";
  }
  
 

  
  
  
  