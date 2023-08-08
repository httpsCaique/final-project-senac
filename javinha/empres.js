function calcempresa() {
    var lucroBruto = Number(document.getElementById("emp1").value);
    var gastoFuncionarios = Number(document.getElementById("emp2").value);
    var materiaPrima = Number(document.getElementById("emp3").value);
    var gastosOperacionais = Number(document.getElementById("emp4").value);
    var gastoImposto = Number(document.getElementById("emp5").value);
  

    var gastoTotal = gastoFuncionarios + materiaPrima + gastosOperacionais + gastoImposto;
    var subtracaoTotal = lucroBruto - gastoTotal;
  
    document.getElementById("gasto").textContent = gastoTotal.toFixed(2);
    document.getElementById("lucro").textContent = subtracaoTotal.toFixed(2);


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
  
 

  
  
  
  