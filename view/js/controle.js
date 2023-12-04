//page_patient acceuil
function verif() {
    var lettersOnlyRegex = /^[A-Za-z]+$/;

if (document.getElementById("nom_patient").value === "" || !lettersOnlyRegex.test(document.getElementById("nom_patient").value)) {
    alert("Tapez un nom valable pour avoir une réponse.");
    document.getElementById("nom_patient").focus();
    return false;
}

var selectedOption = document.getElementById("nom_docteur").value;

if (selectedOption === "") {
    alert("Veuillez choisir un médecin.");
    document.getElementById("nom_docteur").focus();
    return false;
}

var selectedOption = document.getElementById("type_ren").value;

if (selectedOption === "") {
    alert("Veuillez choisir un type_ren de rendez_vous.");
    document.getElementById("type_ren").focus();
    return false;
}
var tel = document.getElementById("num_tel").value;

var numbersOnlyRegex = /^[0-9]+$/;

if (!numbersOnlyRegex.test(num_tel) || num_tel=== "") {
    alert("Veuillez saisir un numero e telephone valide .");
    document.getElementById("num_tel").focus();
    return false;
}
var tel = document.getElementById("age_patient").value;

var numbersOnlyRegex = /^[0-9]+$/;

if (!numbersOnlyRegex.test(age_patient) || age_patient=== "") {
    alert("Veuillez saisir un numero e telephone valide .");
    document.getElementById("age_patient").focus();
    return false;
}

}

//page_patient admin --add apoitment


function verifiajout() {

    if (document.getElementById("idren").value === "") {
        alert("saisir l'id du rendez_vous");
        document.getElementById("idren").focus();
        return false;
    }
    var selectedOption = document.getElementById("erreurnom_patient").value;

    if (selectedOption === "") {
        alert("Veuillez choisir un patient.");
        document.getElementById("erreurnom_patient").focus();
        return false;
    }
    var selectedOption = document.getElementById("erreurtype_ren").value;

    if (selectedOption === "") {
        alert("Veuillez choisir un type_ren de rendez_vous.");
        document.getElementById("erreurtype_ren").focus();
        return false;
    }

    var selectedOption = document.getElementById("erreurnom_docteur").value;

    if (selectedOption === "") {
        
        alert("Veuillez choisir un médecin.");
        document.getElementById("erreurnom_docteur").focus();
        return false;
    }

    if (document.getElementById("email").value === "" ) {
        alert("saisir un email valide ");
        document.getElementById("email").focus();
        return false;
    }
    var tel = document.getElementById("tel").value;
    var numbersOnlyRegex = /^[0-9]+$/;

if (!numbersOnlyRegex.test(tel) || tel=== "") {
    alert("Veuillez saisir un numero e telephone valide .");
    document.getElementById("tel").focus();
    return false;
}

}

function verifimodif(){

    if (document.getElementById("num_ren").value === "0") {
        alert("saisir l'id du rendez_vous");
        document.getElementById("num_ren").focus();
        return false;
    }
}