<!DOCTYPE html>
<html>
<head>
    <title>urPokédex</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="Resources/main.css">
    <link rel="icon" href="Resources/Images/pokeball.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <div class="header">
        <a href="index.html"><h1>urPokédex</h1></a>
        <div class="scroll-down"></div>
    </div>

    <div id="navbar">
        <a class="active" href="index.php">Home</a>
        <a href="pokedex.php">Pokédex</a>
        <a href="explorer.php">Explorer</a>
    </div>

    <div class="content">
        <h1>Pokémon Database</h1>

        <p>
            Welcome to the *TEAMNAME* Pokémon Database!<br>
            Select MAIN to view a table of each Pokémon's name, statistics and typing.<br>
            Select NAME SEARCH to search a Pokémon by name<br>
            Select TYPE SEARCH to search a Pokémon by type<br>
            Select ADD to add a custom Pokémon to the database<br>
        </p>
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
</html>
