<?php

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $email = isset($_POST['email']) ? $_POST['email'] : null; // ternary operator
    $password = isset($_POST['password']) ? $_POST['password'] : null; // ternary operator

    $errors = [];

    if(!$email || strpos($email, "@") === false){
        $errors['email'] = "Please enter a valid email address";
    }

    if(!$password || strlen($password) < 8){
        $errors['password'] = "Password must be at least 8 characters long.";
    }

    // generoidaan vastaus virheiden perusteella
    if(count($errors) > 0){
        echo "       
            <ul id='form-errors'> 
        ";
        foreach($errors as $error){
            echo "<li>{$error}</li>";
        }
        echo "
            </ul>
        ";
    } else {
        echo ""; // ei virheitä
    }
}

?>