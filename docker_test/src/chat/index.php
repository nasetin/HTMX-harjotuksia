<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Demo</title>
    <!-- htmx, css, lisätään myöhemmin -->
     <script>
        function toggleChatbot(){
            // Näytetään chat ja piilotetaan nappi
            const chatbox = document.getElementById('chat');
            const toggleButton = document.getElementById('show');
            chatbox.classList.toggle('open'); // lisää, jos ei ole luokkaa, tai poistaa
            toggleButton.classList.add('hidden'); // lisää aina
        }
        function closeChatbox(){
             // Näytetään nappi ja piilotetaan chat
             const chatbox = document.getElementById('chat');
            const toggleButton = document.getElementById('show');
            chatbox.classList.toggle('open'); // lisää, jos ei ole luokkaa, tai poistaa
            toggleButton.classList.remove('hidden'); // lisää aina
        }
     </script>
</head>
<body>
    <!-- Tässä on verkkosivun muu sisältö -->
    <?php include("chatbox.php"); ?>
    
</body>
</html>