<?php
require_once('database.php');

// Display Users
$query = 'SELECT * FROM logbook
          ORDER BY user_ID';
$statement = $db->prepare($query);
$statement->execute();
$users = $statement->fetchAll();
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
            <li><a href="pokedex.php">Pokédex</a></li>
            <li><a href="makeAccount.php">Make an Account</a></li>
            <li><a class="active" href="users.php">Logbook</a></li>
        </ul>
    </div>

    <div class="content" style="overflow-x:auto;">
        <div class="logo"><h1>Logbook</h1></div>
        <table class="table table-hover sticky-header">
            <thead>
                <tr>
                    <th>User ID</th>
                    <th>User Name</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user) : ?>
                    <tr>
                        <td><?php echo $user['user_ID']; ?></td>
                        <td><?php echo $user['userName']; ?></td>
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
