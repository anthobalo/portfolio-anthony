<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $secretKey = '6Le8ujgpAAAAAMn5jkDBep0ZR9r_OO_Ggj8YzgSm';
    $responseKey = $_POST['g-recaptcha-response'];
    $userIP = $_SERVER['REMOTE_ADDR'];
    
    // Vérification reCaptcha
    $url = "https://www.google.com/recaptcha/api/siteverify";
    $data = [
        'secret' => $secretKey,
        'response' => $responseKey,
        'remoteip' => $userIP
    ];

    $options = [
        'http' => [
            'header' => "Content-type: application/x-www-form-urlencoded\r\n",
            'method' => 'POST',
            'content' => http_build_query($data)
        ]
    ];

    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    $response = json_decode($result, true);

    if (!$response['success']) {
        echo "Veuillez cocher le captcha correctement.";
    } else {
        // Récupération des données du formulaire
        $destinataire = "destinataire@example.com";
        $sujet = $_POST['sujet'];
        $message = $_POST['message'];
        $expediteur = $_POST['email'];

        // Envoi de l'e-mail
        $headers = "From: $expediteur";
        if (mail($destinataire, $sujet, $message, $headers)) {
            echo "E-mail envoyé avec succès!";
        } else {
            echo "Erreur lors de l'envoi de l'e-mail.";
        }
    }
}
?>
