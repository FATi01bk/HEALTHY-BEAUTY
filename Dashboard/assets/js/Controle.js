function validateForm() {
    var datePattern = /^[0-9]{4}-[0-9]{2}-[0-9]{2}$/;
    var cinPattern = /^[0-9]{8}$/;
    var namePattern = /^[A-Za-z]{3,}$/;
    var firstnamePattern = /^[A-Za-z]{3,}$/;
    var agePattern = /^[0-9]{2}$/;
    var addressPattern = /^[A-Za-z0-9]{3,}$/;
    var phonePattern = /^[0-9]{8}$/;
    var fichePattern = /^[0-9]{3}$/;

    var date = document.forms["myForm"]["date"].value;
    var cin = document.forms["myForm"]["cin"].value;
    var name = document.forms["myForm"]["name"].value;
    var firstname = document.forms["myForm"]["firstname"].value;
    var age = document.forms["myForm"]["age"].value;
    var address = document.forms["myForm"]["address"].value;
    var phone = document.forms["myForm"]["phone"].value;
    var fiche = document.forms["myForm"]["fiche"].value;

    if (!datePattern.test(date)) {
        alert("Veuillez entrer une date valide (AAAA-MM-JJ)");
        return false;
    }

    if (!cinPattern.test(cin)) {
        alert("Veuillez entrer un CIN valide (8 chiffres)");
        return false;
    }

    if (!namePattern.test(name)) {
        alert("Veuillez entrer un nom valide (3 lettres ou plus)");
        return false;
    }

    if (!firstnamePattern.test(firstname)) {
        alert("Veuillez entrer un prénom valide (3 lettres ou plus)");
        return false;
    }

    if (!agePattern.test(age)) {
        alert("Veuillez entrer un âge valide (00 à 99)");
        return false;
    }

    if (!addressPattern.test(address)) {
        alert("Veuillez entrer une adresse valide (lettres et chiffres autorisés)");
        return false;
    }

    if (!phonePattern.test(phone)) {
        alert("Veuillez entrer un numéro de téléphone valide (8 chiffres)");
        return false;
    }

    if (!fichePattern.test(fiche)) {
        alert("Veuillez entrer un numéro de fiche valide (000 à 999)");
        return false;
    }
}