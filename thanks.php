<?php

$inputErrors=[]; // stockage des erreurs

if (empty($_POST['user_lastname'])) {                              // si vide
    $inputErrors['emptyLastname'] = 'Votre nom est obligatoire.';
} elseif (!preg_match('/[a-zA-Z\']/',$_POST['user_lastname'])) {     // si caractères autorisés
    $inputErrors['notValidLastname'] = 'Votre nom comporte des caractères non autorisés';   
}

if (empty($_POST['user_firstname'])) {                              // si vide
    $inputErrors['emptyFirstname'] = 'Votre prénom est obligatoire.';
} elseif (strlen($_POST['user_firstname']) < 2) {                    // si moins de 2
    $inputErrors['notEnoughFirstname'] = 'Votre prénom doit comporter au moins deux caractères';
} elseif (!preg_match('/[a-zA-Z\']/',$_POST['user_firstname'])) {     // si caractères autorisés
    $inputErrors['notValidFirstname'] = 'Votre prénom comporte des caractères non autorisés';   
}

if (empty($_POST['user_mail'])) {                              // si vide
    $inputErrors['emptyMail'] = 'Votre adresse e-mail est obligatoire.';
} else {      
    if (!filter_var($_POST['user_mail'], FILTER_VALIDATE_EMAIL)) {           // si caractères autorisés
    $inputErrors['notValidEmail'] = 'Votre adresse email est incomplète.';   
    }
}

if (empty($_POST['user_phone'])) {                              // si vide
    $inputErrors['emptyPhone'] = 'Le numéro de téléphone est obligatoire';
} elseif (!preg_match('/[0-9]/',$_POST['user_phone'])){           // si caractères autorisés
    $inputErrors['notValidPhone'] = 'Le n° de téléphone ne doit comporter que des chiffres';   
} elseif(strlen($_POST['user_phone']) < 10 or strlen($_POST['user_phone']) > 10 ) {      
    $inputErrors['notEnoughPhone'] = 'Le n° de téléphone doit comporter 10 chiffres';
}

if (empty($_POST['user_message'])) {                              // si vide
    $inputErrors['emptyMessage'] = 'Le message est absent.';
}

if (empty($inputErrors)) {
    echo "<div width=\"300px\">" . "Merci " . $_POST['user_firstname'] . ' ' . $_POST['user_lastname'] . " de nous avoir contacté à propos de " . $_POST['subject_choice'] . ".
    <br><br>
    Un de nos conseiller vous contactera soit à l’adresse " . $_POST['user_mail'] . " ou par téléphone au " . $_POST['user_phone'] . " dans les plus brefs délais pour traiter votre demande :". 
    "<br><br>
    <i>" . $_POST['user_message'] . "<i>
    <br>
    </div><br>";
} else {
    foreach ($inputErrors as $errorValue) {
        echo $errorValue . "<br>";
    }
}
// var_dump($_POST);
?>