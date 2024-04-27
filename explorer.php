<?php
require('database.php');

//Get Type id
$type_name = filter_input(INPUT_GET, 'type_name');
if($type_name == NULL || $type_name == FALSE) {
    $type_name = 'Unknown';
}

$queryType = 'SELECT * FROM Types
                WHERE typeName = :type_name';
$statement1 = $db->prepare($queryType);
$statement1->bindValue(':type_name', $type_name);
$statement1->execute();
$type = $statement1->fetch();
$type_name = $type['typeName'];
$statement1->closeCursor();

//Get all Types
$queryAllTypes = 'SELECT * FROM Types
                    ORDER BY typeID';
$statement2 = $db->prepare($queryAllTypes);
$statement2->execute();
$types = $statement2->fetchALL();
$statement2->closeCursor();

//Get pokemon for selected Type
$queryPokedex = 'SELECT * FROM Pokedex
                    WHERE typeName = :type_name
                    ORDER BY id';
$statement3 = $db->prepare($queryPokedex);
$statement3->bindValue(':type_name', $type_name);
$statement3->execute();
$Pokedex = $statement3->fetchAll();
$statement3->closeCursor();
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
<main>
    <h1>Pokedex</h1>
    <aside>
    <h2>Types</h2>
    <navbar>
        <ul>
            <?php foreach($types as $type) : ?>
            <li>
                <a href="?type_name=<?php echo $type['typeName'];?>">
                <?php echo $type['typeName'];?>
                </a>
            </li>
            <?php endforeach;?>
        </ul>
    </navbar>
    </aside>
    <section>
            <!-- display the table of pokemon -->
            <h2><?php echo $type_name;?></h2>
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
