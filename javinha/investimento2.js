// Declare myChart as a global variable
let myChart;

function updateRangeValue() {
    let dif3Element = document.getElementById("dif3");
    let rangeValue = document.getElementById("rangeValue");

    rangeValue.innerText = dif3Element.value;
    calcinvestimento();
}

function calcinvestimento() {
    let dif1 = Number(document.getElementById("dif1").value);
    let investments = document.getElementById("investments").value;
    let dif2 = parseFloat(document.getElementById("dif2").value);
    let dif3 = parseFloat(document.getElementById("dif3").value);

    let resultado = 0;
    let poupança = 0;

    switch (investments) {
        case "selic": // Make sure to compare with a string value
            dif2 = dif2 * ((9.25 / 100) + (13.25 / 100)); // Annual

            // mes
            if (dif3 === 6 || dif3 === 12) {
                dif3 = dif3 * (0.7708 / 100) + (6.625 / 100);
            } else {
                dif3 = dif3 * (0.7708 / 100);
            }

            resultado = dif1 * (dif2 + dif3); // Calculate the final result

            document.getElementById("resultado").textContent = resultado.toFixed(2); // Update the result element


                    //poupança
                dif2 = dif2 * (8.41 / 100); // Annual
                // mes
                dif3 = dif3 * (0.67 / 100);

                poupança = dif1 * (dif2 + dif3); // Calculate the final result

            document.getElementById("poupança").textContent = poupança.toFixed(2); // Update the result element

            break;
        case "prefixado":
            dif2 = dif2 * ((13.68 / 100) + (10.00 / 100)); // Annual

            // mes
            if (dif3 === 6 || dif3 === 12) {
                dif3 = dif3 * (1.14 / 100) + (4.88 / 100);
            } else {
                dif3 = dif3 * (1.14 / 100);
            }

            resultado = dif1 * (dif2 + dif3); // Calculate the final result

            document.getElementById("resultado").textContent = resultado.toFixed(2); // Update the result element

                    //poupança
                dif2 = dif2 * (8.41 / 100); // Annual
                // mes
                dif3 = dif3 * (0.67 / 100);
        
                poupança = dif1 * (dif2 + dif3); // Calculate the final result

        document.getElementById("poupança").textContent = poupança.toFixed(2); // Update the result element
            
        break;

        case "ipca":

        dif2 = dif2 * ((6.22 / 100) + (6.00 / 100)); // Annual

        // mes
        if (dif3 === 6 || dif3 === 12) {
            dif3 = dif3 * (0.5183 / 100) + (2.96 / 100);
        } else {
            dif3 = dif3 * (0.5183 / 100);
        }

        resultado = dif1 * (dif2 + dif3); // Calculate the final result

        document.getElementById("resultado").textContent = resultado.toFixed(2); // Update the result element

                //poupança
                dif2 = dif2 * (8.41 / 100); // Annual
                // mes
                dif3 = dif3 * (0.67 / 100);
        
                poupança = dif1 * (dif2 + dif3); // Calculate the final result
        
                document.getElementById("poupança").textContent = poupança.toFixed(2); // Update the result element


        break;

        case "renda":

        dif2 = dif2 * ((6.50 / 100) + (20.00 / 100)); // Annual

        // mes
        if (dif3 === 6 || dif3 === 12) {
            dif3 = dif3 * (0.5417 / 100) + (22.00 / 100);
        } else {
            dif3 = dif3 * (0.5417 / 100);
        }

        resultado = dif1 * (dif2 + dif3); // Calculate the final result

        document.getElementById("resultado").textContent = resultado.toFixed(2); // Update the result element

        //poupança
        dif2 = dif2 * (8.41 / 100); // Annual
        // mes
        dif3 = dif3 * (0.67 / 100);

        poupança = dif1 * (dif2 + dif3); // Calculate the final result

        document.getElementById("poupança").textContent = poupança.toFixed(2); // Update the result element




        break;

  



        default:
            console.log("Invalid investment type");
            break;
    }

    document.getElementById("resultado").textContent = resultado.toFixed(2);
    document.getElementById("poupança").textContent = poupança.toFixed(2);

    // Update the chart data and destroy/create the chart
    updateChart(resultado, poupança);
}

function updateChart(Investimento, Poupança) {
    // Create the data for the doughnut chart
    let chartData = {
        labels: ["Investimento", "Poupança"],
        datasets: [
            {
                data: [Investimento, Poupança],
                backgroundColor: ["rgba(255, 99, 132, 0.2)", "rgba(54, 162, 235, 0.2)"],
                borderColor: ["rgba(0, 0, 0)", "rgba(0, 0, 0)"],
                borderWidth: 2,
            },
        ],
    };

    let ctx = document.getElementById("investmentChart").getContext("2d");

    // If myChart already exists, destroy it before creating a new one
    if (myChart) {
        myChart.destroy();
    }

    // Create a new doughnut chart using Chart.js
    myChart = new Chart(ctx, {
        type: "doughnut",
        data: chartData,
    });
}

function limparCampos() {
    document.getElementById("dif1").value = "";
    document.getElementById("investments").selectedIndex = 0;
    document.getElementById("dif2").value = "";
    document.getElementById("dif3").value = "";
    document.getElementById("rangeValue").innerText = "";
    document.getElementById("resultado").textContent = "0.00";
    document.getElementById("poupança").textContent = "0.00";

    // If myChart exists, destroy it when clearing fields
    if (myChart) {
        myChart.destroy();
    }
}
