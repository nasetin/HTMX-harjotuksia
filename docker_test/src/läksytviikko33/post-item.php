<?php

session_start();

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    if(isset($_POST['item'])){

        $_SESSION['items'][] = $_POST['item'];

        $newIndex = count($_SESSION['items']) - 1;

        echo "
        <li id='item-$newIndex'>
            <span>" . htmlspecialchars($_POST['item']) . "</span>
            <button
            hx-delete=\"delete-item.php?index=$newIndex\"
            hx-target=\"#item-$newIndex\"
            hx-swap=\"outerHTML\"
            >Remove</button>
        </li>
        ";
    }
    else {
        echo "puuttuu item para";
    }
}
else {
    echo "puuttuu POST metodi";
}

exit();

?>