// validation.js
document.addEventListener("DOMContentLoaded", function () {
    document.querySelector("form").addEventListener("submit", function (event) {
        var error = false;

        // Validate CIN
        var cin = document.getElementById("cin").value;
        var erreurCin = document.getElementById("erreurCin");
        if (!/^\d{8}$/.test(cin)) {
            erreurCin.textContent = "CIN must be 8 digits.";
            error = true;
        } else {
            erreurCin.textContent = "";
        }

        // Validate Nom
        var nom = document.getElementById("nom").value;
        var erreurNom = document.getElementById("erreurNom");
        if (nom.length > 15) {
            erreurNom.textContent = "Nom must not exceed 15 characters.";
            error = true;
        } else {
            erreurNom.textContent = "";
        }

        // Validate Prénom
        var prenom = document.getElementById("prenom").value;
        var erreurPrenom = document.getElementById("erreurPrenom");
        if (prenom.length > 15) {
            erreurPrenom.textContent = "Prénom must not exceed 15 characters.";
            error = true;
        } else {
            erreurPrenom.textContent = "";
        }

        // Validate Email
        var email = document.getElementById("email").value;
        var erreurEmail = document.getElementById("erreurEmail");
        if (!/\S+@\S+\.\S+/.test(email)) {
            erreurEmail.textContent = "Invalid email address.";
            error = true;
        } else {
            erreurEmail.textContent = "";
        }

        if (error) {
            event.preventDefault(); // Prevent form submission if there are errors
        }
    });
});
