<?php

function validateForm($cin, $nom, $prenom, $email)
{
    $errors = [];

    // Validate CIN
    if (empty($cin) || !is_numeric($cin) || strlen($cin) !== 8) {
        $errors['cin'] = 'CIN must be a numeric value with 8 digits.';
    }

    // Validate Nom
    if (empty($nom) || strlen($nom) > 12) {
        $errors['nom'] = 'Nom must not be empty and should not exceed 12 characters.';
    }

    // Validate Prenom
    if (empty($prenom) || strlen($prenom) > 12) {
        $errors['prenom'] = 'Prenom must not be empty and should not exceed 12 characters.';
    }

    // Validate Email
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL) || strpos($email, '@') === false) {
        $errors['email'] = 'Email must not be empty, should be a valid email address, and contain @.';
    }

    return $errors;
}

?>
