<?php
$subjectChoice = [
    "J'ai un âne" => "Un âne sous mon lit",
    "J'ai un zombie" => "Trop de zombies à ma table",
    "J'ai une météorite" => "Une météorite dans mon assiette"
];

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Challenge 9</title>
    <style>
    * {box-sizing: border-box;}
    form {display: flex; flex-direction: column;}
    form > div  {width: 270px;display: flex;}
    div {display: flex; justify-content: space-between;}
    .button {justify-content: end;}
    </style>
</head>
<body>
    <form action="thanks.php" target="_blank" method="post">
        <div>
            <label for="lastname">Nom : </label>
            <input type="text" id="lastname" name="user_lastname" value="" placeholder="Nom">
        </div>
        <div>
            <label for="firstname">Prénom : </label>
            <input type="text" id="firstname" name="user_firstname" placeholder="Prénom">
        </div>
        <div>
            <label for="mail">e-mail : </label>
            <input type="text" id="mail" name="user_mail" placeholder="E-mail">
        </div>
        <div>
            <label for="phone">tél. </label>
            <input type="tel" id="phone" name="user_phone" placeholder="Téléphone">
        </div>
        <div>
            <label for="subject">Sujet : </label>
            <select name="subject_choice" id="subject">
<?php
    foreach ($subjectChoice as $subject => $problem) {
        echo "<option value=\"$subject\">$problem</option>";
    }
?>
            </select>
        </div>
        <div>
            <label for="msg">Message :</label>  
            <textarea id="msg" name="user_message"></textarea>
        </div>
        <div class="button">
            <button type="submit">Envoyer le message</button>
        </div>
    </form>
</body>
</html>