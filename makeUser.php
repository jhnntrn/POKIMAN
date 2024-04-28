<?php
$username = filter_input(INPUT_POST, 'uName');
$pword = filter_input(INPUT_POST, 'pWord');

//Validate inputs
if ($username == null || $pword == null) {
    $error ="Invalid username or password";
    include('error.php');
} else {
    require_once('users_database.php');
// Create account
$makeAccount = 'INSERT INTO logbook
                  (userName, p_Word)
                VALUES
                  (:username, :pword)';
$statement = $db->prepare($makeAccount);
$statement->bindValue(':username', $username);
$statement->bindValue(':pword', $pword);
$statement->execute();
$statement->closeCursor();
}
//Display the logbook page
include ('users.php');
?>