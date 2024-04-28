<?php
require_once('database.php');
//Display Users
$query = 'SELECT * FROM logbook
          ORDER BY user_ID';
$statement2 = $db->prepare($query);
$statement2->execute();
$users = $statement2->fetchAll();
$statement2->closeCursor();
?>
<!DOCTYPE html>
<html>
<!-- the head section -->
<head>
    <title>Pokédex Users</title>
    <link rel="stylesheet" type="text/css" href="Resources/main.css">
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
        <!-- display a table of all Users -->
        <h2>Logbook</h2>
        <table>
            <tr>
                <th>User ID</th>
                <th>User Name</th>
            </tr>

            <?php foreach ($Users as $pokemon) : ?>
            <tr>
                <td><?php echo $pokemon['user_ID']; ?></td>
                <td><?php echo $pokemon['userName']; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </section>
</main>
<footer></footer>
</body>
</html>

