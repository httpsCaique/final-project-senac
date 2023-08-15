function updateRangeValue() {
    let dif3Element = document.getElementById("dif3");
    let rangeValue = document.getElementById("rangeValue");

    rangeValue.innerText = dif3Element.value;
    calcinvestimento(); //Chamando a função de cálculo toda vez que o valor é atualizado
}


function calcinvestimento() {
    let dif1 = Number(document.getElementById("dif1").value);
    let investments = document.getElementById("investments").value; // Get the selected value from the dropdown
    let dif2 = parseFloat(document.getElementById("dif2").value); // Parse the value as a float
    let dif3 = parseFloat(document.getElementById("dif3").value); // Parse the value as a float

    let resultado = 0;

    switch (investments) {
        case "selic": // Make sure to compare with a string value
            dif2 = dif2 * ((9.25 / 100) + (13.25 / 100)); // Annual

            // Month
            if (dif3 === 6 || dif3 === 12) {
                dif3 = dif3 * (0.7708 / 100) + (6.625 / 100);
            } else {
                dif3 = dif3 * (0.7708 / 100);
            }

            resultado = dif1 * (dif2 + dif3); // Calculate the final result

            document.getElementById("resultado").textContent = resultado.toFixed(2); // Update the result element
            break;


        case "prefixado":
            dif2 = dif2 * ((9.25 / 100) + (13.25 / 100)); // Annual

            // Month
            if (dif3 === 6 || dif3 === 12) {
                dif3 = dif3 * (0.7708 / 100) + (6.625 / 100);
            } else {
                dif3 = dif3 * (0.7708 / 100);
            }

            resultado = dif1 * (dif2 + dif3); // Calculate the final result

            document.getElementById("resultado").textContent = resultado.toFixed(2); // Update the result element

            
        break;

        case "ipca":

        dif2 = dif2 * ((9.25 / 100) + (13.25 / 100)); // Annual

        // Month
        if (dif3 === 6 || dif3 === 12) {
            dif3 = dif3 * (0.7708 / 100) + (6.625 / 100);
        } else {
            dif3 = dif3 * (0.7708 / 100);
        }

        resultado = dif1 * (dif2 + dif3); // Calculate the final result

        document.getElementById("resultado").textContent = resultado.toFixed(2); // Update the result element

        break;

        case "renda":

        dif2 = dif2 * ((9.25 / 100) + (13.25 / 100)); // Annual

        // Month
        if (dif3 === 6 || dif3 === 12) {
            dif3 = dif3 * (0.7708 / 100) + (6.625 / 100);
        } else {
            dif3 = dif3 * (0.7708 / 100);
        }

        resultado = dif1 * (dif2 + dif3); // Calculate the final result

        document.getElementById("resultado").textContent = resultado.toFixed(2); // Update the result element

        break;

  

        default:
            console.log("Invalid investment type");
            break;
    }
}


