<?php

session_start();

// Otetaan vastaan POST ja tallennetaan sessioon uusi item

// Onko POST
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        // onko POST:n mukana 'item'
    if(isset($_POST['item'])){
        // 2. tallennetaan data sessioon
        $_SESSION['items'][] = $_POST['item']; // $_POST['note'];

        // Saadaan uusimman elementin indeksi selville
        // Tarkistamalla taulukon pituus esim 5
        // Jos pituus on 5, indeksit ovat 0, 1, 2, 3, 4
        // Joten uusin indeksi on pituus - 1 (miinus)

        $newIndex = count($_SESSION['items']) - 1;

        // 3. palautuksena riittää pelkkä uusin li-elementti
                echo 
                "<li id='item-$newIndex'>
                        <span>" . htmlspecialchars($_POST['item']) . "</span>
                        <button 
                        hx-delete=\"delete-item.php?index=$newIndex\"
                        hx-target=\"#item-$newIndex\"
                        hx-swap=\"outerHTML\"
                        >Remove</button>
                    </li>
                    ";

                }else{
                    echo "No 'item' in POST";
                }
                }else {
                echo "Not a POST request method";
                };
                exit();
?>