<?php

/**
 * Récupérer la liste des logements
 * @return array Liste des logements
 */
function getAllLogements(): array {
    $liste_logements[0] = [
        "titre" => "Univers parallèle",
        "prix" => 45000,
        "image" => "property-01.jpg",
        "date_creation" => new DateTime("2017-06-12"),
        "type" => "Appartement",
        "taille" => 320,
        "nb_chambres" => 2
    ];

    $liste_logements[1] = [
        "titre" => "Trou noir",
        "prix" => 1450000,
        "image" => "property-02.jpg",
        "date_creation" => new DateTime("2017-06-12"),
        "type" => "Appartement",
        "taille" => 20,
        "nb_chambres" => 1
    ];

    $liste_logements[2] = [
        "titre" => "Av. des Champs Élysés",
        "prix" => 400,
        "image" => "property-03.jpg",
        "date_creation" => new DateTime("2017-06-12"),
        "type" => "Appartement",
        "taille" => 22000,
        "nb_chambres" => 122
    ];
    return $liste_logements;
}
