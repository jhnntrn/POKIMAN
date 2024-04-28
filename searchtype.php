<?php
require_once('database.php');

$type = $_POST['type'];

// Get Pokémon of given Type
$queryType = 'SELECT * FROM Pokedex
                  WHERE typeName = :type OR type2 = :type
                  ORDER BY id';
$statement = $db->prepare($queryType);
$statement->bindValue(':type', $type);
$statement->execute();
$Pokedex = $statement->fetchAll();
$statement->closeCursor();
?>
<!DOCTYPE html>
<html>
<!-- the head section -->
<head>
    <title>urPokédex - Search by Type</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="Resources/pokedex.css">
    <link rel="icon" href="Resources/Images/pokeball.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!-- the body section -->
<body>
    <div id="navbar">
        <div class="logo">urPokédex</div>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a class="active" href="pokedex.php">Pokédex</a></li>
            <li><a href="explorer.php">Explorer</a></li>
            <li><a href="makeAccount.php">Make an Account</a></li>
            <li><a href="users.php">Logbook</a></li>
        </ul>
    </div>
<main>
    <section>
        <!-- display a table of all Pokémon -->
        <h2><?php echo "Pokémon of $type Type" ?></h2>
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
    </section>
</main>

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
