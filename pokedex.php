<?php
require_once('database.php');

// Get all Pokémon
$queryPokedex = 'SELECT * FROM Pokedex
                  ORDER BY id';
$statement = $db->prepare($queryPokedex);
$statement->execute();
$Pokedex = $statement->fetchAll();
$statement->closeCursor();
?>
<!DOCTYPE html>
<html>
<!-- the head section -->
<head>
    <title>Pokédex</title>
    <link rel="stylesheet" type="text/css" href="Resources/main.css">
</head>

<!-- the body section -->
<body>
    <div id="navbar">
        <a class="active" href="index.php">Home</a>
        <a href="pokedex.php">Pokédex</a>
        <a href="explorer.php">Explorer</a>
        <a href="makeAccount.php">Make an Account</a>
        <a href="users.php">Logbook</a>
    </div>
<main>

    <section>
        <!-- display a table of all Pokémon -->
        <h2><?php echo "Pokemon" ?></h2>
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
<footer></footer>
</body>
</html>
