<?php
header('Content-Type: application/json'); // Définir le type de contenu comme JSON

$response = []; // Initialiser le tableau de réponse

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collecter les données du formulaire
    $name = htmlspecialchars($_POST['name']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $phone = htmlspecialchars($_POST['phone']);
    $service = htmlspecialchars($_POST['service']);
    $message = htmlspecialchars($_POST['message']);

    // Préparer l'email pour Zedino
    $to = 'web@zedino.com';
    $subject = "Demande de devis de $name";
    $body = "
        <h2>Demande de devis</h2>
        <p><strong>Nom:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Téléphone:</strong> $phone</p>
        <p><strong>Service souhaité:</strong> $service</p>
        <p><strong>Message:</strong><br>$message</p>
    ";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    // Envoyer l'email à Zedino
    if (mail($to, $subject, $body, $headers)) {
        // Envoyer une copie à l'utilisateur
        $userSubject = "Confirmation de votre demande de devis";
        $userBody = "
            <h2>Merci pour votre demande de devis</h2>
            <p>Bonjour $name,</p>
            <p>Nous avons bien reçu votre demande de devis pour le service suivant : $service.</p>
            <p>Nous vous contacterons sous peu pour discuter de votre projet.</p>
            <p>Cordialement,</p>
            <p>L'équipe de Zedino</p>
        ";
        mail($email, $userSubject, $userBody, $headers);

        // Réponse JSON en cas de succès
        $response['success'] = true;
        $response['message'] = "Votre demande de devis a été envoyée avec succès.";
    } else {
        // Réponse JSON en cas d'échec
        $response['success'] = false;
        $response['message'] = "Une erreur s'est produite lors de l'envoi de votre demande de devis. Veuillez réessayer.";
    }
} else {
    // Réponse JSON si la méthode de requête n'est pas POST
    $response['success'] = false;
    $response['message'] = "Requête invalide.";
}

// Envoyer la réponse JSON
echo json_encode($response);
?>
