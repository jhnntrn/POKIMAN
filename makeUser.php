<?php
$uName = htmlspecialchars(filter_input(INPUT_POST, 'uName'));
$pword = htmlspecialchars(filter_input(INPUT_POST, 'pWord'));

//Validate inputs
if ($uName == null || $pword == null) {
    $error ="Invalid username or password";
    include('database_error.php');
} else {
    require_once('database.php');
// Create account
$makeAccount = 'INSERT INTO logbook
                  (userName, p_Word)
                VALUES
                  (:uName, :pword)';
$statement = $db->prepare($makeAccount);
$statement->bindValue(':uName', $uName);
$statement->bindValue(':pword', $pword);
$statement->execute();
$statement->closeCursor();
}
//Display the logbook page
include ('users.php');
?>