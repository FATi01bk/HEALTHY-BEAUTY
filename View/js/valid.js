
        function validateForm() {
            var numFich = document.getElementById("Num_Fich").value;
            var cin = document.getElementById("CIN").value;
            var nom = document.getElementById("Nom").value;
            var prenom = document.getElementById("Prenom").value;
            var dateNaissance = document.getElementById("Date_naissance").value;
            var age = document.getElementById("Age").value;
            var adresse = document.getElementById("Adresse").value;
            var numTel = document.getElementById("Num_tel").value;
            var dateAjout = document.getElementById("Date_ajout").value;
            var maladie = document.getElementById("Maladie").value;

            // Validation du CIN (8 chiffres)
            if (!/^\d{8}$/.test(cin)) {
                document.getElementById("erreurCIN").innerHTML = "Le CIN doit contenir exactement 8 chiffres.";
                return false;
            }
            else {
                document.getElementById("erreurCIN").innerHTML = ""; // Efface le message d'erreur si la validation réussit
            }

            // Validation du nom et prénom (lettres uniquement)
            if (!/^[a-zA-Z]+$/.test(nom) || !/^[a-zA-Z]+$/.test(prenom)) {
                document.getElementById("erreurNom").innerHTML = "Le nom et le prénom doivent contenir uniquement des lettres.";
                return false;
            }
            else{
                document.getElementById("erreurNom").innerHTML = "";
            }

            var dateNaissanceObject = new Date(dateNaissance);
            var currentDate = new Date();

            if (!/^\d{4}/\d{2}/\d{2}$/.test(dateNaissance) || dateNaissanceObject >= currentDate) {
                document.getElementById("erreurDate_naissance").innerHTML = "La date de naissance doit être au format AAAA-MM-JJ et inférieure à la date actuelle.";
                return false;
            }
            else {
                document.getElementById("erreurDate_naissance").innerHTML = "";
            }

            // Validation de l'âge (chiffres uniquement)
            if (!/^\d+$/.test(age)) {
                document.getElementById("erreurAge").innerHTML = "L'âge doit contenir uniquement des chiffres.";
                return false;
            }
            else {
                document.getElementById("erreurAge").innerHTML = ""; // Efface le message d'erreur si la validation réussit
            }

            // Validation de l'adresse et du numéro de téléphone (8 chiffres)
            if (!/^\d{8}$/.test(numTel)) {
                document.getElementById("erreurNum_tel").innerHTML = "Le numéro de téléphone doit contenir exactement 8 chiffres.";
                return false;
            }
            else{
                document.getElementById("erreurNum_tel").innerHTML = "";
            }
           
            

            // Autres validations peuvent être ajoutées ici selon vos besoins
            
            return true;
        }
        