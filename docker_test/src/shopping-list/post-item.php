<?php

session_start();

// Otetaan vastaan POST ja tallennetaan sessioon uusi item

// Onko POST
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        // onko POST:n mukana 'item'
    if(isset($_POST['item'])){
        // 2. tallennetaan data sessioon
        $_SESSION['items'][] = $_POST['item']; // $_POST['note'];

        // 3. palautuksena riittää pelkkä uusin li-elementti
                echo "
                <li>
                    <span>" . htmlspecialchars($_POST['item']) . "</span>
                    <button>Remove</button>;
                </li>";

                }else{
                    echo "No 'item' in POST";
                }
                }else {
                echo "Not a POST request method";
                };
                exit();
?>