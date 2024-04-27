<!DOCTYPE html>
<html>
<head>
    <title>urPokédex - Home</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="Resources/main.css">
    <link rel="icon" href="Resources/Images/pokeball.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="header">
        <a href="index.html"><h1>urPokédex</h1></a>
        <div class="scroll-down"></div>
    </div>

    <div id="navbar">
        <ul>
            <li><a class="active" href="index.php">Home</a></li>
            <li><a href="pokedex.php">Pokédex</a></li>
            <li><a href="explorer.php">Explorer</a></li>
        </ul>
    </div>

    <div class="home">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="Resources/Images/pikachu.jpg" alt="Los Angeles" style="width:100vw;height:110vh;">
                    <p>THIS GONNA BE FUN</p>
                </div>

                <div class="item">
                    <img src="Resources/Images/pikachu.jpg" alt="Chicago" style="width:100vw;height:110vh;">
                </div>

                <div class="item">
                    <img src="Resources/Images/pikachu.jpg" alt="New york" style="width:100vw;height:110vh;">
                </div>
            </div>

            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
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
</html>
