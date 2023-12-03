function validateForm() {
    // Réinitialiser les messages d'erreur
    document.getElementById("erreurCin").textContent = "";
    document.getElementById("erreurNom").textContent = "";
    document.getElementById("erreurPrenom").textContent = "";
    document.getElementById("erreurNumero").textContent = "";
    document.getElementById("erreurSpecialite").textContent = "";
    document.getElementById("erreurMotdepasse").textContent = "";

    var cin = document.getElementById("cin").value;
    var nom = document.getElementById("nom").value;
    var prenom = document.getElementById("prenom").value;
    var numero = document.getElementById("numero").value;
    var specialite = document.getElementById("specialite").value;
    var motdepasse = document.getElementById("motdepasse").value;

    var isValid = true;

    // Validate CIN (8 digits)
    if (!/^\d{8}$/.test(cin)) {
        isValid = false;
        document.getElementById("erreurCin").textContent = "Cin must be 8 digits";
    } else {
        document.getElementById("erreurCin").textContent = "";
    }


    // Validate Nom and Prenom (up to 15 characters)
    if (!/^[a-zA-Z\s']{1,15}$/.test(nom) ) {
        document.getElementById("erreurNom").textContent = "Nom  doit contenir jusqu'à 15 caractères.";
        isValid = false;
    }
    if ( !/^[a-zA-Z\s']{1,15}$/.test(prenom)) {
        document.getElementById("erreurPrenom").textContent = "prénom doit contenir jusqu'à 15 caractères.";
        isValid = false;
    }

    // Validate Numero (8 digits)
    if (!/^\d{8}$/.test(numero)) {
        document.getElementById("erreurNumero").textContent = "Numero doit contenir 8 chiffres.";
        isValid = false;
    }

    // Validate Specialite (up to 15 characters)
    if (!/^[a-zA-Z\s']{1,15}$/.test(specialite)) {
        document.getElementById("erreurSpecialite").textContent = "Specialite doit contenir jusqu'à 15 caractères.";
        isValid = false;
    }

    // Validate Motdepasse (at least 2 digits and 4 characters)
    if (!/(?=(.*\d){2,})(?=(.*[a-zA-Z]){4,})/.test(motdepasse)) {
        document.getElementById("erreurMotdepasse").textContent = "Motdepasse doit contenir au moins 2 chiffres et 4 caractères.";
        isValid = false;
    }

    return isValid;
}

