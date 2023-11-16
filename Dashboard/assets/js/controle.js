
function verifiajout() {

    if (document.getElementById("idren").value === "") {
        alert("saisir l'id du rendez_vous");
        document.getElementById("idren").focus();
        return false;
    }
    var selectedOption = document.getElementById("inputno").value;

    if (selectedOption === "") {
        alert("Veuillez choisir un patient.");
        document.getElementById("inputno").focus();
        return false;
    }
    var selectedOption = document.getElementById("inputto").value;

    if (selectedOption === "") {
        alert("Veuillez choisir un type de rendez_vous.");
        document.getElementById("inputto").focus();
        return false;
    }

    var selectedOption = document.getElementById("mede").value;

    if (selectedOption === "") {
        alert("Veuillez choisir un médecin.");
        document.getElementById("mede").focus();
        return false;
    }

    if (document.getElementById("email").value === "" ) {
        alert("saisir un email valide ");
        document.getElementById("email").focus();
        return false;
    }
    var tel = document.getElementById("inputphone").value;
    var numbersOnlyRegex = /^[0-9]+$/;

if (!numbersOnlyRegex.test(tel) || tel=== "") {
    alert("Veuillez saisir un numero e telephone valide .");
    document.getElementById("inputphone").focus();
    return false;
}

}