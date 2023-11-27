
function validateForm() {
    // Récupérer les valeurs des champs
    var CIN = document.getElementById('CIN').value;
    var nom = document.getElementById('Nom').value;
    var prenom = document.getElementById('Prénom').value;
    var adresse = document.getElementById('Adresse').value;
    var telephone = document.getElementById('Numéro de tel°').value;
    

    // Définir les expressions régulières
    var regexNomPrenom = /^[a-zA-Z]+$/;
    var regexCIN = /^[0-9]{8}$/;
    var regexTelephone = /^[0-9]{8}$/;

    // Validation du nom
    if (!regexNomPrenom.test(Nom)) {
        alert('Veuillez saisir un nom valide.');
        return false;
    }

    // Validation du prénom
    if (!regexNomPrenom.test(Prénom)) {
        alert('Veuillez saisir un prénom valide.');
        return false;
    }

    // Validation du CIN
    if (!regexCIN.test(CIN)) {
        alert('Veuillez saisir un CIN valide (8 chiffres).');
        return false;
    }

    // Validation de l'adresse (peut être adaptée selon les besoins)
    if (adresse.trim() === '') {
        alert('Veuillez saisir une adresse.');
        return false;
    }

    // Validation du numéro de téléphone
    if (!regexTelephone.test(Num_tel)) {
        alert('Veuillez saisir un numéro de téléphone valide (10 chiffres).');
        return false;
    }

    // Si tout est valide
    alert('Formulaire valide !');
    return true;
}
