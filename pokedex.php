<?php
require_once('database.php');

// Get all Pokémon
$queryPokedex = 'SELECT * FROM Pokedex ORDER BY id';
$statement = $db->prepare($queryPokedex);
$statement->execute();
$Pokedex = $statement->fetchAll();
$statement->closeCursor();
?>

<!DOCTYPE html>
<html>

<head>
    <title>urPokédex - Pokédex</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="Resources/pokedex.css">
    <link rel="icon" href="Resources/Images/pokeball.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <div id="navbar">
        <div class="logo">urPokédex</div>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a class="active" href="pokedex.php">Pokédex</a></li>
            <li><a href="explorer.php">Explorer</a></li>
        </ul>
    </div>

    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

    <div class="content" style="overflow-x:auto;">
        <div class="logo"><h1>Pokémon</h1></div><br>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Type 1</th>
                <th>Type 2</th>
                <th>HP</th>
                <th>Attack</th>
                <th>Defense</th>
                <th>Sp. Attack</th>
                <th>Sp. Defense</th>
                <th>Speed</th>
                <th class="right">Stat Total</th>
            </tr>
            <?php foreach ($Pokedex as $pokemon) : ?>
                <tr>
                    <td><?php echo $pokemon['id']; ?></td>
                    <td><?php echo $pokemon['P_Name']; ?></td>
                    <td><?php echo $pokemon['typeName']; ?></td>
                    <td><?php echo $pokemon['type2']; ?></td>
                    <td><?php echo $pokemon['HP']; ?></td>
                    <td><?php echo $pokemon['Attack']; ?></td>
                    <td><?php echo $pokemon['Defense']; ?></td>
                    <td><?php echo $pokemon['Sp_Attack']; ?></td>
                    <td><?php echo $pokemon['Sp_Defense']; ?></td>
                    <td><?php echo $pokemon['Speed']; ?></td>
                    <td class="right"><?php echo $pokemon['stat_total']; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>

    <div class="footer">
        <p>&copy;<?php echo date("Y"); ?> Aidan Breshears, Chase Caldwell, and Tri Tran</p>
    </div>

    <script>
        let mybutton = document.getElementById("myBtn");
        window.onscroll = function() {
            myFunction();
            scrollFunction();
        };

        var navbar = document.getElementById("navbar");
        var sticky = navbar.offsetTop;

        function myFunction() {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add("sticky");
            } else {
                navbar.classList.remove("sticky");
            }
        }

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
</body>

</html>
