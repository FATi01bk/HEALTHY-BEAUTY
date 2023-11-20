function validateForm() {
    // Get the values from the input fields
    var cin = document.getElementById("cin").value;
    var nom = document.getElementById("nom").value;
    var prenom = document.getElementById("prenom").value;
    var email = document.getElementById("email").value;

    // Flag to track if the form is valid
    var isValid = true;

    // Validate Cin (8 digits)
    if (!/^\d{8}$/.test(cin)) {
        isValid = false;
        document.getElementById("erreurCin").textContent = "Cin must be 8 digits";
    } else {
        document.getElementById("erreurCin").textContent = "";
    }

    // Validate Nom (max 15 characters)
    if (nom.length > 15) {
        isValid = false;
        document.getElementById("erreurNom").textContent = "Nom must be max 15 characters";
    } else {
        document.getElementById("erreurNom").textContent = "";
    }

    // Validate Prenom (max 15 characters)
    if (prenom.length > 15) {
        isValid = false;
        document.getElementById("erreurPrenom").textContent = "Prénom must be max 15 characters";
    } else {
        document.getElementById("erreurPrenom").textContent = "";
    }

    // Validate Email (contains '@')
    if (email.indexOf('@') === -1) {
        isValid = false;
        document.getElementById("erreurEmail").textContent = "Email must contain '@'";
    } else {
        document.getElementById("erreurEmail").textContent = "";
    }

    // Log to console
    console.log("Form validation executed. isValid:", isValid);

    return isValid;
}

