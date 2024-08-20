<?php

include "data/images.php"; // $DATABESE_IMAGES muuttuja
include "components/image.php"; // renderImages()

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    // Käyttäjän klikkaaman kuvan id
    $imageId = $_POST['imageId'];

    // 1. Haetaan kuvan tiedot id:n perusteella
    $image = null;
    // jos tietokanta olisi kaytössä, tässä haetaan ID:n perusteella tietokannasta
    foreach($DATABASE_IMAGES as $img){
        if($img['id'] === $imageId){
            $image = $img;
            break; // Voidaan lopettaa silmukka, kun id löytyy
        }
    }

    // 2. Lisätään kuvan data sessioon 'selected-images'
    if($image){
        $_SESSION['selected-images'][] = $image;
    }


    // 3. Palautetaan HTML

    echo renderImage($image);
}

?>