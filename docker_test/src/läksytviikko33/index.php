<?php

    session_start();

    //usleep(400000);

    if(isset($_SESSION['items']) === false){

        $_SESSION['items'] = [];
    }

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="htmx.js"></script>
</head>
<body>
    <main>
            <form id="item-form" 
            hx-post="post-item.php"
            hx-target="#items"
            hx-swap="beforeend"
            >
                    <label for="item">Item</label>
                    <input type="text" id="item" name="item" />
                <button type="submit">Add item</button>
            </form>
            <ul id="items">
                <?php 
                    foreach($_SESSION['items'] as $index => $item){
                        echo
                        "
                        <li id='item-$index'>
                            <span>" . htmlspecialchars($item) . "</span>
                            <button
                            hx-delete=\"delete-item.php?index=$index\"
                            hx-target=\"#item-$index\"
                            hx-swap=\"outerHTML\"
                            >Remove</button>
                        </li>
                        ";
                    }
                ?>
            </ul>
    </main>
</body>
</html>