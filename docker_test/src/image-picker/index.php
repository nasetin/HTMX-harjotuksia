<?php

session_start();
include "data/images.php"; // $DATABESE_IMAGES muuttuja
include "components/image.php"; // renderImages()


if(!isset($_SESSION['selected-images'])){
    $_SESSION['selected-images'] = [];
}


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Picker</title>
    <link rel="stylesheet" href="style.css">
    <script src="htmx.js"></script>
</head>
<body>
    <header>
        <img src="logo.png" alt="Camera logo">
        <h1>PhotoPicker</h1>
        <p>Pick a collection of photos from the selection.</p>
    </header>
    <main>
        <section>
            <!-- käyttäjän valinta -->
             <h2>Selected Images</h2>
             <ul id="selected-images">
                <?php 
                    foreach($_SESSION['selected-images'] as $image){
                        // generoi li-elementin HTML koodin, $image datan pohjalta
                        echo renderImage($image);
                    }
                ?>
             </ul>

        </section>
        <section>
            <!-- kaikki kuvat -->
             <h2>Available Images</h2>
             <ul>
                <?php 
                    // käydään läpi /data/images.php tiedoston
                    // muuttujan $DATABASE_IMAGES taulukko
                    // "tietokannasta haettu"
                    foreach($DATABASE_IMAGES as $image){
                        echo renderImage($image);
                    }
                ?>
             </ul>
        </section>
    </main>
</body>
</html>