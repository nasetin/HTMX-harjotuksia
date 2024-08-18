<?php

session_start();

if($_SERVER['REQUEST_METHOD'] === 'DELETE'){

    if(isset($_GET['index'])){
        $index = (int)$_GET['index'];
        unset($_SESSION['items'][$index]);
    }else{
        echo "ei ole indeksi";
    }
}else {
    echo "ei ole delete metodi";
}

?>