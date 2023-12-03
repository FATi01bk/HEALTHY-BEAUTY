function validateForm() {
    // Get the values from the input fields
    var cin = document.getElementById("cin").value;
    var nom = document.getElementById("nom").value;
    var prenom = document.getElementById("prenom").value;
    var email = document.getElementById("email").value;
    var motdepasse = document.getElementById("motdepasse").value;

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
    if (!/^[a-zA-Z\s']{1,15}$/.test(nom) ) {
        isValid = false;
        document.getElementById("erreurNom").textContent = "Nom  doit contenir jusqu'à 15 caractères.";
       
    }
    if ( !/^[a-zA-Z\s']{1,15}$/.test(prenom)) {
        isValid = false;
        document.getElementById("erreurPrenom").textContent = "prénom doit contenir jusqu'à 15 caractères.";
        
    }


    // Validate Email (contains '@')
    if (email.indexOf('@') === -1) {
        isValid = false;
        document.getElementById("erreurEmail").textContent = "Email must contain '@'";
    } else {
        document.getElementById("erreurEmail").textContent = "";
    }
    
    if (!/(?=(.*\d){2,})(?=(.*[a-zA-Z]){4,})/.test(motdepasse)) {
        isValid = false;
        document.getElementById("erreurMotdepasse").textContent = "Motdepasse doit contenir au moins 2 chiffres et 4 caractères.";
       
    }

    // Log to console
    console.log("Form validation executed. isValid:", isValid);

    return isValid;
}

