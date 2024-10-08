<?php

include "data/images.php"; // $DATABASE_IMAGES muuttuja
include "components/image.php"; // renderImage()

session_start();
// session_destroy();

// Luodaan sessio muuttuja, jos sitä ei vielä ole
if(!isset($_SESSION['selected-images'])){
    $_SESSION['selected-images'] = [];
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="htmx.js" defer></script>
    <script src="main.js" defer></script>
    <title>Image Picker</title>
</head>
<body>
    <header id="testi">
        <img src="logo.png" alt="Camera logo">
        <h1>PhotoPicker</h1>
        <p>Pick a collection of photos from the selection.</p>
    </header>
    <main>
        <section id="selected-images-section">
            <!-- Käyttäjän valinnat -->
            <h2>Selected Images</h2>
            <ul id="selected-images">
                <?php 
                    foreach($_SESSION['selected-images'] as $image){
                        // generoi li-elementin HTML koodin, $image datan pohjalta
                        echo renderImage($image, false);
                    }
                ?>
            </ul>

        </section>
        <section>
            <!-- Kaikki kuvat -->
             <h2>Available Images</h2>
             <ul id="available-images">
                <?php 
                    // Käydään läpi /data/images.php tiedoston
                    // muuttujan $DATABASE_IMAGES taulukko
                    // "tietokannasta haettu"

                    $selected = $_SESSION['selected-images'];
                    // Lisätään suodatus, joka ottaa pois kuvat, jotka käyttäjä on jo valinnut
                    $availableImages = array_filter(
                        $DATABASE_IMAGES, 
                        // anonyymi funktio
                        function($image) use ($selected){
                            // Tämä funktio on suodatin
                             // Mitä tämä päästää läpi, on array_filter lopputuloksena
                            return !in_array($image, $selected);
                            // tämän funktion pitää palauttaa joko TRUE tai FALSE
                        }
                    ); // array_filter ei muokkaa alkuperäistä taulukkoa, vaan palauttaa uuden version

                    foreach($availableImages as $image){
                        echo renderImage($image);
                    }
                ?>
             </ul>
        </section>
    </main>
</body>
</html>