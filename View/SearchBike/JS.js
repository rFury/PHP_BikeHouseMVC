
function Select() {
    const selectedValue = document.getElementById("bikeSearch").value;
    const inputContainer = document.getElementById("dynamicInput");
    inputContainer.innerHTML = "";

    if (selectedValue === "stock") {
        const selectInput = document.createElement("select");
        selectInput.name = "stock";
        const option1 = document.createElement("option");
        option1.value = "In Stock";
        option1.text = "In Stock";
        const option2 = document.createElement("option");
        option2.value = "Out of Stock";
        option2.text = "Out of Stock";
        selectInput.appendChild(option1);
        selectInput.appendChild(option2);
        inputContainer.appendChild(selectInput);
    }
    else if (selectedValue === "Type") {
        const selectInput = document.createElement("select");
        selectInput.name = "Type";
        const option1 = document.createElement("option");
        option1.value = "Dirt Bike";
        option1.text = "Dirt Bike";
        const option2 = document.createElement("option");
        option2.value = "Sport Bike";
        option2.text = "Sport Bike";
        selectInput.appendChild(option1);
        selectInput.appendChild(option2);
        inputContainer.appendChild(selectInput);
    }
    else {
        const input = document.createElement("input");
        input.type = selectedValue === "Price" || selectedValue === "Year" ? "number" : "text";
        input.name = selectedValue;
        input.required = true;
        inputContainer.appendChild(input);
    }
}
