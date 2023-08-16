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




}

function limparCampos() {
    // Limpar campos de entrada
    document.getElementById("dif1").value = "";
    document.getElementById("investments").selectedIndex = 0;
    document.getElementById("dif2").value = "";
    document.getElementById("dif3").value = "";
    document.getElementById("rangeValue").innerText = "";
    
    // Limpar resultados
    document.getElementById("resultado").textContent = "0.00";
    document.getElementById("poupança").textContent = "0.00";
}
