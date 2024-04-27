<!DOCTYPE html>
<html>
<head>
    <title>urPokédex - Explorer</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="Resources/main.css">
    <link rel="icon" href="Resources/Images/pokeball.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div id="navbar">
        <a href="index.php">Home</a>
        <a href="pokedex.php">Pokédex</a>
        <a class="active" href="explorer.php">Explorer</a>
    </div>

    <div id="functions_bar">
        

    </div>



    <div class="footer">
        <p>&copy;<?php echo date("Y"); ?> Aidan Breshears, Chase Caldwell and Tri Tran </p>
    </div>

    <script>
        window.onscroll = function() {myFunction()};

        var navbar = document.getElementById("navbar");
        var sticky = navbar.offsetTop;

        function myFunction() {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add("sticky")
            } else {
                navbar.classList.remove("sticky");
            }
        }
    </script>
</body>
