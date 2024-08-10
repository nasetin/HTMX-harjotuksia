<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="htmx.js" defer></script>
</head>
<body>
    <header id="main-header">
        <img src="image.png" alt="HTMX logo">
        <h1>high power tools for HTML</h1>
    </header>
    <main>
        <p>you can build modern user interfaces with the simplicity and power of hypertext</p>
        <button
            hx-get="info.php"
            hx-trigger="mouseenter[ctrlKey] once, click once"
            hx-target="main"
            hx-swap="beforeend"
        >Learn More</button>
    </main>
</body>
</html>