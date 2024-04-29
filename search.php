<?php
require_once('database.php');

$option = htmlspecialchars($_POST['function']);
$input = htmlspecialchars($_POST['userinput']);
if($input==null)
{
    $option = null;
}
switch ($option) {
    case '0':
        // Get Pokémon of given name
        $queryName = 'SELECT * FROM Pokedex
                      WHERE P_Name = :name
                      ORDER BY id';
        $statement = $db->prepare($queryName);
        $statement->bindValue(':name', $input);
        $statement->execute();
        $Pokedex = $statement->fetchAll();
        $statement->closeCursor();
        break;
    case '1':
        // Get Pokémon of given Type
        $queryType = 'SELECT * FROM Pokedex
                      WHERE typeName = :type OR type2 = :type
                      ORDER BY id';
        $statement = $db->prepare($queryType);
        $statement->bindValue(':type', $input);
        $statement->execute();
        $Pokedex = $statement->fetchAll();
        $statement->closeCursor();
        break;
    case null:
        $queryPokedex = 'SELECT * FROM Pokedex ORDER BY id';
        $statement = $db->prepare($queryPokedex);
        $statement->execute();
        $Pokedex = $statement->fetchAll();
        $statement->closeCursor();
        break;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>urPokédex - Pokédex</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="Resources/main.css">
    <link rel="icon" href="Resources/Images/pokeball.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div id="navbar">
        <div class="logo">urPokédex</div>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a class="active" href="pokedex.php">Pokédex</a></li>
            <li><a href="makeAccount.php">Make an Account</a></li>
            <li><a href="users.php">Logbook</a></li>
        </ul>
    </div>

    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

    <div class="content">
        <div class="searchbar">
            <form action="search.php" method="post">
                <ul>
                    <li>
                        <div class="list">
                            <select name="function" id="function">
                                <option value="0">Name</option>
                                <option value="1">Type</option>
                            </select>
                        </div>
                    </li>
                    <li>
                        <input type="text" name="userinput" placeholder="Enter a Pokemon name or a Pokemon type">
                    </li>
                    <li>
                        <input type="submit">
                    </li>
                </ul>
            </form>
        </div>
        <div class="logo"><h1>Pokémon</h1></div><br>
        <table class="table table-hover bootstrap-table-sticky-header">
            <thead>
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
            </thead>
            <tbody>
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
            </tbody>
        </table>
    </div>

    <div class="footer">
        <p>&copy;<?php echo date("Y"); ?> Aidan Breshears, Chase Caldwell, and Tri Tran</p>
    </div>

    <script>
        let mybutton = document.getElementById("myBtn");
        window.onscroll = function() {
            stickyNav();
            stickyRow();
            scrollFunction();
        };

        var navbar = document.getElementById("navbar");
        var sticky_nav = navbar.offsetTop;

        function stickyNav() {
            if (window.pageYOffset >= sticky_nav) {
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
