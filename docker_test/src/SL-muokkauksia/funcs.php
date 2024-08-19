<?php

// lisää funktion, joka generoi <li> elementin
function generateListItem($id, $item){

    // li-elementin id voidaan poistaa, käytettäessä hx-target="closest li"
    $html = "<li>";
    $html .= "<span>$item</span>";
    $html .= "<button
               hx-delete=\"delete-item.php?id=$id\"
               hx-target=\"closest li\"
               hx-confirm=\"Are you sure?\"
               >Remove</button>";
    $html .= "</li>";
 
    return $html;

}

?>