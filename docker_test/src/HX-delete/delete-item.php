<?php 

session_start();

//usleep(400000);

// Kuinka otetaan DELETE parametri vastaan?

if($_SERVER['REQUEST_METHOD'] === 'DELETE'){
    // Vaihtoehto A
    // parse_str(parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY), $queryParams);
    // echo "test". $queryParams['index'];

    // Vaihtoehto B
    if(isset($_GET['index'])){
        // Poistetaan taulukosta tietty indeksi
        $index = (int)$_GET['index'];
        unset($_SESSION['items'][$index]);
    }else{
        echo "ei ole indeksi";
    }
}else{
    echo "ei ole DELETE metodi";
}

?>