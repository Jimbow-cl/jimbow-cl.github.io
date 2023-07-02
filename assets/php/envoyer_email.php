<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les valeurs des champs du formulaire
    $lastname = $_POST["lastname"];
    $firstname = $_POST["firstname"];
    $email = $_POST["email"];
    $copy = isset($_POST["copy"]) ? "Oui" : "Non"; // Vérifier si la case "Recevoir une copie" est cochée
    $message = $_POST["message"];

    // Construction du contenu de l'e-mail
    $subject = "Nouveau message du formulaire de contact";
    $body = "Nom : " . $lastname . "\n";
    $body .= "Prénom : " . $firstname . "\n";
    $body .= "Email : " . $email . "\n";
    $body .= "Recevoir une copie : " . $copy . "\n\n";
    $body .= "Message :\n" . $message;

    // Envoi de l'e-mail à l'adresse destinataire
    $to = "cart-lamy.jimmy@live.fr"; // Remplacez par votre adresse e-mail
    $headers = "From: " . $email . "\r\n";

    // Envoi de l'e-mail à l'expéditeur si la case "Recevoir une copie" est cochée
    if ($copy == "Oui") {
        $headers .= "Cc: " . $email . "\r\n";
    }

    if (mail($to, $subject, $body, $headers)) {
        echo "L'e-mail a été envoyé avec succès.";
    } else {
        echo "Une erreur s'est produite lors de l'envoi de l'e-mail.";
    }
}
?>
