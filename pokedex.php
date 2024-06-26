<?php
require_once('database.php');

// The Sorting stuff, start
// the very top of the page: start a session to remember the previous options
session_start();
if (!isset($_SESSION["order"]))
  $_SESSION["order"] = array("col" => false, "dir" => false);
// set defaults
$dir = 0;
$col = "id"; // Default sorting column
$orderBy = array("id", "P_Name", "TypeName", "HP", "Attack", "Defense", "Sp_Attack", "Sp_Defense", "Speed", "stat_total");
$orderDir = array("ASC", "DESC");

// check if sorting column is set in URL
if (isset($_GET["orderBy"]) && in_array($_GET["orderBy"], $orderBy)) {
  $col = $_GET["orderBy"];
}
// check if same col is clicked as last time
// if it is the same => change the order, if not => use default
if ($_SESSION["order"]["col"] == $col) {
  // 1 becomes 0, 0 becomes 1
  $dir = 1 - $_SESSION["order"]["dir"];
}
// remember current options
$_SESSION["order"]["col"] = $col;
$_SESSION["order"]["dir"] = $dir;
// set the order
$sort = $orderDir[$dir];
// set the correct query
$query = "SELECT * FROM Pokedex 
          ORDER BY $col $sort";
//End of the sorting stuff

$statement = $db->prepare($query);
$statement->execute();
$Pokedex = $statement->fetchAll();
$statement->closeCursor();
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
        <div class="logonav">urPokédex</div>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a class="active" href="pokedex.php">Pokédex</a></li>
            <li><a href="makeAccount.php">Make an Account</a></li>
            <li><a href="users.php">Logbook</a></li>
        </ul>
    </div>

    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

    <div class="content">
        <div class="logo"><h1>Pokémon</h1></div><br>
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
                        <input type="submit" value=" ">
                    </li>
                </ul>
            </form>
        </div>
        <table class="table table-hover bootstrap-table-sticky-header">
            <thead>
                <tr>
                    <th><a href="?orderBy=id">ID</a></th>
                    <th><a href="?orderBy=P_Name">Name</a></th>
                    <th><a href="?orderBy=TypeName">Type 1</a></th>
                    <th>Type 2</th>
                    <th><a href="?orderBy=HP">HP</a></th>
                    <th><a href="?orderBy=Attack">Attack</a></th>
                    <th><a href="?orderBy=Defense">Defense</a></th>
                    <th><a href="?orderBy=Sp_Attack">Sp. Attack</a></th>
                    <th><a href="?orderBy=Sp_Defense">Sp. Defense</a></th>
                    <th><a href="?orderBy=Speed">Speed</a></th>
                    <th class="right"><a href="?orderBy=stat_total">Stat Total</a></th>
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
