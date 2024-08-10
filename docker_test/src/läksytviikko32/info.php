<?php

$data = "htmx extends and generalizes the core idea of HTML as a hypertext, opening up many more possibilities directly within the language
Now any element, not just anchors and forms, can issue an HTTP request
Now any event, not just clicks or form submissions, can trigger requests
Now any HTTP verb, not just GET and POST, can be used
Now any element, not just the entire window, can be the target for update by the request";

$lines = explode("\n", $data);

echo "<ul>";

foreach($lines as $line){
    echo "<li>" . htmlspecialchars(trim($line)) . "</li>";
}

echo "</li>";

?>