<?php
$access_key = '6mx57r5e3UZUs3XI8Ale61cItf01cteJtFbGnLU_9yc';

// Fonction pour récupérer une image spécifique d'Unsplash basée sur l'ID de la photo avec des dimensions spécifiées
function get_unsplash_image_by_id($photo_id, $access_key, $width, $height) {
    $url = "https://api.unsplash.com/photos/$photo_id?client_id=" . $access_key;
    $response = file_get_contents($url);
    $data = json_decode($response, true);
    $image_url = $data['urls']['regular'] . "&w=$width&h=$height";
    $attribution = "Photo by <a href='" . $data['user']['links']['html'] . "'>" . $data['user']['name'] . "</a> on <a href='https://unsplash.com'>Unsplash</a>";
    return ['url' => $image_url, 'attribution' => $attribution];
}

// Vérifier si l'image renvoyée ne retourne pas d'erreur 404
function is_valid_image($url) {
    $headers = @get_headers($url);
    return stripos($headers[0], "200 OK") ? true : false;
}

// Lire le fichier JSON existant
$json_file = __DIR__ . '../../config.json';
$json_data = json_decode(file_get_contents($json_file), true);

// ID des photos spécifiques sur Unsplash
$company_image_id = 'PHOTO_ID_COMPANY'; // Remplacez par l'ID de la photo pour company_image
$service_image_ids = [
    'PHOTO_ID_SERVICE_1', // Remplacez par l'ID de la photo pour le premier service
    'PHOTO_ID_SERVICE_2', // Remplacez par l'ID de la photo pour le deuxième service
    'PHOTO_ID_SERVICE_3'  // Remplacez par l'ID de la photo pour le troisième service
];

// Gérer l'image de l'entreprise
$company_image = get_unsplash_image_by_id($company_image_id, $access_key, 500, 500);
$json_data['pages']['home']['company_image'] = $company_image['url'];
$json_data['pages']['home']['company_image_attribution'] = $company_image['attribution'];

// Construire le tableau $services
$service_cards = $json_data['pages']['home']['service_cards'];
foreach ($service_cards as $index => &$service) {
    $service_image = get_unsplash_image_by_id($service_image_ids[$index], $access_key, 320, 480);
    $service['image'] = $service_image['url'];
    $service['attribution'] = $service_image['attribution'];
}

// Mettre à jour le fichier JSON avec les nouvelles images et attributions
$json_data['pages']['home']['service_cards'] = $service_cards;
file_put_contents($json_file, json_encode($json_data, JSON_PRETTY_PRINT));

echo json_encode($json_data['pages']['home'], JSON_PRETTY_PRINT);
?>
