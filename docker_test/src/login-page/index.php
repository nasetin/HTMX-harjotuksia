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
        <form 
        hx-post="login.php" 
        hx-headers='{"x-csrf-token":"6t6dff6d6fdfgdfdjgf8hgdojgf0ss"}'
        hx-target="#extra-information"
        
        >

        <img src="images/lock.png" alt="Picture of a pixel art padlock">
        <div class="control">
            <label for="email">Email</label>
            <input id="email" type="email" name="email"
                hx-post="validate.php"
                hx-target="next p"
                hx-params="email"
                hx-headers='{"x-csrf-token":"6t6dff6d6fdfgdfdjgf8hgdojgf0ss"}'
            >
            <!-- simuloidaan CSRF token -->
            <p class="error"></p>
        </div>
        <div class="control">
            <label for="password">Password</label>
            <input id="password" type="password" name="password"
                hx-post="validate.php"
                hx-target="next p"
                hx-params="password"
                hx-headers='{"x-csrf-token":"6t6dff6d6fdfgdfdjgf8hgdojgf0ss"}'
            >
            <p class="error"></p>
        </div>
        <div id="extra-information"></div>
        <button type="submit">
            Login
        </button>
        </form>
    </main>
    
</body>
</html>