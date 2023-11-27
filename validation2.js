function validateForm() {
    // Get the values from the input fields
    var cin = document.getElementById("cin").value;
    var nom = document.getElementById("nom").value;
    var prenom = document.getElementById("prenom").value;
    var date_naissance = document.getElementById("date_naissance").value;
    var age = document.getElementById("age").value;
    var numero = document.getElementById("numero").value;
    var specialite = document.getElementById("specialite").value;

    // Flag to track if the form is valid
    var isValid = true;

    // Reset error messages
    document.getElementById("erreurCin").textContent = "";
    document.getElementById("erreurNom").textContent = "";

    // Validate Cin (8 digits)
    if (!/^\d{8}$/.test(cin)) {
        isValid = false;
        document.getElementById("erreurCin").textContent = "Cin must be 8 digits";
    }

    // Validate Nom (max 15 characters)
    if (nom.length > 15) {
        isValid = false;
        document.getElementById("erreurNom").textContent = "Nom must be max 15 characters";
    }

    // Log final result
    console.log("Form validation executed. isValid:", isValid);

    return isValid;
}
