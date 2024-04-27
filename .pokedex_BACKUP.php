<?php
require_once('database.php');

// Get category ID
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
if ($id == NULL || $id == FALSE) {
    $id = 1;
}

// Get name for selected category
$queryID = 'SELECT * FROM Pokedex
                  WHERE id = :id';
$statement1 = $db->prepare($queryID);
$statement1->bindValue(':id', $id);
$statement1->execute();
$id = $statement1->fetch();
$id = $id['id'];
$statement1->closeCursor();

// Get all categories
$queryAllPokedex = 'SELECT * FROM Pokedex
                       ORDER BY id';
$statement2 = $db->prepare($queryAllPokedex);
$statement2->execute();
$categories = $statement2->fetchAll();
$statement2->closeCursor();

// Get products for selected category
$queryPokemon = 'SELECT * FROM Pokedex
                  WHERE id = :id
                  ORDER BY id';
$statement3 = $db->prepare($queryPokedex);
$statement3->bindValue(':id', $id);
$statement3->execute();
$products = $statement3->fetchAll();
$statement3->closeCursor();
?>
<!DOCTYPE html>
<html>
<!-- the head section -->
<head>
    <title>Pokédex</title>
    <link rel="stylesheet" href="main.css" />
</head>

<!-- the body section -->
<body>
<main>
    <h1>Product List</h1>
    <aside>
        <!-- display a list of categories -->
        <h2>Categories</h2>
        <nav>
        <ul>
            <?php foreach ($Pokedex as $pokemon) : ?>
            <li>
                <a href="?id=<?php echo $id['id']; ?>">
                    <?php echo $pokemon['id']; ?>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>
        </nav>
    </aside>

    <section>
        <!-- display a table of products -->
        <h2><?php echo "Pokemon" ?></h2>
        <table>
            <tr>
                <th>Code</th>
                <th>Name</th>
                <th class="right">Price</th>
            </tr>

            <?php foreach ($Pokedex as $pokemon) : ?>
            <tr>
                <td><?php echo $pokemon['id']; ?></td>
                <td><?php echo $pokemon['P_Name']; ?></td>
                <td class="right"><?php echo $pokemon['typeName']; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </section>
</main>
<footer></footer>
</body>
</html>
